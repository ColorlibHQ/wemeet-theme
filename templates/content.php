<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Wemeet
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Post Item Start

?>

<article id="<?php the_ID(); ?>" <?php post_class('blog_item'); ?>>
	<?php 
	/**
	 * Blog Post thumbnail
	 * @Hook  wemeet_blog_posts_thumb
	 *
	 * @Hooked wemeet_blog_posts_thumb_cb
	 * 
	 *
	 */
	do_action( 'wemeet_blog_posts_thumb' );

	/**
	 * 
	 * Blog details wrapper start hook function.
	 * column end.
	 *
	 * Hook wemeet_blog_details_wrap_start
	 *
	 * @Hooked wemeet_blog_details_wrap_start_cb
	 *  
	 */
	do_action( 'wemeet_blog_details_wrap_start' );
	
	/**
	 * Blog Post Meta
	 * @Hook  wemeet_blog_posts_meta
	 *
	 * @Hooked wemeet_blog_posts_meta_cb
	 * 
	 *
	 */
	// do_action( 'wemeet_blog_posts_meta' );

	/**
	 * Blog Post title
	 * @Hook  wemeet_blog_posts_title
	 *
	 * @Hooked wemeet_blog_posts_title_cb
	 * 
	 *
	 */
	do_action( 'wemeet_blog_posts_title' );		
	
	/**
	 * Blog Excerpt With read more button
	 * @Hook  wemeet_blog_posts_excerpt
	 *
	 * @Hooked wemeet_blog_posts_excerpt_cb
	 * @Hooked wemeet_blog_read_more_cb
	 * 
	 *
	 */
	do_action( 'wemeet_blog_posts_excerpt' );
	
	/**
	 * Blog posts info links hook function.
	 * @Hook  wemeet_blog_posts_info_link
	 *
	 * @Hooked wemeet_blog_posts_info_link_cb
	 * 
	 *
	 */
	do_action( 'wemeet_blog_posts_info_link' );

	/**
	 * 
	 * Blog details wrapper end hook function.
	 * column end.
	 *
	 * Hook wemeet_blog_details_wrap_end
	 *
	 * @Hooked wemeet_blog_details_wrap_end_cb
	 *  
	 */
	do_action( 'wemeet_blog_details_wrap_end' );
	
	?>
</article>