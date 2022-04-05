<?php

/*
Template Name: Arrow Block Content
*/

get_header();
?>
<?php if( get_field('block_video') ): ?>
	<section class="video__banner popup-video-wrap">
		<div class="full-video-popup">
			<div class="frame">
				<div class="video__close1"></div>
				<video controls id="popupVideo">
					<source src="<?php echo get_stylesheet_directory_uri(); ?>/img/blank.mp4" type="video/mp4">
				</video>
			</div>
		</div>	
	</section>
<?php endif; ?>
<section class="page page-short-story">
	
	<div class="layout__container">
		<div class="inner">
			<header class="entry-header">
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
				<!-- <?php if( get_field('page_sub_title') ): ?>
					<h2><?php the_field('page_sub_title'); ?></h2>
				<?php endif; ?> -->
				<hr>
			</header><!-- .entry-header -->
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
			<!-- <?php if( get_field('block_video') ): ?>
			<div class="block__video">
				<div class="btn__watch block__video-play">
					<a class="circle--holder" href="#">
						<div class="circle">
							<svg width="39px" height="35px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
							</svg>
						</div>
					</a>
				</div>
				<video controls>
					<source src="<?php the_field('block_video'); ?>" type="video/mp4">
				</video>
			</div>
			<?php endif; ?> -->
		</div>
	</div>
	<?php if( have_rows('arrow_block_content') ): ?>
	<div class="layout__container">
		<div class="inner">
			<div class="arrow-block-content">
				<div class="container">
					<div class="flex-container">
						<?php while( have_rows('arrow_block_content') ): the_row(); 
						// vars
						$blockTitle = get_sub_field('arrow_block_content_title');
						$blockText = get_sub_field('arrow_block_content_text');
						$count = get_row_index();
						?>
						<div class="item">
							<div class="content">
								<?php if( $blockTitle ): ?>
								<h2 class="title"><?php echo $blockTitle; ?></h2>
								<?php endif; ?>
								<?php if( $blockText ): ?>
								<?php echo $blockText; ?>
								<?php endif; ?>
								<?php if ($count == 3 ) : ?>
									<a id="showVideoPopup1" class="circle--holder" href="<?php the_field('block_video'); ?>">
										<div class="btn__text"><?php the_field('page_sub_title'); ?></div>
									</a>
								<?php endif; ?>
							</div>
							<div class="arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-arrow-orange-with-dark-down-bg.svg" alt="arrow"><img class="last" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-arrow-orange-with-dark-down-bg-last.svg" alt="Arrow"></div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</section>
<?php
get_footer();
?>