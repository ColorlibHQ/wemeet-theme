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

$headerimg          = get_header_image();
?>

<section class="hero-banner zigzag_bg_2" <?php echo wemeet_inline_bg_img( esc_url( $headerimg ) ); ?>>
    <div class="slider_text">
        <div class="container">
            <div class="position_relv">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="title_text title_text2 ">
                            <h3>
                            <?php
                                if ( is_category() ) {
                                    single_cat_title( __('Category: ', 'wemeet') );

                                } elseif ( is_tag() ) {
                                    single_tag_title( __('Tag Archive for - ', 'wemeet') );

                                } elseif ( is_archive() ) {
                                    echo get_the_archive_title();

                                } elseif ( is_page() ) {
                                    echo get_the_title();

                                } elseif ( is_search() ) {
                                    echo esc_html__( 'Search for: ', 'wemeet' ) . get_search_query();

                                } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
                                    echo  get_the_title();

                                } elseif ( is_home() ) {
                                    echo esc_html__( 'Blog', 'wemeet' );

                                } elseif ( is_404() ) {
                                    echo esc_html__( '404 error', 'wemeet' );

                                }
                            ?>
                            </h3>
                            <a href="#" class="boxed-btn-white">Add to your Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="countDOwn_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_date">
                        <i class="ti-location-pin"></i>
                        <span>City Hall, New York City</span>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_date">
                        <i class="ti-alarm-clock"></i>
                        <span>12-15 Sep 2019</span>
                    </div>
                </div>
                <div class="col-xl-5 col-md-12 col-lg-5">
                    <span id="clock"></span>
                </div>

            </div>
        </div>
    </div>
</section>