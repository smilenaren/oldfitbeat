<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fitbeat
 */

?>
<section class="page page-category">
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
				</div>
				
			</div> -->
			<video class="block__video-item" controls autoplay loop >
				<source src="<?php the_field('block_video'); ?>" type="video/mp4">
			</video>
			<?php endif; ?>
		</div>
	</div>
	<div class="layout__container">
		<div class="inner">
			<?php if( have_rows('tab_content_item') ): ?>
			<div class="tab-menu-holder content--grid">
				<div class="tab-menu lists">
					<div class="flex-container">
						<?php $count = 1;?>
						<?php while( have_rows('tab_content_item') ): the_row(); 

						// vars
						$thumbnail = get_sub_field('tab_menu_image_thumbnail');
						$gif_image = get_sub_field('tab_menu_gif');
						$title = get_sub_field('tab_menu_title');
						$sub_title = get_sub_field('tab_menu_sub_title');
						$Tabvideo = get_sub_field('tab_menu_video');

						?>
						<div class="item viewBox">
							<a href="#" data-tab="tab-<?php echo $count; ?>" class="link-holder">
								<?php if( $thumbnail ): ?>
								<img data-video="<?php echo $Tabvideo; ?>" data-gif="<?php echo $gif_image; ?>" data-cover="<?php echo $thumbnail; ?>" src="<?php echo $thumbnail['sizes']['grid-image-thumb-l']; ?>" alt="<?php echo $title; ?>" srcset="<?php echo $thumbnail['sizes']['grid-image-thumb-xxl']; ?> 2700w, <?php echo $thumbnail['sizes']['grid-image-thumb-xl']; ?> 1920w, <?php echo $thumbnail['sizes']['grid-image-thumb-l']; ?> 1400w, <?php echo $thumbnail['sizes']['grid-image-thumb-xl']; ?> 1240w, <?php echo $thumbnail['sizes']['grid-image-thumb-xl']; ?> 768w, <?php echo $thumbnail['sizes']['grid-image-thumb-sm']; ?> 400w" sizes="768px">
								<?php endif; ?>
								<div class="loader"></div>
								<video  muted="" playsinline="" loop="" preload="metadata" src="<?php echo $Tabvideo; ?>">
								</video>
								<div class="content">
									<?php if( $title ): ?>
									<h2 class="title"><span><?php echo $title; ?></span></h2>
									<?php endif; ?>
									<?php if( $sub_title ): ?>
									<p><?php echo $sub_title; ?></p>
									<?php endif; ?>
								</div>
							</a>
						</div>
						<?php $count++; ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php if( have_rows('tab_content_item') ): ?>
	<div class="tab-content-wrapper">
		<div class="layout__container">
			<div class="inner">
				<div class="tab-content">
					<?php $count = 1;?>
						<?php while( have_rows('tab_content_item') ): the_row(); ?>
						<?php if (have_rows('layouts')): ?>
						<div class="tab-item" id="tab-<?php echo $count; ?>">
							<h2 class="popup-header"><?php the_title(); ?></h2>
							<?php while( have_rows('layouts') ): the_row();

								$tableContentTitle = get_sub_field('table_content_title');
                    			$tableContentText = get_sub_field('table_content_text_editor');

                    			$plainContentTitle = get_sub_field('plain_content_block_title');
                    			$plainContentTitleIcon = get_sub_field('plain_content_block_title_icon');
                    			$plainContentText = get_sub_field('plain_content_block_editor');

                    			$imageBlockTitle = get_sub_field('image_block_title');
							 ?>
							
							<?php if (get_row_layout() == 'table_content'): ?>
								<div class="block-content table__content">
									<?php if( $tableContentTitle ): ?>
									<h2 class="block-title"><?php echo $tableContentTitle; ?></h2>
									<?php endif; ?>
									<?php if( $tableContentText ): ?>
									<?php echo $tableContentText; ?>
									<?php endif; ?>
								</div>
							<?php endif; ?>
							<?php if (get_row_layout() == 'image_blocks'): ?>
								<?php if (have_rows('image_block_items')): ?>
									<div class="block-content image__blocks">
									<?php if( $imageBlockTitle ): ?>
									<h2 class="block-title"><?php echo $imageBlockTitle; ?></h2>
									<?php endif; ?>
									<div class="image_block_lists">
									<div class="flex-container">
									
									<?php while( have_rows('image_block_items') ): the_row();
									$imageBlockItemImage = get_sub_field('image_block_item_image');
		                    		$imageBlockItemTitle = get_sub_field('image_block_item_title');
		                    		$imageBlockItemGif = get_sub_field('image_block_item_gif');
		                    		$blockVideo = get_sub_field('image_block_item_video');
									 ?>
									<div class="item viewBox">
										<a class="link-holder" href="#">
											<?php if( $imageBlockItemImage ): ?>
											<img data-gif="<?php echo $imageBlockItemGif; ?>" data-cover="<?php echo $imageBlockItemImage; ?>" data-video="<?php echo $blockVideo; ?>" src="<?php echo $imageBlockItemImage['sizes']['grid-image-thumb-l']; ?>" alt="<?php echo $imageBlockItemTitle; ?>" srcset="<?php echo $imageBlockItemImage['sizes']['grid-image-thumb-xxl']; ?> 2700w, <?php echo $imageBlockItemImage['sizes']['grid-image-thumb-xl']; ?> 1920w, <?php echo $imageBlockItemImage['sizes']['grid-image-thumb-l']; ?> 1400w, <?php echo $imageBlockItemImage['sizes']['grid-image-thumb-xl']; ?> 1240w, <?php echo $imageBlockItemImage['sizes']['grid-image-thumb-xl']; ?> 768w, <?php echo $imageBlockItemImage['sizes']['grid-image-thumb-sm']; ?> 400w" sizes="768px">
											<?php endif; ?>
											<div class="content">
												<?php if( $imageBlockItemTitle ): ?>
												<h3 class="title"><?php echo $imageBlockItemTitle; ?></h3>
												<?php endif; ?>
											</div>
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
							<?php endif; ?>
							<?php if (get_row_layout() == 'plain_content'): ?>
								<div class="block-content plain__block">
									<?php if( $plainContentTitle ): ?>
									<h2 class="block-title <?php if( $plainContentTitle ): ?>has-icon<?php endif; ?>	">
										<?php if( $plainContentTitleIcon ): ?>
											<img class="icon" src="<?php echo $plainContentTitleIcon; ?>" alt="Icon">
										<?php endif; ?><span><?php echo $plainContentTitle; ?></span></h2>
									<?php endif; ?>
									<?php if( $plainContentText ): ?>
									<?php echo $plainContentText; ?>
									<?php endif; ?>
								</div>
							<?php endif; ?>
							<?php if (get_row_layout() == 'workout_plan'): ?>
								<?php if (have_rows('daily_plan')): ?>
									<div class="workout__plan-container">
										<div class="block-content workout__plan flex-container">
											<?php while( have_rows('daily_plan') ): the_row();
											$day = get_sub_field('daily_plan_day');
				                    		$workType = get_sub_field('daily_plan_workout_type');
				                    		$workCat = get_sub_field('workout_category');
				                    		$workManualDay = get_sub_field('daily_plan_manual_day');
				                    		$workoutInfoTxt = get_sub_field('daily_plan_info_text');
											 ?>
											 <?php if ($workType != 'Disable'): ?> 
											 <div class="item">
											 	<div class="content">
												 	<span class="day"><?php if ($day == 'Manual Date'): ?><?php echo $workManualDay; ?><?php else: ?><?php echo $day; ?><?php endif; ?>
												 		</span>
												 	<?php if ($workCat != 'FreeStyle'): ?>
												 	<span class="info <?php if ($workoutInfoTxt): ?>has-info<?php endif; ?>"><?php echo $workoutInfoTxt; ?></span>
												 	<span class="workout--cat tt">
												 		<?php if ($workCat == 'Build'): ?><img class="icon icon-white" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-build-white.png" alt="Build"><img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-build.png" alt="Build">Build<?php elseif ($workCat == 'Burn' ) : ?><img class="icon icon-white" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-burn-white.png" alt="Burn"><img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-burn.png" alt="Burn">Burn
												 			<?php endif; ?></span>
												 	<div class="workout-type text">
												 		<p>
												 		<?php echo $workType; ?>
												 		</p>
												 	</div>
												 	<?php endif; ?>
												 </div>
												 <?php if ($workCat != 'FreeStyle'): ?>
											 	<div class="image">
											 		<?php include 'content-workout-parts.php'; ?>
												</div>
												<?php endif; ?>
											 </div>
											<?php endif; ?>
											<?php endwhile; ?>
										</div>
									</div>
								<?php endif; ?>
							<?php endif; ?>
						<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<?php $count++; ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</section>