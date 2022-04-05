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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/home-training.css?ver=<?php echo time(); ?>" type="text/css" media="screen" />
</head>
<body <?php body_class(); ?>>
<div id="page" class="site home-training">
<nav id="site-navigation" class="main-navigation">
		<button id="menuClose" class="menu-close" aria-controls="primary-menu" aria-expanded="false"></button>
		<?php
		wp_nav_menu( array(
			'menu' => 'Home training menu'
		) );
		?>
	</nav><!-- #site-navigation -->
	<div class="nav__overlay"></div>
	<header id="masthead" class="site__header">
		<div class="site__branding">
			<div class="grid--table">
				<div class="grid__item">
					<div class="flex-logo">
					<?php
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
					<div class="logo-text">
						Home<br>Training
					</div>
					</div>
				</div>
				<!--<div class="grid__item header-btn hide-header-btn">
					<a class="btn btn--primary btn--small" href="https://gymforyourcafe.com.au/">"Gym for your cafe" Campaign
						<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
							<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
						</svg>
					</a>
				</div>-->
				<div class="grid__item">
				<div id="manNav" class="menu__burger">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
				</div>
			</div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
	<style>
	.home-training .header-btn .btn {
		height: auto;
		padding: 15px 20px;
		line-height: 1.2;
		font-size:22px;
		white-space:nowrap;
		margin-left: 20px;
	}
	.show-header-btn {
		display: none;
	}
	@media screen and (max-width:1199px) {
		.home-training .header-btn .btn {
			padding: 10px;
			font-size:18px;
		}
	}
	@media screen and (max-width:768px) {
		.hide-header-btn {
			display: none !important;
		}
		.show-header-btn {
			display: block;
			position: fixed;
			top: 89px;
			z-index:9;
			left:0;
			right: 0;
		}
		.home-training .header-btn .btn {
			width: 100%;
			border-radius: 0;
			max-width:100%;
			margin: 0;
		}
	}
</style>
	<div id="content" class="site-content">
		<!--
		<div class="header-btn show-header-btn">
			<a class="btn btn--primary btn--small" href="https://gymforyourcafe.com.au/">"Gym for your cafe" Campaign
				<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
				</svg>
			</a>
		</div>-->
