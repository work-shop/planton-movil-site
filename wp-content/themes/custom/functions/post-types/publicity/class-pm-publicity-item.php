<?php

class PM_Publicity_Item extends WS_Custom_Post_Type {

    public static $slug = 'publicity';

    public static $singular_name = 'Item';

    public static $plural_name = 'Publicity';

    protected static $options = array(
        'menu_icon'                 => 'dashicons-id-alt',
        'hierarchical'              => false,
        'has_archive'               => true,
        'menu_position'             => 5,
        'supports'                  => array(
                                        'title',
                                        'revisions'
                                    ),
        'rewrite'                   => array(
                                        'slug' => 'publicity',
                                        'with_front' => false,
                                        'feeds' => true,
                                        'pages' => true
                                    ),
        'taxonomy'                => array( 'category' )

    );


    public function __construct() {

    }

    /**
     * Static method that registers the Shop Product custom post type
     * for user management on the back end.
     */
    public static function register() {
        parent::register( PM_Publicity_Item::$slug, PM_Publicity_Item::$singular_name, PM_Publicity_Item::$plural_name, PM_Publicity_Item::$options );
    }

}

?>
