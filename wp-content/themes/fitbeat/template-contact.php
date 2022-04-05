<?php

/*
Template Name: Contact Us
*/

get_header();
?>
<section class="page page-contact">
	<div class="layout__container">
		<div class="inner">
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						fitbeat_posted_on();
						fitbeat_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
				<?php if( get_field('page_sub_title') ): ?>
					<h2><?php the_field('page_sub_title'); ?></h2>
				<?php endif; ?>
				<hr>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fitbeat' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fitbeat' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->
			<?php if( get_field('block_video') ): ?>
			<div class="block__video">
				<div class="btn__watch block__video-play">
					<a class="circle--holder" href="#">
						<div class="circle">
							<svg width="39px" height="35px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" id="Rectangle-Copy-13" fill="#1A1B1B" stroke="none"></path>
							</svg>
						</div>
					</a>
				</div>
				<video controls>
					<source src="<?php the_field('block_video'); ?>" type="video/mp4">
				</video>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="layout__container">
		<div class="inner">
			<div class="contact-content">
				<div class="flex-container">
					<div class="contact-form block">
						<?php echo do_shortcode ('[contact-form-7 id="6" title="Contact Us"]') ?>
					</div>
					<?php if( get_field('map_content') ): ?>
					<div class="location block">
						<div class="google-map">
							<div class="g-map">
								<div class="google-map" style="position:relative;" id="cd-google-map">
									<div style="width: 100%">
										<?php the_field('map_content'); ?>
									</div><br />
									<!-- <div id="map" style="width:100%; height: 350px;"></div> -->
								</div>
							</div>
						</div>
						<?php if( get_field('map_text') ): ?>
						<div class="address">
							<!-- <h3>Sydney Gym</h3> -->
							<span class="location"><?php the_field('map_text'); ?></span>
							<?php if(get_field('call' , 'option')) { ?>
								<div class="call-div">
									<p><i class="icon-telephone"></i> <a href="tel:<?php echo get_field('call' , 'option') ?>"><?php echo get_field('call' , 'option') ?></a></p>
								</div>
							<?php };?>
						</div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="layout__container">
		<div class="inner">
			<hr>
		</div>
	</div>
</section>
 <script>
    function initMap() {
        // Create a new StyledMapType object, passing it an array of styles,
        // and the name to be displayed on the map type control.

        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat:<?php the_field('latitude', 'option'); ?>,lng:<?php the_field('longitute', 'option'); ?>},
          zoom: 15,
          mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain']
          }
        });

        //Add marker
	    var marker = new google.maps.Marker({
	      position: {lat:<?php the_field('latitude', 'option'); ?>,lng:<?php the_field('longitute', 'option'); ?>},
	      map: map,
	      animation: google.maps.Animation.BOUNCE,
	      icon: 'https://stage.gyrovi.com/fitbeat/wp-content/uploads/2019/06/map-pointer.png'
	    });

	    var infoWindow = new google.maps.InfoWindow({
	      content:'<h2>Sydney GYM</h2><p>120 Sussex St, Sydney NSW 2000, Australia</p>'
	    });

	    marker.addListener('click', function(){
	      infoWindow.open(map, marker);
	    });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIOizzoVaezKOSqC6H5eyTtoJXQPr07-E&callback=initMap">
    </script>
<?php
get_footer();
?>
<style>
	.contact-content .flex-container {
    justify-content: center;
}
</style>