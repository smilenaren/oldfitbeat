<?php
/*
Template Name: excercise-tutorial-page
*/
?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php
      if(has_post_thumbnail()) {
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      } else {
      }
      ?>
  <?php get_header('faq'); ?>
      <div class="faq-body exercise-wrapper">
        <div class="sidebar exercise-sidebar columns">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'menu-5',
              'menu_id'        => 'help-menu',
            ) );
            ?>
        </div>
        <div class="faq-content exercise-contents columns" style="padding:0px">
			<h2 class="h1 article-title" style="display: none">
				<?php the_title(); ?>
			</h2>

			<?php
				// get all uploaded images
				$query_images_args = array(
					'post_type'      => 'attachment',
					'post_mime_type' => 'image',
					'post_status'    => 'inherit',
					'posts_per_page' => - 1,
				);
				$query_images = new WP_Query($query_images_args);
			?>
			<?php
				// get the images for this excercise, based on the title of the page
				$title = str_replace(" ", "-", get_the_title());
				$match_m = "/\/$title.?-[0-9].(jpg|png)$/i";
				$match_d = "/\/$title.?-step-[0-9].(jpg|png)/i";

				$matching_mobile = array();
				$matching_desktop = array();
				foreach ($query_images->posts as $image) {
				    //var_dump($image);
				    //die;
					$url = wp_get_attachment_url($image->ID);
				//	echo $url;
					if (preg_match($match_m, $url)) {
					   // echo $match_m.'<br/>'; echo $url; die;
						// this is the small image
						array_push($matching_mobile, $url);
					} else if (preg_match($match_d, $url)) {
						// this is a matching large image
						array_push($matching_desktop, $url);
					}
				}
			?>
			<?php
				// sort the images.
				// todo: this is sorting on url, which includes the upload month, so uploading step 1
				// in a following month will cause it to be last
				sort($matching_mobile,  SORT_NATURAL | SORT_FLAG_CASE);
				sort($matching_desktop, SORT_NATURAL | SORT_FLAG_CASE);
			?>
			<?php
			//	var_dump($matching_desktop);
			?>
			<div class="debug">
			<?php
			    // build an array of [alt-text, small image url, large image url] for each image
			    // and do some basic validation

				if (sizeof($matching_mobile) != sizeof($matching_desktop)) {
					echo "<p>different number of images for mobile (";
					echo sizeof($matching_mobile);
					echo ") and desktop (";
					echo sizeof($matching_desktop);
					echo ")</p>";
				} else if (sizeof($matching_mobile) == 0) {
					echo "<p>there are no images for this exercise</p>";
				}

				$carousel_images = array();
				foreach ($matching_mobile as $index => $image_url) {
					$name = $index + 1;

					$alt = get_the_title() . " $name";
					$desktop_image = $matching_desktop[$index];
					
					if (preg_match("/-$name.(jpg|png)$/i", $image_url) == 0) {
						echo "<p>mobile image '$image_url' is not for step $name</p>";
					}
					if (preg_match("/-step-$name.(jpg|png)$/i", $desktop_image) == 0) {
						echo "<p>desktop image '$desktop_image' is not for step $name</p>";
					}

					array_push($carousel_images, array($alt, $image_url, $desktop_image));
				}
			?>
			</div>

          	<div class="owl-carousel">
			  <?php
				foreach ($carousel_images as $carousel_item) {
				  echo "<div>";
				  echo "  <picture>";
				  echo "    <source media='(min-width: 640px)' srcset='$carousel_item[2]'>";
				  echo "    <img src='$carousel_item[1]' alt='$carousel_item[0]' >";
				  echo "  </picture>";
				  echo "</div>";
				}
			  ?>
			</div>
			
		  <style>
			@media screen and (max-width: 0em), screen and (min-width: 40em) {
  				.show-for-small-only {
    				display: none !important; 
				} 
			}
			  
			  .bottom-middle {
				position: absolute;
				top: calc(88vh);
				z-index: 1;
				width: 100%;
				text-align: center;
			  }

@media screen and (min-width: 640px) {
	.owl-prev {
		top: 50%; 
	}
	.owl-next { 
		top: 50%; 
	}
}
@media screen and (max-width: 639px) {
	.owl-prev {
		top: 350px; 
	}
	.owl-next { 
		top: 350px; 
	}
}



		  </style>
          <div class="show-for-small-only text-center bottom-middle" >
             	<a href="<?php echo site_url(); ?>/exercise-guide/"><b>Back to Basic Exercise Guide</b></a>
          </div>			

		</div>
      </div>
    </div>
	<script type='text/javascript' src='https://stage.gyrovi.com/fitbeat/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/what-input.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/all.js"></script>
    <script>
	  jQuery(document).ready(function(){
	  	var base_Url = '<?php echo get_stylesheet_directory_uri(); ?>';
		jQuery(".owl-carousel").owlCarousel({
			items: 1,
			nav: true,
			margin: 10,
			dots: false,
			navText: ['<img src="'+ base_Url+ '/img/chevron3xleft.png"></img>', '<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/chevron3xright.png"></img>'],
		});
		jQuery(document).ready(function(){
         var winWidth = jQuery(window).width();
        
        jQuery('.menu-item-has-children > a').on('click', function(event){
          if(jQuery(this).parent().hasClass('current-menu-parent') || winWidth <= 768 ){
          
              event.preventDefault();
              if(jQuery(this).hasClass('is-open')){
            jQuery('.menu-item-has-children > a').removeClass('is-open');
            jQuery(this).next('ul.sub-menu').stop().slideUp();
          }
          else{
            
            jQuery('.menu-item > a').removeClass('is-open');
            jQuery(this).addClass('is-open');
            jQuery('.menu-item-has-children > a').next('ul.sub-menu').stop().slideUp();
            jQuery(this).next('ul.sub-menu').stop().slideDown();
          }
          
          }
        });
        jQuery('li.menu-item-has-children').each(function(){
          var url = jQuery(this).find('.sub-menu li').first().find('a').attr("href");
          jQuery(this).find('a').first().attr('href',url);
        });
        jQuery('li.current-menu-parent > a, li.current-menu-item > a').addClass('is-open').next('ul.sub-menu').stop().slideDown();
      });
	  });
    </script>
  </body>
    <?php endwhile; ?>
  <?php else: ?>
<?php include(TEMPLATEPATH.'/searchform.php'); ?>
    <?php endif; ?>
