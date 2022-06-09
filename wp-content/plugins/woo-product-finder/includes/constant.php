<?php

/**
 * define constant variabes
 * define admin side constant
 * @since 1.0.0
 * @author 
 * @param null
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// define constant for plugin slug
define('WPF_PLUGIN_SLUG', 'woo-product-finder');
define('WPF_PLUGIN_NAME', __('Product Finder for WooCommerce '));
define('WPF_TEXT_DOMAIN', 'woo-product-finder');
define('WPF_PLUGIN_VERSION', '1.1.0');
define('WPF_FREE_PLUGIN', 'Free Version');
define('WPF_EXPETRANL_URL', '');
define('WPF_SUPPORT_URL', '');
define('WPF_PRO_VERSION_TEXT', '');

####### Header Section #######
define('WPF_GENERAL_SETTING_PAGE_TITLE', 'General Setting');
define('WPF_PREMIUM_VERSION', 'Premium Version');
define('WPF_ABOUT_PLUGIN', 'About Plugin');
define('WPF_GETTING_STARTED', 'Getting Started');
define('WPF_QUICK_INFO', 'Quick info');

####### Sidebar Section #######
define('WPF_WOOCOMMERCE_PLUGINS', 'WooCommerce Plugins');
define('WPF_WORDPRESS_PLUGINS', 'Wordpress Plugins');
define('WPF_FREE_PLUGINS', 'Free Plugins');
define('WPF_FREE_THEMES', '');
define('WPF_CONTACT_SUPPORT', '');

####### Wizard Page Constant #######
define('WPF_LIST_PAGE_TITLE', 'Manage Wizards');
define('WPF_DELETE_LIST_NAME', 'Delete (Selected)');
define('WPF_ADD_NEW_WIZARD', 'Add New Wizard');
define('WPF_EDIT_WIZARD', 'Edit Wizard');
define('WPF_BACK_TO_WIZARD_LIST', 'Back to wizard list');
define('WPF_BACK_TO_EDIT_WIZARD_CONFIGURATION', 'Back to wizard configuration');

define('WPF_WIZARD_TITLE', 'Wizard Title');
define('WPF_WIZARD_TITLE_PLACEHOLDER', 'Enter Wizard Title Here');
define('WPF_CATEGORY_PRO_IMG', esc_url(WPF_PLUGIN_URL) . 'admin/images/wizard_category.png');
define('WPF_OPTIONS_PRO_IMG', esc_url(WPF_PLUGIN_URL) . 'admin/images/options_image.png');
define('WPF_WIZARD_CATEGORY_TITLE', 'Wizard Category');
define('WWPF_WIZARD_CATEGORY_TITLE_DESCRIPTION', 'Wizard category description');
define('WPF_WIZARD_SHORTCODE', 'Wizard shortcode');
define('WPF_WIZARD_STATUS', 'Status');
define('WPF_WIZARD_TITLE_DESCRIPTION', 'Wizard title description');
define('WPF_WIZARD_SHORTCODE_DESCRIPTION', 'Wizard shortcode description');

####### Question Page Constant #######
define('WPF_QUESTION_LIST_PAGE_TITLE', 'Manage Questions');
define('WPF_DELETE_QUESTION_LIST_NAME', 'Delete (Selected)');
define('WPF_ADD_NEW_QUESTION', 'Add New Question');

define('WPF_WIZARD_QUESTION', 'Question Title');
define('WPF_WIZARD_QUESTION_PLACEHOLDER', 'Enter Question Title Here');
define('WPF_WIZARD_QUESTION_DESCRIPTION', 'Question Description Here');
define('WPF_WIZARD_QUESTION_TYPE', 'Question Type');
define('WPF_WIZARD_QUESTION_TYPE_DESCRIPTION', 'Question description');
define('WPF_WIZARD_QUESTION_TYPE_RADIO', 'Radio');
define('WPF_WIZARD_QUESTION_TYPE_CHECKBOX', 'Checkbox (Pro version only)');

####### Option Page Constant #######
define('WPF_OPTIONS_LIST_PAGE_TITLE', 'Manage Options');
define('WPF_DELETE_OPTIONS_LIST_NAME', 'Delete (Selected)');
define('WPF_ADD_NEW_OPTIONS', 'Add New Option');

define('WPF_WIZARD_OPTIONS', 'Options Title');
define('WPF_WIZARD_OPTIONS_DESCRIPTION', 'Options Description Here');
define('WPF_WIZARD_OPTIONS_PLACEHOLDER', 'Enter Options Title Here');

define('WPF_WIZARD_OPTIONS_IMAGE', 'Options Image');
define('WPF_WIZARD_OPTIONS_UPLOAD_IMAGE', 'Upload File');
define('WPF_WIZARD_OPTIONS_REMOVE_IMAGE', 'Remove File');
define('WPF_WIZARD_OPTIONS_SELECT_FILE', 'Select File');
define('WPF_WIZARD_OPTIONS_IMAGE_DESCRIPTION', 'Upload Options Image Here');

define('WPF_WIZARD_ATTRIBUTE_NAME', 'Attribute Name');
define('WPF_WIZARD_ATTRIBUTE_NAME_DESCRIPTION', 'Attribute Description Here');
define('WPF_WIZARD_ATTRIBUTE_NAME_PLACEHOLDER', 'Select Attribute Name');

define('WPF_WIZARD_ATTRIBUTE_VALUE', 'Attribute Value');
define('WPF_WIZARD_ATTRIBUTE_VALUE_DESCRIPTION', 'Attribute Description Here');
define('WPF_WIZARD_ATTRIBUTE_VALUE_PLACEHOLDER', 'Select Attribute Value');


######## Table Name ########
define('WIZARDS_TABLE_PREFIX', "wpf_");
define('WIZARDS_TABLE', WIZARDS_TABLE_PREFIX . "wizard");
define('QUESTIONS_TABLE', WIZARDS_TABLE_PREFIX . "questions");
define('OPTIONS_TABLE', WIZARDS_TABLE_PREFIX . "questions_options");

######## Button Name ########
define('ADD_NEW_WIZARD_SAVE_BUTTON_NAME', "Save & Continue");
define('EDIT_NEW_WIZARD_SAVE_BUTTON_NAME', "Update");
define('ADD_NEW_QUESTION_SAVE_BUTTON_NAME', "Save");
define('EDIT_NEW_QUESTION_SAVE_BUTTON_NAME', "Update");
define('BACK_TO_TOP_PRODUCT_BUTTON_NAME', "Terug naar Top Producten");


######## General Setting ########
define('WPF_PERFECT_MATCH_TITLE', "Top Product(en)");
define('WPF_PERFECT_MATCH_TITLE_PLACEHOLDER', "Top Product(en)");
define('WPF_PERFECT_MATCH_TITLE_DESCRIPTION', "Enter top product description");
define('WPF_RECENT_MATCH_TITLE', "Producten die bijna voldoen aan je verwachtingen");
define('WPF_RECENT_MATCH_TITLE_PLACEHOLDER', "Producten die bijna voldoen aan je verwachtingen");
define('WPF_RECENT_MATCH_TITLE_DESCRIPTION', "Enter recent product description");
define('WPF_TOTAL_PAGES', "Products Per Page");
define('WPF_TOTAL_PAGES_PLACEHOLDER', "Products Per Page");
define('WPF_TOTAL_PAGES_DESCRIPTION', "Total Page Description");
define('WPF_GENERAL_SETTING_SAVE', "Save");
define('WPF_SHOW_ATTRIBUTE_TITLE', "Display Attribute Per Product");
define('WPF_SHOW_ATTRIBUTE_PLACEHOLDER', "Display Attribute");
define('WPF_SHOW_ATTRIBUTE_DESCRIPTION', "Attribute Description");
define('WPF_SHOW_ATTRIBUTE_DEFAULT', "3");

######## DEFAULT VALUE ########
define('WPF_DEFAULT_PAGINATION_NUMBER', "5");

######## Error Message ########
define('WPF_WIZARD_OPTIONS_ERROR_MESSAGE', 'Please Enter Options Title Here');
define('WPF_WIZARD_ATTRIBUTE_NAME_ERROR_MESSAGE', 'Please select Attribute Name');
define('WPF_WIZARD_ATTRIBUTE_VALUE_ERROR_MESSAGE', 'Please select Attribute Value');
