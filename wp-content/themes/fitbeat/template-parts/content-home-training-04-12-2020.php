<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fitbeat
 */
?>
<section id="mainVideoBanner" class="video__banner">
	<div class="full-video-popup">
		<div class="frame">
			<div class="video__close"></div>
			<video controls id="bannerVideo">
				<source src="<?php echo get_template_directory_uri(); ?>/img/blank.mp4" type="video/mp4">
			</video>
		</div>
	</div>
	<div class="item">
		<div class="promo__video">
			<video class="mobile-hide" poster="<?php echo get_template_directory_uri(); ?>/img/man-workout-lunge.png" class="promo__video-desktop" muted="" playsinline="" loop="" autoplay="" src="<?php echo get_template_directory_uri(); ?>/img/home-training/desktop_prev_new.m4v">
			</video>
			<video poster="<?php echo get_template_directory_uri(); ?>/img/video-poster-mobile.png" class="promo__video-mob mobile-show desktop-hide" muted="" playsinline="" autoplay="" loop="" preload="metadata" src="<?php echo get_template_directory_uri(); ?>/img/home-training/mobile_prev_new.m4v">
			</video>
		</div>
		<div class="content">
			<div class="inner bg-overlay">
				<div class="mobile-bg-overlay">
					<h1 class="main__title">australia's home fitness revolution</h1>
				</div>
				<div class="button-holder">
					<div class="flex-container">
						<a id="showVideoPopup" class="btn btn--primary btn--medium btn-white" href="<?php echo get_template_directory_uri(); ?>/img/home-training/desktop_full_new.m4v">Watch Video
							<svg width="22px" height="20px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>
						</a>
						<a class="btn btn--primary btn--medium" data-scroll-to="plans" href="javascript:;">free trial
							<svg width="22px" height="20px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>
						</a>

					</div>
				</div>
			</div>
		</div>
		<div class="overlay"></div>
	</div>
</section>
<section class="section hero-block bg-overlay">
	<div class="layout__container">
		<div class="hero-content align-center">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/fitbeat-star.png" alt="Fitbeat">
			</div>
			<h2 class="section-title">About Fitbeat</h2>
			<p>Gym smart with Fitbeat, Australia's Home Fitness Revolution. It all starts with your long term fitness goal. Then our patented systems kick in and personalise your entire journey, from workouts to nutrition to goal tracking.</p>
		</div>
		<div class="logos">
			<div class="logo-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logos/google-play.png">
			</div>
			<div class="logo-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logos/apple-store.png">
			</div>
			<div class="logo-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logos/spotify.png">
			</div>
			<div class="logo-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logos/apple-music.png">
			</div>
			<div class="logo-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logos/youtube-music.png">
			</div>
			<div class="logo-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logos/chromecast.png">
			</div>
			<div class="logo-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logos/apple-tv.png">
			</div>
		</div>
	</div>
</section>
<section class=" section getting-started bg-overlay scroll-fixed-wrap">
	<div class="layout__container">
		<div class="fixed-wrap">
			<div class="fixed-item">
				<h2 class="section-title align-center">Getting Started</h2>
			</div>
		</div>
		<div class="grid-block">
			<div class="flex-container">
				<div class="item">
					<div class="thumb mobile-hide">
						<img src="<?php echo get_template_directory_uri(); ?>/img/fitness-goal.jpg" alt="Virtual Health Assessment with your Fitbeat trainer">
					</div>
						<div class="step"><span>Step 1</span>
							<svg width="14px" height="19px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>
						</div>
						<div class="text">
						<p>Select your<strong> Fitness Goal</strong></p>
						</div>
						<div class="image-gallery desktop-hide">
							<div class="custom-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home-training/step1-mob.png" alt="Workouts">
							</div>
						</div>
					<div class="border-seprator-holder desktop-hide"><div class="border-seprator"></div></div>
				</div>
				<div class="item">
					<div class="thumb mobile-hide">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-training/fitness-skill1.png" alt="Virtual Health Assessment with your Fitbeat trainer">
					</div>
						<div class="step"><span>Step 2</span>
							<svg width="14px" height="19px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>
						</div>
						<div class="text">
							<p>Set your <strong>Skill Level</strong></p>
						</div>
						<div class="image-gallery desktop-hide">
							<div class="custom-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home-training/step2-mob.png" alt="Workouts">
							</div>
						</div>
					<div class="border-seprator-holder desktop-hide"><div class="border-seprator"></div></div>
				</div>
				<div class="item">
					<div class="thumb mobile-hide">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-training/fitness-nutrition1.png" alt="Virtual Health Assessment with your Fitbeat trainer">
					</div>
						<div class="step"><span>Step 3</span>
							<svg width="14px" height="19px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>
						</div>
						<div class="text">
							<p>Set your <strong>Dietary Preference</strong></p>
						</div>
					<div class="image-gallery desktop-hide">
						<div class="custom-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home-training/step3-mob.png" alt="Workouts">
						</div>
					</div>
					<div class="border-seprator-holder desktop-hide"><div class="border-seprator"></div></div>
				</div>
				<div class="item">
					<div class="thumb mobile-hide">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-training/fitness-heartrate.png" alt="Virtual Health Assessment with your Fitbeat trainer">
					</div>
						<div class="step"><span>Step 4</span>
							<svg width="14px" height="19px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>
						</div>
						<div class="text">
							<p>Setup your <strong>Heart Rate Monitor</strong></p>
						</div>
						<div class="image-gallery desktop-hide">
							<div class="custom-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home-training/step4-mob.png" alt="Workouts">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<section class="section personalise bg-overlay scroll-fixed-wrap" id="workouts">
	<div class="layout__container">
		<div class="fixed-wrap">
			<div class="fixed-item"><h2 class="section-title">then we personalise your journey in 3 ways...</h2></div>
		</div>
		<div class="grid-block">
			<div class="item">
				<div class="flex-container">
					<div class="grid-half grid-content">
						<h3>1. Workouts</h3>
						<ul class="repeatable-list">
							<li><svg width="16px" height="21px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg> Personalised workouts for your fitness goal & skill level. No equipment required</li>
							<li><svg width="16px" height="21px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg> Instruction and motivation by our expert trainers</li>
							<li id="nutrition"><svg width="16px" height="21px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg> Cast to your smart TV and sync with your music device</li>
						</ul>
					</div>
					<div class="grid-half">
						<div class="image-gallery mobile-hide">
							<div class="flex-container">
								<div class="img-item">
									<div class="inner">
										<img src="<?php echo get_template_directory_uri(); ?>/img/fitbeat-meriton-aug20.jpg" alt="Workouts">
									</div>
								</div>
								<div class="img-item">
									<div class="inner">
										<img src="<?php echo get_template_directory_uri(); ?>/img/bitmap-copy.jpg" alt="Workouts">
									</div>
								</div>
							</div>
						</div>
						<div class="image-gallery desktop-hide">
							<div class="custom-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home-training/nur1.png" alt="Workouts">
							</div>
						</div>
						<div class="border-seprator-holder desktop-hide"><div class="border-seprator"></div></div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="flex-container">
					<div class="grid-half grid-content">
						<h3>2. Nutrition</h3>
						<ul class="repeatable-list">
							<li><svg width="16px" height="21px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg> Receive delicious meal plans, all personalised to your fitness goal</li>
							<li><svg width="16px" height="21px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg> Use our recipes and shopping lists to cook your own meals</li>
							<li id="tracking"><svg width="16px" height="21px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg> Or purchase ready-made meals delivered to your door by My Muscle Chef, all customised for your fitness goal (and receive an exclusive 10% discount with your Fitbeat membership)</li>
						</ul>
					</div>
					<div class="grid-half">
						<div class="image-gallery mobile-hide">
							<div class="flex-container">
								<div class="img-item">
									<div class="inner">
										<img src="<?php echo get_template_directory_uri(); ?>/img/fitbeat-merition-aug20.jpg" alt="Nutrition">
									</div>
								</div>
								<div class="img-item">
									<div class="inner">
										<img src="<?php echo get_template_directory_uri(); ?>/img/FITBEAT-MERITON-AUG20-97.png" alt="Nutrition">
									</div>
								</div>
							</div>
						</div>
						<div class="image-gallery desktop-hide">
							<div class="custom-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home-training/nur2.png" alt="Workouts">
							</div>
						</div>
						<div class="border-seprator-holder desktop-hide"><div class="border-seprator"></div></div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="flex-container">
					<div class="grid-half grid-content">
						<h3>3. Progress Tracking</h3>
						<ul class="repeatable-list">
							<li><svg width="16px" height="21px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg> Train with your Bluetooth Heart Rate Monitor</li>
							<li><svg width="16px" height="21px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg> Receive live workout stats & effort points during workouts</li>
							<li><svg width="16px" height="21px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg> Track your progress in your Fitbeat app</li>
						</ul>
					</div>
					<div class="grid-half">
						<div class="image-gallery mobile-hide">
							<div class="flex-container">
								<div class="img-item">
									<div class="inner">
										<img src="<?php echo get_template_directory_uri(); ?>/img/bitmap.jpg" alt="Progress Tracking">
									</div>
								</div>
								<div class="img-item">
									<div class="inner">
										<img src="<?php echo get_template_directory_uri(); ?>/img/home-training/heartrate-1.png" alt="Progress Tracking">
									</div>
								</div>
							</div>
						</div>
						<div class="image-gallery desktop-hide">
							<div class="custom-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home-training/heartrate.png" alt="Workouts">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="scrollplans"></div>
	</div>
</section>
<section  id="plans" class="section plans bg-overlay scroll-fixed-wrap">
	<div class="layout__container">
		<div class="fixed-wrap">
			<div class="fixed-item"><h2 class="section-title align-center">Home Training Membership Plans</h2></div>
		</div>
		<div class="grid-block">
			<div class="flex-container flex-reverse">
				<div class="grid-half" style="width:50%">
					<div class="border-box" style="display:block;">
						<h3>6 week home challenge</h3>
						<div class="border-seprator"></div>
						<div class="prices">
							<div class="flex-container">
								<div class="item">
									<div class="price"><span>$149</span> /once-off</div>
								</div>
								<!-- <div class="item">
									<span class="tag bg-overlay">Special Offer</span>
									<div class="price"><span>$249</span> /once-off</div>
								</div> -->
							</div>
						</div>
						<ul class="repeatable-list">
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>6 Weeks of personalised home workouts</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Customised skill level and fitness goal</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Goal-based meal plans with recipes & shopping lists</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Or purchase ready-made meals to your door (with 10% discount off My Muscle Chef)</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Leading home workout app</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Cast workouts to your phone, tablet or compatible smart tv</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Revert to standard home membership after 6 weeks. Cancel at any time</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Includes heart rate monitor worth $99 delivered to your door</li>
						</ul>
						<div class="button-holder">
							<div class="flex-container item-btn">
								<a class="btn btn--primary btn--medium" href="https://app.fitbeat.com/api/payment-router/price_1HRZhCGgqUDgVRX6LAne1YJ3">Join Now
									<svg width="22px" height="20px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="grid-half">
					<div class="border-box padding-b-40">
						<h3>Standard Home Membership<br><span class="orange">(Includes 7 day free trial - cancel anytime)</span></h3>
						<div class="border-seprator"></div>
						<div class="prices">
							<div class="flex-container">
								<div class="item">
									<div class="price"><span>$15</span> /month</div>
								</div>
								<!-- <div class="item">
									<span class="tag bg-overlay">Special Offer</span>
									<div class="price"><span>$39</span> /month</div>
								</div> -->
							</div>
						</div>
						<ul class="repeatable-list">
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Personalised home workouts</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Customised skill level and fitness goal</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Goal-based meal plans with recipes & shopping lists</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Or purchase ready-made meals to your door (with 10% discount off My Muscle Chef)</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Leading home workout app</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Cast workouts to your phone, tablet or compatible smart tv</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Option at checkout to purchase Tigernovo heart rate monitor for $79 (normally $99) including delivery</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Cancel future payments anytime</li>
							<li><svg width="9px" height="12px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>Bill monthly after free trial </li>
						</ul>
						<div class="button-holder position-static">
							<div class="flex-container item-btn standand-home-plan">
								<!-- <form class="plan-form" action="https://app.fitbeat.com/api/payment-router/price_1HX0ynGgqUDgVRX6FZ9x3Mn2?onceoff=price_1HP1KQGgqUDgVRX6eDA1bJzq">
								<div class="form-group-flex">
								<input name="name" type="text" placeholder="Name" required ><input name="email" placeholder="Email" type="email" required>
								</div>
								<button class="btn btn--primary btn--medium"><span>Start free trial</span>
									<svg width="22px" height="20px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
									</svg>
								</button>
								</form> -->

								<?php echo do_shortcode ('[contact-form-7 id="3002" title="plan form" html_class="plan-form"]') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section discover-call bg-overlay">
	<div class="layout__container">
		<div class="align-center border-box">
			<h2 class="section-title align-center">Discovery Phone Call</h2>
			<p>If you’re still on the fence, book a Discovery Phone Call with one of our trainers.</p>
			<div class="button-holder">
				<div class="flex-container">
					<a class="btn btn--secondary btn--medium" href="<?php echo get_site_url(); ?>/discovery-call">Book Now
						<svg width="11px" height="10px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
							<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section merchandise bg-overlay scroll-fixed-wrap">
	<div class="layout__container">
		<div class="fixed-wrap">
			<div class="fixed-item"><h2 class="section-title align-center">Merchandise<br>(Coming Soon)</h2></div>
		</div>
		<div class="products">
			<div class="flex-container">
				<div class="item">
					<div class="border-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/backpack.png" alt="products">
					</div>
				</div>
				<div class="item">
					<div class="border-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tigernono.png" alt="products">
					</div>
				</div>
				<div class="item">
					<div class="border-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/bottle.png" alt="products">
					</div>
				</div>
				<div class="item">
					<div class="border-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/mat.png" alt="products">
					</div>
				</div>
				<div class="item">
					<div class="border-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/towel.png" alt="products">
					</div>
				</div>
				<div class="item">
					<div class="border-box">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cap.png" alt="products">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(".site__header .custom-logo-link").attr('href', '#');
$(document).ready(function(){
  $("a[data-scroll-to='plans'], .scroll-plans").on('click', function(e){
	  e.preventDefault();
	  $("body").stop().removeClass('disable-scroll nav-visible');
    $("#manNav").stop().removeClass('open');
  	var sectionPlanPos = $("#plans").offset().top,
  	    headerHeight = $("header.site__header").height();
  	$('body, html').animate({
  		scrollTop: sectionPlanPos - headerHeight
  	}, 500);
  });
});

jQuery( function($) {
	
	jQuery(document).ready(function(jQuery){
		jQuery(".wpcf7-form-control").prop('required',true);
		jQuery(".wpcf7-form").removeAttr('novalidate');
	});
		$(document).ready(function () {
			document.addEventListener( 'wpcf7mailsent', function( event ) {
				window.location.replace("https://app.fitbeat.com/api/payment-router/price_1HX0ynGgqUDgVRX6FZ9x3Mn2?onceoff=price_1HP1KQGgqUDgVRX6eDA1bJzq");
			}, false );
		});
	});
</script>
<style>
@media screen and (max-width: 768px) {
	.home-training .grid-block .grid-half {
		width: 100% !important;
	}
}
</style>