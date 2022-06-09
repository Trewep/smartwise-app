<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

global $wpdb;

$wizard_id = empty($_REQUEST['wrd_id']) ? '' : sanitize_text_field(wp_unslash($_REQUEST['wrd_id']));
$question_id = empty($_REQUEST['id']) ? '' : sanitize_text_field(wp_unslash(['id']));
$retrieved_nonce = empty($_REQUEST['_wpnonce']) ? '' : sanitize_text_field(wp_unslash($_REQUEST['_wpnonce']));

if (isset($_POST['submitWizard']) && sanitize_text_field(wp_unslash($_POST['submitWizard'])) == ADD_NEW_WIZARD_SAVE_BUTTON_NAME) {

    if (!wp_verify_nonce($retrieved_nonce, 'wizardfrm')) {
        die('Failed security check');
    } else {
        $post_data = $_POST;
        $this->wpf_wizard_save($post_data);
    }
} elseif (isset($_POST['submitWizard']) && sanitize_text_field(wp_unslash($_POST['submitWizard'])) == EDIT_NEW_WIZARD_SAVE_BUTTON_NAME) {

    if (!wp_verify_nonce($retrieved_nonce, 'wizardfrm')) {
        die('Failed security check');
    } else {
        $post_data = $_POST;
        $this->wpf_wizard_save($post_data);
    }
}

if (isset($_REQUEST['action']) && sanitize_text_field(wp_unslash($_REQUEST['action'])) == 'edit') {
    if (!wp_verify_nonce($retrieved_nonce, 'wppfcnonce')) {
        die('Failed security check');
    } else {
        $btnValue = __(EDIT_NEW_WIZARD_SAVE_BUTTON_NAME, WPF_TEXT_DOMAIN);
        $get_rows = $wpdb->get_row($wpdb->prepare('SELECT * FROM wpf_wizard WHERE id=%d', $wizard_id));  //db call ok; no-cache ok
        if (!empty($get_rows) && isset($get_rows)) {
            $get_wizard_id = esc_attr($get_rows->id);
            $wizard_title = esc_attr($get_rows->name);
            $wizard_shortcode = esc_attr($get_rows->shortcode);
            $wizard_status = esc_attr($get_rows->status);
        }
    }
} else {
    $btnValue = __(ADD_NEW_WIZARD_SAVE_BUTTON_NAME, WPF_TEXT_DOMAIN);
    $current_auto_incr_id = $this->get_current_auto_increment_id(WIZARDS_TABLE);

    $wizard_title = '';
    $wizard_shortcode = $this->create_wizard_shortcode($current_auto_incr_id);
    $wizard_status = '';
}

if (isset($_REQUEST['action']) && sanitize_text_field(wp_unslash($_REQUEST['action'])) == 'delete') {
    if (!wp_verify_nonce($retrieved_nonce, 'wppfcnonce')) {
        die('Failed security check');
    } else {
        $questions_table_name = QUESTIONS_TABLE;
        $delete_sql = $wpdb->delete($questions_table_name, array('id' => esc_attr($question_id), 'wizard_id' => esc_attr($wizard_id)), array('%d', '%d'));  //db call ok; no-cache ok
        if ('1' == $delete_sql) {
            wp_redirect(esc_url(home_url('/wp-admin/admin.php?page=wpf-edit-wizard&id=' . esc_attr($wizard_id) . '&action=edit&_wpnonce=' . esc_attr($retrieved_nonce))));
            exit;
        } else {
            echo 'Error Happens.Please try again';
            wp_redirect(esc_url(home_url('/wp-admin/admin.php?page=wpf-question-list&wrd_id=' . esc_attr($wizard_id . ''))));
            exit;
        }
    }
}

if (isset($_REQUEST['action']) && 'edit' == sanitize_text_field(wp_unslash($_REQUEST['action'])) ) {
    if (!wp_verify_nonce($retrieved_nonce, 'wppfcnonce')) {
        die('Failed security check');
    } else {
        $sel_rows = $wpdb->get_results($wpdb->prepare('SELECT * FROM wpf_questions WHERE wizard_id=%d ORDER BY id ASC LIMIT  0,2', $wizard_id)); //db call ok; no-cache ok
    }
}
?>
<div class="wpf-main-table res-cl">
    <h2><?php esc_html_e('Wizard Configuration', WPF_TEXT_DOMAIN); ?></h2>
    <form method="POST" name="wizardfrm" action="">
        <?php wp_nonce_field('wizardfrm'); ?>
        <input type="hidden" name="wizard_post_id" value="<?php echo esc_attr($wizard_id); ?>">
        <table class="form-table table-outer product-fee-table">
            <tbody>
                <tr valign="top">
                    <th class="titledesc" scope="row">
                        <label for="wizard_title"><?php esc_html_e(WPF_WIZARD_TITLE, WPF_TEXT_DOMAIN); ?><span class="required-star">*</span></label></th>
                    <td class="forminp mdtooltip">
                        <input type="text" name="wizard_title" class="text-class half_width" id="wizard_title" value="<?php echo!empty(esc_attr($wizard_title)) ? esc_attr($wizard_title) : ''; ?>" required="1" placeholder="<?php esc_html_e(WPF_WIZARD_TITLE_PLACEHOLDER, WPF_TEXT_DOMAIN); ?>">
                        <span class="woocommerce_wpf_tab_descirtion"><i class="fa fa-question-circle " aria-hidden="true"></i></span>
                        <p class="description"><?php esc_html_e(WPF_WIZARD_TITLE_DESCRIPTION, WPF_TEXT_DOMAIN); ?></p>
                    </td>
                </tr>
        
                <tr valign="top">
                    <th class="titledesc" scope="row">
                        <label for="wizard_shortcode"><?php esc_html_e(WPF_WIZARD_SHORTCODE, WPF_TEXT_DOMAIN); ?></label>
                    </th>
                    <td class="forminp mdtooltip">
                        <div class="product_cost_left_div">
                            <input type="text" name="wizard_shortcode" required="1" class="text-class" id="wizard_shortcode" value="<?php echo!empty(esc_attr($wizard_shortcode)) ? esc_attr($wizard_shortcode) : ''; ?>" readonly>
                            <span class="woocommerce_wpf_tab_descirtion"><i class="fa fa-question-circle " aria-hidden="true"></i></span>
                            <p class="description">
                                <?php esc_html_e(WPF_WIZARD_SHORTCODE, WPF_TEXT_DOMAIN); ?>
                            </p>
                        </div>
                    </td>
                </tr>
                <tr valign="top">
                    <th class="titledesc" scope="row">
                        <label for="wizard_status"><?php esc_html_e(WPF_WIZARD_STATUS, WPF_TEXT_DOMAIN); ?></label></th>
                    <td class="forminp mdtooltip">
                        <label class="switch">
                            <input type="checkbox" name="wizard_status" value="on" <?php echo (!empty(esc_attr($wizard_status)) && esc_attr($wizard_status) == 'off') ? '' : 'checked'; ?>>
                            <div class="slider round"></div>
                        </label>
                    </td>
                </tr>	
            </tbody>
        </table>
        <p class="submit"><input type="submit" name="submitWizard" class="button button-primary button-large" value="<?php esc_html_e($btnValue, WPF_TEXT_DOMAIN); ?>"></p>
    </form>

    <?php
    if (isset($_REQUEST['action']) && sanitize_text_field(wp_unslash($_REQUEST['action'])) == 'edit') {
        ?>
        <div class="product_header_title">
            <h2>
                <?php esc_html_e(WPF_QUESTION_LIST_PAGE_TITLE, WPF_TEXT_DOMAIN); ?>
                <a class="add-new-btn"  href="<?php echo esc_url(home_url('/wp-admin/admin.php?page=wpf-add-new-question&wrd_id=' . esc_attr($wizard_id) . '&_wpnonce=' . esc_attr($retrieved_nonce))); ?>"><?php esc_html_e(WPF_ADD_NEW_QUESTION, WPF_TEXT_DOMAIN); ?></a>
                <a id="detete_all_selected_question" class="detete-conditional-fee button-primary"  disabled="disabled"><?php esc_html_e(WPF_DELETE_QUESTION_LIST_NAME, WPF_TEXT_DOMAIN); ?></a>
            </h2>
        </div>
        <div id="using_ajax">
        </div>
        <?php
    }
    ?>
</div>