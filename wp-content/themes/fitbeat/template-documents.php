<style>
body {
	display:none;
}
body.show-content{
	display:block;
}
</style>
<?php

/*
Template Name: Document Template
*/

get_header();
?>
<div class="page page-doc">
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
				comments_template();
		endif;

	endwhile; // End of the loop.
	?>
</div>
<?php
get_footer();
?>
<script>
jQuery(window).load(function(){
	var sPageURL = window.location.search.substring(1),
		splitparameter = sPageURL.split("?");
	if(splitparameter == 'minView'){
		jQuery('body > div[style*="display: block !important;"]').remove();
		jQuery('body').addClass('show-content');
	} else {
		jQuery('body').addClass('show-content');
	}
});
</script>