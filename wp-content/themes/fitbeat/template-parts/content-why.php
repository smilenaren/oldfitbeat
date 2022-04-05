<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fitbeat
 */

?>
<section class="page page-cms">
	<div class="layout__container">
		<div class="inner">
			<header class="entry-header entry-header-logo-animation">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						fitbeat_posted_on();
						fitbeat_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
				<?php if( get_field('page_sub_title') ): ?>
					<h2><?php the_field('page_sub_title'); ?></h2>
				<?php endif; ?>
				
				<?php if( get_field('video_column') ): ?>
					<div class="video">
						<video muted="" playsinline="" loop="" autoplay="" src="<?php the_field('video_column'); ?>">
						</video>
					</div>
					<?php endif; ?>
					<hr>
			</header><!-- .entry-header -->
			<div class="video-text-col">
				<!-- <div class="flex-container"> -->
					<?php if( get_field('text_column') ): ?>
					<div class="content">
						<?php the_field('text_column'); ?>
					</div>
					<?php endif; ?>
				<!-- </div> -->
			</div>
			<div class="entry-content">
				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fitbeat' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fitbeat' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->
			<?php if( get_field('block_video') ): ?>
			<?php endif; ?>
		</div>
	</div>
</section>
