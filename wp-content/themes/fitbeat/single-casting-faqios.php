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
      <?php
      // wp_nav_menu( array(
      //   'theme_location' => 'menu-4',
      //   'menu_id'        => 'help-menu',
      // ) );
      ?>
      <h2 class="h1 faq-title">
            <?php the_title(); ?>
          </h2>

      <?php
      //$current_id = $wp_query->get_queried_object_id();
      $current_id = get_the_ID();

      $parent = new WP_Query(array(
      'post_type' => 'casting-faqios',
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
        'post_type' => 'casting-faqios',
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

        <?php


        if ($child->have_posts()) : ?>
          <?php while ($child->have_posts()) : $child->the_post();
$child_id = get_the_ID();
$sub_title = get_field('sub_title', $child_id);
            ?>
          <li id="menu-item-<?php echo $child_id; ?>" class="menu-item <?php if ($sub_title ) : ?>casting-item<?php endif;?> <?php if($current_id==$child_id){ echo ' current-menu-item';}?>">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?>
            <?php if ($sub_title ) : ?>
            <div class="sub-title"><?php echo get_field('sub_title', $child_id); ?></div>
            <?php endif; ?>
            <svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#ff621d" stroke="none"></path>
</svg>
          </a>
          </li>
          <?php endwhile; ?>
          <?php unset($child); endif; wp_reset_postdata(); ?>
        <?php endwhile; ?>
        </ul>
        <?php unset($parent); endif; wp_reset_postdata(); ?>
        <div class="text-center back-btn" style="margin-top:10px; display: none;">
              <a class="btn btn--primary btn--medium" target="_top" href="https://app.fitbeat.com/web/help/legal">Back to Help</a>
          </div>
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
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/faq-new.css" media="screen" rel="stylesheet"/>
    <?php endwhile; ?>
  <?php else: ?>
<?php include(TEMPLATEPATH.'/searchform.php'); ?>
    <?php endif; ?>

