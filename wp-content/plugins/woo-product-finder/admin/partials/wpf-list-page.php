<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

global $wpdb;
$wizard_post_id = empty($_REQUEST['wrd_id']) ? '' : sanitize_text_field(wp_unslash($_REQUEST['wrd_id']));
$retrieved_nonce = empty($_REQUEST['_wpnonce']) ? '' : sanitize_text_field(wp_unslash($_REQUEST['_wpnonce']));

if (isset($_REQUEST['action']) && sanitize_text_field(wp_unslash($_REQUEST['action'])) == 'delete') {
    if (!wp_verify_nonce($retrieved_nonce, 'wppfcnonce')) {
        die('Failed security check');
    } else {
        $wizard_table_name = WIZARDS_TABLE;
        $delete_sql = $wpdb->delete($wizard_table_name, array('id' => esc_attr($wizard_post_id)), array('%d')); //db call ok; no-cache ok
        if ('1' ==  $delete_sql) {
            wp_redirect(esc_url(home_url('/wp-admin/admin.php?page=wpf-list')));
            exit;
        } else {
            echo 'Error Happens.Please try again';
            wp_redirect(esc_url(home_url('/wp-admin/admin.php?page=wpf-list')));
            exit;
        }
    }
}
$wizard_table_name = WIZARDS_TABLE;
$sel_qry = 'SELECT * FROM ' . $wizard_table_name . ' ORDER BY created_date';
$sel_rows = $wpdb->get_results($sel_qry); //db call ok; no-cache ok

wp_nonce_field('delete');
?>
<div class="wpf-main-table res-cl">
    <div class="product_header_title">
        <h2>
            <?php esc_html_e(WPF_LIST_PAGE_TITLE, WPF_TEXT_DOMAIN); ?>
            <a class="add-new-btn"  href="<?php echo esc_url(home_url('/wp-admin/admin.php?page=wpf-add-new')); ?>"><?php esc_html_e(WPF_ADD_NEW_WIZARD, WPF_TEXT_DOMAIN); ?></a>
            <a id="detete_all_selected_wizard" class="detete_all_select_wizard_list button-primary" href="javascript:void(0);" disabled="disabled"><?php esc_html_e(WPF_DELETE_LIST_NAME, WPF_TEXT_DOMAIN); ?></a>
        </h2>
    </div>
    <table id="wizard-listing" class="table-outer form-table all-table-listing tablesorter">
        <thead>
            <tr class="wpf-head">
                <th><input type="checkbox" name="check_all" class="chk_all_wizard_class" id="chk_all_wizard"></th>
                <th><?php esc_html_e('Name', WPF_TEXT_DOMAIN); ?></th>
                <th><?php esc_html_e('Shortcode', WPF_TEXT_DOMAIN); ?></th>
                <th><?php esc_html_e('Status', WPF_TEXT_DOMAIN); ?></th>
                <th><?php esc_html_e('Action', WPF_TEXT_DOMAIN); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($sel_rows) && isset($sel_rows)) {
                $i = 1;
                foreach ($sel_rows as $sel_data) {
                    $wizard_id = esc_attr($sel_data->id);
                    $wizard_title = esc_attr($sel_data->name);
                    $wizard_shortcode = esc_attr($sel_data->shortcode);
                    $wizard_status = esc_attr($sel_data->status);
                    $wpfnonce = wp_create_nonce('wppfcnonce');
                    ?>
                    <tr id="wizard_row_<?php echo esc_attr($wizard_id); ?>">
                        <td width="10%">
                            <input type="checkbox" class="chk_single_wizard" name="chk_single_wizard_chk" value="<?php echo esc_attr($wizard_id); ?>">
                        </td>
                        <td>
                            <a href="<?php echo esc_url(home_url('/wp-admin/admin.php?page=wpf-edit-wizard&wrd_id=' . esc_attr($wizard_id) . '&action=edit' . '&_wpnonce=' . esc_attr($wpfnonce))); ?>"><?php esc_html_e($wizard_title, WPF_TEXT_DOMAIN); ?></a>
                        </td>
                        <td>
                            <?php echo esc_attr($wizard_shortcode); ?>
                        </td>
                        <td>
                            <?php echo (!empty(esc_attr($wizard_status)) && esc_attr($wizard_status) == 'on') ? '<span class="active-status">' . esc_html_e('Enabled', WPF_TEXT_DOMAIN) . '</span>' : '<span class="inactive-status">' . esc_html_e('Disabled', WPF_TEXT_DOMAIN) . '</span>'; ?>
                        </td>
                        <td>
                            <a class="fee-action-button button-primary" href="<?php echo esc_url(home_url('/wp-admin/admin.php?page=wpf-edit-wizard&wrd_id=' . esc_attr($wizard_id) . '&action=edit' . '&_wpnonce=' . esc_attr($wpfnonce))); ?>"><?php esc_html_e('Edit', WPF_TEXT_DOMAIN); ?></a>
                            <a class="fee-action-button button-primary delete_single_selected_wizard" href="javascript:void(0);" id="delete_single_selected_wizard_<?php echo esc_attr($wizard_id); ?>" data-attr_name="<?php echo esc_attr($wizard_title); ?>"><?php esc_html_e('Delete', WPF_TEXT_DOMAIN); ?></a>
                        </td>
                    </tr>
                    <?php
                    $i++;
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">
                        <?php esc_html_e('No List Available', WPF_TEXT_DOMAIN); ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
