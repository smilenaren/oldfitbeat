<?php

/*
Template Name: Short Story
*/

get_header();
?>
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
				<?php if( get_field('page_sub_title') ): ?>
					<h2><?php the_field('page_sub_title'); ?></h2>
				<?php endif; ?>
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
			<?php if( get_field('block_video') ): ?>
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
			<?php endif; ?>
		</div>
	</div>
	<div class="layout__container">
		<div class="inner">
			<?php if( have_rows('text_col_content') ): ?>
				<div class="text-col">
				<?php while( have_rows('text_col_content') ): the_row(); 
				// vars
				$textColTitle = get_sub_field('text_column_title');
				$textColDesc = get_sub_field('text_column_description');
				$textColImg = get_sub_field('text_column_mobile_image');
				?>
					<div class="item two-col-layout">
						<div class="flex-container">
							<?php if( $textColImg ): ?>
								<div class="image">
									<img src="<?php echo $textColImg; ?>" alt="<?php echo $textColTitle; ?>">
									<?php if( $textColTitle ): ?>
									<h3 class="title"><?php echo $textColTitle; ?></h3>
									<?php endif; ?>
								</div>
							<?php endif; ?>
							<div class="content">
							<?php if( $textColDesc ): ?>
							<?php echo $textColDesc; ?>
							<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="layout__container">
		<div class="inner">
			<hr>
		</div>
	</div>
</section>
<?php
get_footer();
?>