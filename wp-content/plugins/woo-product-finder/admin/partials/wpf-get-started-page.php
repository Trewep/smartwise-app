<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

require_once(plugin_dir_path( __FILE__ ).'header/plugin-header.php');
global $wpdb;
?>
<div class="wpf-main-table res-cl">
    <h2><?php esc_html_e('Thanks For Installing ' . WPF_PLUGIN_NAME, WPF_TEXT_DOMAIN); ?></h2>
    <table class="table-outer">
        <tbody>
            <tr>
                <td class="fr-2">
                    <p class="block gettingstarted"><strong><?php esc_html_e('Getting Started', WPF_TEXT_DOMAIN); ?> </strong></p>
                    <p class="block textgetting">
                        <?php esc_html_e('Woo Product Finder let customers narrow down the product list on the basis of their choices. It enables the store owners to add a questionnaire to the product page. The product recommendations are then rendered according to the answers, given by the users. You can showcase ‘n’ number of products, matching the answers and query.', WPF_TEXT_DOMAIN); ?>
                    </p>
                    <p class="block textgetting">
                        <strong><?php esc_html_e('Step 1', WPF_TEXT_DOMAIN); ?> :</strong> <?php esc_html_e('Create Wizard (Questions and answers)', WPF_TEXT_DOMAIN); ?>
                    <p class="block textgetting"><?php esc_html_e('Before add wizard you will have to select product attribute in particular product.', WPF_TEXT_DOMAIN); ?>
                        <span class="gettingstarted">
                            <img src="<?php echo esc_url(WPF_PLUGIN_URL) . 'admin/images/add_attribute_in_product.png'; ?>">										
                        </span>
                    </p>
                    <p class="block textgetting"><?php esc_html_e('Enter Wizard title, select category and enable status.', WPF_TEXT_DOMAIN); ?>

                        <span class="gettingstarted">
                            <img src="<?php echo esc_url(WPF_PLUGIN_URL) . 'admin/images/Getting_Started_01.png'; ?>">										
                        </span>
                    </p>
                    <p class="block gettingstarted textgetting">
                        <strong><?php esc_html_e('Step 2', WPF_TEXT_DOMAIN); ?> :</strong> <?php esc_html_e('Manage Question: Add New Question', WPF_TEXT_DOMAIN); ?>
                    <p class="block textgetting"><?php esc_html_e('Create question option like a radio button or Multi-select check box.', WPF_TEXT_DOMAIN); ?>
                        <span class="gettingstarted">
                            <img src="<?php echo esc_url(WPF_PLUGIN_URL) . 'admin/images/free_edit_wizard.png'; ?>">
                        </span>
                    </p>
                    <p class="block textgetting"><?php esc_html_e('Provide Corresponding answers (options), upload pictures, select Attributes name and attribute values.', WPF_TEXT_DOMAIN); ?>
                        <span class="gettingstarted">
                            <img src="<?php echo esc_url(WPF_PLUGIN_URL) . 'admin/images/free_option.png'; ?>">
                        </span>
                    </p>
                    </p>
                    <p class="block gettingstarted textgetting">
                        <strong><?php esc_html_e('Step 3', WPF_TEXT_DOMAIN); ?> :</strong> <?php esc_html_e('Global General Setting', WPF_TEXT_DOMAIN); ?>
                    <p class="block textgetting"><?php esc_html_e('With this General Setting, you can change the defaule setting as per below:', WPF_TEXT_DOMAIN); ?></p>
                    <p class="block textgetting"><?php esc_html_e('How many attribute show per Product in product recommendation Wizard page.', WPF_TEXT_DOMAIN); ?></p>
                    <p class="block textgetting"><?php esc_html_e('How many products displays per page.(on Recommendation Wizard page).', WPF_TEXT_DOMAIN); ?></p>
                    <span class="gettingstarted">
                        <img src="<?php echo esc_url(WPF_PLUGIN_URL) . 'admin/images/free_general_setting.png'; ?>">
                    </span>
                    </p>
                    <p class="block gettingstarted textgetting">
                        <strong><?php esc_html_e('Step 4', WPF_TEXT_DOMAIN); ?> :</strong> <?php esc_html_e('Copy and past Wizard shortcode in page/ post and publish Product Recommendation Wizard', WPF_TEXT_DOMAIN); ?>
                    <p class="block textgetting"><?php esc_html_e('All you need to do is to copy & paste Wizard shortcode page or post.', WPF_TEXT_DOMAIN); ?>
                        <span class="gettingstarted">
                            <img src="<?php echo esc_url(WPF_PLUGIN_URL) . 'admin/images/edit_page.png'; ?>">
                        </span>
                    </p>
                    <p class="block textgetting"><?php esc_html_e('Product result display as per below screenshot', WPF_TEXT_DOMAIN); ?>
                        <span class="gettingstarted">
                            <img src="<?php echo esc_url(WPF_PLUGIN_URL) . 'admin/images/Getting_Started_05.png'; ?>">
                        </span>
                    </p>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php require_once(plugin_dir_path( __FILE__ ).'header/plugin-sidebar.php');; ?>