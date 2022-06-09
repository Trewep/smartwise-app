<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       
 * @since      1.0.2
 *
 * @package    Woo_Product_Finder
 * @subpackage Woo_Product_Finder/admin
 */
/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Woo_Product_Finder
 * @subpackage Woo_Product_Finder/admin
 * @author     
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Woo_Product_Finder_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     *
     * @param      string $plugin_name The name of this plugin.
     * @param      string $version     The version of this plugin.
     */
    public function __construct( $plugin_name, $version ) {

        $this->plugin_name = $plugin_name;
        $this->version     = $version;
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles($hook) {
        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Woo_Product_Finder_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Woo_Product_Finder_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        if ( (false !== strpos($hook, 'dotstore-plugins_page_wpf-list')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-add-new')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-premium')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-get-started')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-information')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-edit-wizard')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-add-new-question')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-question-list')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-edit-question')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-add-new-options')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-general-setting'))) {
            wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/woo-product-finder-admin.css', array(), $this->version, 'all' );
            wp_enqueue_style( $this->plugin_name . 'main-style', plugin_dir_url( __FILE__ ) . 'css/style.css', array(), $this->version, 'all' );
            wp_enqueue_style( $this->plugin_name . '-jquery-ui-css', plugin_dir_url( __FILE__ ) . 'css/jquery-ui.min.css', array(), $this->version, 'all' );
            wp_enqueue_style( $this->plugin_name . 'font-awesome', plugin_dir_url( __FILE__ ) . 'css/font-awesome.min.css', array(), $this->version, 'all' );
            wp_enqueue_style( $this->plugin_name . '-webkit-css', plugin_dir_url( __FILE__ ) . 'css/webkit.css', array(), $this->version, 'all' );
            wp_enqueue_style( $this->plugin_name . 'media-css', plugin_dir_url( __FILE__ ) . 'css/media.css', array(), $this->version, 'all' );
        }
        if ( (false !== strpos($hook, 'dotstore-plugins_page_wpf-add-new-options')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-add-new-question')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-add-new')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-edit-wizard')) ) {
            wp_enqueue_style( $this->plugin_name . 'chosen-css', plugin_dir_url( __FILE__ ) . 'css/chosen.css', array(), $this->version, 'all' );
        }
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts($hook) {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Woo_Product_Finder_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Woo_Product_Finder_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        if ( (false !== strpos($hook, 'dotstore-plugins_page_wpf-list')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-add-new')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-premium')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-get-started')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-information')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-edit-wizard')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-add-new-question')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-question-list')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-edit-question')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-add-new-options')) || (false !== strpos($hook, 'dotstore-plugins_page_wpf-general-setting')) ) {
            wp_enqueue_script( 'jquery' );
            wp_enqueue_script( 'media-upload' );
            wp_enqueue_script( 'jquery-ui-core' );
            wp_enqueue_script( 'jquery-ui-sortable' );
            wp_enqueue_script( 'jquery-ui-accordion' );
            wp_enqueue_media();
            wp_enqueue_style( 'wp-jquery-ui-dialog' );
            wp_enqueue_script( 'productRecommendationWizard', plugin_dir_url( __FILE__ ) . 'js/woo-product-finder-admin.js', array( 'jquery' ), $this->version, false );
            wp_localize_script( 'productRecommendationWizard', 'adminajax', array(
                'ajaxurl'   => admin_url( 'admin-ajax.php' ),
                'ajax_icon' => plugin_dir_url( __FILE__ ) . '/images/ajax-loader.gif',
            ) );
            wp_enqueue_script( $this->plugin_name . 'tablesorter', plugin_dir_url( __FILE__ ) . 'js/jquery.tablesorter.js', array( 'jquery' ), $this->version, true );
            wp_enqueue_script( 'chosen_custom', plugin_dir_url( __FILE__ ) . 'js/chosen.jquery.js', array( 'jquery' ), $this->version, false );

            ################ GET Wizard Id and Question ID #################
            $wizard_id_wpnonce = filter_input(INPUT_POST,'wrd_id',FILTER_SANITIZE_STRING );
            $get_wizard_id   = isset( $wizard_id_wpnonce ) ? sanitize_text_field( wp_unslash( $wizard_id_wpnonce ) ) : '';

            ################ Option ID ######################
            $fetchOptionValueID = $this->get_custom_options_id_from_database();
            $OptionValueIDArray = ! empty( $fetchOptionValueID ) ? wp_json_encode( $fetchOptionValueID ) : wp_json_encode( array() );
            wp_localize_script( 'chosen_custom', 'option_value_id', array( 'OptionValueIDArray' => $OptionValueIDArray ) );

            ################ Attribute Value ######################
            $attributeValueArrayFromDB = $this->get_custom_attribute_value_from_database();
            if ( ! empty( $attributeValueArrayFromDB ) && $attributeValueArrayFromDB != '' ) {
                foreach ( $attributeValueArrayFromDB as $key => $value ) {
                    $value1                 = explode( ',', trim( $value ) );
                    $fetchWooCoomerceOption = ! empty( $value1 ) ? $value1 : '';
                    wp_localize_script( 'chosen_custom', 'allAttributeValue' . $key, array(
                        'attribute_option_id'  => 'attribute_option_' . $key,
                        'attributeOptionArray' => $fetchWooCoomerceOption,
                    ) );
                }
            }

            ################ Attribute Name ######################
            $fetchOptionNameFromDB = $this->get_custom_options_name_from_database();
            if ( ! empty( $fetchOptionNameFromDB ) && $fetchOptionNameFromDB != '' ) {
                foreach ( $fetchOptionNameFromDB as $key => $value ) {
                    $fetchWooCoomerceAttributename = ! empty( $value ) ? $value : '';
                    wp_localize_script( 'chosen_custom', 'allAttributename' . $key, array(
                        'attribute_name_id'       => 'attribute_name_' . $key,
                        'attributeAttributeArray' => $fetchWooCoomerceAttributename,
                    ) );
                }
            }

            ################ Total Count Option ID ######################
            $total_count_option_id = $this->get_total_option_id_for_question();
            ################ Option Label Name Dynamically When Add New Option ######################
            wp_localize_script( 'chosen_custom', 'optionLabelDetails', array(
                'option_label'                 => wp_json_encode( WPF_WIZARD_OPTIONS ),
                'option_lable_description'     => wp_json_encode( WPF_WIZARD_OPTIONS_DESCRIPTION ),
                'option_lable_placeholder'     => wp_json_encode( WPF_WIZARD_OPTIONS_PLACEHOLDER ),
                'option_name_error'            => wp_json_encode( WPF_WIZARD_OPTIONS_ERROR_MESSAGE ),
                'option_image_lable'           => wp_json_encode( WPF_WIZARD_OPTIONS_IMAGE ),
                'option_image_pro'             => wp_json_encode( WPF_OPTIONS_PRO_IMG ),
                'option_pro_version_text'      => wp_json_encode( WPF_PRO_VERSION_TEXT ),
                'option_image_upload_image'    => wp_json_encode( WPF_WIZARD_OPTIONS_UPLOAD_IMAGE ),
                'option_image_remove_image'    => wp_json_encode( WPF_WIZARD_OPTIONS_REMOVE_IMAGE ),
                'option_image_description'     => wp_json_encode( WPF_WIZARD_OPTIONS_IMAGE_DESCRIPTION ),
                'option_attribute_lable'       => wp_json_encode( WPF_WIZARD_ATTRIBUTE_NAME ),
                'option_attribute_description' => wp_json_encode( WPF_WIZARD_ATTRIBUTE_NAME_DESCRIPTION ),
                'option_attribute_placeholder' => wp_json_encode( WPF_WIZARD_ATTRIBUTE_NAME_PLACEHOLDER ),
                'option_attribute_error'       => wp_json_encode( WPF_WIZARD_ATTRIBUTE_NAME_ERROR_MESSAGE ),
                'option_value_lable'           => wp_json_encode( WPF_WIZARD_ATTRIBUTE_VALUE ),
                'option_value_description'     => wp_json_encode( WPF_WIZARD_ATTRIBUTE_VALUE_DESCRIPTION ),
                'option_value_placeholder'     => wp_json_encode( WPF_WIZARD_ATTRIBUTE_VALUE_PLACEHOLDER ),
                'option_value_error'           => wp_json_encode( WPF_WIZARD_ATTRIBUTE_VALUE_ERROR_MESSAGE ),
                'total_count_option_id'        => wp_json_encode( $total_count_option_id ),
            ) );

            ################ All Attribute Name List Disply In Select Dropdwon When Add New Option ######################
            $fetchAttributeName            = $this->get_woocommerce_product_attribute_name_list( $get_wizard_id );
            $fetchAttributeNameWithExplode = explode( ',', $fetchAttributeName );
            $fetchAllAttributeName         = ! empty( $fetchAttributeNameWithExplode ) ? $fetchAttributeNameWithExplode : '';
            $attributeArray                = ! empty( $fetchAllAttributeName ) ? wp_json_encode( $fetchAllAttributeName ) : wp_json_encode( array() );
            wp_localize_script( 'chosen_custom', 'all_attribute_name', array( 'attributeArray' => $attributeArray ) );
        }
    }

    /**
     * Get custom options id from option table for admin are.
     *
     * @since    1.0.0
     * @return array
     */
    public function get_custom_options_id_from_database() {
        global $wpdb;
        $wizard_id_wpnonce = filter_input(INPUT_GET,'wrd_id',FILTER_SANITIZE_STRING );
        $question_id_wpnonce = filter_input(INPUT_GET,'que_id',FILTER_SANITIZE_STRING );
        $wizard_id   = isset( $wizard_id_wpnonce ) ? sanitize_text_field( wp_unslash( $wizard_id_wpnonce ) ) : '';
        $question_id = isset( $question_id_wpnonce ) ? sanitize_text_field( wp_unslash( $question_id_wpnonce ) ) : '';
        $option_id_arr                = array();
        $sel_options_rows             = $wpdb->get_results( $wpdb->prepare( 'SELECT * FROM wpf_questions_options WHERE wizard_id=%d AND question_id=%d', array(
            $wizard_id,
            $question_id,
        ) ) );  //db call ok; no-cache ok
        if ( ! empty( $sel_options_rows ) && $sel_options_rows != '' ) {
            foreach ( $sel_options_rows as $sel_options_data ) {
                $options_id      = $sel_options_data->id;
                $option_id_arr[] = "attribute_option_" . $options_id;
            }
        }

        return $option_id_arr;
    }

    /**
     * Get custom attribute value from option table for admin are.
     *
     * @since    1.0.0
     * @return array
     */
    public function get_custom_attribute_value_from_database() {
        global $wpdb;
        $wizard_id_wpnonce = filter_input(INPUT_GET,'wrd_id',FILTER_SANITIZE_STRING );
        $question_id_wpnonce = filter_input(INPUT_GET,'que_id',FILTER_SANITIZE_STRING );

        $wizard_id   = isset( $wizard_id_wpnonce ) ? sanitize_text_field( wp_unslash( $wizard_id_wpnonce ) ) : '';
        $question_id = isset( $question_id_wpnonce ) ? sanitize_text_field( wp_unslash( $question_id_wpnonce ) ) : '';

        $option_att_arr               = array();
        $sel_options_rows             = $wpdb->get_results( $wpdb->prepare( 'SELECT * FROM wpf_questions_options WHERE wizard_id=%d AND question_id=%d', array(
            $wizard_id,
            $question_id,
        ) ) ); //db call ok; no-cache ok
        if ( ! empty( $sel_options_rows ) && $sel_options_rows != '' ) {
            foreach ( $sel_options_rows as $sel_options_data ) {
                $options_id                    = $sel_options_data->id;
                $option_attribute_value        = $sel_options_data->option_attribute_value;
                $option_att_arr[ $options_id ] = $option_attribute_value;
            }
        }

        return $option_att_arr;
    }

    /**
     * Get custom options name from option table for admin are.
     *
     * @since    1.0.0
     * @return string
     */
    public function get_custom_options_name_from_database() {
        global $wpdb;
        $wizard_id_wpnonce = filter_input(INPUT_GET,'wrd_id',FILTER_SANITIZE_STRING );
        $question_id_wpnonce = filter_input(INPUT_GET,'que_id',FILTER_SANITIZE_STRING );
        $wizard_id   = isset( $wizard_id_wpnonce ) ? sanitize_text_field( wp_unslash( $wizard_id_wpnonce ) ) : '';
        $question_id = isset( $question_id_wpnonce ) ? sanitize_text_field( wp_unslash( $question_id_wpnonce ) ) : '';

        $options_attribute_name       = array();
        $sel_options_rows             = $wpdb->get_results( $wpdb->prepare( 'SELECT * FROM wpf_questions_options WHERE wizard_id=%d AND question_id=%d', array(
            $wizard_id,
            $question_id,
        ) )); //db call ok; no-cache ok
        if ( ! empty( $sel_options_rows ) && $sel_options_rows != '' ) {
            foreach ( $sel_options_rows as $sel_options_data ) {
                $options_id                            = $sel_options_data->id;
                $options_attribute_name[ $options_id ] = $sel_options_data->option_attribute;
            }
        }

        return $options_attribute_name;
    }

    /**
     * Total option id for particular question
     *
     * @since    1.0.0
     * @return int
     */
    public function get_total_option_id_for_question() {
        global $wpdb;
        $options_table_name = OPTIONS_TABLE;

        $sel_qry     = 'SELECT COUNT(id) AS total_option_id FROM ' . $options_table_name . '';
        $sel_results = $wpdb->get_row( $sel_qry ); //db call ok; no-cache ok
        if ( ! empty( $sel_results ) && isset( $sel_results ) ) {
            $total_option_id = $sel_results->total_option_id;
        }

        return $total_option_id;
    }

    /**
     * Woocommerce all product attribute value list that is custom add or attribute section in product.
     *
     * @since    1.0.0
     *
     * @param      integer $wizard_id wizard id.
     *
     * @return array
     */
    public function get_woocommerce_product_attribute_name_list( $wizard_id ) {
        global $product;

        $wizard_id = isset( $wizard_id ) ? $wizard_id : '';


        $args                               = array(
            'post_type'      => array( 'product' ),
            'post_status'    => 'publish',
            'posts_per_page' => - 1,
        );
        $loop                               = new WP_Query( $args );
        $custom_product_attributes_name_arr = array();
        while ( $loop->have_posts() ) : $loop->the_post();
            $theid          = get_the_ID();
            $product        = new WC_Product( $theid );
            $variation_data = $product->get_attributes();
            foreach ( $variation_data as $attribute ) {
                $custom_product_attributes_name_arr[] = explode( '|', wc_attribute_label( $attribute['name'] ) );
            }
        endwhile;
        wp_reset_query();

        $custom_product_attributes_name = array_map( "unserialize", array_unique( array_map( "serialize", $custom_product_attributes_name_arr ) ) );
        if ( ! empty( $custom_product_attributes_name ) && isset( $custom_product_attributes_name ) ) {
            $attributeNameArray_implode = implode( ',', call_user_func_array( 'array_merge', $custom_product_attributes_name ) );
        } else {
            $attributeNameArray_implode = '';
        }

        return $attributeNameArray_implode;
    }

    /**
     * Register the Page for the admin area.
     *
     * @since    1.0.0
     */
    public function dot_store_menu_wpf() {
        global $GLOBALS;
         if ( empty( $GLOBALS['admin_page_hooks']['dots_store'] ) ) {
            add_menu_page(
                'DotStore Plugins', __( 'DotStore Plugins' ), 'manage_option', 'dots_store', array(
                $this,
                'wpf_wizrd_list_page',
            ), WPF_PLUGIN_URL, 2
            );
        }
        add_submenu_page( 'dots_store', 'Get Started', 'Get Started', 'manage_options', 'wpf-get-started', array( $this, 'wpf_get_started_page' ) );
        add_submenu_page( 'dots_store', 'Premium Version', 'Premium Version', 'manage_options', 'wpf-premium', array( $this, 'premium_version_wpf_page' ) );
        add_submenu_page( 'dots_store', 'Introduction', 'Introduction', 'manage_options', 'wpf-information', array( $this, 'wpf_information_page' ) );
        add_submenu_page( 'dots_store', 'Smartwise Wizard', __( 'Smartwise Wizard' ), 'manage_options', 'wpf-list', array( $this, 'wpf_wizrd_list_page' ) );
        add_submenu_page( 'dots_store', 'Add New', 'Add New', 'manage_options', 'wpf-add-new', array( $this, 'wpf_add_new_wizard_page' ) );
        add_submenu_page( 'dots_store', 'Edit Wizard', 'Edit Wizard', 'manage_options', 'wpf-edit-wizard', array( $this, 'wpf_edit_wizard_page' ) );
        add_submenu_page( 'dots_store', 'Add New', 'Add New', 'manage_options', 'wpf-add-new-question', array( $this, 'wpf_add_new_question_page' ) );
        add_submenu_page( 'dots_store', 'Edit Question', 'Edit Question', 'manage_options', 'wpf-edit-question', array( $this, 'wpf_edit_question_page' ) );
    }


    /**
     * Register the Menu Page for the admin area.
     *
     * @since    1.0.0
     */
    public function dot_store_menu_page() {

    }

    /**
     * Register the Information Page for the admin area.
     *
     * @since    1.0.0
     */
    public function wpf_information_page() {
        require_once( plugin_dir_path( __FILE__ ).'partials/wpf-information-page.php' );
    }

    /**
     * Register the Premium Version Page for the admin area.
     *
     * @since    1.0.0
     */
    public function premium_version_wpf_page() {
        require_once( plugin_dir_path( __FILE__ ).'partials/wpf-premium-version-page.php' );
    }

    /**
     * Register the Wizard List for the admin area.
     *
     * @since    1.0.0
     */
    public function wpf_wizrd_list_page() {
        require_once( plugin_dir_path( __FILE__ ).'partials/wpf-list-page.php' );
    }

    /**
     * Register the Add New Wizard for the admin area.
     *
     * @since    1.0.0
     */
    public function wpf_add_new_wizard_page() {
        require_once( plugin_dir_path( __FILE__ ).'partials/wpf-add-new-page.php' );
    }

    /**
     * Register the Edit Wizard Page for the admin area.
     *
     * @since    1.0.0
     */
    public function wpf_edit_wizard_page() {
        require_once( plugin_dir_path( __FILE__ ).'partials/wpf-add-new-page.php' );
    }

    /**
     * Register the Get Started Page for the admin area.
     *
     * @since    1.0.0
     */
    public function wpf_get_started_page() {
        require_once( plugin_dir_path( __FILE__ ).'partials/wpf-get-started-page.php' );
    }

    /**
     * Register the Add New Question for the admin area.
     *
     * @since    1.0.0
     */
    public function wpf_add_new_question_page() {
        require_once( plugin_dir_path( __FILE__ ).'partials/wpf-add-new-question-page.php' );
    }

    /**
     * Register the Edit Question for the admin area.
     *
     * @since    1.0.0
     */
    public function wpf_edit_question_page() {
        require_once( plugin_dir_path( __FILE__ ).'partials/wpf-add-new-question-page.php' );
    }

    /**
     * Welcome Screen Redirect.
     *
     * @since    1.0.0
     */
    public function welcome_wpf_screen_do_activation_redirect() {
        // if no activation redirect
        if ( ! get_transient( '_welcome_screen_activation_redirect_wpf' ) ) {
            return;
        }

        // Delete the redirect transient
        delete_transient( '_welcome_screen_activation_redirect_wpf' );

        // if activating from network, or bulk
        $activate_multie = filter_input(INPUT_GET,'activate-multi',FILTER_SANITIZE_STRING );
        if ( is_network_admin() || isset( $activate_multie ) ) {
            return;
        }
        // Redirect to extra cost welcome  page

        wp_safe_redirect( add_query_arg( array( 'page' => 'wpf-get-started' ), admin_url( 'admin.php' ) ) );
        exit;
    }

    /**
     * Remove Menu from toolbar which is display in admin section.
     *
     * @since    1.0.0
     */
    public function wpf_remove_admin_submenus() {
        remove_submenu_page( 'dots_store', 'wpf-information' );
        remove_submenu_page( 'dots_store', 'wpf-premium' );
        remove_submenu_page( 'dots_store', 'wpf-add-new' );
        remove_submenu_page( 'dots_store', 'wpf-edit-wizard' );
        remove_submenu_page( 'dots_store', 'wpf-get-started' );
        remove_submenu_page( 'dots_store', 'wpf-add-new-question' );
        remove_submenu_page( 'dots_store', 'wpf-edit-question' );
        remove_submenu_page( 'dots_store', 'wpf-question-list' );
        remove_submenu_page( 'dots_store', 'wpf-general-setting' );
    }

    /**
     * Woocommerce all product attribute value list that is custom add or attribute section in product.
     *
     * @since    1.0.0
     * @return array
     */
    public function get_woocommerce_product_attribute_value_list() {
        global $product;
        $custom_product_attributes           = array();
        $custom_product_attributes_arr = array();
        $loop                        = new WP_Query( array( 'post_type' => array( 'product' ), 'post_status' => 'publish', 'posts_per_page' => - 1 ) );
        while ( $loop->have_posts() ) : $loop->the_post();
            $theid          = get_the_ID();
            $product        = new WC_Product( $theid );
            $variation_data = $product->get_attributes();

            foreach ( $variation_data as $attribute ) {
                if ( ( $attribute['is_taxonomy'] ) ) {
                    $values     = wc_get_product_terms( $theid, $attribute['name'], array( 'fields' => 'names' ) );
                    $att_val    = apply_filters( 'woocommerce_attribute', wptexturize( implode( ' | ', $values ) ), $attribute, $values );
                    $att_val_ex = trim( $att_val );
                } else {
                    $att_val_ex = trim( $attribute['value'] );
                }
                $custom_product_attributes[]                                               = explode( '|', $att_val_ex );
                $custom_product_attributes_arr[ wc_attribute_label( $attribute['name'] ) ] = $att_val_ex;
            }

        endwhile;
        wp_reset_query();

        if ( ! empty( $custom_product_attributes ) && isset( $custom_product_attributes ) ) {
            $attributeValueArray_implode = implode( ',', call_user_func_array( 'array_merge', $custom_product_attributes ) );
        } else {
            $attributeValueArray_implode = '';
        }

        return $attributeValueArray_implode;
    }

    /**
     * Woocommerce all product attribute value list based on attribute name.
     *
     * @since    1.0.0
     *
     */

    public function get_attributes_value_based_on_attribute_name() {

        global $product;
        $attribute_name_wpnonce = filter_input(INPUT_POST,'attribute_name',FILTER_SANITIZE_STRING );
        $attribute_name = isset( $attribute_name_wpnonce ) ? sanitize_text_field( wp_unslash( $attribute_name_wpnonce ) ) : '';
        $args = array(
            'post_type'      => array( 'product' ),
            'post_status'    => 'publish',
            'posts_per_page' => - 1,
        );

        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            $custom_product_attributes_arr = array();
            while ( $loop->have_posts() ) : $loop->the_post();
                $theid          = get_the_ID();
                $product        = new WC_Product( $theid );
                $variation_data = $product->get_attributes();

                foreach ( $variation_data as $attribute ) {
                    if ( ( $attribute['is_taxonomy'] && ! taxonomy_exists( $attribute_name ) ) ) {
                        $values     = wc_get_product_terms( $theid, $attribute['name'], array( 'fields' => 'names' ) );
                        $att_val    = apply_filters( 'woocommerce_attribute', wptexturize( implode( ' | ', $values ) ), $attribute, $values );
                        $att_val_ex = trim( $att_val );
                    } else {
                        $att_val_ex = trim( $attribute['value'] );
                    }
                    $custom_product_attributes_arr[][ wc_attribute_label( $attribute['name'] ) ] = $att_val_ex;
                }
            endwhile;
        }

        wp_reset_query();

        $all_attribute_value         = array();
        $all_attribute_value_implode = array();
        if ( ! empty( $custom_product_attributes_arr ) && isset( $custom_product_attributes_arr ) ) {
            foreach ( $custom_product_attributes_arr as $arr_values ) {
                foreach ( $arr_values as $items => $values ) {
                    if ( $attribute_name == $items ) {
                        $all_attribute_value[] = explode( '|', $values );
                    }
                }
            }
        }

        ####### Implode array value #######
        if ( ! empty( $all_attribute_value ) && isset( $all_attribute_value ) ) {
            foreach ( $all_attribute_value as $innerValue ) {
                $all_attribute_value_implode[] = implode( ',', $innerValue );
            }
        }

        ####### Join Array value with comma #######
        $result_attribute_value = '';
        if ( ! empty( $all_attribute_value_implode ) && isset( $all_attribute_value_implode ) ) {
            foreach ( $all_attribute_value_implode as $sub_array ) {
                $result_attribute_value .= $sub_array . ',';
            }
        }

        $result_attribute_value         = trim( $result_attribute_value, ',' );
        $result_attribute_value_explode = explode( ',', trim( $result_attribute_value ) );
        $dropdwon_list                  = '';
        $dropdwon_list                  .= '<option value=""></option>';
        if ( ! empty( $result_attribute_value_explode ) && isset( $result_attribute_value_explode ) ) {
            foreach ( array_unique( array_map( 'trim', $result_attribute_value_explode ) ) as $final_value ) {
                $dropdwon_list .= '<option value="' . esc_attr(trim( $final_value )) . '">' . esc_html(trim( $final_value )) . '</option>';
            }
        }
        echo $dropdwon_list;
        wp_die();
    }

    /**
     * Display attribute value where chages attribute name
     *
     * @since    1.0.0
     *
     * @param int    $wizard_id      Wizard id
     * @param string $attribute_name Attribute name
     *
     * @return string
     */

    public function display_attributes_value_based_on_attribute_name( $wizard_id, $attribute_name ) {
        global $product;
        $attribute_name = trim( $attribute_name );

        $args = array(
            'post_type'      => array( 'product' ),
            'post_status'    => 'publish',
            'posts_per_page' => - 1,
        );

        $loop = new WP_Query( $args );

        if ( $loop->have_posts() ) {
            $custom_product_attributes_arr = array();
            while ( $loop->have_posts() ) : $loop->the_post();
                $theid          = get_the_ID();
                $product        = new WC_Product( $theid );
                $variation_data = $product->get_attributes();

                if ( ! empty( $variation_data ) && isset( $variation_data ) ) {
                    foreach ( $variation_data as $attribute ) {
                        if ( ( $attribute['is_taxonomy'] && ! taxonomy_exists( $attribute_name ) ) ) {
                            $values     = wc_get_product_terms( $theid, $attribute['name'], array( 'fields' => 'names' ) );
                            $att_val    = apply_filters( 'woocommerce_attribute', wptexturize( implode( ' | ', $values ) ), $attribute, $values );
                            $att_val_ex = trim( $att_val );
                        } else {
                            $att_val_ex = trim( $attribute['value'] );
                        }
                        $custom_product_attributes_arr[][ wc_attribute_label( $attribute['name'] ) ] = $att_val_ex;
                    }
                }
            endwhile;
        }

        wp_reset_query();

        $all_attribute_value         = array();
        $all_attribute_value_implode = array();
        if ( ! empty( $custom_product_attributes_arr ) && isset( $custom_product_attributes_arr ) ) {
            foreach ( $custom_product_attributes_arr as $arr_values ) {
                foreach ( $arr_values as $items => $values ) {
                    if ( $attribute_name == $items ) {
                        $all_attribute_value[] = explode( '|', $values );
                    }
                }
            }
        }

        ####### Implode array value #######
        if ( ! empty( $all_attribute_value ) && isset( $all_attribute_value ) ) {
            foreach ( $all_attribute_value as $innerValue ) {
                $all_attribute_value_implode[] = implode( ',', $innerValue );
            }
        }

        ####### Join Array value with comma #######
        $result_attribute_value = '';
        if ( ! empty( $all_attribute_value_implode ) && isset( $all_attribute_value_implode ) ) {
            foreach ( $all_attribute_value_implode as $sub_array ) {
                $result_attribute_value .= $sub_array . ',';
            }
        }

        $result_attribute_value = trim( $result_attribute_value, ',' );

        return $result_attribute_value;
    }

    /**
     * Delete Option data from option page in admin area.
     *
     * @since    1.0.0
     */
    public function remove_option_data_from_option_page() {
        global $wpdb;
        $option_id_wpnonce = filter_input(INPUT_POST,'option_id',FILTER_SANITIZE_STRING );
        $option_id = isset( $option_id_wpnonce ) ? sanitize_text_field( wp_unslash( $option_id_wpnonce ) ) : '';

        $questions_options_table_name = OPTIONS_TABLE;
        $delete_result                = $wpdb->delete( $questions_options_table_name, array( 'id' => $option_id ), array( '%d' ) );  //db call ok; no-cache ok
        echo esc_html($delete_result);
        wp_die();
    }

    /**
     * Delete checked wizard id from wizard page.
     *
     * @since    1.0.0
     */
    public function delete_selected_wizard_using_checkbox() {
        global $wpdb;
        $selected_wizard_id_wpnonce = filter_input(INPUT_POST,'selected_wizard_id',FILTER_SANITIZE_STRING );
        $selected_wizard_id = isset( $selected_wizard_id_wpnonce ) ? sanitize_text_field( wp_unslash($selected_wizard_id_wpnonce)) : '';

        $wizard_table_name            = WIZARDS_TABLE;
        $questions_table_name         = QUESTIONS_TABLE;
        $questions_options_table_name = OPTIONS_TABLE;
        $success_delete               = array();
        if ( ! empty( $selected_wizard_id ) && isset( $selected_wizard_id ) ) {
            foreach ( $selected_wizard_id as $value ) {
                $delete_wizard_result    = $wpdb->delete( $wizard_table_name, array( 'id' => $value ), array( '%d' ) );  //db call ok; no-cache ok
                $wpdb->delete( $questions_table_name, array( 'wizard_id' => $value ), array( '%d' ) );  //db call ok; no-cache ok
                $wpdb->delete( $questions_options_table_name, array( 'wizard_id' => $value ), array( '%d' ) );  //db call ok; no-cache ok
                $success_delete[]        = $delete_wizard_result;
            }

            if ( in_array( "1", $success_delete ,true ) ) {
                echo 'true';
                wp_die();
            }
        }
    }

    /**
     * Delete single wizard id from wizard page.
     *
     * @since    1.0.0
     */
    public function delete_single_wizard_using_button() {
        global $wpdb;
        $single_selected_wizard_id_wpnonce = filter_input(INPUT_POST,'single_selected_wizard_id',FILTER_SANITIZE_STRING );
        $single_selected_wizard_id = isset( $single_selected_wizard_id_wpnonce ) ? sanitize_text_field( wp_unslash( $single_selected_wizard_id_wpnonce ) ) : '';

        $wizard_table_name            = WIZARDS_TABLE;
        $questions_table_name         = QUESTIONS_TABLE;
        $questions_options_table_name = OPTIONS_TABLE;

        $delete_wizard_result    = $wpdb->delete( $wizard_table_name, array( 'id' => $single_selected_wizard_id ), array( '%d' ) );   //db call ok; no-cache ok
        $wpdb->delete( $questions_table_name, array( 'wizard_id' => $single_selected_wizard_id ), array( '%d' ) );   //db call ok; no-cache ok
        $wpdb->delete( $questions_options_table_name, array( 'wizard_id' => $single_selected_wizard_id ), array( '%d' ) );   //db call ok; no-cache ok

        if ( $delete_wizard_result == '1' ) {
            echo 'true';
            wp_die();
        }
    }

    /**
     * Delete selected questions from questions page.
     *
     * @since    1.0.0
     */
    public function delete_selected_question_using_checkbox() {
        global $wpdb;
        $selected_question_id_wpnonce = filter_input(INPUT_POST,'selected_question_id',FILTER_SANITIZE_STRING);
        $selected_question_id = isset( $selected_question_id_wpnonce ) ? sanitize_text_field( wp_unslash( $selected_question_id_wpnonce )) : '';

        $questions_table_name         = QUESTIONS_TABLE;
        $questions_options_table_name = OPTIONS_TABLE;
        $success_delete               = array();
        if ( ! empty( $selected_question_id ) && isset( $selected_question_id ) ) {
            foreach ( $selected_question_id as $value ) {
                $delete_questions_result = $wpdb->delete( $questions_table_name, array( 'id' => $value ), array( '%d' ) );  //db call ok; no-cache ok
                $wpdb->delete( $questions_options_table_name, array( 'question_id' => $value ), array( '%d' ) );  //db call ok; no-cache ok
                $success_delete[]        = $delete_questions_result;
            }
            if ( in_array( "1", $success_delete, true ) ) {
                echo 'true';
                wp_die();
            }
        }
    }

    /**
     * Delete single question using delete button.
     *
     * @since    1.0.0
     */
    public function delete_single_question_using_button() {
        global $wpdb;

        $single_selected_question_id_wpnonce = filter_input(INPUT_POST,'single_selected_question_id',FILTER_SANITIZE_STRING);
        $single_selected_question_id = isset( $single_selected_question_id_wpnonce ) ? sanitize_text_field( wp_unslash( $single_selected_question_id_wpnonce ) ) : '';

        $questions_table_name         = QUESTIONS_TABLE;
        $questions_options_table_name = OPTIONS_TABLE;

        $delete_questions_result = $wpdb->delete( $questions_table_name, array( 'id' => $single_selected_question_id ), array( '%d' ) ); //db call ok; no-cache ok
        $wpdb->delete( $questions_options_table_name, array( 'question_id' => $single_selected_question_id ), array( '%d' ) ); //db call ok; no-cache ok

        if ( $delete_questions_result == '1' ) {
            echo 'true';
            wp_die();
        }
    }

    /**
     * @param $post
     *
     * @since    1.0.0
     *
     * @return bool if post empty
     */
    public function wpf_general_setting_save( $post ) {
        if ( empty( $post ) ) {
            return false;
        }
        $perfect_match_title = filter_input(INPUT_POST,'perfect_match_title',FILTER_SANITIZE_STRING);
        $recent_match_title = filter_input(INPUT_POST,'recent_match_title',FILTER_SANITIZE_STRING);
        $general_setting = array(
            'perfect_match_title' => (! empty( $perfect_match_title )) ? trim( stripslashes( sanitize_text_field( wp_unslash( $perfect_match_title ) ) ) ) : "",
            'recent_match_title'  => (! empty( $recent_match_title )) ? trim( stripslashes( sanitize_text_field( wp_unslash( $recent_match_title ) ) ) ) : "",
        );
        update_option( 'wizard_general_option', $general_setting );
    }

    /**
     * Save wizard data
     *
     * @param $post
     *
     * @since    1.0.0
     * @return bool
     */
    public function wpf_wizard_save( $post ) {
        global $wpdb;
        $wcpfcnonce = wp_create_nonce( 'wppfcnonce' );
        if ( empty( $post ) ) {
            return false;
        }

        if ( isset( $post['wizard_status'] ) && ! empty( $post['wizard_status'] ) ) {
            $wizard_status = 'on';
        } else {
            $wizard_status = 'off';
        }

        if ( isset( $post['wizard_title'] ) ) {
            if ( empty(intval( $post['wizard_post_id'] ))) {
                $wpdb->query( $wpdb->prepare( "INSERT INTO wpf_wizard ( name, wizard_category, shortcode, status, created_date, updated_date ) VALUES ( %s, %s, %s, %s, %s, %s )", trim( stripslashes( sanitize_text_field( $post['wizard_title'] ) ) ), '', trim( sanitize_text_field( $post['wizard_shortcode'] ) ), trim( $wizard_status ), date( "Y-m-d H:i:s" ), date( "Y-m-d H:i:s" ) ) ); //db call ok; no-cache ok
                $last_wizard_id = $wpdb->insert_id;
            } else {
                $wpdb->query( $wpdb->prepare( "UPDATE wpf_wizard SET name = %s, shortcode=%s, status=%s, created_date=%s, updated_date=%s WHERE id = %d", trim( stripslashes( sanitize_text_field( $post['wizard_title'] ) ) ), trim( sanitize_text_field( $post['wizard_shortcode'] ) ), trim( $wizard_status ), date( "Y-m-d H:i:s" ), date( "Y-m-d H:i:s" ), intval( $post['wizard_post_id'] ) ) ); //db call ok; no-cache ok
                $last_wizard_id = intval( sanitize_text_field( wp_unslash( $post['wizard_post_id'] ) ) );
            }
        }
        $latest_url = esc_url( home_url( '/wp-admin/admin.php?page=wpf-edit-wizard&wrd_id=' . $last_wizard_id . '&action=edit&_wpnonce=' . $wcpfcnonce ) );
        $newUrl     = html_entity_decode( $latest_url );

        wp_safe_redirect( $newUrl );
        exit();
    }

    /**
     * Save question data
     * * @since    1.0.0
     *
     * @param $post
     * @param $wizard_id
     *
     * @return bool
     */
    public function wpf_wizard_question_save( $post, $wizard_id ) {
        global $wpdb;
        $wcpfcnonce = wp_create_nonce( 'wppfcnonce' );
        if ( empty( $post ) ) {
            return false;
        }

        if ( isset( $post['question_type'] ) ) {
            $question_type = sanitize_text_field( wp_unslash( $post['question_type'] ) );
        }

        if ( isset( $post['question_name'] ) ) {
            if ( $post['question_id'] == '' ) {
                $max_sortable_number = $this->get_last_max_sortabl_question_insert_time( $wizard_id );
                $wpdb->query( $wpdb->prepare( "INSERT INTO wpf_questions ( name, wizard_id, option_type, sortable_id, created_date, updated_date ) VALUES ( %s, %d, %s, %d, %s, %s )", trim( stripslashes( sanitize_text_field( wp_unslash( $post['question_name'] ) ) ) ), trim( $wizard_id ), trim( $question_type ), trim( $max_sortable_number ), date( "Y-m-d H:i:s" ), date( "Y-m-d H:i:s" ) ) ); //db call ok; no-cache ok
                $last_question_id = $wpdb->insert_id;
	            $this->wpf_wizard_options_save( $post['options_id'], $post['options_name'], $post['attribute_name'], $post['attribute_value'], $wizard_id, $last_question_id );
            } else {
                $wpdb->query( $wpdb->prepare( "UPDATE wpf_questions SET name = %s, option_type=%s, created_date=%s, updated_date=%s WHERE id = %d AND wizard_id = %d", trim( stripslashes( $post['question_name'] ) ), trim( $question_type ), date( "Y-m-d H:i:s" ), date( "Y-m-d H:i:s" ), $post['question_id'], $wizard_id ) ); //db call ok; no-cache ok
                $this->wpf_wizard_options_save( $post['options_id'], $post['options_name'], $post['attribute_name'], $post['attribute_value'], $wizard_id, sanitize_text_field( wp_unslash( $post['question_id'] ) ) );
                $last_question_id = sanitize_text_field( wp_unslash( $post['question_id'] ) );
            }
        }
        $latest_url = esc_url( home_url( '/wp-admin/admin.php?page=wpf-add-new-question&wrd_id=' . $wizard_id . '&que_id=' . $last_question_id . '&action=edit&_wpnonce=' . $wcpfcnonce ) );
        $newUrl     = html_entity_decode( $latest_url );
        wp_safe_redirect( $newUrl );
        exit();
    }

    /**
     * Get last sortable id before updated new wizard sortable record
     *
     * @since    1.0.0
     *
     * @param int $wizard_id wizard id.
     *
     * @return int
     */
    public function get_last_max_sortabl_question_insert_time( $wizard_id ) {
        global $wpdb;
        $sel_results = $wpdb->get_row( $wpdb->prepare( 'SELECT MAX(sortable_id) AS max FROM wpf_questions WHERE wizard_id=%d', $wizard_id ) ); //db call ok; no-cache ok
        $max_question_sortable_number = $sel_results->max;
        $max_question_sortable_number ++;

        return $max_question_sortable_number;
    }

    /**
     * Save options data
     *
     * @since    1.0.0
     *
     * @param $options_id
     * @param $options_name
     * @param $attribute_name
     * @param $attribute_value
     * @param $wizard_id
     * @param $questions_id
     *
     * @return string
     */
    public function wpf_wizard_options_save( $options_id, $options_name, $attribute_name, $attribute_value, $wizard_id, $questions_id ) {
        global $wpdb;

        $main_options_id      = $options_id;
        $main_options_name    = $options_name;
        $main_attribute_name  = $attribute_name;
        $main_attributr_value = $attribute_value;
        $final_results        = array();

        if ( ! empty( $main_options_id ) ) {
            foreach ( $main_options_id as $main_options_id_value ) {
                foreach ( $main_options_id_value as $options_key => $options_value ) {
                    if ( ! empty( $main_options_name ) ) {
                        foreach ( $main_options_name as $main_options_name_value ) {
                            foreach ( $main_options_name_value as $options_name_key => $options_name_value ) {
                                if ( ! empty( $main_attribute_name ) ) {
                                    foreach ( $main_attribute_name as $attribute_name ) {
                                        foreach ( $attribute_name as $an_key => $an_value ) {
                                            if ( ! empty( $main_attributr_value ) ) {
                                                $original_attributr_value = '';
                                                foreach ( $main_attributr_value as $attributr_value ) {
                                                    foreach ( $attributr_value as $av_key => $av_value ) {
                                                        if ( $options_key == $options_name_key && $options_key == $an_key && $options_key == $av_key && $options_name_key == $an_key && $options_name_key == $av_key && $an_key == $av_key ) {
                                                            $original_attributr_value                        .= ',' . $av_value;
                                                            $final_results[ $options_key ][ $options_value ] = trim( $options_name_value ) . "||" . trim( $an_value ) . "||" . ltrim( $original_attributr_value, ',' );
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        $result_option      = '';
        if ( isset( $final_results ) ) {
            foreach ( $final_results as $value ) {
                foreach ( $value as $v_key => $v_value ) {
                    if ( empty($v_key) ) {
                        $max_option_sortable_number = $this->get_last_max_sortabl_option_insert_time( $wizard_id, $questions_id );
                        $other_option_data          = explode( '||', trim( $v_value ) );
                        $wpdb->query( $wpdb->prepare( "INSERT INTO wpf_questions_options ( wizard_id, question_id, option_name,option_image, option_attribute, option_attribute_value, sortable_id, created_date, updated_date ) VALUES ( %d, %d, %s,%s, %s, %s, %d, %s, %s )", trim( $wizard_id ), trim( $questions_id ), trim( stripslashes( $other_option_data[0] ) ), '', trim( $other_option_data[1] ), trim( $other_option_data[2] ), trim( $max_option_sortable_number ), date( "Y-m-d H:i:s" ), date( "Y-m-d H:i:s" ) ) ); //db call ok; no-cache ok
                    }
                }
            }
            foreach ( $final_results as $value ) {
                foreach ( $value as $v_key => $v_value ) {
                    $check_options_rows = $wpdb->get_row( $wpdb->prepare( 'SELECT * FROM wpf_questions_options WHERE wizard_id=%d AND question_id=%d AND id=%d', array(
                        $wizard_id,
                        $questions_id,
                        $v_key,
                    ) ) ); //db call ok; no-cache ok
                    if ( ! empty( $check_options_rows ) ) {
                        $exist_option_id = $check_options_rows->id;
                        if ( ! empty( $exist_option_id ) && $exist_option_id !== '' ) {
                            $other_option_data = explode( '||', trim( $v_value ) );
                            $wpdb->query( $wpdb->prepare( "UPDATE wpf_questions_options SET option_name = %s, option_attribute=%s, option_attribute_value=%s, created_date=%s, updated_date=%s WHERE id = %d AND wizard_id = %d AND question_id = %d", trim( stripslashes( $other_option_data[0] ) ), trim( $other_option_data[1] ), trim( stripslashes( $other_option_data[2] ) ), date( "Y-m-d H:i:s" ), date( "Y-m-d H:i:s" ), $v_key, $wizard_id, $questions_id ) ); //db call ok; no-cache ok
                        }
                    } else {
                        $other_option_data          = explode( '||', trim( $v_value ) );
                        $max_option_sortable_number = $this->get_last_max_sortabl_option_insert_time( $wizard_id, $questions_id );
                        $wpdb->query( $wpdb->prepare( "INSERT INTO wpf_questions_options ( wizard_id, question_id, option_name,option_image, option_attribute, option_attribute_value, sortable_id, created_date, updated_date ) VALUES ( %d, %d, %s, %s, %s, %s, %d, %s, %s )", trim( $wizard_id ), trim( $questions_id ), trim( stripslashes( $other_option_data[0] ) ), '', trim( $other_option_data[1] ), trim( $other_option_data[2] ), trim( $max_option_sortable_number ), date( "Y-m-d H:i:s" ), date( "Y-m-d H:i:s" ) ) ); //db call ok; no-cache ok
                    }
                }
            }
        }
        return $result_option;
    }

    /**
     * Get last sortable question id before updated new questions sortable record
     *
     * @since    1.0.0
     *
     * @param int $wizard_id   wizard id.
     * @param int $question_id question id.
     *
     * @return int
     */
    public function get_last_max_sortabl_option_insert_time( $wizard_id, $question_id ) {
        global $wpdb;
        $sel_results = $wpdb->get_row( $wpdb->prepare( 'SELECT MAX(sortable_id) AS max FROM wpf_questions_options WHERE wizard_id=%d AND question_id=%d', array(
            $wizard_id,
            $question_id,
        ) ) ); //db call ok; no-cache ok
        $max_option_sortable_number = $sel_results->max;
        $max_option_sortable_number ++;

        return $max_option_sortable_number;
    }

    /**
     * After drag and drop updated new sortable question id
     *
     * @since    1.0.0
     *
     * @param int $wizard_id   wizard id.
     * @param int $question_id question id.
     *
     * @return int
     */
    public function get_last_max_sortabl_question_insert_update( $wizard_id, $question_id ) {
        global $wpdb;
        $sel_results = $wpdb->get_row( $wpdb->prepare( 'SELECT sortable_id FROM wpf_questions WHERE wizard_id=%d AND id=%d', array(
            $wizard_id,
            $question_id,
        ) ) ); //db call ok; no-cache ok
        $current_question_sortable_number = $sel_results->sortable_id;

        return $current_question_sortable_number;
    }

    /**
     * Questions list with pagination
     *
     * @since    1.0.0
     */
    public function get_admin_question_list_with_pagination() {
        global $wpdb;
        $wizard_id_wpnonce = filter_input(INPUT_POST,'wizard_id',FILTER_SANITIZE_STRING);
        if ( isset( $wizard_id_wpnonce ) && ! empty( $wizard_id_wpnonce ) ) {
            $wizard_id = sanitize_text_field( wp_unslash( $wizard_id_wpnonce ) );
        } else {
            $wizard_id = '';
        }

        $pagenum_wpnonce = filter_input(INPUT_POST,'pagenum',FILTER_SANITIZE_STRING);
        if ( isset( $pagenum_wpnonce ) && ! empty( $pagenum_wpnonce ) ) {
            $page = intval( sanitize_text_field( wp_unslash( $pagenum_wpnonce ) ) );
        } else {
            $page = 1;
        }

        $limit_wpnonce = filter_input(INPUT_POST,'limit',FILTER_SANITIZE_STRING);
        $limit = ( isset( $limit_wpnonce ) && (! empty( $limit_wpnonce )) && is_numeric( sanitize_text_field( wp_unslash( $limit_wpnonce ) ) ) ) ? intval( sanitize_text_field( wp_unslash( $limit_wpnonce ) ) ) : 5;

        $page_result   = $wpdb->get_row( $wpdb->prepare( 'SELECT COUNT(*) AS total_id FROM wpf_questions WHERE wizard_id=%d', $wizard_id ) ); //db call ok; no-cache ok
        $total_records = $page_result->total_id;

        $last = ceil( $total_records / $limit );

        if ( $page < 1 ) {
            $page = 1;
        } elseif ( $page > $last ) {
            $page = $last;
        }

        if ( $page > 1 ) {
            $lower_limit = ( $page - 1 ) * $limit;
        } else {
            $lower_limit = '0';
        }

        $sel_rows = $wpdb->get_results( $wpdb->prepare( 'SELECT * FROM wpf_questions WHERE wizard_id=%d ORDER BY sortable_id ASC LIMIT %d, %d', array(
            $wizard_id,
            $lower_limit,
            $limit,
        ) ) ); //db call ok; no-cache ok
        $pagination_question_list = '';
        $pagination_question_list .= '<table class="table-outer form-table all-table-listing" id="question_list_table">';
        $pagination_question_list .= '<thead>';
        $pagination_question_list .= '<tr class="wpf-head">';
        $pagination_question_list .= '<th><input type="checkbox" name="check_all" class="chk_all_question_class" id="chk_all_question"></th>';
        $pagination_question_list .= '<th>' . __( 'Name', WPF_TEXT_DOMAIN ) . '</th>';
        $pagination_question_list .= '<th>' . __( 'Type', WPF_TEXT_DOMAIN ) . '</th>';
        $pagination_question_list .= '<th>' . __( 'Action', WPF_TEXT_DOMAIN ) . '</th>';
        $pagination_question_list .= '</tr>';
        $pagination_question_list .= '</thead>';
        $pagination_question_list .= '<tbody>';
        if ( ! empty( $sel_rows ) ) {
            $i = 1;
            foreach ( $sel_rows as $sel_data ) {
                $question_id   = $sel_data->id;
                $wizard_id     = $sel_data->wizard_id;
                $question_name = $sel_data->name;
                $question_type = ucfirst( $sel_data->option_type );
                $wpfnonce      = wp_create_nonce( 'wppfcnonce' );

                $edit_url     = home_url( '/wp-admin/admin.php?page=wpf-add-new-question&wrd_id=' . esc_attr($wizard_id) . '&que_id=' . esc_attr($question_id) . '&action=edit' . '&_wpnonce=' . esc_attr($wpfnonce) );
                $new_edit_url = html_entity_decode( $edit_url );

                $pagination_question_list .= '<tr id="after_updated_question_' . esc_attr($question_id) . '">';
                $pagination_question_list .= '<td width="10%">';
                $pagination_question_list .= '<input type="checkbox" name="chk_single_question_name" class="chk_single_question" value="' . esc_attr($question_id) . '">';
                $pagination_question_list .= '</td>';
                $pagination_question_list .= '<td>';
                $pagination_question_list .= '<a href="' . esc_url($new_edit_url) . '">' . __( $question_name, WPF_TEXT_DOMAIN ) . '</a>';
                $pagination_question_list .= '</td>';
                $pagination_question_list .= '<td>' . __( $question_name,$question_type, WPF_TEXT_DOMAIN ) . '</td>';
                $pagination_question_list .= '<td>';
                $pagination_question_list .= '<a class="fee-action-button button-primary" href="' . esc_url($new_edit_url) . '" id="questions_edit_' . esc_attr($question_id) . '">' . __( 'Edit', WPF_TEXT_DOMAIN ) . '</a>';
                $pagination_question_list .= '<a class="fee-action-button button-primary delete_single_question_using_button" href="javascript:void(0);" id="delete_single_selected_question_' . esc_attr($question_id) . '">' . __( 'Delete', WPF_TEXT_DOMAIN ) . '</a>';
                $pagination_question_list .= '</td>';
                $pagination_question_list .= '</tr>';
                $i ++;
            }
        } else {
            $pagination_question_list .= '<tr>';
            $pagination_question_list .= '<td colspan="4">' . __( 'No List Available', WPF_TEXT_DOMAIN ) . '</td>';
            $pagination_question_list .= '</tr>';
        }
        $pagination_question_list .= '</tbody>';
        $pagination_question_list .= '</table>';
        $pagination_question_list .= $this->admin_ajax_pagination( $wizard_id, $limit, $page, $last, $total_records );
        echo $pagination_question_list;
        wp_die();
    }

    /**
     * Ajax Pagination
     *
     * @since    1.0.0
     *
     * @param $wizard_id
     * @param $limit
     * @param $page
     * @param $last
     * @param $total_records
     *
     * @return string
     */
    public function admin_ajax_pagination( $wizard_id, $limit, $page, $last, $total_records ) {
        $pagination_list = '';
        $pagination_list .= '<div class="tablenav">';
        $pagination_list .= '<div class="tablenav-pages" id="custom_pagination">';
        $pagination_list .= '<span class="displaying-num">' .  __( $total_records, WPF_TEXT_DOMAIN ) . ''.  __( 'items', WPF_TEXT_DOMAIN ) .'</span>';
        $pagination_list .= '<span class="pagination-links">';
        $page_minus      = $page - 1;
        $page_plus       = $page + 1;
        if ( ( $page_minus ) > 0 ) {
            $pagination_list .= '<a class="first-page" href="javascript:void(0);" class="links" id="wd_' . esc_attr($wizard_id) . '_lmt_' . esc_attr($limit) . '_que_1">';
            $pagination_list .= '<span class="screen-reader-text">First page</span><span aria-hidden="true" id="wd_' . esc_attr($wizard_id) . '_lmt_' . esc_attr($limit) . '_que_1" class="pagination_span">«</span></a>';
            $pagination_list .= '<a class="prev-page" href="javascript:void(0);" class="links" id="wd_' . esc_attr($wizard_id) . '_lmt_' . esc_attr($limit) . '_que_' . esc_attr($page_minus) . '">';
            $pagination_list .= '<span class="screen-reader-text">Previous page</span><span aria-hidden="true" id="wd_' . esc_attr($wizard_id) . '_lmt_' . esc_attr($limit) . '_que_' . esc_attr($page_minus) . '" class="pagination_span">‹</span></a>';
        }
        $pagination_list .= '<span class="screen-reader-text">Current Page</span>';
        $pagination_list .= '<span id="table-paging" class="paging-input"><span class="tablenav-paging-text">' . esc_html($page) . ''.  __( ' of', WPF_TEXT_DOMAIN ) . ' <span class="total-pages">' . esc_html($last) . '</span></span></span>';
        if ( ( $page_plus ) <= $last ) {
            $pagination_list .= '<a class="next-page" href="javascript:void(0);" id="wd_' . esc_attr($wizard_id) . '_lmt_' . esc_attr($limit) . '_que_' . esc_attr($page_plus) . '" class="links">';
            $pagination_list .= '<span class="screen-reader-text">Next page</span><span aria-hidden="true" id="wd_' . esc_attr($wizard_id) . '_lmt_' . esc_attr($limit) . '_que_' . esc_attr($page_plus) . '" class="pagination_span">›</span>';
            $pagination_list .= '</a>';
        }
        if ( ( $page ) !== $last ) {
            $pagination_list .= '<a class="last-page"href="javascript:void(0);" id="wd_' . esc_attr($wizard_id) . '_lmt_' . esc_attr($limit) . '_que_' . esc_attr($last) . '" class="links">';
            $pagination_list .= '<span class="screen-reader-text">Last page</span><span aria-hidden="true" id="wd_' . esc_attr($wizard_id) . '_lmt_' . esc_attr($limit) . '_que_' . esc_attr($last) . '" class="pagination_span">»</span>';
            $pagination_list .= '</a>';
        }
        $pagination_list .= '</span>';
        $pagination_list .= '</div>';
        $pagination_list .= '</div>';

        return $pagination_list;
    }

    /**
     * Current auto increment id for wizard table
     *
     * @since    1.0.0
     *
     * @param string $table_name Wizard table name.
     *
     * @return int
     */
    public function get_current_auto_increment_id( $table_name ) {
        global $wpdb;
        $get_current_auto_incr_rows = $wpdb->get_row( $wpdb->prepare( 'SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA=%s AND TABLE_NAME=%s', array( DB_NAME, $table_name ) ) ); //db call ok; no-cache ok
        $current_auto_incr_id       = $get_current_auto_incr_rows->AUTO_INCREMENT;

        return $current_auto_incr_id;
    }

    /**
     * Generate auto shortcode
     *
     * @since    1.0.0
     *
     * @param int $current_auto_incr_id Current auto increment wizard id.
     *
     * @return string
     */
    public function create_wizard_shortcode( $current_auto_incr_id ) {
        $current_shortcode = '[wpf_' . $current_auto_incr_id . ']';

        return $current_shortcode;
    }

    /**
     * Drag and drop question list
     *
     * @since    1.0.0
     */
    public function sortable_question_list_based_on_id() {
        global $wpdb;
        $wizard_id_wpnonce = filter_input(INPUT_POST,'wizard_id',FILTER_SANITIZE_NUMBER_INT);
        $question_sortable_data_wpnonce = filter_input(INPUT_POST,'option_sortable_data',FILTER_SANITIZE_STRING);

        $wizard_id              = isset( $wizard_id_wpnonce ) ? sanitize_text_field( wp_unslash( $wizard_id_wpnonce ) ) : '';
        $question_sortable_data = explode( ',', isset( $question_sortable_data_wpnonce ) ? sanitize_text_field( wp_unslash( $question_sortable_data_wpnonce ) ) : '' );

        $sel_results = $wpdb->get_results( $wpdb->prepare( 'SELECT * FROM wpf_questions WHERE wizard_id=%d ORDER BY id ASC', $wizard_id ) );  //db call ok; no-cache ok

        $i = 0;
        $j = 0;
        foreach ( $question_sortable_data as $value ) {
            foreach ( $sel_results as $sel_value ) {
                $question_id = $sel_value->id;
                if ( $value === $question_id ) {
                    $j ++;
                    $wpdb->query( $wpdb->prepare( "UPDATE wpf_questions SET sortable_id = %d WHERE id = %d AND wizard_id = %d", $j, $question_id, $wizard_id ) );  //db call ok; no-cache ok
                }
            }
            $i ++;
        }
        wp_die();
    }

    /**
     * Sortable Option list based on option id
     *
     * @since    1.0.0
     */
    public function sortable_option_list_based_on_id() {
        global $wpdb;
        $wizard_id_wpnonce = filter_input(INPUT_POST,'wizard_id',FILTER_SANITIZE_NUMBER_INT);
        $question_id_wpnonce = filter_input(INPUT_POST,'question_id',FILTER_SANITIZE_NUMBER_INT);
        $option_sortable_data_wpnonce = filter_input(INPUT_POST,'option_sortable_data',FILTER_SANITIZE_STRING);

        $wizard_id            = isset( $wizard_id_wpnonce ) ? sanitize_text_field( wp_unslash( $wizard_id_wpnonce ) ) : '';
        $question_id          = isset( $question_id_wpnonce ) ? sanitize_text_field( wp_unslash( $question_id_wpnonce ) ) : '';
        $option_sortable_data = explode( ',', isset( $option_sortable_data_wpnonce ) ? sanitize_text_field( wp_unslash( $option_sortable_data_wpnonce ) ) : '' );

        $sel_results = $wpdb->get_results( $wpdb->prepare( 'SELECT * FROM wpf_questions_options WHERE wizard_id=%d AND question_id=%d ORDER BY id ASC', array( $wizard_id, $question_id ) ) ); //db call ok; no-cache ok

        $i = 0;
        $j = 0;
        foreach ( $option_sortable_data as $value ) {
            foreach ( $sel_results as $sel_value ) {
                $option_id = $sel_value->id;
                if ( $value === $option_id ) {
                    $j ++;
                    $wpdb->query( $wpdb->prepare( "UPDATE wpf_questions_options SET sortable_id = %d WHERE id = %d AND question_id = %d AND wizard_id = %d", $j, $option_id, $question_id, $wizard_id ) ); //db call ok; no-cache ok
                }
            }
            $i ++;
        }
        wp_die();
    }

    /**
     * After drag and drop updated new sortable option id
     *
     * @since    1.0.0
     *
     * @param int $wizard_id   wizard id.
     * @param int $question_id question id.
     * @param int $option_id   option id.
     *
     * @return int
     */
    public function get_last_max_sortabl_option_insert_update( $wizard_id, $question_id, $option_id ) {
        global $wpdb;
        $sel_results = $wpdb->get_row( $wpdb->prepare( 'SELECT sortable_id FROM wpf_questions_options WHERE wizard_id=%d AND question_id=%d AND id=%d', array(
            $wizard_id,
            $question_id,
            $option_id,
        ) ) ); //db call ok; no-cache ok
        $current_option_sortable_number = $sel_results->sortable_id;
        return $current_option_sortable_number;
    }
    function wpf_plugin_row_meta( $links, $file ) {

        if ( strpos( $file, 'woo-product-finder.php' ) !== false ) {
            $new_links = array(
                'support' => '<a href="'.esc_url('https://www.smartwise.be').'" target="_blank">'.__( 'Support', WPF_TEXT_DOMAIN ).'</a>',
            );

            $links = array_merge( $links, $new_links );
        }

        return $links;
    }
}