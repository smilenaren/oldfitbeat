<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitbeat
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
		<div class="flex-container space-between">
			<div class="footer__logo">
				<?php if( get_field('enable_social_link' , 'option') ): ?>					
				<?php endif; ?>
				<?php if( get_field('footer_logo' , 'option') ): ?>
					<a href="<?php echo get_bloginfo('url'); ?>" class="custom-logo-link" rel="home"><img width="320" height="128" src="<?php the_field('footer_logo' , 'option')?> " class="custom-logo" alt="Fitbeat Gym Smart"></a>
				<?php endif; ?>
				<div class="footer-social-link show-mobile">
					<?php if( get_field('instagram_footer' , 'option') ): ?>
						<a href="<?php echo get_field('instagram_footer' , 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="instagram"></a>
					<?php endif; ?>
					<?php if( get_field('facebook_footer' , 'option') ): ?>
						<a href="<?php echo get_field('facebook_footer' , 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="facebook"></a>
					<?php endif; ?>
				</div>
				<?php if( get_field('copyright_text' , 'option') ): ?>
				<div class="copyright">
					<?php the_field('copyright_text' , 'option')?>
				</div>
				<?php endif; ?>
			</div>
			<?php if(get_field('call' , 'option')) { ?>
				<div class="footer-call-div show-mobile">
					<div class="call-div">
						<p><i class="icon-telephone"></i> <a href="tel:<?php echo get_field('call' , 'option') ?>"><?php echo get_field('call' , 'option') ?></a></p>
					</div>
				</div>
			<?php };?>
			<div class="footer-social-link show-desktop">
				<?php if( get_field('instagram_footer' , 'option') ): ?>
					<a href="<?php echo get_field('instagram_footer' , 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="instagram"></a>
				<?php endif; ?>
				<?php if( get_field('facebook_footer' , 'option') ): ?>
					<a href="<?php echo get_field('facebook_footer' , 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="facebook"></a>
				<?php endif; ?>
			</div>
			<div class="right">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				) );
				?>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-3',
					'menu_id'        => 'footer-menu-mobile',
				) );
				?>
				<?php if( get_field('copyright_text' , 'option') ): ?>
				<div class="copyright">
					<?php if(get_field('call' , 'option')) { ?>
						<div class="call-div hide-mobile">
							<p><i class="icon-telephone"></i> <a href="tel:<?php echo get_field('call' , 'option') ?>"><?php echo get_field('call' , 'option') ?></a></p>
						</div>
					<?php };?>
					<?php the_field('copyright_text' , 'option')?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<div class="call-to-action-popup pt-careers-wrap">
	<div class="popup-content" style="max-width: 600px; width:100%;">
		<span class="close"></span>
		<div id="callToAction">
			<div class="logo center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-dark.jpg"></div>
			<h2 class="title center">Personal Trainer Careers with Fitbeat</h2>
			<p class="center">Please leave your details and we’ll reach out if we have positions available</p>
			<?php echo do_shortcode ('[contact-form-7 id="2462" title="PT Careers"]') ?>
		</div>
	</div>
</div>
<?php if( get_field('call-to-action_option' , 'option') == 'Contact Form' || get_field('call-to-action_option' , 'option') == 'Landing Popup'): ?>
	<div class="call-to-action-popup contact-form-wrap">
		<div class="popup-content" style="max-width: 600px; width:100%;">
			<span class="close"></span>
			<div id="callToAction">
				<div class="logo center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-dark.jpg"></div>
				<h2 class="title center">FOUNDATION MEMBER OFFERS</h2>
				<p class="center">Leave us your details and we’ll reach out when our Foundation Member Offers become available</p>
				<?php //$call = the_field('call-to-action_contact7' , 'option'); ?>
				<?php //echo do_shortcode ($call); ?>
				<?php echo do_shortcode ('[contact-form-7 id="1477" title="Classes & Foundation Member Offers"]') ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if( get_field('call-to-action_option' , 'option') == 'Landing Popup'): ?>
	<div class="landing-popup">
		<div class="popup-content new-popup-design" style="max-width: 500px; width:100%;">
			<span class="close"></span>
			<div id="landingPopup">
				<?php if( get_field('call-to-action_landing_popup_content' , 'option') ): ?>
					<?php the_field('call-to-action_landing_popup_content' , 'option')?>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function(){
		//popup open
		jQuery(".pt-career-popup a").on("click", function(e){
			e.preventDefault();
			jQuery(".pt-careers-wrap").fadeIn();
		});

		//popup close
		jQuery('div.call-to-action-popup span.close').on('click', function(){
			jQuery(this).parents(".call-to-action-popup").fadeOut();
		});
	});

	jQuery(document).ready(function(jQuery){
		//jQuery(".your-name").prop('required',true);
		//jQuery(".wpcf7-form").removeAttr('novalidate');
	});

</script>
<?php if( get_field('call-to-action_option' , 'option') == 'Type Form'): ?>
<script> 
(function() {
    var qs, js, q, s, d = document,
        gi = d.getElementById,
        ce = d.createElement,
        gt = d.getElementsByTagName,
        id = "typef_orm_share",
        b = "https://embed.typeform.com/";
    if (!gi.call(d, id)) {
        js = ce.call(d, "script");
        js.id = id;
        js.src = b + "embed.js";
        q = gt.call(d, "script")[0];
        q.parentNode.insertBefore(js, q)
    }
})()
</script>
 <?php elseif (get_field('call-to-action_option' , 'option') == 'Contact Form') : ?>
 	<script>
 		jQuery(document).ready(function(){
 			jQuery(".contactform-share").on("click", function(e){
	 			e.preventDefault();
	 			jQuery(".contact-form-wrap").fadeIn();
	 		});
	 		jQuery('div.call-to-action-popup span.close').on('click', function(){
	 			jQuery(this).parents(".call-to-action-popup").fadeOut();
	 		});
 		});
 	</script>
 <?php elseif (get_field('call-to-action_option' , 'option') == 'Landing Popup') : ?>
 	<script>
 		jQuery(document).ready(function(){
 			jQuery(".landing-popup .contactform-share").on('click', function(e){
 				e.preventDefault();
 				jQuery(this).parents(".landing-popup").css('display', 'none');
 				jQuery(".contact-form-wrap").fadeIn();
 			});
 			jQuery(".landing-popup-share").on("click", function(e){
	 			e.preventDefault();
	 			jQuery(".landing-popup").fadeIn();
	 		});
	 		jQuery('.landing-popup span.close').on('click', function(){
	 			jQuery(this).parents(".landing-popup").fadeOut();
	 		});
	 		jQuery('div.call-to-action-popup span.close').on('click', function(){
	 			jQuery(this).parents(".call-to-action-popup").fadeOut();
	 		});
 		});
 	</script>
<?php endif; ?>

</body>
</html>