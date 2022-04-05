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
		<div class="footer__logo">
			<div class="flex-container space-between">
				<?php if( get_field('enable_social_link' , 'option') ): ?>
				<?php endif; ?>
				<?php if( get_field('footer_logo' , 'option') ): ?>
					<a href="#" class="custom-logo-link" rel="home"><img width="320" height="128" src="<?php the_field('footer_logo' , 'option')?> " class="custom-logo" alt="Fitbeat Gym Smart"></a>
				<?php endif; ?>
				<div class="footer-social-link">
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
						<?php the_field('copyright_text' , 'option')?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>