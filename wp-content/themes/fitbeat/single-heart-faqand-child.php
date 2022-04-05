<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php
      if(has_post_thumbnail()) {
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      } else {
      }
      ?>
  <?php get_header('faq'); ?>
      <div class="faq-body single heart-faqios" style="color:black">
        <div class="sidebar columns">
        <div class="h1 faq-title">
            <?php the_content(); ?>
      </div>

      <?php
      //$current_id = $wp_query->get_queried_object_id();
      $current_id = get_the_ID();
      $parent_id = wp_get_post_parent_id($current_id);
      ?>
      <?php if( have_rows('faq_item') ): ?>
    <ul id="help-menu" class="menu">
    <?php while( have_rows('faq_item') ): the_row();
        ?>
        <li class="menu-item menu-item-has-children current-menu-parent">
            <a href="javascript:;"><?php the_sub_field('faq_title'); ?></a>
            <div class="sub-menu faq-content-wrap" style="display:none;">
              <?php the_sub_field('faq_description'); ?>
            </div>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>
<!-- <div class="back-btn" style="margin-top:10px;">
              <a class="text-orange" target="_top" href="<?php echo get_permalink($parent_id);?>">
              <svg width="10px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 15"><defs><style>.cls-1{fill:#ff621d;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path id="Rectangle-Copy-13" class="cls-1" d="M12,0,6.76,7.56,12,15H5.44L0,7.5,5.44,0Z"/></g></g></svg>
              Back</a>
          </div> -->
    </div>
      </div>
    </div>
    <script type='text/javascript' src='https://stage.gyrovi.com/fitbeat/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/what-input.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/foundation.min.js"></script>
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
     var winWidth = jQuery(window).width();
    if(winWidth <= 643){
      jQuery(".back-btn").hide();
    }
    jQuery(".exercise-wrapper .owl-carousel .owl-item img").css('height', 'calc(100vh - 48px)');
  }

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
  jQuery(this).next('.sub-menu').stop().slideUp();
  }
  else{

  jQuery('.menu-item > a').removeClass('is-open');
  jQuery(this).addClass('is-open');
  jQuery('.menu-item-has-children > a').next('.sub-menu').stop().slideUp();
  jQuery(this).next('.sub-menu').stop().slideDown();
  }
  }

});
jQuery('li.menu-item-has-children').each(function(){
var url = jQuery(this).find('.sub-menu li').first().find('a').attr("href");
jQuery(this).find('a').first().attr('href',url);
});
//jQuery('li.current-menu-parent > a, li.current-menu-item > a').addClass('is-open').next('.sub-menu').stop().slideDown();
});
</script>
  </body>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/faq-new.css?v=1.1" media="screen" rel="stylesheet"/>
    <?php endwhile; ?>
  <?php else: ?>
<?php include(TEMPLATEPATH.'/searchform.php'); ?>
    <?php endif; ?>

