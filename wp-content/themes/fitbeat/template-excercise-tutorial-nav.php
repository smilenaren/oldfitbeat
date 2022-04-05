<?php
/*
Template Name: excercise-tutorial-nav
*/
?>
  <?php get_header('faq'); ?>
      <div class="faq-body">
		<div class="sidebar exercise-guide light large-4 columns">
		   <?php
            wp_nav_menu( array(
              'theme_location' => 'menu-5',
              'menu_id'        => 'help-menu',
            ) );
            ?>
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
    </script>
  </body>