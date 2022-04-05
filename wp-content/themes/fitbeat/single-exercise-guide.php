<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php
      if(has_post_thumbnail()) {
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      } else {
      }
      ?>
  <?php get_header('faq'); ?>
      <div class="faq-body exercise-wrapper single" style="color:black">
        <div class="sidebar light large-4 columns">
      <?php
      // wp_nav_menu( array(
      //   'theme_location' => 'menu-4',
      //   'menu_id'        => 'help-menu',
      // ) );
      ?>
      <?php
      //$current_id = $wp_query->get_queried_object_id();
      $current_id = get_the_ID();
      
      $parent = new WP_Query(array(
      'post_type' => 'exercise-guide',
      'post_parent' => 0,
      'order'             => 'ASC',
      'orderby'           => 'menu_order',
      'posts_per_page'    => -1
      ));
      if ($parent->have_posts()) : ?>
      <ul id="help-menu" class="menu">
      <?php while ($parent->have_posts()) : $parent->the_post(); 
$parent_id = get_the_ID();
 // $parent_id = get_the_ID();
        $child = new WP_Query(array(
        'post_type' => 'exercise-guide',
        'post_parent' => $parent_id,
        'order'             => 'ASC',
        'orderby'           => 'menu_order',
        'posts_per_page'    => -1
        ));
        $flag = 0;
        if ($child->have_posts()) {
          $flag = 1;
        }       
        ?>

      <li id="menu-item-<?php echo $parent_id; ?>" class="menu-item<?php if($parent_id == $current_id){echo ' current-menu-item';} if($flag == 1){ echo ' menu-item-has-children';}?> menu-item-<?php echo $parent_id; ?>">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?>
        </a>
        <?php
       
        
        if ($child->have_posts()) : ?>
        <ul class="sub-menu">
          <?php while ($child->have_posts()) : $child->the_post(); 
$child_id = get_the_ID();
            ?>
          <li id="menu-item-<?php echo $child_id; ?>" class="menu-item<?php if($current_id==$child_id){ echo ' current-menu-item';}?>">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </li>
          <?php endwhile; ?>
          </ul>
          <?php unset($child); endif; wp_reset_postdata(); ?>
        </li>
        <?php endwhile; ?>
        </ul>
        <?php unset($parent); endif; wp_reset_postdata(); ?>
          <div class="text-center back-btn" style="margin-top:10px; display: none;">
              <a class="btn btn--primary btn--medium" target="_top" href="https://app.fitbeat.com/web/help/legal">Back to Help</a>
          </div>    
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
        $matching_mobile_with_id = array();
        $matching_desktop_with_id = array();
        foreach ($query_images->posts as $image) {
            //var_dump($image);
            //die;
          $url = wp_get_attachment_url($image->ID);
          // var_dump($url);die();
        //  echo $url;
          if (preg_match($match_m, $url)) {
             // echo $match_m.'<br/>'; echo $url; die;
            // this is the small image
            
            array_push($matching_mobile, $url);
            $matching_mobile_with_id[] = array($image->ID, $url);
          } else if (preg_match($match_d, $url)) {
            // this is a matching large image
            array_push($matching_desktop, $url);
            $matching_desktop_with_id[] = array($image->ID, $url);
          }
        }
      ?>
      <?php
     // echo '<pre>';
    
        // sort the images.
        // todo: this is sorting on url, which includes the upload month, so uploading step 1
        // in a following month will cause it to be last
        sort($matching_mobile,  SORT_NATURAL | SORT_FLAG_CASE);
        sort($matching_desktop, SORT_NATURAL | SORT_FLAG_CASE);

        $matching_mobile_with_id_final = array();
        $matching_desktop_with_id_final = array();
        foreach ($matching_mobile as $match_mob) {
          foreach ($matching_mobile_with_id as $mob_with_id) {
            if($match_mob == $mob_with_id[1])
            {
              array_push($matching_mobile_with_id_final,$mob_with_id[0]);
              continue;
            }
          }
        }
        foreach ($matching_desktop as $match_des) {
          foreach ($matching_desktop_with_id as $des_with_id) {
            if($match_des == $des_with_id[1])
            {
              array_push($matching_desktop_with_id_final,$des_with_id[0]);
              continue;
            }
          }
        }

      //   echo "----------------------------";
      // var_dump($matching_desktop_with_id_final);
      // echo "----------------------------";
      // var_dump($matching_desktop);
      ?>
      <?php
      //  var_dump($matching_desktop);
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
        $new_carousel_images = array();
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

          //array_push($carousel_images, array($alt, $image_url, $desktop_image));
          $mob_attach_id = $matching_mobile_with_id_final[$index];
          $des_attach_id = $matching_desktop_with_id_final[$index];
          array_push($new_carousel_images, array($alt,$image_url,$mob_attach_id, $desktop_image,$des_attach_id));
        }

      ?>
      </div>

            <div class="owl-carousel">
        <?php
        if(sizeof($new_carousel_images)){
          foreach ($new_carousel_images as $carousel_item) {
           $alt_text =  $carousel_item[0];
           $mob_main_url = $carousel_item[1];
           $mobile_main_id = $carousel_item[2];
           $des_main_url = $carousel_item[3];
           $des_main_id = $carousel_item[4];
           $url1 = wp_get_attachment_image_src( $mobile_main_id, $size = 'mobile-thumb', $icon = false );
           $url2 = wp_get_attachment_image_src( $des_main_id, $size = 'ipad-thumb', $icon = false );
           $url3 = wp_get_attachment_image_src( $des_main_id, $size = 'l-desktop-thumb', $icon = false );
            // var_dump($url1[0]);
            // var_dump($url2[0]);
            // var_dump($url3[0]);
            // echo '----------------';

          // echo "<div>";
          // echo "<picture>";
          // echo "<img srcset='$url3[0] 2700w, $url2[0] 1200w, $url1[0] 639w,' src='$url2[0]' alt='$carousel_item[0]' >";
          // echo "</picture>";
          // echo "</div>";
              echo "<div>";
          echo "  <picture>";
          echo "    <source media='(min-width: 1200px)' srcset='$url3[0]'>";
          echo "    <source media='(min-width: 640px)' srcset='$url2[0]'>";
          echo "    <img src='$url1[0]' alt='$url1[0]' >";
          echo "  </picture>";
          echo "</div>";
          }
        }
        // foreach ($carousel_images as $carousel_item) {
          
        //   echo "<div>";
        //   echo "  <picture>";
        //   echo "    <source media='(min-width: 640px)' srcset='$carousel_item[2]'>";
        //   echo "    <img src='$carousel_item[1]' alt='$carousel_item[0]' >";
        //   echo "  </picture>";
        //   echo "</div>";
        // }
//         foreach ($carousel_images as $carousel_item) {
//           // var_dump($carousel_item[1]);
//           // var_dump($carousel_item[2]); die();
//           $mainUrl = $carousel_item[2];
//           $extension_pos = strrpos($mainUrl, '.'); // find position of the last dot, so where the extension starts
//           $mobilesrcset = $carousel_item[1];
//           $extension_pos1 = strrpos($mobilesrcset, '.');
// $src1 = substr($mainUrl, 0, $extension_pos) . '-1280x' . substr($mainUrl, $extension_pos);
// $src2 = substr($mainUrl, 0, $extension_pos) . '-850x' . substr($mainUrl, $extension_pos);
// $src4 = substr($mobilesrcset, 0, $extension_pos1) . '-633x781' . substr($mobilesrcset, $extension_pos1);

//         $srcsetvar = $src1. ' 2700w, '.$src1. ' 1300w, '.$src4. ' 639w';
//           echo "<div>";
//           echo "  <picture>";
         
//           echo "    <img srcset='$srcsetvar' src='$carousel_item[1]' alt='$carousel_item[0]' >";
//           echo "  </picture>";
//           echo "</div>";
//         }
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
          <div class="show-for-small-only text-center backButton" style="margin-top:10px;">
              <a class="btn btn--primary btn--medium" id="backToMenu" href="<?php echo site_url(); ?>/exercise-guide/">Back to Basic Exercise Guide</a>
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
     jQuery(document).foundation();
jQuery(document).ready(function(){
  // jQuery('div.sidebar ul.menu > li').each(function(){
  //   var checkChild = jQuery(this).find('ul.sub-menu').length;
  //   if(checkChild > 0){
  //     jQuery(this).addClass('menu-item-has-children');
  //   }
  // });

  jQuery('#backToMenu').on('click', function(e){
    e.preventDefault();
    jQuery('.sidebar').toggleClass('is-visible');
  });

if ( window.location !== window.parent.location ){
    jQuery(".back-btn").show();
    jQuery(".exercise-wrapper .owl-carousel .owl-item img").css('height', 'calc(100vh - 48px)');
     var winWidth = jQuery(window).width();
    if(winWidth <= 643){
      jQuery(".back-btn").hide();
    }
  }

  var base_Url = '<?php echo get_stylesheet_directory_uri(); ?>';
    jQuery(".owl-carousel").owlCarousel({
      items: 1,
      nav: true,
      margin: 10,
      dots: false,
      navText: ['<img src="'+ base_Url+ '/img/chevron3xleft.png"></img>', '<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/chevron3xright.png"></img>'],
    });
  jQuery("div.sidebar ul.menu ul.sub-menu li").each(function(){
    if(jQuery(this).hasClass('current-menu-item')){
      jQuery(this).parents('.menu-item').addClass('current-menu-parent');
    }
  });
var winWidth = jQuery(window).width();

jQuery('.menu-item-has-children > a').on('click', function(event){
if(jQuery(this).parent().hasClass('current-menu-parent') || winWidth <= 768 ){

event.preventDefault();
if(jQuery(this).hasClass('is-open')){
jQuery('.menu-item > a').removeClass('is-open');
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
</script>
  </body>
    <?php endwhile; ?>
  <?php else: ?>
<?php include(TEMPLATEPATH.'/searchform.php'); ?>
    <?php endif; ?>

