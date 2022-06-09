<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once(plugin_dir_path( __FILE__ ).'header/plugin-header.php');
global $wpdb;
?>
<div class="wpf-main-table res-cl">
    <h2><?php esc_html_e('Quick info', WPF_TEXT_DOMAIN); ?></h2>
    <table class="table-outer">
        <tbody>
            <tr>
                <td class="fr-1"><?php esc_html_e('Product Type', WPF_TEXT_DOMAIN); ?></td>
                <td class="fr-2"><?php esc_html_e('WooCommerce Plugin', WPF_TEXT_DOMAIN); ?></td>
            </tr>
            <tr>
                <td class="fr-1"><?php esc_html_e('Product Name', WPF_TEXT_DOMAIN); ?></td>
                <td class="fr-2"><?php esc_html_e($plugin_name, WPF_TEXT_DOMAIN); ?></td>
            </tr>
            <tr>
                <td class="fr-1"><?php esc_html_e('Installed Version', WPF_TEXT_DOMAIN); ?></td>
                <td class="fr-2"><?php esc_html_e('Free Version', WPF_TEXT_DOMAIN); ?>&nbsp;<?php esc_html_e($plugin_version, WPF_TEXT_DOMAIN); ?></td>
            </tr>
            <tr>
                <td class="fr-1"><?php esc_html_e('License & Terms of use', WPF_TEXT_DOMAIN); ?></td>
                <td class="fr-2">
	                <a target="_blank"  href="<?php echo esc_url("https://www.thedotstore.com/terms-and-conditions/"); ?>">
                    <?php esc_html_e('Click here', WPF_TEXT_DOMAIN); ?>
	                </a>
                    <?php esc_html_e('to view license and terms of use.', WPF_TEXT_DOMAIN); ?>
                </td>
            </tr>
            <tr>
                <td class="fr-1"><?php esc_html_e('Help & Support', WPF_TEXT_DOMAIN); ?></td>
                <td class="fr-2 wpf-information">
                    <ul>
                        <li><a target="_blank" href="<?php echo esc_url( site_url('wp-admin/admin.php?page=wpf-get-started')); ?>"><?php esc_html_e('Quick Start', WPF_TEXT_DOMAIN); ?></a></li>
                        <li><a target="_blank" href="<?php echo esc_url('https://docs.thedotstore.com/category/282-premium-plugin-settings') ;?>"><?php esc_html_e('Guide Documentation', WPF_TEXT_DOMAIN); ?></a></li>
                        <li><a target="_blank" href="<?php echo esc_url('https://www.thedotstore.com/support/') ;?>"><?php esc_html_e('Support Forum', WPF_TEXT_DOMAIN); ?></a></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="fr-1"><?php esc_html_e('Localization', WPF_TEXT_DOMAIN); ?></td>
                <td class="fr-2"><?php esc_html_e('English', WPF_TEXT_DOMAIN); ?>, <?php esc_html_e('Spanish', WPF_TEXT_DOMAIN); ?></td>
            </tr>

        </tbody>
    </table>
</div>
<?php require_once(plugin_dir_path( __FILE__ ).'header/plugin-sidebar.php'); ?>