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
			<!-- <div class="block__video">
				<div class="btn__watch block__video-play">
					<a class="circle--holder" href="#">
						<div class="circle">
							<svg width="39px" height="35px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" id="Rectangle-Copy-13" fill="#1A1B1B" stroke="none"></path>
							</svg>
						</div>
					</a>
					<video class="block__video-item" controls autoplay loop >
				<source src="<?php the_field('block_video'); ?>" type="video/mp4">
			</video>
				</div>
				
			</div> -->
			<?php endif; ?>
			<?php if (have_rows('video_block_items')): ?>
			<div class="block-content image__blocks">
				<div class="image_block_lists">
					<div class="flex-container">
						<?php while( have_rows('video_block_items') ): the_row();
							$videoBlockItemImage = get_sub_field('video_block_item_thumb');
		                    $videoBlockItemTitle = get_sub_field('video_block_item_title');
		                    $blockVideo = get_sub_field('video_block_item_video');
						?>
						<div class="item viewBox bigview-desktop">
							<a class="link-holder" href="#">
								<?php if( $videoBlockItemImage ): ?>
								<img src="<?php echo $videoBlockItemImage['sizes']['grid-image-thumb-l']; ?>" alt="<?php echo $videoBlockItemTitle; ?>" srcset="<?php echo $videoBlockItemImage['sizes']['grid-image-thumb-xxl']; ?> 2700w, <?php echo $videoBlockItemImage['sizes']['grid-image-thumb-xl']; ?> 1920w, <?php echo $videoBlockItemImage['sizes']['grid-image-thumb-xl']; ?> 1400w, <?php echo $videoBlockItemImage['sizes']['grid-image-thumb-xl']; ?> 1240w, <?php echo $videoBlockItemImage['sizes']['grid-image-thumb-xl']; ?> 768w, <?php echo $videoBlockItemImage['sizes']['grid-image-thumb-sm']; ?> 400w" sizes="768px">
								<?php endif; ?>
								<?php if( $videoBlockItemTitle ): ?>
								<div class="content">
									<h3 class="title"><?php echo $videoBlockItemTitle; ?></h3>
								</div>
								<?php endif; ?>
								<div class="loader"></div>
								<video  muted="" playsinline="" loop="" preload="metadata" src="<?php echo $blockVideo; ?>">
								</video>
							</a>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
