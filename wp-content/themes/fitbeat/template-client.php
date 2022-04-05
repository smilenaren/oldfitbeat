<?php

/*
Template Name: Client
*/

get_header();
?>
<section class="page page-membership page-client">
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
			</header><!-- .entry-header -->
		</div>
	</div>
	<?php 
		//geting post data
		$post_objects = get_field('post_list');
	?>
	<div class="layout__container">
		<div class="inner">
			<div class="membership-wrap">
			<?php 
				$flashimage = get_field('flash_sale_image', get_the_id());
				if( !empty( $flashimage ) ): ?>
					<div class="flashsale-wrap">
						<div class="flashsale-text">
							<?php echo get_field('flash_sale_text', get_the_id()); ?>
						</div>
						<img src="<?php echo esc_url($flashimage['url']); ?>" alt="<?php echo esc_attr($flashimage['alt']); ?>" />
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="plan-client-wrap section-client">
	<div class="layout__container ">
		<div class="inner">
		<?php
	while ( have_posts() ) :
		the_post();

		the_content();
		
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
				comments_template();
		endif;

	endwhile; // End of the loop.
	?>
			<div class="btn-wrap btn-center">
			<?php if( get_field('header_button2_switch' , 'option') ): ?>
				<a class="btn btn--primary btn--medium" href="<?php the_field('header_button2_url' , 'option')?>"><?php the_field('header_button_2_text' , 'option')?>
					<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
					</svg>
				</a>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php if( have_rows('member_repeater') ): ?>
<section class="content--grid section-client section-member">
	<div class="layout__container ">
		<div class="inner">
			<?php
				$section_title = get_field('member_title', get_the_id());
			?>
			<?php if( $section_title ): ?>
			<h2><?php echo $section_title; ?></h2>
			<?php endif; ?>
			<div class="lists">
				<?php $count = 0;?>
				<?php while( have_rows('member_repeater') ): the_row(); 

				// vars
				$thumbnail = get_sub_field('member_image');
				$title = get_sub_field('member_name');
				$sub_title = get_sub_field('member_description');
				$link_url = get_sub_field('video_link');
				$video_text = get_sub_field('video_text');
				
				?>
				<div class="item viewBox">
					<a class="link-holder" href="javascript:;" data-video-url="<?php if( $link_url ): ?><?php echo $link_url; ?><?php endif; ?>">
						<?php if( $thumbnail ): ?>
						<img  src="<?php echo $thumbnail['sizes']['grid-image-thumb-l']; ?>" alt="<?php echo $title; ?>" srcset="<?php echo $thumbnail['sizes']['grid-image-thumb-xxl']; ?> 2700w, <?php echo $thumbnail['sizes']['grid-image-thumb-xl']; ?> 1920w, <?php echo $thumbnail['sizes']['grid-image-thumb-l']; ?> 1400w, <?php echo $thumbnail['sizes']['grid-image-thumb-xl']; ?> 1240w, <?php echo $thumbnail['sizes']['grid-image-thumb-xl']; ?> 768w, <?php echo $thumbnail['sizes']['grid-image-thumb-sm']; ?> 400w" sizes="768px">
						<?php endif; ?>
						<div class="content">
							<?php if( $title ): ?>
							<h2 class="title"><span><?php echo $title; ?></span></h2>
							<?php endif; ?>
							<?php if( $sub_title ): ?>
							<p><?php echo $sub_title; ?></p>
							<?php endif; ?>
						</div>
						<?php if( $link_url ): ?>
						<div class="icon-watch">
							<span><?php echo $video_text; ?></span>
							<svg width="46px" height="45px" viewBox="0 0 46 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="PT-compare" transform="translate(-626.000000, -2392.000000)">
										<g id="Group-32" transform="translate(377.000000, 2112.000000)">
											<g id="Group-8-Copy-6" transform="translate(250.000000, 281.000000)">
												<g id="Group-6" stroke="#FF621D" stroke-width="1.6">
													<ellipse id="Oval" cx="21.8482759" cy="21.3517241" rx="21.8482759" ry="21.3517241"></ellipse>
												</g>
												<polygon id="Rectangle-Copy-13" fill="#FF621D" transform="translate(22.578947, 22.065789) rotate(-90.000000) translate(-22.578947, -22.065789) " points="15.2236842 15.6973684 22.6369112 21.2629122 29.9342105 15.6973684 29.9342105 22.6634034 22.5789474 28.4342105 15.2236842 22.6634034"></polygon>
											</g>
										</g>
									</g>
								</g>
							</svg>
						</div>
						<?php endif; ?>
					</a>
				</div>
				<?php endwhile; ?>
			</div>
		</div>	
	</div>
</section>
<?php endif; ?>
<div class="popup-overlay">
  <div class="popup-content">
    <div class="ajax-content"></div>
    <a href="javascript:;" class="video__close popup-close">
	</a>
  </div>
</div>
<?php
get_footer();
?>
<script>
	jQuery(function () {
       jQuery( ".link-holder" ).each(function(index) {
        jQuery(this).click(function (event) {
          event.preventDefault();
          var video_url = (jQuery(this).data('video-url'));
          if (video_url) {
			jQuery('.ajax-content').html('');
			jQuery('.ajax-content').prepend('<video controls autoplay><source src="'+video_url+'" type="video/mp4"></video>');
			//jQuery('.ajax-content').prepend('<iframe width="560" height="315" src="'+video_url+'?autoplay=1&loop=1&rel=0&wmode=transparent" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            jQuery("body").addClass("open");
          }
        });
    });
      
   jQuery(".popup-close").on("click", function(){
     jQuery('.ajax-content').html('');
     jQuery("body").removeClass("open");
   });
});
jQuery(document).ready(function(){
	//jQuery('.free_trial-btn').hide();
	//jQuery('.fixed_btn').hide();
	function resize_height(){
		var win_width =jQuery(window).width();
		if( win_width < 600) {
			jQuery('tr').each(function () {
				var td_height = jQuery(this).find('td:last-child').height();
				console.log(td_height);
				jQuery(this).find('td:first-child').height(td_height);
			})
		}
	}
	resize_height();
	jQuery(window).resize(function(){
		resize_height();
	})
});
</script>
<style>
body #page {
	padding-bottom: 10px;
}
.btn-right {
	float: right;
	margin-bottom: 10px;
	padding-right: 10px;
	padding-left: 10px;
	
}
.btn.btn--small.btn-right  {
	font-size: 12px;
}
.plan-item .price-wrap .price:first-child{
	order:2;
	text-align: right;
}
.mobile-btn-wrap {
		display: flex;
		flex-wrap: wrap;
		justify-content: flex-end;
	}
	.mobile-btn-wrap .btn {
		margin-left: 10px;
		margin-bottom: 10px;
	}
	.btn.btn--small {
		font-size: 12px;
	}
	.fixed_btn,
	.btn-challenge{
		/*display:none;*/
	}
	.errorMsg.active {
		font-size: 20px;
		margin-bottom: 20px;
		border: 1px solid #ff621d;
		padding: 7px 10px 10px;
		color: #ff621d;
	}
	/*popup css*/
body.open {
    overflow:hidden;
  }
  .popup-overlay {
	position: Fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.8);
    z-index: 9999;
    display: none;
    overflow-y: auto;
    padding: 0;
    z-index: 999999;
   
}
  .popup-overlay img{
   max-width: 100%; 
  }

.open .popup-overlay{
	display: flex;
  	justify-content: center;
}
.popup-overlay .popup-content {
 	padding: 0;
  	align-self: flex-start;
  	background-color: transparent;
  	box-sizing: border-box;
  	width: 100%;
  	min-height: 100vh;
  	position: relative;
}
  .popup-overlay .popup-content .ajax-content {
    min-height: 100vh;
    position: relative;
  }
  .popup-overlay .popup-content iframe,
  .popup-overlay .popup-content embed,
  .popup-overlay .popup-content video{
   height: 100%;
   width: 100%;
   position: absolute;
   left: 0;
   top: 0;
  }
  .popup-overlay .close {
	  position: absolute;
	  top: 0;
	  right: 0;
	  width: 34px;
    height: 34px;
    background-color: #fff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
@media all and (max-width: 479px) {
  .container {
    width: 100%;
  }
  .footer .container {
    width: 300px;
  }
  .section-featured-in .sixteen.columns {
    width: 100%;
  }
  .popup-overlay .popup-content,
  .popup-overlay .popup-content .ajax-content {
    /*min-height: 400px;*/
  }
  .popup-overlay .popup-content {
    align-self: center;
  }
}

</style>