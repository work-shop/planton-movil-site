<?php


class WS_Site {

    public function __construct() {

        add_action('init', array( $this, 'register_image_sizing') );
        add_action('init', array( $this, 'register_theme_support') );
        add_action('init', array( $this, 'register_post_types_and_taxonomies' ) );

        add_action('wp_enqueue_scripts', array( $this, 'enqueue_scripts_and_styles' ) );

        add_filter('show_admin_bar', '__return_false');

        new WS_CDN_Url();

    }


    public function register_post_types_and_taxonomies() {

        PM_Walk::register();
        PM_Publicity_Item::register();

    }

    public function register_image_sizing() {
        if ( function_exists( 'add_image_size' ) ) {

            add_image_size('social_card', 600, 600, array( 'x_crop_position' => 'center', 'y_crop_position' => 'center'));

        }
    }

    public function register_theme_support() {
        if ( function_exists( 'add_theme_support' ) ) {

            add_theme_support( 'menus' );
            add_theme_support( 'post-thumbnails' );

        }
    }


    public function enqueue_scripts_and_styles() {
        if ( function_exists( 'get_template_directory_uri' ) && function_exists( 'wp_enqueue_style' ) && function_exists( 'wp_enqueue_script' ) ) {

            $font_css = '/fonts/fonts.css';
            $main_css = '/styles/bundle.css';
            $main_js = '/scripts/bundle.js';

            $compiled_resources_dir = get_template_directory() . '/compiled';
            $compiled_resources_uri = get_template_directory_uri() . '/compiled';

            $fonts_css_ver = filemtime( get_template_directory() . $font_css ); // version suffices for cache-busting.
            $main_css_ver = filemtime( $compiled_resources_dir . $main_css ); // version suffices for cache-busting.
            $main_js_ver = filemtime( $compiled_resources_dir . $main_css ); // version suffices for cache-busting.

            wp_enqueue_style('font-css', get_template_directory_uri() . $font_css, array(), $fonts_css_ver );
            wp_enqueue_style('main-css', $compiled_resources_uri . $main_css, array('font-css'), $main_css_ver);
            wp_enqueue_script('jquery');
            wp_enqueue_script('main-js', $compiled_resources_uri . $main_js, array('jquery'), $main_js_ver, true);

        }
    }

    /**
     * A simple, boolean valued function to determine whether an ACF image
     * is portait or landscape, natively.
     */
    public static function portrait( $image ) {
        return $image['width'] <= $image['height'];
    }

}

?>
