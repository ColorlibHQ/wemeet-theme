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

	$wemeet_reservation_title     = !empty( wemeet_opt( 'wemeet_reservation_title' ) ) ? wemeet_opt( 'wemeet_reservation_title' ) : '';
	$wemeet_reservation_sub_title = !empty( wemeet_opt( 'wemeet_reservation_sub_title' ) ) ? wemeet_opt( 'wemeet_reservation_sub_title' ) : '';
	$wemeet_reservation_btn_text  = !empty( wemeet_opt( 'wemeet_reservation_btn_text' ) ) ? wemeet_opt( 'wemeet_reservation_btn_text' ) : '';
	$wemeet_reservation_btn_url	  = !empty( wemeet_opt( 'wemeet_reservation_btn_url' ) ) ? wemeet_opt( 'wemeet_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $wemeet_reservation_title )?></h3>
			<p><?php echo esc_html( $wemeet_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $wemeet_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $wemeet_reservation_btn_text )?></a>
		</div>
	</div>