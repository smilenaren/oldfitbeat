<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php
      if(has_post_thumbnail()) {
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      } else {
      }
      ?>
  <?php get_header('faq'); ?>
      <div class="faq-body single" style="color:black">
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
      'post_type' => 'help',
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
        'post_type' => 'help',
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
        <div class="faq-content large-8 columns">
          <h2 class="h1 article-title">
            <?php the_title(); ?>
          </h2>
          <p>
            <?php the_content(); ?>
          </p>
          <hr>
		  <style>
			@media screen and (max-width: 0em), screen and (min-width: 40em) {
  				.show-for-small-only {
    				display: none !important; 
				} 
			}
		  </style>
          <div class="show-for-small-only text-center" >
             <a class="btn btn--primary btn--medium" id="backToMenu" href="<?php echo site_url(); ?>/help-mobile"><b>Back to FAQs</b></a>
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
    <?php endwhile; ?>
  <?php else: ?>
<?php include(TEMPLATEPATH.'/searchform.php'); ?>
    <?php endif; ?>

