<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'wemeet_preloader', 'wemeet_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'wemeet_header', 'wemeet_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'wemeet_footer', 'wemeet_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'wemeet_wrp_start', 'wemeet_wrp_start_cb', 10 );
	add_action( 'wemeet_wrp_end', 'wemeet_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'wemeet_blog_col_start', 'wemeet_blog_col_start_cb', 10 );
	add_action( 'wemeet_blog_col_end', 'wemeet_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'wemeet_blog_posts_thumb', 'wemeet_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'wemeet_blog_details_wrap_start', 'wemeet_blog_details_wrap_start_cb', 10 );
	add_action( 'wemeet_blog_details_wrap_end', 'wemeet_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'wemeet_blog_posts_title', 'wemeet_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'wemeet_blog_posts_meta', 'wemeet_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'wemeet_blog_posts_excerpt', 'wemeet_blog_posts_excerpt_cb', 10 );
	// add_action( 'wemeet_blog_posts_excerpt', 'wemeet_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'wemeet_blog_posts_info_link', 'wemeet_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'wemeet_blog_posts_content', 'wemeet_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'wemeet_blog_posts_share', 'wemeet_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'wemeet_blog_sidebar', 'wemeet_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'wemeet_blog_single_meta', 'wemeet_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'wemeet_page_content', 'wemeet_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'wemeet_fof', 'wemeet_fof_cb', 10 );

	

?>