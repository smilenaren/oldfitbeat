<?php

/*
Template Name: Grid Item View
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
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" id="Rectangle-Copy-13" fill="#1A1B1B" stroke="none"></path>
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
			<?php if (have_rows('grid_image_block_items')): ?>
			<div class="block-content image__blocks animate">
				<div class="image_block_lists">
					<?php while( have_rows('grid_image_block_items') ): the_row();
						$thumbImg = get_sub_field('grid_image_block_item_image');
		                $thumbTitle = get_sub_field('grid_image_block_item_title');
		                $thumbVideo = get_sub_field('grid_image_block_item_video');
					?>
						<div class="item viewBox">
							<a class="link-holder" href="#">
								<?php if( $thumbImg ): ?>
								<img data-cover="<?php echo $thumbImg; ?>" data-video="<?php echo $thumbVideo; ?>" src="<?php echo $thumbImg['sizes']['grid-image-thumb-sm']; ?>" alt="<?php echo $thumbTitle; ?>" srcset="<?php echo $thumbImg['sizes']['grid-image-thumb-xxl']; ?> 2700w, <?php echo $thumbImg['sizes']['grid-image-thumb-xl']; ?> 1920w, <?php echo $thumbImg['sizes']['grid-image-thumb-l']; ?> 1400w, <?php echo $thumbImg['sizes']['grid-image-thumb-xl']; ?> 1240w, <?php echo $thumbImg['sizes']['grid-image-thumb-xl']; ?> 768w, <?php echo $thumbImg['sizes']['grid-image-thumb-sm']; ?> 400w" sizes="768px">
								<?php endif; ?>
								<div class="loader"></div>
								<video  muted="" playsinline="" loop="" preload="metadata" src="<?php echo $thumbVideo; ?>">
								</video>
								<div class="content">
									<?php if( $thumbTitle ): ?>
									<h3 class="title"><?php echo $thumbTitle; ?></h3>
									<?php endif; ?>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php
get_footer();
?>