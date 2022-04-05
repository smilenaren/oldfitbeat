<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fitbeat
 */

?>
<?php if (get_field('third_button_action' , 'option') == 'Url') :
	 $class_name = '';
	 $btn_url =  get_field('third_button_url' , 'option');
?>
<?php elseif (get_field('third_button_action' , 'option') == 'Landing Popup') :
	 $class_name = 'btn-popup third-btn-popup';
	 $btn_url = "javascript:;";
	 endif
?>
<section id="mainVideoBanner" class="video__banner">
	<div class="full-video-popup">
		<div class="frame">
			<div class="video__close"></div>
			<video controls id="bannerVideo">
				<source src="<?php echo get_stylesheet_directory_uri(); ?>/img/blank.mp4" type="video/mp4">
			</video>
		</div>
	</div>
	<div class="item">
		<?php if( get_field('main_video_banner_promo_video_mp4') ): ?>
		<div class="promo__video">
			<video poster="https://a343a4bf16ee543851bd7.admin.hardypress.com/wp-content/uploads/2019/08/promo-video-poster-desktop.jpg" class="promo__video-desktop <?php if( get_field('main_video_banner_promo_video_mp4_mobile') ): ?>mobile-hide <?php endif; ?>"  muted="" playsinline="" loop="" autoplay="" src="<?php the_field('main_video_banner_promo_video_mp4'); ?>">
			</video>
			<?php if( get_field('main_video_banner_promo_video_mp4_mobile') ): ?>
			<video poster="https://a343a4bf16ee543851bd7.admin.hardypress.com/wp-content/uploads/2019/08/promo-video-poster-mobile.jpg" class="promo__video-mob mobile-show"  muted="" playsinline="" autoplay="" loop="" preload="metadata" src="<?php the_field('main_video_banner_promo_video_mp4_mobile'); ?>">
			</video>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<div class="content">
			<div class="inner">
				<?php if( get_field('main_video_banner_title') ): ?>
				<h1 class="main__title"><?php the_field('main_video_banner_title'); ?></h1>
				<?php endif; ?>
				<?php if( get_field('main_video_banner_text') ): ?>
				<?php the_field('main_video_banner_text'); ?>
				<?php endif; ?>
				<div class="center">
					<div class="btn__watch">
						<a id="showVideoPopup" class="circle--holder" href="<?php the_field('main_video_banner_mp4'); ?>">
							<div class="circle">
								<svg width="21px" height="25px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
									 <path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
								</svg>
							</div>
							<div class="btn__text" id="buttons">Watch</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="overlay"></div>
	</div>
</section>
	<div class="layout__container flex-container mobile-button-holder">
		 <?php if( get_field('header_button_switch' , 'option') ): ?>
			<?php if( get_field('call-to-action_option' , 'option') == 'Type Form'): ?>
				<a class="btn btn--primary btn--medium mobile-show free_trial-btn typeform-share" data-mode="popup" href="<?php the_field('type_form_url' , 'option')?>"><?php the_field('cta_block_3_text'); ?>
				<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
				</svg>
			</a>
			<?php elseif (get_field('call-to-action_option' , 'option') == 'Contact Form') : ?>
				<a target="_blank" class="btn btn--primary btn--medium mobile-show free_trial-btn contactform-share" href="#callToAction"><?php the_field('header_button_text' , 'option')?>
					<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
					</svg>
				</a>
			<?php elseif (get_field('call-to-action_option' , 'option') == 'Landing Popup') : ?>
				<a target="_blank" class="btn btn--primary btn--medium mobile-show free_trial-btn landing-popup-share" data-link-android="#landingPopup" data-link-ios="#landingPopup" data-link-desktop="#landingPopup" href="#landingPopup"><?php the_field('header_button_text' , 'option')?>
					<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
					</svg>
				</a>
			<?php else : ?>
			<a class="btn btn--primary btn--medium mobile-show free_trial-btn" href="<?php the_field('header_button_link_url_desktop' , 'option')?>"><?php the_field('header_button_text' , 'option')?>
				<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
				</svg>
			</a>
			<?php endif; ?>
		<?php endif; ?>
		<?php
			if( have_rows('header_button_repeater', 'option') ):
				while( have_rows('header_button_repeater', 'option') ) :
					the_row();
					$button_text= get_sub_field('button_text_header');
					$type_link  = get_sub_field('link_type_header');
					if ($type_link == 'page') {
						$button_link  = get_sub_field('button_link_page_header');
					} elseif ($type_link == 'url'){
						$button_link  = get_sub_field('button_link_url_header');
					}
					$current_link = get_permalink();
					if( $current_link != $button_link ) :
					?>
						<a class="btn btn--primary btn--medium mobile-show" href="<?php echo esc_url( $button_link ); ?>"><?php echo $button_text;?>
							<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
							<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>
						</a>
					<?php
					endif;
				endwhile;
			endif;
		?>
		<?php if( get_field('third_button_switch' , 'option') ): ?>
			<a class="btn btn--primary btn--medium mobile-show btn-challenge <?php echo $class_name; ?>" href="<?php echo $btn_url;?>"><?php the_field('third_button_text' , 'option')?>
			<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
			<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
			</svg>
			</a>
		<?php endif; ?>
	</div>


<?php if( get_field('campaign_enable') ): ?>
<div class="ft-links">
	<div class="lists">
		<div class="layout__container">
			<div class="flex-container">
				<?php if( get_field('campaign_button_first_text') ): ?>
				<div class="item">
					<a class="btn btn--primary btn--medium" href="<?php the_field('campaign_button_first_link'); ?>">
					<?php the_field('campaign_button_first_text'); ?>
					</a>
				</div>
				<?php endif; ?>
				<?php if( get_field('campaign_button_second_text') ): ?>
				<div class="item">
					<a class="btn btn--primary btn--medium" href="<?php the_field('campaign_button_second_link'); ?>">
					<?php the_field('campaign_button_second_text'); ?>
					</a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('switch_featured_why_fitbeat') ): ?>
<section class="featured__why-fitbeat">
	<div class="layout__container">
			<div class="item two-col-layout">
				<div class="flex-container">
					<div class="image">
						<?php if( get_field('featured_why_fitbeat_video') ): ?>
						<div class="video__holder">
						<video muted="" playsinline="" loop="" autoplay="" poster="<?php echo get_stylesheet_directory_uri(); ?>/img/star-cover.jpg" src="<?php the_field('featured_why_fitbeat_video'); ?>">
						</video>
						</div>
						<?php endif; ?>
						<!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/img/fitbeat-star.svg" alt="Fitbeat Logo"> -->
						<?php if( get_field('featured_why_fitbeat_title') ): ?>
						<h2 class="title"><?php the_field('featured_why_fitbeat_title'); ?></h2>
						<?php endif; ?>
					</div>
					<div class="content">
						<?php if( get_field('featured_why_fitbeat_content') ): ?>
						<?php the_field('featured_why_fitbeat_content'); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
	</div>
</section>
<?php endif; ?>

<?php if( have_rows('featured_grid_items') ): ?>
<section class="featured content--grid animate">
	<div class="lists">
		<?php $count = 0;?>
		<?php while( have_rows('featured_grid_items') ): the_row();

		// vars
		$thumbnail = get_sub_field('featured_grid_item_thumbnail');
		$gif_image = get_sub_field('featured_grid_item_gif');
		$title = get_sub_field('featured_grid_item_title');
		$sub_title = get_sub_field('featured_grid_item_subtitle');
		$link_url = get_sub_field('featured_grid_item_link');
		$video = get_sub_field('featured_grid_item_video');
		$popup_link = get_sub_field('featured_popup_link');
			if ( $popup_link ) {
				$newlink = "javascript:;";
				$newclass = " no-link popup-link";
			} else {
				 if( $link_url ) {
					 $newlink = $link_url;
				 }
				 $newclass = "";
			}
		?>
		<div class="item viewBox">
			<a class="link-holder<?php echo $newclass; ?>" href="<?php echo $newlink; ?>" data-link="<?php echo $link_url; ?>">
				<?php if( $thumbnail ): ?>
				<img data-gif="<?php echo $gif_image; ?>" data-video="<?php echo $video; ?>" data-cover="<?php echo $thumbnail; ?>" src="<?php echo $thumbnail['sizes']['grid-image-thumb-l']; ?>" alt="<?php echo $title; ?>" srcset="<?php echo $thumbnail['sizes']['grid-image-thumb-xxl']; ?> 2700w, <?php echo $thumbnail['sizes']['grid-image-thumb-xl']; ?> 1920w, <?php echo $thumbnail['sizes']['grid-image-thumb-l']; ?> 1400w, <?php echo $thumbnail['sizes']['grid-image-thumb-xl']; ?> 1240w, <?php echo $thumbnail['sizes']['grid-image-thumb-xl']; ?> 768w, <?php echo $thumbnail['sizes']['grid-image-thumb-sm']; ?> 400w" sizes="768px">
				<?php endif; ?>
				<?php if( $video ): ?>
				<div class="loader"></div>
				<video  muted="" playsinline="" loop="" preload="metadata" src="<?php echo $video; ?>">
				</video>
				<?php endif; ?>
				<div class="content">
					<?php if( $title ): ?>
					<h2 class="title"><span><?php echo $title; ?></span></h2>
					<?php endif; ?>
					<?php if( $sub_title ): ?>
					<p><?php echo $sub_title; ?></p>
					<?php endif; ?>
				</div>
			</a>
		</div>
		<?php endwhile; ?>
	</div>
</section>
<?php endif; ?>
<?php if( have_rows('testimonial_grid_items') ): ?>
<section class="featured testimonial content--grid animate">
	<?php $section_title = get_field('testimonial_section_title'); ?>
	<?php if ($section_title != '') : ?>
	<h1><span><?php echo $section_title; ?></span>
	<svg width="51px" height="74px" viewBox="0 0 51 74" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
		<path d="M5.25802e-13 -7.24298e-13L36.6576 26.9682L74 0.0483635L74 23.0967L36.5 50.5484L-2.10321e-12 23.0484L5.25802e-13 -7.24298e-13Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 74)" id="Rectangle-Copy-13" fill="#FF621D" stroke="none" />
	</svg>
	</h1>
	<?php endif; ?>
	<div class="lists">
		<?php ?>
		<?php while( have_rows('testimonial_grid_items') ): the_row();

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
</section>
<?php endif; ?>

	<div class="layout__container flex-container mobile-button-holder">
		<?php if( get_field('header_button_switch' , 'option') ): ?>
			<?php if( get_field('call-to-action_option' , 'option') == 'Type Form'): ?>
				<a class="btn btn--primary btn--medium mobile-show free_trial-btn typeform-share" data-mode="popup" href="<?php the_field('type_form_url' , 'option')?>"><?php the_field('cta_block_3_text'); ?>
				<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
				</svg>
			</a>
			<?php elseif (get_field('call-to-action_option' , 'option') == 'Contact Form') : ?>
				<a target="_blank" class="btn btn--primary btn--medium mobile-show free_trial-btn contactform-share" href="#callToAction"><?php the_field('header_button_text' , 'option')?>
					<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
					</svg>
				</a>
			<?php elseif (get_field('call-to-action_option' , 'option') == 'Landing Popup') : ?>
				<a target="_blank" class="btn btn--primary btn--medium mobile-show free_trial-btn landing-popup-share" data-link-android="#landingPopup" data-link-ios="#landingPopup" data-link-desktop="#landingPopup" href="#landingPopup"><?php the_field('header_button_text' , 'option')?>
					<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
					</svg>
				</a>
			<?php else : ?>
			<a class="btn btn--primary btn--medium mobile-show free_trial-btn" href="<?php the_field('header_button_link_url_desktop' , 'option')?>"><?php the_field('header_button_text' , 'option')?>
				<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
				</svg>
			</a>
			<?php endif; ?>
		<?php endif; ?>
		<?php
			if( have_rows('header_button_repeater', 'option') ):
				while( have_rows('header_button_repeater', 'option') ) :
					the_row();
					$button_text= get_sub_field('button_text_header');
					$type_link  = get_sub_field('link_type_header');
					if ($type_link == 'page') {
						$button_link  = get_sub_field('button_link_page_header');
					} elseif ($type_link == 'url'){
						$button_link  = get_sub_field('button_link_url_header');
					}
					$current_link = get_permalink();
					if( $current_link != $button_link ) :
					?>
						<a class="btn btn--primary btn--medium mobile-show" href="<?php echo esc_url( $button_link ); ?>"><?php echo $button_text;?>
							<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
							<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>
						</a>
					<?php
					endif;
				endwhile;
			endif;
		?>
		<?php if( get_field('third_button_switch' , 'option') ): ?>
			<a class="btn btn--primary btn--medium mobile-show btn-challenge <?php echo $class_name; ?>" href="<?php echo $btn_url;?>"><?php the_field('third_button_text' , 'option')?>
			<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
			<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
			</svg>
			</a>
		<?php endif; ?>
	</div>

<div class="layout__container mobile-hide">
<div class="spearator"></div>
</div>
<?php if( have_rows('page_links') ): ?>
<section class="cta__block_3">
	<h2 style="display: none;">Page Links</h2>
	<div class="lists">
		<div class="flex-container">
			<?php while( have_rows('page_links') ): the_row();
			// vars
			$title = get_sub_field('page_link_title');
			$link = get_sub_field('page_link_url');
			?>
			<div class="item">
				<?php if( $title ): ?><a href="<?php echo $link; ?>"><?php echo $title; ?></a><?php endif; ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>
<section class="footer__banner">
	<div class="flex-container">
		<?php if( get_field('cta_block_3_text') ): ?>
		<div class="left">
			<h2 class="title"><?php the_field('cta_block_3_text'); ?></h2>
		</div>
		<?php endif; ?>
		<div class="right align-right">
			<div class="external-links flex-container">
				<?php if( have_rows('cta_block_items') ): ?>
					<?php while( have_rows('cta_block_items') ): the_row();
					// vars
					$itemLogo = get_sub_field('cta_block_3_item_logo');
					$itemLogoUrl = get_sub_field('cta_block_3_item_url');
					$itemAppType = get_sub_field('choose_app');
					?>
					<?php if( $itemLogo ): ?>
					<?php /*<?php if( get_field('call-to-action_option' , 'option') == 'Type Form'): ?>
					<a class="<?php if( $itemAppType == 'Android' ): ?>android <?php elseif ($itemAppType == 'IOS/Apple') : ?>apple<?php else : ?>windows<?php endif; ?> typeform-share" data-mode="popup"
					 href="<?php the_field('type_form_url' , 'option')?>">
						<img src="<?php echo $itemLogo; ?>" alt="App Store">
					</a>
					<?php elseif (get_field('call-to-action_option' , 'option') == 'Contact Form') : ?>
					<a class="<?php if( $itemAppType == 'Android' ): ?>android <?php elseif ($itemAppType == 'IOS/Apple') : ?>apple<?php else : ?>windows<?php endif; ?> contactform-share" data-mode="popup"
					 href="#callToAction">
						<img src="<?php echo $itemLogo; ?>" alt="App Store">
					</a>
					<?php elseif (get_field('call-to-action_option' , 'option') == 'Landing Popup') : ?>
					<a class="<?php if( $itemAppType == 'Android' ): ?>android <?php elseif ($itemAppType == 'IOS/Apple') : ?>apple<?php else : ?>windows<?php endif; ?> landing-popup-share" data-mode="popup"
					 href="#landingPopup">
						<img src="<?php echo $itemLogo; ?>" alt="App Store">
					</a>
					<?php else : ?>
					*/?>
					<a class="<?php if( $itemAppType == 'Android' ): ?>android <?php elseif ($itemAppType == 'IOS/Apple') : ?>apple<?php else : ?>windows<?php endif; ?>"
					 href="<?php if( $itemLogoUrl ): ?><?php echo $itemLogoUrl; ?><?php endif; ?>" target="_blank">
						<img src="<?php echo $itemLogo; ?>" alt="App Store" >
					</a>
					<?php //endif; ?>
					<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<style>
.home .mobile-button-holder .btn {
	width: 100%;
	margin-bottom: 10px;
}
.home .mobile-button-holder .btn:last-child{
	margin-bottom: 0;
}
</style>