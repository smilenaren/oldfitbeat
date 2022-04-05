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
 $page = 'test';
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
	var btn_href = "<?php echo get_site_url(); ?>/book-your-first-workout/";
	document.addEventListener( 'wpcf7mailsent', function( e ) {
	
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
<div class="landing-popup home-popup booking-popup">
	<div class="popup-content home-popup-content">
		<span class="close close-home-popup"></span>
		<section class="bg-grey section-bookingform">
			<div class="inner">
				<div class="flex-wrap">
					<div class="col col-content">
						<h1 class="main-title"><?php echo get_field('main_title', $page2->ID); ?></h1>
					</div>
					<div class="col col-form bg-white">
						<?php echo do_shortcode('[contact-form-7 id="2723"]');?>
						<!-- <h4>STEP 1 OF 2</h4>
						<h3>CLAIM YOUR FREE WORKOUT NOW</h3>
						<form id="your_form" action="https://fitbeat.com/book-your-first-workout">
							<div class="form-field">
								<input type="text" class="your_name" name="your_name" placeholder="Your Name Here..." required>
							</div>
							<div class="form-field">
								<input type="email" class="your_email" name="your_email" placeholder="Your Email Here..." required>
							</div>
							<div class="form-field">
								<input type="text" class="your_phone" name="your_phone" placeholder="Your Phone Here..." required>
							</div>
							<div class="btn-wrap btn-center">
								<button type="submit" class="btn btn--primary btn--medium form_btn">BOOK A FREE WORKOUT
									<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
									</svg>
								</button>
							</div>
						</form> -->
					</div>
				</div>
			</div>
		</section>
		<section class="section-list">
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
							<img  src="/wp-content/uploads/2019/07/fitbeat_logo_header.png" class="custom-logo" alt="Fitbeat">
						</div>
						<?php echo get_field('map_content_text', $page2->ID); ?>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
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
							<!-- <h4>STEP 1 OF 2</h4>
							<h3>CLAIM YOUR FREE WORKOUT NOW</h3>
							<form id="your_form" action="https://fitbeat.com/book-your-first-workout">
								<div class="form-field">
									<input type="text" class="your_name" name="your_name" placeholder="Your Name Here..." required>
								</div>
								<div class="form-field">
									<input type="email" class="your_email" name="your_email" placeholder="Your Email Here..." required>
								</div>
								<div class="form-field">
									<input type="text" class="your_phone" name="your_phone" placeholder="Your Phone Here..." required>
								</div>
								<div class="btn-wrap btn-center">
									<button type="submit" class="btn btn--primary btn--medium form_btn">BOOK A FREE WORKOUT
										<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
											<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
										</svg>
									</button>
								</div>
							</form> -->
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
		jQuery(".landing-popup").animate({ scrollTop: 0 }, "slow");
		return false;
	});

   jQuery(function () {
       jQuery( ".play-video" ).each(function(index) {
        jQuery(this).click(function (event) {
          event.preventDefault();
          var video_url = (jQuery(this).data('video'));
          if (video_url) {
			jQuery('.video-loader').html('');
			jQuery(".play-video").removeClass("play-video-open");
			jQuery(this).find('.video-loader').prepend('<video controls autoplay><source src="'+video_url+'" type="video/mp4"></video>');
			jQuery(this).addClass("play-video-open");
          }
        });
    });
      
   jQuery(".video-close").on("click", function(e){
	e.stopPropagation();
	jQuery('.video-loader').html('');
	 jQuery(".play-video").removeClass("play-video-open");
	 jQuery(this).parent().removeClass("resize scale");
   });
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
	.home-popup, .popup-link-wrap {
		overflow: auto;
	}
	.home-popup:before, .popup-link-wrap:before {
		display:none;
	}
	.home-popup  .popup-content .close, .popup-link-wrap .popup-content .close {
		background-size: 22px 22px;
		right: 5px;
		top: 5px;
	}
	.popup-link-wrap iframe,.popup-link-wrap embed  {
		width: 100%;
		height: 89vh;
	}
	.popup-link-wrap  .popup-content{
		width: 100%;
	}
	.home-popup  .popup-content{
		padding: 0;
		overflow: hidden;
		max-width: 1100px;
		top: 150px;
		display:block;
		margin: 0 auto 150px;
		max-height: inherit;
		box-shadow: 0px 0px 60px 10px rgba(255,255,255,0.6);
		border-radius: 15px;
	}
	.home-popup section {
		padding: 30px 15px;
	}
	.home-popup .bg-black {
		background-color: #000;
		overflow: hidden;
	}
	.home-popup .bg-black h1 {
		color: #fff;
		text-transform: uppercase;
		max-width: 460px;
		line-height: 1.2;
		font-size: 40px;
	}
	.home-popup .flashsale-wrap {
		padding: 15px 25px 25px;
		margin-bottom: 10px;
		background: rgb(255,98,29);
		background: linear-gradient(90deg, rgba(255,98,29,1) 30%, rgba(0,0,0,1) 90%);
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
		}
		.home-popup .flashsale-wrap {
			background: linear-gradient(180deg, rgba(255,98,29,1) 30%, rgba(0,0,0,1) 78%);
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