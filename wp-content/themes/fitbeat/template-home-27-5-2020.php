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
	var modal = getUrlParameter('modal');
	console.log(modal);
	
	if(modal == 'gym-near-me'){
		console.log('near me');
		<?php $page = get_page_by_title( 'Gym Near Me' ); ?>
		jQuery('.show-gym').show();
		jQuery('body').addClass('open-modal open-gym-near-me');
		
	}
	if(modal == 'personal-trainer'){
		console.log('personal-trainer1');
		<?php $page1 = get_page_by_title( 'THE NEW GENERATION OF PERSONAL TRAINING' ); ?>
		jQuery('.show-trainer').show();
		jQuery('body').addClass('open-modal open-gym-near-me');
	}
	
	jQuery('.close-home-popup').on('click', function(){
		jQuery('body').removeClass('open-modal open-gym-near-me');
		jQuery('.hide-div').hide();
	});
	//form parameter
	var btn_href = "https://www.cogsworth.com/book/fitbeat";
	console.log(btn_href);
	jQuery("#your_form").on('submit', function(e){
        e.preventDefault();
		var your_name = jQuery('.your_name').val();
		var your_email = jQuery('.your_email').val();
		var your_phone = jQuery('.your_phone').val();
		var btn_newHref = btn_href + '?answer[name]=' + your_name + '&answer[email]=' + your_email + '&answer[text_1]=' + your_phone;
		window.location = btn_newHref;
    });
});
</script>
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
							<h4>STEP 1 OF 2</h4>
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
							</form>
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
		margin-bottom: 10px;
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