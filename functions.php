<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'WEMEET_DIR_URI' ) ) {
	define( 'WEMEET_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'WEMEET_DIR_ASSETS_URI' ) ) {
	define( 'WEMEET_DIR_ASSETS_URI', WEMEET_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'WEMEET_DIR_CSS_URI' ) ) {
	define( 'WEMEET_DIR_CSS_URI', WEMEET_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'WEMEET_DIR_JS_URI' ) ) {
	define( 'WEMEET_DIR_JS_URI', WEMEET_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'WEMEET_DIR_IMGS_URI' ) ) {
	define( 'WEMEET_DIR_IMGS_URI', WEMEET_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'WEMEET_DIR_ICON_IMG_URI' ) ) {
	define( 'WEMEET_DIR_ICON_IMG_URI', WEMEET_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'WEMEET_DIR_PATH' ) ) {
	define( 'WEMEET_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'WEMEET_DIR_PATH_INC' ) ) {
	define( 'WEMEET_DIR_PATH_INC', WEMEET_DIR_PATH . 'inc/' );
}

//Wemeet Libraries Folder Directory
if ( ! defined( 'WEMEET_DIR_PATH_LIBS' ) ) {
	define( 'WEMEET_DIR_PATH_LIBS', WEMEET_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'WEMEET_DIR_PATH_CLASSES' ) ) {
	define( 'WEMEET_DIR_PATH_CLASSES', WEMEET_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'WEMEET_DIR_PATH_HOOKS' ) ) {
	define( 'WEMEET_DIR_PATH_HOOKS', WEMEET_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function wemeet_admin_script(){
    wp_enqueue_style( 'wemeet-admin', get_template_directory_uri().'/assets/css/wemeet-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'wemeet_admin', get_template_directory_uri().'/assets/js/wemeet-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'wemeet_admin_script' );



/**
 * Include File
 *
 */
require_once( WEMEET_DIR_PATH_INC . 'wemeet-breadcrumbs.php' );
require_once( WEMEET_DIR_PATH_INC . 'wemeet-widgets-reg.php' );
require_once( WEMEET_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( WEMEET_DIR_PATH_INC . 'post-like.php' );
require_once( WEMEET_DIR_PATH_INC . 'wemeet-functions.php' );
require_once( WEMEET_DIR_PATH_INC . 'wemeet-commoncss.php' );
require_once( WEMEET_DIR_PATH_INC . 'support-functions.php' );
require_once( WEMEET_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( WEMEET_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( WEMEET_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( WEMEET_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( WEMEET_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( WEMEET_DIR_PATH_HOOKS . 'hooks.php' );
require_once( WEMEET_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( WEMEET_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( WEMEET_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Wemeet object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Wemeet = new Wemeet();