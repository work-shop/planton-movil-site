<?php

class PM_Walk extends WS_Custom_Post_Type {

    public static $slug = 'walks';

    public static $singular_name = 'Walk';

    public static $plural_name = 'Walks';

    protected static $options = array(
        'menu_icon'                 => 'dashicons-palmtree',
        'hierarchical'              => false,
        'has_archive'               => true,
        'menu_position'             => 5,
        'supports'                  => array(
                                        'title',
                                        'thumbnail',
                                        'revisions'
                                    ),
        'rewrite'                   => array(
                                        'slug' => 'walks',
                                        'with_front' => false,
                                        'feeds' => true,
                                        'pages' => true
                                    ),
        'taxonomies'                => array( ),
        'show_in_nav_menu'          => true

    );


    public function __construct() {

    }

    /**
     * Static method that registers the Shop Product custom post type
     * for user management on the back end.
     */
    public static function register() {
        parent::register( PM_Walk::$slug, PM_Walk::$singular_name, PM_Walk::$plural_name, PM_Walk::$options );
    }

}

?>
