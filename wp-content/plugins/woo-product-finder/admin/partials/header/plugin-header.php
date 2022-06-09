<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
$plugin_name = WPF_PLUGIN_NAME;
$plugin_version = WPF_PLUGIN_VERSION;
?>
<div id="dotsstoremain">
    <div class="all-pad">
        <header class="dots-header">

            <?php
            $fee_getting_started = '';
            $current_page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);
            $fee_list = isset($current_page) && 'wpf-list' === $current_page ? 'active' : '';
            $fee_add = isset($current_page) && 'wpf-add-new' === $current_page ? 'active' : '';
            if (!empty($current_page) && ('wpf-get-started' === $current_page)) {
                $fee_getting_started = 'active';
            }
            $premium_version = isset($current_page) && 'wpf-premium' === $current_page ? 'active' : '';
            $fee_information = isset($current_page) && 'wpf-information' === $current_page ? 'active' : '';

            if (isset($current_page) && 'wpf-information' === $current_page || isset($current_page) && 'wpf-get-started'  === $current_page ) {
                $fee_about = 'active';
            } else {
                $fee_about = '';
            }
            $wpf_action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
            if (!empty($wpf_action)) {
                if ('add' === $wpf_action || 'edit' === $wpf_action ) {
                    $fee_add = 'active';
                }
            }

            if (!empty($wpf_action)) {
                if ('edit' === $wpf_action && 'wpf-edit-wizard' === $current_page) {
                    $wizard_id = $_REQUEST['wrd_id'];
                    $wpfnonce = $_REQUEST['_wpnonce'];
                    $wizard_header_title = WPF_EDIT_WIZARD;
                    $wizard_header_url = home_url('/wp-admin/admin.php?page=wpf-edit-wizard&wrd_id=' . $wizard_id . '&action=edit' . '&_wpnonce=' . $wpfnonce);
                } else {
                    $wizard_header_title = WPF_ADD_NEW_WIZARD;
                    $wizard_header_url = home_url('/wp-admin/admin.php?page=wpf-add-new');
                }
            } else {
                $wizard_header_title = WPF_ADD_NEW_WIZARD;
                $wizard_header_url = home_url('/wp-admin/admin.php?page=wpf-add-new');
            }
            ?>
            <div class="dots-menu-main">
                <nav>
                    <ul>
                        <li>
                            <a class="dotstore_plugin <?php echo esc_attr($fee_list); ?>"  href="<?php echo esc_url(home_url('/wp-admin/admin.php?page=wpf-list')); ?>"><?php esc_html_e(WPF_LIST_PAGE_TITLE, WPF_TEXT_DOMAIN); ?></a>
                        </li>
                        <li>
                            <a class="dotstore_plugin <?php echo esc_attr($fee_add); ?>"  href="<?php echo esc_url($wizard_header_url); ?>"> <?php esc_html_e($wizard_header_title, WPF_TEXT_DOMAIN); ?></a>
                        </li>

                    </ul>
                </nav>
            </div>
        </header>