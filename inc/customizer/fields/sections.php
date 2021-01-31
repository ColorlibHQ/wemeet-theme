<?php 
/**
 * @Packge     : Wemeet
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'wemeet_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'wemeet' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'wemeet_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'wemeet' ),
            'panel'    => 'wemeet_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'wemeet_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'wemeet' ),
            'panel'    => 'wemeet_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'wemeet_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'wemeet' ),
            'panel'    => 'wemeet_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'wemeet_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'wemeet' ),
            'panel'    => 'wemeet_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'wemeet_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'wemeet' ),
            'panel'    => 'wemeet_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'wemeet_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'wemeet' ),
            'panel'    => 'wemeet_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'wemeet_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'wemeet' ),
            'panel'    => 'wemeet_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'wemeet_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'wemeet' ),
            'panel'    => 'wemeet_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>