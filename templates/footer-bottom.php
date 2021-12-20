<?php 		
	// Copyright text
	$url = 'https://colorlib.com/';
	$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'wemeet' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
	$copyRight = !empty( wemeet_opt( 'wemeet_footer_copyright_text' ) ) ? wemeet_opt( 'wemeet_footer_copyright_text' ) : $copyText;
	?>
	<div class="copy-right_text">
		<div class="container">
			<div class="footer_border"></div>
			<div class="row">
				<div class="col-xl-12">
					<p class="copy_right text-center">
						<?php echo wp_kses_post( $copyRight ); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php 
		$wemeet_target_date = date('Y-m-d');
		$event_date_option = wemeet_opt('wemeet_header_event_date') ? wemeet_opt('wemeet_header_event_date') : date( 'Y-m-d', strtotime($wemeet_target_date. '+90 day') );
		?>
		<script>
			var eventTime = document.getElementById('clock');
			console.log('event time', eventTime);
			eventTime.setAttribute('data-event-date', '<?php echo $event_date_option?>');
		</script>
		<?php
    ?>