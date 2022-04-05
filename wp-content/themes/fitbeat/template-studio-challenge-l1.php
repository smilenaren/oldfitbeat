<?php
/*
Template Name: Studio Challenge l1
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package fitbeat
 */

get_header('challenge');
?>
	<?php
	while ( have_posts() ) :
		the_post();

		//get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
				comments_template();
		endif;

	endwhile; // End of the loop.
	?>
<main class="studio-challenge l1">
	<section class="slider__wrapper">
		<div class="layout-container">
			<div class="flex-container">
				<div class="slider__content">
					<h2>THE WORLD'S FIRST PERSONALISED<br/> GROUP TRAINING GYM.</h2>
					<ul>
						<li><span><i class="fas fa-check"></i></span> <div class="content">Workouts, nutrition & goal tracking</div></li>
						<li><span><i class="fas fa-check"></i></span> <div class="content">All <span>100% personalized</span> to your skill level and fitness goal </span></div></li>
						<li><span><i class="fas fa-check"></i></span> <div class="content">Expert <span>trainers</span> in every class + <span>home workout app</span></div></li>
						<li><span><i class="fas fa-check"></i></span> <div class="content">Industry-leading <span>hygiene</span>with 9sqm of personal space</div></li>
					</ul>
				</div><!--slidercontent-->
				<div class="video__content">
					<a class="link-holder no-link play-video" href="javascript:;" data-video="<?php echo get_template_directory_uri()?>/img/studio-challenge/Fitbeat-Virtualtour.m4v">
						<img class="noheight" src="<?php echo get_template_directory_uri()?>/img/studio-challenge/group-video.jpg" alt="" >
						<span class="close video-close"></span>
						<div class="video-ajax"></div>
						<div class="icon-watch">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
							<g>
								<g>
									<path fill="#fff" d="M437.019,74.98C388.667,26.628,324.38,0,256,0C187.619,0,123.332,26.629,74.98,74.98C26.629,123.332,0,187.62,0,256
										c0,68.381,26.629,132.668,74.98,181.02C123.332,485.371,187.619,512,256,512c68.38,0,132.667-26.629,181.019-74.98
										C485.371,388.667,512,324.38,512,256S485.371,123.333,437.019,74.98z M400.887,268.482L208.086,397.014
										c-2.51,1.674-5.411,2.52-8.321,2.52c-2.427,0-4.859-0.588-7.077-1.775c-4.877-2.609-7.922-7.693-7.922-13.225V127.467
										c0-5.532,3.045-10.615,7.922-13.225c4.876-2.61,10.795-2.325,15.398,0.745L400.887,243.52c4.173,2.782,6.68,7.466,6.68,12.481
										C407.566,261.017,405.06,265.699,400.887,268.482z"/>
								</g>
							</g>
						</svg>
						</div>
					</a>
					</div>
			</div>
		</div>
	</section><!--slider-->
	<section class="content__wrapper scroll-fixed-wrap">
		<div class="layout-container">
			<div class="main__content">
				<div class="fixed-wrap">
				<div class="align-center fixed-item">
					<h5>Step 1 of 2</h5>
					<h3>BOOK A FREE WORKOUT OR A DISCOVERY PHONE CALL</h3>
				</div>
			</div>
					<div class="stepupform-wrap">
						<!-- <?php //echo do_shortcode('[contact-form-7 id="2285" title="Studio Challenge l1 StepUp Form"]');?> -->
							<a class="book-btn" href="<?php echo get_site_url();?>/book-your-first-workout/"><span>
		                    Book a Free Workout</a>
						<p class="align-center"> or </p>
						<div class="click">
							<a class="btn-color" href="<?php echo get_site_url();?>/discovery-call"><span>
		                    SCHEDULE A 15 MIN DISCOVERY PHONE CALL</a>
					</div>
					</div>
			</div>
		</div>
	</section><!--contentwrap-->
	<section class="experience__wrapper scroll-fixed-wrap">
		<div class="layout-container">
		<div class="fixed-wrap">
			<div class="title-wrap align-center fixed-item">
				<h2>CONTROL YOUR GYM EXPERIENCE VIA OUR WORLD CLASS APP</h2>
			</div>
		</div>
			<div class="flex-container">
				<div class="experience__wrap">
					<h3>SKILL LEVEL OPTIONS</h3>
					<div class="experience__block">
						<div class="icon__block">
							<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/Asset_283-2976353.png" alt="">
							<h4 class="show-mobile">Beginner</h4>
						</div>
						<div class="content__block">
							<h4 class="show-desktop">Beginner</h4>
							<p>If you've never trained before or been out of action for a long time. If you've never trained before or been out of action for a long time.</p>
						</div>
					</div><!--experienceblock-->
					<div class="experience__block">
						<div class="icon__block">
							<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/Asset_276-2976373.png" alt="">
							<h4 class="show-mobile">Intermediate</h4>
						</div>
						<div class="content__block">
							<h4 class="show-desktop">Intermediate</h4>
							<p>If you've been in and out of gym over the last few months.</p>
						</div>
					</div><!--experienceblock-->
					<div class="experience__block">
						<div class="icon__block">
							<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/Asset_280-2976388.png" alt="">
							<h4 class="show-mobile">Experienced</h4>
						</div>
						<div class="content__block">
							<h4 class="show-desktop">Experienced</h4>
							<p>If you've been training for a while and you back your strength and fitness.</p>
						</div>
					</div><!--experienceblock-->
				</div><!--experience-->
				<div class="workoutapp__wrap align-center animation-top">
					<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/trans-2977362.png" alt="">
				</div>
				<div class="experience__wrap">
					<h3>FITNESS GOAL OPTIONS</h3>
					<div class="experience__block">
						<div class="icon__block">
							<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/Asset_264-2976494.png" alt="">
							<h4 class="show-mobile">Muscle & strength</h4>
						</div>
						<div class="content__block">
							<h4 class="show-desktop">Muscle & strength</h4>
							<p>Select this goal if you want to focus on getting bigger & more muscular.</p>
						</div>
					</div><!--experienceblock-->
					<div class="experience__block">
						<div class="icon__block">
							<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/Asset_303-2976512.png" alt="">
							<h4 class="show-mobile">Lean & fit</h4>
						</div>
						<div class="content__block">
							<h4 class="show-desktop">Lean & fit</h4>
							<p>Select this goal if you want to focus on getting leaner and fitter.</p>
						</div>
					</div><!--experienceblock-->
					<div class="experience__block">
						<div class="icon__block">
							<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/FB-icon-strong-fit-5-2976789.png" alt="">
							<h4 class="show-mobile">All-rounder</h4>
						</div>
						<div class="content__block">
							<h4 class="show-desktop">All-rounder</h4>
							<p>Select this goal if you want a balance of everything (ie leaner, stronger & fitter).</p>
						</div>
					</div><!--experienceblock-->
				</div><!--experience-->
			</div>
		</div>
	</section><!--experience-->
	<section class="workout__wrapper">
		<div class="workout__block">
			<div class="layout-container">
				<div class="flex-container">
					<div class="workout__wrap">
						<div class="image__block">
							<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/workout-img1.jpg">
						</div>
						<div class="content__block">
							<h3>Personalised Workouts</h3>
							<div class="image_wrap"><img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/icon-wo-b500px-2997833.png" alt=""></div>
							<p>It’s group training, except we customise your workouts to meet your skill level and fitness goal so that you get better, faster results. Our video instructions and experts trainers guide you every step of the way as you train through the circuit. Stay committed with our home workout app on days when you’re not in the city.</p>
						</div>
					</div><!--workout-->
					<div class="workout__wrap">
						<div class="image__block">
							<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/workout-img2.jpg">
						</div>
						<div class="content__block">
							<h3>Personalised Nutrition</h3>
							<div class="image_wrap"><img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/icon-nutrition-b500px_1-2998044.png" alt=""></div>
							<p>Receive delicious daily meal plans customised to your fitness goal. Use your Fitbeat app for easy cooking instructions and smart shopping lists. Alternatively, you can order ready-made meals, all personalised to your fitness goal, and delivered right to your door.</p>
						</div>
					</div><!--workout-->
					<div class="workout__wrap">
						<div class="image__block">
							<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/workout-img3.jpg">
						</div>
						<div class="content__block">
							<h3>Personalised Tracking</h3>
							<div class="image_wrap"><img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/Asset_2963x-2997904.png" alt=""></div>
							<p>Track your progress to ensure that you achieve your fitness goal. Receive a monthly body composition scan, and wear your heart rate monitor during workouts. All results upload instantly to your Fitbeat app.</p>
						</div>
					</div><!--workout-->
				</div>
			</div>
		</div>
	</section><!--workout-->
	<section class="info__wrapper">
		<div class="layout-container">
			<div class="flex-container">
			<div class="info__wrap">
				<div class="info__block">
					<div class="icon__block">
						<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/icon-shield-b500px-2996128_orange-3013146.png" alt="">
					</div>
					<div class="content__block">
						<p>Train confidently with 9sqm of personal space throughout the circuit, compulsory training gloves and many more hygiene controls!</p>
					</div>
				</div>
			</div><!--info-->
			<div class="info__wrap">
				<div class="info__block">
					<div class="icon__block">
						<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/icon-app-b500px-2996180_orange-3013159.png" alt="">
					</div>
					<div class="content__block">
						<p>For days when you are not in the city, stay committed with our Home Workout App and receive home workouts, all personalised to your fitness goal.</p>
					</div>
				</div>
			</div><!--info-->
			</div>
		</div>
	</section><!--info-->
	<section class="testimonial__wrapper">
		<div class="layout-container scroll-fixed-wrap">
			<div class="fixed-wrap">
				<div class="fixed-item">
					<div class="title-wrap">
						<h4>TESTIMONIALS</h4>
						<h3>What Our Members Have to Say</h3>
					</div>
				</div>
			</div>
			<div class="flex-container">
					<div class="testimonial__block">
						<div class="image__block">
							<div class="video__content">
					<a class="link-holder no-link play-video" href="javascript:;" data-video="<?php echo get_site_url()?>/wp-content/uploads/2020/06/FITBEAT-Testimonial-Yianni.m4v">
						<img class="noheight" src="<?php echo bloginfo('template_url');?>/img/simvoly/video-yanni.jpg" alt="Yianni">
						<span class="close video-close"></span>
						<div class="video-ajax"></div>
						<div class="icon-watch">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
							<g>
								<g>
									<path fill="#fff" d="M437.019,74.98C388.667,26.628,324.38,0,256,0C187.619,0,123.332,26.629,74.98,74.98C26.629,123.332,0,187.62,0,256
										c0,68.381,26.629,132.668,74.98,181.02C123.332,485.371,187.619,512,256,512c68.38,0,132.667-26.629,181.019-74.98
										C485.371,388.667,512,324.38,512,256S485.371,123.333,437.019,74.98z M400.887,268.482L208.086,397.014
										c-2.51,1.674-5.411,2.52-8.321,2.52c-2.427,0-4.859-0.588-7.077-1.775c-4.877-2.609-7.922-7.693-7.922-13.225V127.467
										c0-5.532,3.045-10.615,7.922-13.225c4.876-2.61,10.795-2.325,15.398,0.745L400.887,243.52c4.173,2.782,6.68,7.466,6.68,12.481
										C407.566,261.017,405.06,265.699,400.887,268.482z"></path>
								</g>
							</g>
						</svg>
						</div>
					</a>
					</div>
						</div>
						<div class="content__block">
							<h5>Want to gain muscle and strength?</h5>
							<ul class="details">
								<li>Yianni</li>
								<li>25 yrs old</li>
								<li>Goal: Muscle &amp; Strength</li>
							</ul>
						</div>
					</div><!--testimonial-->
					<div class="testimonial__block">
						<div class="image__block">
							<div class="video__content">
					<a class="link-holder no-link play-video" href="javascript:;" data-video="<?php echo get_site_url()?>/wp-content/uploads/2020/06/FITBEAT-Testimonial-Mel.m4v">
						<img class="noheight" src="<?php echo bloginfo('template_url');?>/img/simvoly/video-mel.jpg" alt="Mel">
						<span class="close video-close"></span>
						<div class="video-ajax"></div>
						<div class="icon-watch">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
							<g>
								<g>
									<path fill="#fff" d="M437.019,74.98C388.667,26.628,324.38,0,256,0C187.619,0,123.332,26.629,74.98,74.98C26.629,123.332,0,187.62,0,256
										c0,68.381,26.629,132.668,74.98,181.02C123.332,485.371,187.619,512,256,512c68.38,0,132.667-26.629,181.019-74.98
										C485.371,388.667,512,324.38,512,256S485.371,123.333,437.019,74.98z M400.887,268.482L208.086,397.014
										c-2.51,1.674-5.411,2.52-8.321,2.52c-2.427,0-4.859-0.588-7.077-1.775c-4.877-2.609-7.922-7.693-7.922-13.225V127.467
										c0-5.532,3.045-10.615,7.922-13.225c4.876-2.61,10.795-2.325,15.398,0.745L400.887,243.52c4.173,2.782,6.68,7.466,6.68,12.481
										C407.566,261.017,405.06,265.699,400.887,268.482z"></path>
								</g>
							</g>
						</svg>
						</div>
					</a>
					</div>
						</div>
						<div class="content__block">
							<h5>Does the gym intimidate you?</h5>
							<ul class="details">
								<li>Mel</li>
								<li>30 yrs old</li>
								<li>Goal: All rounder</li>
							</ul>
						</div>
					</div><!--testimonial-->
					<div class="testimonial__block">
						<div class="image__block">
							<div class="video__content">
					<a class="link-holder no-link play-video" href="javascript:;" data-video="<?php echo get_site_url()?>/wp-content/uploads/2020/06/FITBEAT-Testimonial-Rahul.m4v">
						<img class="noheight" src="<?php echo bloginfo('template_url');?>/img/simvoly/video-rahul.jpg" alt="Rahul">
						<span class="close video-close"></span>
						<div class="video-ajax"></div>
						<div class="icon-watch">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
							<g>
								<g>
									<path fill="#fff" d="M437.019,74.98C388.667,26.628,324.38,0,256,0C187.619,0,123.332,26.629,74.98,74.98C26.629,123.332,0,187.62,0,256
										c0,68.381,26.629,132.668,74.98,181.02C123.332,485.371,187.619,512,256,512c68.38,0,132.667-26.629,181.019-74.98
										C485.371,388.667,512,324.38,512,256S485.371,123.333,437.019,74.98z M400.887,268.482L208.086,397.014
										c-2.51,1.674-5.411,2.52-8.321,2.52c-2.427,0-4.859-0.588-7.077-1.775c-4.877-2.609-7.922-7.693-7.922-13.225V127.467
										c0-5.532,3.045-10.615,7.922-13.225c4.876-2.61,10.795-2.325,15.398,0.745L400.887,243.52c4.173,2.782,6.68,7.466,6.68,12.481
										C407.566,261.017,405.06,265.699,400.887,268.482z"></path>
								</g>
							</g>
						</svg>
						</div>
					</a>
					</div>
						</div>
						<div class="content__block">
							<h5>Want to gain muscle and gain muscle tone?</h5>
							<ul class="details">
								<li>Rahul</li>
								<li>34 yrs old</li>
								<li>Goal: All rounder</li>
							</ul>
						</div>
					</div><!--testimonial-->
					<div class="testimonial__block">
						<div class="image__block">
							<div class="video__content">
					<a class="link-holder no-link play-video" href="javascript:;" data-video="<?php echo get_site_url()?>/wp-content/uploads/2020/06/FITBEAT-Testimonial-Tes.m4v">
						<img class="noheight" src="<?php echo bloginfo('template_url');?>/img/simvoly/video-tess.jpg" alt="Tess">
						<span class="close video-close"></span>
						<div class="video-ajax"></div>
						<div class="icon-watch">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
							<g>
								<g>
									<path fill="#fff" d="M437.019,74.98C388.667,26.628,324.38,0,256,0C187.619,0,123.332,26.629,74.98,74.98C26.629,123.332,0,187.62,0,256
										c0,68.381,26.629,132.668,74.98,181.02C123.332,485.371,187.619,512,256,512c68.38,0,132.667-26.629,181.019-74.98
										C485.371,388.667,512,324.38,512,256S485.371,123.333,437.019,74.98z M400.887,268.482L208.086,397.014
										c-2.51,1.674-5.411,2.52-8.321,2.52c-2.427,0-4.859-0.588-7.077-1.775c-4.877-2.609-7.922-7.693-7.922-13.225V127.467
										c0-5.532,3.045-10.615,7.922-13.225c4.876-2.61,10.795-2.325,15.398,0.745L400.887,243.52c4.173,2.782,6.68,7.466,6.68,12.481
										C407.566,261.017,405.06,265.699,400.887,268.482z"></path>
								</g>
							</g>
						</svg>
						</div>
					</a>
					</div>
						</div>
						<div class="content__block">
							<h5>Want to get lean and fit?</h5>
							<ul class="details">
								<li>Tess</li>
								<li>43 yrs old</li>
								<li>Goal: Lean &amp; Fit</li>
							</ul>
						</div>
					</div><!--testimonial-->
					<div class="testimonial__block">
						<div class="image__block">
							<div class="video__content">
					<a class="link-holder no-link play-video" href="javascript:;" data-video="<?php echo get_site_url()?>/wp-content/uploads/2020/06/FITBEAT-Testimonial-STEVE.m4v">
						<img class="noheight" src="<?php echo bloginfo('template_url');?>/img/simvoly/video-steve.jpg" alt="Rahul">
						<span class="close video-close"></span>
						<div class="video-ajax"></div>
						<div class="icon-watch">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
							<g>
								<g>
									<path fill="#fff" d="M437.019,74.98C388.667,26.628,324.38,0,256,0C187.619,0,123.332,26.629,74.98,74.98C26.629,123.332,0,187.62,0,256
										c0,68.381,26.629,132.668,74.98,181.02C123.332,485.371,187.619,512,256,512c68.38,0,132.667-26.629,181.019-74.98
										C485.371,388.667,512,324.38,512,256S485.371,123.333,437.019,74.98z M400.887,268.482L208.086,397.014
										c-2.51,1.674-5.411,2.52-8.321,2.52c-2.427,0-4.859-0.588-7.077-1.775c-4.877-2.609-7.922-7.693-7.922-13.225V127.467
										c0-5.532,3.045-10.615,7.922-13.225c4.876-2.61,10.795-2.325,15.398,0.745L400.887,243.52c4.173,2.782,6.68,7.466,6.68,12.481
										C407.566,261.017,405.06,265.699,400.887,268.482z"></path>
								</g>
							</g>
						</svg>
						</div>
					</a>
					</div>
						</div>
						<div class="content__block">
							<h5>It's Never too late to start.</h5>
							<ul class="details">
								<li>Steve</li>
								<li>59 yrs old</li>
								<li>Goal: Lean &amp; Fit</li>
							</ul>
						</div>
					</div><!--testimonial-->
				</div>
		</div>
	</section><!--testimonial-->
	<section class="bodychallenge__wrapper align-center">
		<div class="layout-container">
				<h3>IT'S TIME TO RECLAIM YOUR BODY</h3>
				<h2>NO MORE EXCUSES! JOIN OUR COMMUNITY TODAY.</h2>
				<a class="btn-color" href="<?php echo get_site_url();?>/book-your-first-workout"><span>Book a free workout</span> <i class="fas fa-angle-right"></i></a>
				<p>PLACES ARE LIMITED</p>
		</div>
	</section><!--bodychallenge-->
	<section class="btmlayout__wrapper">
		<div class="layout-container">
			<div class="gallery__wrap">
				<div class="flex-container">
					<div class="gallery__block">
						<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/PHOTO-2020-02-07-12-58-14-3151603.jpg" alt="">
					</div><!--gallery-->
					<div class="gallery__block">
						<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/IMG_9056-3151610.jpg" alt="">
					</div><!--gallery-->
					<div class="gallery__block">
						<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/FB_HIGH_RES-9326-3116487.jpg" alt="">
					</div><!--gallery-->
					<div class="gallery__block">
						<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/IMG_9109-3151604.jpg" alt="">
					</div><!--gallery-->
					<div class="gallery__block">
						<img src="<?php echo get_template_directory_uri()?>/img/studio-challenge/EMB_6652-29-3151614.jpg" alt="">
					</div><!--gallery-->
				</div>
			</div><!--gallery-->
			<div class="map__wrapper">
				<iframe width="100%" height="450" frameborder="0" style="border: 0;" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyALa4vLe5mKoHC8vYTSK2oJGUBtnj_cyMU&amp;zoom=14&amp;maptype=roadmap&amp;q=Fitbeat%20118%20Sussex%20St%2C%20Sydney%2C%20NSW"></iframe>
			</div>
		</div>
	</section>
</main><!--main-->
<footer class="show-mobile">
	<div class="call-div">
		<p>
			<i class="icon-telephone orange"></i>
			<a href="tel:(02) 9160 7692">(02) 9160 7692</a>
		</p>
		<p>
			<i class="icon-map orange"></i>
			<span>118 SUSSEX ST, SYDNEY, CBD</span>
		</p>
	</div>
	<p>Copyright © 2020 Fitbeat. All rights reserved.</p>
</footer>

<script type="text/javascript">
	// fixed scroll div js
	jQuery( function($) {
		$(document).ready(function () {
			if( $(window).width() < 768 ) {
				$('.scroll-fixed-wrap').each(function () {
					var _this = $(this);
					var fixed_length = _this.find('.fixed-item').length;
					var fixed_height = _this.find('.fixed-item').innerHeight();
					if( fixed_length > 0 ) {
						_this.addClass('fixed-section');
						_this.find('.fixed-wrap').css('padding-top', fixed_height);
					}
				});
				$(document).on("scroll", onScroll);
			}
		});

		function onScroll(event) {
			var scrollPos = $(document).scrollTop();
			$('.scroll-fixed-wrap').each(function () {
				var currLink = $(this);
				var refElement = $(this);
				if (refElement.position().top - 100 <= scrollPos && refElement.position().top + refElement.innerHeight() - $(window).height()/2 > scrollPos) {
					currLink.addClass("active");
				}
				else {
					currLink.removeClass("active");
				}
			});
		}
	});

	//animation clock js
	jQuery(document).ready(function() {
		jQuery('.clock-1').FlipClock(86280, {
			clockFace: 'HourlyCounter',
			countdown: true
		});
		jQuery('.clock-2').FlipClock(86280, {
			clockFace: 'HourlyCounter',
			countdown: true
		});
	});

	//scroll js
	function scroll_animation() {
		if (jQuery('.animation-top').length > jQuery('.animation').length ) {
			jQuery('.animation-top').each(function(index){
			   if(!jQuery(this).hasClass('animation')){
				var targetPosition_top = jQuery(this).offset().top;
				var winScrollposition = jQuery(window).scrollTop();
				var winHt = jQuery(window).height();
				if(targetPosition_top - winHt < winScrollposition){
				  jQuery(this).addClass('animation');
				}
			   }
			});
		  }
	   }
	jQuery(window).scroll(function() {
		scroll_animation();
	});

	//video js
	jQuery( ".play-video" ).each(function(index) {
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

			jQuery(this).find('video').on('ended',function() {
				jQuery('.video-loader, .video-ajax').html('');
				jQuery(".play-video").removeClass("play-video-open");
			});
		}
		});
	});

	jQuery(".video-close").on("click", function(e) {
		e.stopPropagation();
		jQuery('.video-loader, .video-ajax').html('');
		jQuery(".play-video").removeClass("play-video-open");
	});
</script>