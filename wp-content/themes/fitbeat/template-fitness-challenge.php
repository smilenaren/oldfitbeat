<?php

/*
Template Name: Fitness Challenge
*/

get_header();
?>
<div class="page">
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content-fitness-challenge', 'page' );

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