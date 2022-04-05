<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitbeat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Barlow:400,400i,500,700,800,800i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:700&display=swap" rel="stylesheet">
	<!--<script  src='https://www.fitbeat.com/wp-includes/js/jquery/jquery.js'></script>
	<script  src='https://www.fitbeat.com/wp-includes/js/jquery/jquery-migrate.min.js'></script>-->
	<?php wp_head(); ?>
	<script src="https://embed.cogsworth.com/1.0.1/index.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div class="preloader"></div>
<?php if (get_field('third_button_action' , 'option') == 'Url') : 
	 global $class_name;
	 $class_name = '';
	 global $btn_url;
	 $btn_url =  get_field('third_button_url' , 'option');
?>
<?php elseif (get_field('third_button_action' , 'option') == 'Landing Popup') :
	 global $class_name;
	 $class_name = 'btn-popup third-btn-popup';
	 global $btn_url;
	 $btn_url = "javascript:;";
?>
<div class="landing-popup-wrap third-popup-wrap">
	<div class="popup-content">
		<span class="close popup-close"></span>
		<div class="landingPopup arrow-list">
			<?php echo get_field('third_button_popup_content', 'option'); ?>
		</div>
	</div>
</div>
<?php endif; ?>
<div id="page" class="site">
	<nav id="site-navigation" class="main-navigation">
		<div class="mobile-show menu-logo"><?php the_custom_logo(); ?></div>
		<button id="menuClose" class="menu-close" aria-controls="primary-menu" aria-expanded="false"></button>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav><!-- #site-navigation -->
	<div class="nav__overlay"></div>
	<?php if( empty(get_field('mobile_button_text' , 'option'))): ?>
		<?php if( get_field('header_button_switch' , 'option') ): ?>
			<?php if( get_field('call-to-action_option' , 'option') == 'Type Form'): ?>
				<a target="_blank" class="btn btn--primary btn--medium free_trial-btn sticky-mob-btn typeform-share" data-mode="popup" data-link-android="<?php the_field('type_form_url' , 'option')?>" data-link-ios="<?php the_field('type_form_url' , 'option')?>" data-link-desktop="<?php the_field('type_form_url' , 'option')?>" href="<?php the_field('type_form_url' , 'option')?>"><?php the_field('header_button_text' , 'option')?> 
					<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
						<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
					</svg>
				</a>
			<?php elseif (get_field('call-to-action_option' , 'option') == 'Contact Form') : ?>
				<a target="_blank" class="btn btn--primary btn--medium free_trial-btn sticky-mob-btn contactform-share" data-link-android="#callToAction" data-link-ios="#callToAction" data-link-desktop="#callToAction" href="#callToAction"><?php the_field('header_button_text' , 'option')?> 
				<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
				<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
				</svg>
				</a>
			<?php elseif (get_field('call-to-action_option' , 'option') == 'Landing Popup') : ?>
				<a target="_blank" class="btn btn--primary btn--medium free_trial-btn sticky-mob-btn landing-popup-share" data-link-android="#landingPopup" data-link-ios="#landingPopup" data-link-desktop="#landingPopup" href="#landingPopup"><?php the_field('header_button_text' , 'option')?> 
					<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
					</svg>
				</a>
			<?php else : ?>
			<a class="btn btn--primary btn--medium free_trial-btn sticky-mob-btn " data-link-android="<?php the_field('header_button_link_url_android' , 'option')?>" data-link-ios="<?php the_field('header_button_link_url_ios' , 'option')?>" data-link-desktop="<?php the_field('header_button_link_url_desktop' , 'option')?>" href="#"><span><?php the_field('header_button_text' , 'option')?></span>
				<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
				</svg>
			</a>
			<?php endif; ?>
			<?php if( get_field('header_button2_switch' , 'option') ): ?>
				<a class="btn btn--primary btn--medium sticky-mob-btn btn2 hide1" href="<?php the_field('header_button2_url' , 'option')?>"><?php the_field('header_button_2_text' , 'option')?>
				<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
				<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
				</svg>
				</a>
			<?php endif; ?>
		<?php endif; ?>
	<?php else : ?>
		<?php 
			$mobile_btn_text = get_field('mobile_button_text' , 'option');
			$mobile_btn_link = get_field('mobile_button_link' , 'option'); 
		?>
		<a class="btn btn--primary btn--small fixed_btn  sticky-mob-btn typeform-share"  href="<?php echo $mobile_btn_link; ?>"><span><?php echo $mobile_btn_text; ?></span>
			<svg width="10px" height="10px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
				<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
			</svg>
		</a>
	<?php endif; ?>	
	<header id="masthead" class="site__header">
		<div class="site__branding">
			<div class="grid--table">
				<div class="grid__item">
				<?php
				the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<span class="site__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
						<?php
					endif;
					$fitbeat_description = get_bloginfo( 'description', 'display' );
					if ( $fitbeat_description || is_customize_preview() ) :
						?>
						<span class="site__description"><?php echo $fitbeat_description; /* WPCS: xss ok. */ ?></span>
					<?php endif; ?>
				</div>
				<div class="grid__item">
					<div class="header__info">						
						<?php if( get_field('header_button2_switch' , 'option') ): ?>
							<a class="btn btn--primary btn--medium landing-popup-share1 hide-mobile hide1" href="<?php the_field('header_button2_url' , 'option')?>"><?php the_field('header_button_2_text' , 'option')?>
							<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
			  				<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
							</svg>
							</a>
						<?php endif; ?>
						<?php if( get_field('header_button_switch' , 'option') ): ?>
						   <?php if( get_field('call-to-action_option' , 'option') == 'Type Form'): ?>
						   	<a target="_blank" id="freeTrialButton" class="btn btn--primary btn--medium free_trial-btn typeform-share" data-mode="popup" data-link-android="<?php the_field('type_form_url' , 'option')?>" data-link-ios="<?php the_field('type_form_url' , 'option')?>" data-link-desktop="<?php the_field('type_form_url' , 'option')?>" href="<?php the_field('type_form_url' , 'option')?>"><?php the_field('header_button_text' , 'option')?> 
								<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
			  						<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
								</svg>
							</a>
						   <?php elseif (get_field('call-to-action_option' , 'option') == 'Contact Form') : ?>
							<a target="_blank" id="freeTrialButton" class="btn btn--primary btn--medium free_trial-btn contactform-share" data-link-android="#callToAction" data-link-ios="#callToAction" data-link-desktop="#callToAction" href="#callToAction"><?php the_field('header_button_text' , 'option')?> 
								<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
			  						<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
								</svg>
							</a>
							<?php elseif (get_field('call-to-action_option' , 'option') == 'Landing Popup') : ?>
							<a target="_blank" id="freeTrialButton" class="btn btn--primary btn--medium free_trial-btn landing-popup-share" data-link-android="#landingPopup" data-link-ios="#landingPopup" data-link-desktop="#landingPopup" href="#landingPopup"><?php the_field('header_button_text' , 'option')?> 
								<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
			  						<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
								</svg>
							</a>
						<?php else : ?>
							<a id="freeTrialButton" class="btn btn--primary btn--medium free_trial-btn" data-link-android="<?php the_field('header_button_link_url_android' , 'option')?>" data-link-ios="<?php the_field('header_button_link_url_ios' , 'option')?>" data-link-desktop="<?php the_field('header_button_link_url_desktop' , 'option')?>" href="#"><span><?php the_field('header_button_text' , 'option')?> </span>
								<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
			  						<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
								</svg>
							</a>
							<?php endif; ?>
							
							<?php if( get_field('third_button_switch' , 'option') ): ?>
								<a class="btn btn--primary btn--medium hide-mobile btn-challenge <?php echo $class_name; ?>" href="<?php echo $btn_url;?>"><?php the_field('third_button_text' , 'option')?>
								<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
								</svg>
								</a>
							<?php endif; ?>
						<?php endif; ?>
						<?php if(get_field('call' , 'option')) { ?>
							<div class="call-div hide-mobile">
								<p><i class="icon-telephone"></i> <a href="tel:<?php echo get_field('call' , 'option') ?>"><?php echo get_field('call' , 'option') ?></a><?php if( get_field('location_text' , 'option')) { ?> <i class="icon-map"></i><span><?php echo get_field('location_text' , 'option') ?></span><?php };?></p>
							</div>
						<?php };?>
						<div id="manNav" class="menu__burger">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">
