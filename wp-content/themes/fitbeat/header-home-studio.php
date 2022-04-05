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
	<script src="https://embed.cogsworth.com/1.0.1/index.min.js"></script>
	<script src="https://www.googleoptimize.com/optimize.js?id=OPT-NCXC782"></script>
	<!-- Hotjar Tracking Code for fitbeat.com -->
	<script>
	(function(h,o,t,j,a,r){
	h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	h._hjSettings={hjid:1862738,hjsv:6};
	a=o.getElementsByTagName('head')[0];
	r=o.createElement('script');r.async=1;
	r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	a.appendChild(r);
	})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/home-studio.css?ver=1.1" type="text/css" media="screen" />
</head>
<body <?php body_class(); ?>>
<div id="page" class="site home-studio">
	<!--
	<header id="masthead" class="site__header">
		<div class="site__branding">
			<div class="grid--table">
				<div class="grid__item">
					<div class="flex-logo">
					<?php
					$page_id = get_queried_object_id();
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site__title"><a href="#" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<span class="site__title"><a href="#" rel="home"><?php bloginfo( 'name' ); ?></a></span>
						<?php
					endif;
					$fitbeat_description = get_bloginfo( 'description', 'display' );
					if ( $fitbeat_description || is_customize_preview() ) :
						?>
						<span class="site__description"><?php echo $fitbeat_description; /* WPCS: xss ok. */ ?></span>
					<?php endif; ?>
					<div class="header-text-ceter">
					<h1><?php echo get_field('header_title_home' , $page_id)?></h1>
					</div>
					</div>
				</div>
			</div>
		</div>
	</header> -->
	<div id="content" class="site-content">
