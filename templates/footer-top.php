<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Wemeet
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
	
	$footer_circle_img_id = get_theme_mod( 'footer_circle_img' );
	$footer_circle_img 	= wp_get_attachment_image_src( $footer_circle_img_id , 'wemeet_footer_ball_250x250' )[0];

	if ( $footer_circle_img ) {
		echo '<div class="circle_ball d-none d-lg-block">';
		?>
		<img src="<?php echo $footer_circle_img?>" alt="footer circle image">
		<?php
		echo '</div>';
	}
	?>
	<div class="footer_top">
		<div class="container">
			<div class="row">
				<?php
					get_template_part( 'templates/footer', 'widgets' );
				?>
			</div>
		</div>
	</div>