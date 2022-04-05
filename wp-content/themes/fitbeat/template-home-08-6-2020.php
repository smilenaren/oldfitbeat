<?php

/*
Template Name:
*/

get_header();
?>
<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-home', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
<?php
get_footer();
?>
<script>
//get url
var getUrlParameter = function getUrlParameter(sParam) {
	var sPageURL = window.location.search.substring(1),
		sURLVariables = sPageURL.split('&'),
		sParameterName,
		i;

	for (i = 0; i < sURLVariables.length; i++) {
		sParameterName = sURLVariables[i].split('=');

		if (sParameterName[0] === sParam) {
			return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
		}
	}
};
jQuery(window).ready(function(){
	//modal popup code
	var modal = getUrlParameter('modal');
	
	if(modal == 'gym-near-me'){
		<?php $page = get_page_by_title( 'Gym Near Me' ); ?>
		jQuery('.show-gym').show();
		jQuery('body').addClass('open-modal open-gym-near-me');
	}
	if(modal == 'personal-trainer'){
		<?php $page1 = get_page_by_title( 'THE NEW GENERATION OF PERSONAL TRAINING' ); ?>
		jQuery('.show-trainer').show();
		jQuery('body').addClass('open-modal open-gym-near-me');
	}
	if(modal == 'free-session'){
		<?php $page2 = get_page_by_title( 'Free Session Popup' ); ?>
		jQuery('body').addClass('open-modal open-booking');
	}
	jQuery('.close-home-popup').on('click', function(){
		jQuery('body').removeClass('open-modal open-gym-near-me open-booking');
		jQuery('.hide-div').hide();
	});
	if(modal == 'special'){
		<?php $page3 = get_page_by_title( 'Landing Popup' ); ?>
		jQuery('body').addClass('open-modal open-landing');
	}
	jQuery('.close-home-popup').on('click', function(){
		jQuery('body').removeClass('open-modal open-gym-near-me open-booking open-landing');
		jQuery('.hide-div').hide();
	});
	//form parameter
	// var btn_href = "https://www.cogsworth.com/book/fitbeat";
	// jQuery("#your_form").on('submit', function(e){
    //     e.preventDefault();
	// 	var your_name = jQuery('.your_name').val();
	// 	var your_email = jQuery('.your_email').val();
	// 	var your_phone = jQuery('.your_phone').val();
	// 	var btn_newHref = btn_href + '?answer[name]=' + your_name + '&answer[email]=' + your_email + '&answer[text_1]=' + your_phone;
	// 	window.location = btn_newHref;
    // });
	//form parameter
	var btn_href = "https://www.fitbeat.com/book-your-first-workout/";
	document.addEventListener( 'wpcf7mailsent', function( e ) {
	//trackcode
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '2421226824795354');
	fbq('track', 'PageView');
	jQuery('body').append('<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2421226824795354&ev=PageView&noscript=1" /></noscript>');
	
	//cookie create function
	function createCookie(name,value,days) {
		if (days) {
			var date = new Date();
			date.setTime(date.getTime()+(days*24*60*60*1000));
			var expires = "; expires="+date.toGMTString();
		}
		else var expires = "";
		document.cookie = name+"="+value+expires+"; path=/";
	}

	//cookie erase function
	function eraseCookie(name) {
		createCookie(name,"",-1);
	}
	
	var inputs = e.detail.inputs;
	console.log(inputs);
	var your_name = inputs[0].value;
	var your_email = inputs[1].value;
	var your_phone = inputs[2].value;
	var btn_newHref = '?answer[name]=' + your_name + '&answer[email]=' + your_email + '&answer[text_1]=' + your_phone;
	console.log(btn_newHref);
	eraseCookie('iframeCookie');
	createCookie('iframeCookie' ,btn_newHref, 1);
	window.location = btn_href;
	}, false ); 
});
</script>

<!-- start landing popup -->
<div class="landing-popup home-popup new-popup">
	<div class="popup-content home-popup-content">
		<span class="close close-home-popup"></span>
		<section class="section-bookingform bg-black">
			<div class="inner">
				<div class="flex-wrap">
					<div class="col col-content">
						<div class="flex-wrap space-between">
							<div class="col">
								<div class="flex-logo">
									<a href="/" class="custom-logo-link" rel="home"><img width="470" height="178" src="<?php echo site_url();?>/wp-content/uploads/2019/07/fitbeat_logo_header.png" class="custom-logo" alt="Fitbeat"></a>
									<div class="logo-text">Sydney CBD</div>
								</div>
								<h1 class="main-title"><?php echo get_field('main_title', $page3->ID); ?></h1>
							</div>
							<div class="col">
								<div class="offer-img">
									<?php $special_image = get_field('special_image', $page3->ID);?>
									<img src="<?php echo esc_url($special_image['url']); ?>" alt="<?php echo esc_attr($special_image['alt']); ?>" />
								</div>
							</div>
						</div>
						<div class="membership-wrap">
							<div class="flashsale-wrap">
								<div class="flashsale-text">
									<div class="arrow-list">
										<?php echo get_field('sub_description', $page3->ID); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-form">
						<?php 
							$form_title = get_field('form_title', $page3->ID);
						?>
						<div class="bg-white">
						<h4>STEP 1 OF 2</h4>
						<h3><?php echo $form_title; ?></h3>
							<?php echo do_shortcode('[contact-form-7 id="2723"]');?>
							</div>
						</div>
				</div>
			</div>
		</section>
		<section class="featured content--grid animate section-list bg-grey">
			<div class="lists">
				<?php while( have_rows('video_list', $page3->ID) ): the_row(); 

				// vars
				$thumbnail = get_sub_field('image_list', $page3->ID);
				$title = get_sub_field('title_list', $page3->ID);
				$full_video = get_sub_field('full_video', $page3->ID);
				$video = get_sub_field('short_video', $page3->ID);
				$video_size = get_sub_field('video_size_off', $page3->ID);
				if($full_video) {
					$videoclass = " play-video-popup";
				}else {
					$videoclass = "";
				}
				if($video_size) {
					$videoclass_size = " video-size-off";
				}else {
					$videoclass_size = "";
				}

				?>
				<div class="item viewBox">
					<a class="link-holder<?php echo $videoclass; echo $videoclass_size ?> disable-link" href="javascript:;" data-video="<?php echo $full_video; ?>">
						<?php if( $thumbnail ): ?>
						<img  data-video="<?php echo $video; ?>" src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $title; ?>" >
						<?php endif; ?>
						<?php if( $video ): ?>
						<div class="loader"></div>
						<video  muted="" playsinline="" loop="" preload="metadata" src="<?php echo $video; ?>">
						</video>
						<div class="content">
						<?php if( $title ): ?>
						<h3 class="overlay-bg"><?php echo $title; ?><svg width="20px" height="20px" viewBox="0 0 51 74" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.25802e-13 -7.24298e-13L36.6576 26.9682L74 0.0483635L74 23.0967L36.5 50.5484L-2.10321e-12 23.0484L5.25802e-13 -7.24298e-13Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 74)" id="Rectangle-Copy-13" fill="#FF621D" stroke="none" />
									</svg>
									</h3>
					<?php endif; ?>
						</div>
						<?php endif; ?>
						<?php if( $full_video ): ?>
							<span class="close video-close"></span>
							<div class="video-ajax"></div>
							<div class="icon-watch">
								<span>Play</span>
								<svg width="55px" height="55px" viewBox="0 0 46 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="PT-compare" transform="translate(-626.000000, -2392.000000)">
											<g id="Group-32" transform="translate(377.000000, 2112.000000)">
												<g id="Group-8-Copy-6" transform="translate(250.000000, 281.000000)">
													<g id="Group-6" stroke="#ffffff" stroke-width="1.6">
														<ellipse id="Oval" cx="21.8482759" cy="21.3517241" rx="21.8482759" ry="21.3517241"></ellipse>
													</g>
													<polygon id="Rectangle-Copy-13" fill="#ffffff" transform="translate(22.578947, 22.065789) rotate(-90.000000) translate(-22.578947, -22.065789) " points="15.2236842 15.6973684 22.6369112 21.2629122 29.9342105 15.6973684 29.9342105 22.6634034 22.5789474 28.4342105 15.2236842 22.6634034"></polygon>
												</g>
											</g>
										</g>
									</g>
								</svg>
							</div>
						<?php endif; ?>
					</a>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="popup-btn">
				<a class="btn btn--primary btn--large scroll-top scroll-form" href="<?php echo get_field('big_button_url', $page3->ID); ?>"><?php echo get_field('big_button_text', $page3->ID); ?>
					<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
						<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
					</svg>
				</a>
			</div>
		</section>
		<?php
		$plan_title = get_field('membership_plans_title', $page3->ID);
		$show_plan = get_field('show_membership_plans', $page3->ID);
		if( $show_plan ) : ?>
		<section class="popup-membership-plan">
			<div class="membership-wrap padding-top">
				<h2 class="title"><?php echo $plan_title; ?> <svg width="20px" height="20px" viewBox="0 0 51 74" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.25802e-13 -7.24298e-13L36.6576 26.9682L74 0.0483635L74 23.0967L36.5 50.5484L-2.10321e-12 23.0484L5.25802e-13 -7.24298e-13Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 74)" id="Rectangle-Copy-13" fill="#FF621D" stroke="none" />
									</svg></h2>
				<div class="plan-item-list">
					<div class="flex-container">
						<div class="plan-item">
							<div class="plan-item-content">
								<div class="item-title">
									<h3>3 Month Membership</h3>
								</div>
								<div class="price-wrap">
									<div class="price">
										<div class="normal">Normally</div>
										<span class="cutline">$72</span> /week
									</div>
									<div class="price">
										<div class="promo">Special Offer</div>
										<span>$61</span> /week
									</div>
								</div>
								<div class="item-desc">
									<p><strong>Includes</strong> FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
								</div>
								<div class="item-btn">
									<a href="https://app.fitbeat.com/api/payment-router/peak-3-month-membership-weekly?coupon=15percent-flash-sale" class="btn btn--primary" target="_blank">Buy Now 
									<svg width="14px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
									</svg>
									</a>
								</div>
							</div>
						</div>
						<div class="plan-item">
							<div class="plan-item-content hightlight-wrap">
								<div class="highlight bg-white plan-bg">
									Popular
								</div>
								<div class="item-title">
									<h3>6 Month Membership</h3>
								</div>
								<div class="price-wrap">
									<div class="price">
										<div class="normal">Normally</div>
										<span class="cutline">$69</span> /week
									</div>
									<div class="price">
										<div class="promo">Special Offer</div>
										<span>$59</span> /week
									</div>
								</div>
								<div class="item-desc">
									<p><strong>Includes</strong> FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
								</div>
								<div class="item-btn">
									<a href="https://app.fitbeat.com/api/payment-router/peak-6-month-membership-weekly?coupon=15percent-flash-sale" class="btn btn--primary" target="_blank">Buy Now 
										<svg width="14px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
									</svg>
									</a>
								</div>
							</div>
						</div>
						<div class="plan-item">
							<div class="plan-item-content hightlight-wrap">
								<div class="highlight bg-primary">
									Best Value
								</div>
								<div class="item-title">
									<h3>12 Month Membership</h3>
								</div>
								<div class="price-wrap">
									<div class="price">
										<div class="normal">Normally</div>
										<span class="cutline">$65</span> /week
									</div>
									<div class="price">
										<div class="promo">Special Offer</div>
										<span>$55</span> /week
									</div>
								</div>
								<div class="item-desc">
									<p><strong>Includes</strong> FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
								</div>
								<div class="item-btn">
									<a href="https://app.fitbeat.com/api/payment-router/peak-12-month-membership-weekly?coupon=15percent-flash-sale" class="btn btn--primary" target="_blank">Buy Now 
										<svg width="14px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
									</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="btn-wrap">
				<a class="btn btn--primary btn--medium scroll-top scroll-form" href="<?php echo get_field('plans_button_link', $page3->ID); ?>"><?php echo get_field('plans_button_text', $page3->ID); ?>
					<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
						<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
					</svg>
				</a>
			</div>
		</section>
		<?php endif; ?>
		<div class="toggle-div">
		<?php
		$compare_title = get_field('compare_section_title', $page3->ID);
		$show_compare = get_field('show_compare_section', $page3->ID);
		if( $show_compare ) : ?>
			<section class="plan-client-wrap section-client">
				<div class="toggle-content">
				<?php 
					$post = get_post($page->ID); 
					$content = apply_filters('the_content', $post->post_content); 
					echo $content;  
				?>
				</div>
			</section>
		<?php endif; ?>
		<?php
		$testimonial_title = get_field('testimonilal_title', $page3->ID);
		$show_testimonial = get_field('show_testimonial', $page3->ID);
		if( $show_testimonial ) : ?>
			<section class="featured testimonial content--grid animate bg-grey">
				<div class="toggle-title">
					<h2 class="title"><?php echo $testimonial_title; ?> <svg width="20px" height="20px" viewBox="0 0 51 74" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.25802e-13 -7.24298e-13L36.6576 26.9682L74 0.0483635L74 23.0967L36.5 50.5484L-2.10321e-12 23.0484L5.25802e-13 -7.24298e-13Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 74)" id="Rectangle-Copy-13" fill="#FF621D" stroke="none" />
							</svg></h2>
				</div>
				<div class="toggle-content">
					<div class="lists">
						<?php while( have_rows('testimonial_grid_items', get_queried_object_id()) ): the_row(); 

						// vars
						$thumbnail = get_sub_field('testimonial_grid_item_thumbnail');
						$main_title = get_sub_field('testimonial_grid_item_main_title');
						$title = get_sub_field('testimonial_grid_item_title');
						$sub_title = get_sub_field('testimonial_grid_item_subtitle');
						$video = get_sub_field('testimonial_grid_item_video');
						?>
						<div class="item viewBox no-wrap">
							<a class="link-holder no-link play-video" href="javascript:;" data-video="<?php echo $video; ?>">
								<?php if( $thumbnail ): ?>
								<img data-gif="<?php echo $gif_image; ?>" data-video="<?php echo $video; ?>" data-cover="<?php echo $thumbnail; ?>" src="<?php echo $thumbnail['sizes']['grid-image-thumb-l']; ?>" alt="<?php echo $title; ?>" srcset="<?php echo $thumbnail['sizes']['grid-image-thumb-xxl']; ?> 2700w, <?php echo $thumbnail['sizes']['grid-image-thumb-xl']; ?> 1920w, <?php echo $thumbnail['sizes']['grid-image-thumb-l']; ?> 1400w, <?php echo $thumbnail['sizes']['grid-image-thumb-xl']; ?> 1240w, <?php echo $thumbnail['sizes']['grid-image-thumb-xl']; ?> 768w, <?php echo $thumbnail['sizes']['grid-image-thumb-sm']; ?> 400w" sizes="768px">
								<?php endif; ?>
								<?php if( $video ): ?>
									<span class="close video-close"></span>
									<div class="video-loader"></div>
								<?php endif; ?>
								<div class="content">
									<?php if( $main_title ): ?>
									<h2 class="main-title"><?php echo $main_title; ?></h2>
									<?php endif; ?>
									<?php if( $title ): ?>
									<h2 class="title"><span><?php echo $title; ?></span></h2>
									<?php endif; ?>
									<?php if( $sub_title ): ?>
									<p><?php echo $sub_title; ?></p>
									<?php endif; ?>
								</div>
								<?php if( $video ): ?>
										<div class="icon-watch">
											<span>Watch</span>
											<svg width="46px" height="45px" viewBox="0 0 46 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
												<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<g id="PT-compare" transform="translate(-626.000000, -2392.000000)">
														<g id="Group-32" transform="translate(377.000000, 2112.000000)">
															<g id="Group-8-Copy-6" transform="translate(250.000000, 281.000000)">
																<g id="Group-6" stroke="#FF621D" stroke-width="1.6">
																	<ellipse id="Oval" cx="21.8482759" cy="21.3517241" rx="21.8482759" ry="21.3517241"></ellipse>
																</g>
																<polygon id="Rectangle-Copy-13" fill="#FF621D" transform="translate(22.578947, 22.065789) rotate(-90.000000) translate(-22.578947, -22.065789) " points="15.2236842 15.6973684 22.6369112 21.2629122 29.9342105 15.6973684 29.9342105 22.6634034 22.5789474 28.4342105 15.2236842 22.6634034"></polygon>
															</g>
														</g>
													</g>
												</g>
											</svg>
										</div>
										<?php endif; ?>
							</a>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</section>
		<?php endif; ?>

			
		</div>
		<section>
			<div class="popup-footer-text">
				<h3><?php echo get_field('footer_text', $page3->ID); ?></h3>
			</div>
			<div class="popup-btn">
				<a class="btn btn--primary btn--large scroll-top scroll-form" href="<?php echo get_field('big_button_url', $page3->ID); ?>"><?php echo get_field('big_button_text', $page3->ID); ?>
					<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
						<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
					</svg>
				</a>
			</div>
		</section>
	</div>
</div>
<!-- end landing popup -->

<!-- start booking popup -->
<div class="landing-popup home-popup booking-popup">
	<div class="popup-content home-popup-content">
		<span class="close close-home-popup"></span>
		<section class="bg-grey section-bookingform">
			<div class="inner">
				<div class="flex-wrap">
					<div class="col col-content">
						<h1 class="main-title big"><?php echo get_field('main_title', $page2->ID); ?></h1>
					</div>
					<div class="col col-form bg-white">
						<?php echo do_shortcode('[contact-form-7 id="2723"]');?>
					</div>
				</div>
			</div>
		</section>
		<section class="section-list bg-black">
				<div class="inner">
					<div class="flex-row">
						<?php while( have_rows('session_list', $page2->ID) ): the_row(); 

						// vars
						$title_list = get_sub_field('title_list', $page2->ID);
						$image_list = get_sub_field('image_list', $page2->ID);
						$full_width = get_sub_field('full_width', $page2->ID);
						if ( $full_width ) {
							$col_class = " col-full";
						} else {
							$col_class = "";
						}
						
						?>
						<div class="col<?php echo $col_class; ?>">
							<h3><?php echo $title_list; ?>
							<svg width="20px" height="20px" viewBox="0 0 51 74" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.25802e-13 -7.24298e-13L36.6576 26.9682L74 0.0483635L74 23.0967L36.5 50.5484L-2.10321e-12 23.0484L5.25802e-13 -7.24298e-13Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 74)" id="Rectangle-Copy-13" fill="#FF621D" stroke="none" />
							</svg>
							</h3>
							<?php if ( $image_list ) : ?>
							<div class="img-wrap">
								<img src="<?php echo $image_list['url']; ?>">
							</div>
							<?php endif; ?>
						</div>
						<?php endwhile; ?>
					</div>
					<div class="popup-btn">
					<a class="btn btn--primary btn--large scroll-top" href="<?php echo get_field('big_button_url', $page2->ID); ?>"><?php echo get_field('big_button_text', $page2->ID); ?>
					<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
						<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
					</svg>
					</a>
					</div>
				</div>
		</section>
		<section class="section-map">
			<div class="inner">
				<div class="flex-wrap">
					<div class="col  col-map">
						<?php 
							$map_url =  get_field('map_embed_link', $page2->ID);
						if ( $map_url ) : ?>
							<embed src="<?php echo $map_url; ?>">
						<?php endif; ?>
					</div>
					<div class="col col-map-text">
						<div class="logo-div">
							<img  src="<?php echo site_url();?>/wp-content/uploads/2019/07/fitbeat_logo_header.png" class="custom-logo" alt="Fitbeat">
						</div>
						<?php echo get_field('map_content_text', $page2->ID); ?>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<!-- end booking popup -->

<!-- start gym and personal popup -->
<div class="landing-popup home-popup popup-gym-near-me">
	<div class="popup-content home-popup-content">
		<span class="close close-home-popup"></span>
		<section class="page page-membership page-client bg-black">
			<div class="layout__container">
				<div class="inner">
					<div class="flex-wrap">
						<div class="col col-content">
							<h1 class="show-gym hide-div"><?php echo get_field('flash_sale_title', $page->ID); ?></h1>
							<h1 class="show-trainer hide-div"><?php echo get_field('flash_sale_title', $page1->ID); ?></h1>
							<div class="membership-wrap">
								<div class="flashsale-wrap">
									<div class="flashsale-text show-gym hide-div">
										<?php echo get_field('flash_sale_text', $page->ID); ?>									
									</div>
									<div class="flashsale-text show-trainer hide-div">
										<?php echo get_field('flash_sale_text', $page1->ID); ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="col col-form">
						<?php echo do_shortcode('[contact-form-7 id="2723"]');?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="plan-client-wrap section-client">
			<div class="layout__container ">
				<div class="inner">
					<div class="show-gym hide-div">
					<?php 
						$post = get_post($page->ID); 
						$content = apply_filters('the_content', $post->post_content); 
						echo $content;  
					?>
					</div>
					<div class="show-trainer hide-div">
					<?php 
						$post = get_post($page1->ID); 
						$content = apply_filters('the_content', $post->post_content); 
						echo $content;  
					?>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<!-- end gym and personal popup -->

<div class="landing-popup popup-link-wrap">
	<div class="popup-content popup-link-content">
		<span class="close close-link-popup"></span>
		<div class="popup-link-ajax"></div>
	</div>
</div>

<script>
	jQuery(function () {
       jQuery( ".popup-link" ).each(function(index) {
			jQuery(this).on('click',function (event) {
				event.preventDefault();
				console.log('test');
				var popup_url = (jQuery(this).data('link'));
				if (popup_url) {
				jQuery('.popup-link-ajax').html('');
				jQuery('.popup-link-ajax').prepend('<embed src="'+popup_url+'">');
				jQuery("body").addClass("open-modal open-popup-link");
				}
			});
		});
      
		jQuery(".close-link-popup").on("click", function(){
			jQuery('.popup-link-ajax').html('');
			jQuery("body").removeClass("open-modal open-popup-link");
		});

		jQuery("a[href='#top']").click(function() {
			if( jQuery(this).hasClass('scroll-form') ) {
				var _win = jQuery(window).width();
				if( 768 >= _win) {
				jQuery(".landing-popup").animate({ scrollTop: 800 }, "slow");
				} else {
					jQuery(".landing-popup ").animate({ scrollTop: 0 }, "slow");
				}
			} else {
				console.log(2)
				jQuery(".landing-popup ").animate({ scrollTop: 0 }, "slow");
			}
			return false;
		});

		jQuery( ".play-video" ).each(function(index) {
			jQuery(this).click(function (event) {
				event.preventDefault();
				var video_url = (jQuery(this).data('video'));
				if (video_url) {
					if ( jQuery(this).hasClass('play-video-open')) {
						var video = jQuery(this).find('.video-loader video').get(0);
						if (video.paused === false) {
							video.pause();
						} else {
							video.play();
						}
					} else {
						jQuery('.video-loader').html('');
						jQuery(".play-video").removeClass("play-video-open");
						jQuery(this).find('.video-loader').prepend('<video controls  controlsList="nodownload" autoplay><source src="'+video_url+'" type="video/mp4"></video>');
						jQuery(this).addClass("play-video-open");
					}
				jQuery(this).find('video').on('ended',function(){
					jQuery('.video-loader, .video-ajax').html('');
					jQuery(".play-video, .play-video-popup").removeClass("play-video-open");
				});
				}
			});
		});

		jQuery( ".play-video-popup" ).each(function(index) {
			jQuery(this).click(function (event) {
			event.preventDefault();
			var video_url = (jQuery(this).data('video'));
			if (video_url) {
				if ( jQuery(this).hasClass('play-video-open')) {
					var video = jQuery(this).find('.video-ajax video').get(0);
					if (video.paused === false) {
						video.pause();
					} else {
						video.play();
					}
				} else {
					jQuery('.video-ajax').html('');
					jQuery(".play-video-popup").removeClass("play-video-open");
					jQuery(this).find('.video-ajax').prepend('<video controls controlsList="nodownload" autoplay><source src="'+video_url+'" type="video/mp4"></video>');
					jQuery(this).addClass("play-video-open");
				}
				
				jQuery(this).find('video').on('ended',function(){
					jQuery('.video-loader, .video-ajax').html('');
					jQuery(".play-video, .play-video-popup").removeClass("play-video-open");
				});
			}
			});
		});

			
		jQuery(".video-close").on("click", function(e){
			e.stopPropagation();
			jQuery('.video-loader, .video-ajax').html('');
			jQuery(".play-video, .play-video-popup").removeClass("play-video-open");
			jQuery(this).parent().removeClass("resize scale");
		});

		jQuery(".toggle-title").on("click", function(e){
			jQuery(this).next('.toggle-content').slideToggle();
		});
		

		jQuery(window).load(function(){
			var site_url = jQuery(location).attr('href');
			console.log(site_url);
			jQuery('.hidderUrl').val(site_url);
		}); 
	});
</script>
<style>
	.hide-div {
		display:none;
	}
	.open-modal {
		overflow:hidden;
	}
	.open-gym-near-me .popup-gym-near-me {
		display:block;
	}
	.open-popup-link .popup-link-wrap {
		display:block;
	}
	.open-booking .booking-popup {
		display:block;
	}
	.open-landing .new-popup {
		display:block;
	}
	
	.flex-wrap {
		display: flex;
		align-items: flex-end;
	}
	.flex-wrap .col-content {
		width: 70%;
		padding-right: 40px;
	}
	.flex-wrap .col-form {
		width: 30%;
		text-align: center;
		
	}
	.col-form h4{
		color: #ff621d;
		margin-bottom: 0;
	}
	.col-form h3{
		color: #fff;
		margin: 5px 0 10px;
	}
	.col-form form input {
		line-height: 38px;
		height: 40px;
		color: #fff !important;
	}
	.col-form .btn {
		width: 100%;
		margin-bottom: 5px;
		border:none;
	}
	.play-video .close {
		display: none;
	}
	.play-video-open .close {
		display: block;
	}
	.play-video-open .content {
		opacity: 0;
	}
	.play-video-open video {
		opacity: 1 !important;
	}
	a.popup-link:after{
	border:1px solid rgba(151,151,151,1) !important;
	background: rgba(0,0,0,0.6)  !important;
	}
	.home-popup .wpcf7-validation-errors,.wpcf7-response-output {
		display:none !important;
	}
	.home-popup .wpcf7 div.wpcf7-response-output {
		margin: 0;
	}
	@media screen and (max-width: 767px) {
		.home-popup .popup-content {
			top: 220px;
			padding: 0;
		}
		.home-popup .flashsale-wrap {
			background: #ff621d;
			margin-bottom: 20px;
		}
		.flex-wrap {
			flex-direction: column;
		}
		.flex-wrap .col{ 
			width: 100%;
			padding: 0;
		}
	}
</style>