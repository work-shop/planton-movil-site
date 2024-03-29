<?php


class WS_Site_Admin {


    public function __construct() {

        add_action('admin_menu', array( $this, 'manage_admin_menu_options' ) );
        add_action('acf/init', array($this, 'add_options_pages'));

        add_action('wp_dashboard_setup', array($this, 'remove_dashboard_widgets') );
        add_action('wp_before_admin_bar_render', array($this, 'remove_admin_bar_items'));
        add_action('admin_head', array( $this, 'grant_editor_access' ) );
        add_action('switch_theme', array( $this, 'revoke_editor_access' ) );

    }



    public static $capabilities = array( 'gform_full_access', 'edit_theme_options' );

    public function grant_editor_access() {

        $role = get_role('editor');

        foreach ( self::$capabilities as $capability) {
            if ( !$role->has_cap( $capability ) ) {
                $role->add_cap( $capability );
            }
        }

    }

    public function revoke_editor_access() {

        $role = get_role('editor');

        foreach ( self::$capabilities as $capability) {
            if ( $role->has_cap( $capability ) ) {
                $role->remove_cap( $capability );
            }
        }

    }

    /**
     * This function manages visibility of different parts of the Admin view.
     */
    public function manage_admin_menu_options() {

        global $submenu;

        remove_meta_box("dashboard_primary", "dashboard", "side");   // WordPress.com blog
        remove_meta_box("dashboard_secondary", "dashboard", "side"); // Other WordPress news

        remove_post_type_support('post', 'comments');
        remove_post_type_support('page', 'comments');

        remove_menu_page('index.php');  // Remove the dashboard link from the Wordpress sidebar.
        remove_menu_page('edit.php');   // Remove the posts link from the Wordpress sidebar.
        remove_menu_page('edit-comments.php');   // Remove the comments link from the Wordpress sidebar.

        if ( !current_user_can( 'administrator' ) ) {
            remove_menu_page('tools.php');
            remove_menu_page('admin.php?page=wc-settings'); // Remove WC Configuration Settings
            remove_menu_page('admin.php?page=gf_edit_forms'); // Remove Gravity Forms Edit Page

            if ( isset( $submenu['themes.php']) ) {
                foreach ($submenu['themes.php'] as $key => $menu_item ) {
                    if ( in_array('Customize', $menu_item ) ) {
                        unset( $submenu['themes.php'][$key] );
                    }
                    if ( in_array('Themes', $menu_item ) ) {
                        unset( $submenu['themes.php'][$key] );
                    }
                }
            }

        }

    }

    /**
     * Additional ACF options pages can be registered here.
     */
    public function add_options_pages() {
        if ( function_exists('acf_add_options_page') ) {

            /**
             * We're not using an options page here.
             */
            // acf_add_options_page(array(
            //     "page_title" => "Site",
            //     "capability" => "edit_posts",
            //     "position" => 10,
            //     "icon_url" => "dashicons-admin-home"
            // ));
        }
    }

    /**
     * Removes comments icon from the admin bar.
     */
    public function remove_admin_bar_items() {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu("comments");
    }

    /**
     * remove admin menu home page widgets
     */
    public function remove_dashboard_widgets() {
        remove_meta_box("dashboard_primary", "dashboard", "side");   // WordPress.com blog
        remove_meta_box("dashboard_secondary", "dashboard", "side"); // Other WordPress news

        global $wp_meta_boxes;

        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    }



}

?>
