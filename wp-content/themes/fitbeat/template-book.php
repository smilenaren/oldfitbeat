<?php

/*
Template Name: Fitness Book A Free Workout
*/

get_header();
?>
<div class="page page-book">
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
	<div class="layout__container">
		<div class="inner">
			<div class="mobile-btn-wrap btn-full-wrap">
				<?php
					if( have_rows('header_button_repeater', 'option') ):
						while( have_rows('header_button_repeater', 'option') ) :
							the_row();
							$button_text= get_sub_field('button_text_header');
							$type_link  = get_sub_field('link_type_header');
							if ($type_link == 'page') {
								$button_link  = get_sub_field('button_link_page_header');
							} elseif ($type_link == 'url'){
								$button_link  = get_sub_field('button_link_url_header');
							}
							$current_link = get_permalink();
							if( $current_link != $button_link ) :
							?>
								<a class="btn btn--primary btn--medium mobile-show" href="<?php echo esc_url( $button_link ); ?>"><?php echo $button_text;?>
									<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
									</svg>
								</a>
							<?php
							endif;
						endwhile;
					endif;
				?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>
<style>
	.btn-full-wrap {
		padding-top :20px;
	}
	.btn-full-wrap .btn {
		width: 100%;
	}
	.page-book {
		padding: 0 30px;
	}
	.btn.hide1 {
		display:none;
	}
	.page-book .layout__container{
		max-width: 1120px;
		margin: 0 auto;
		padding: 0;
	}
	.btn-right {
		float: right;
		margin-bottom: 10px;
		padding-right: 10px;
		padding-left: 10px;
	}
	.mobile-btn-wrap {
		display: flex;
		flex-wrap: wrap;
		justify-content: flex-end;
	}
	.mobile-btn-wrap .btn {
		margin-left: 0;
		margin-bottom: 10px;
	}
	.btn.btn--small {
		font-size: 12px;
	}
	.fixed_btn{
		display:none;
	}
</style>
<script>
	//cookie read function
function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

jQuery(document).ready(function(){
	if (readCookie('iframeCookie') !== null ){
		jQuery('#book-workout-form').css('opacity', 0);
		setTimeout(function() {
		var iframe_src = jQuery('#book-workout-form > iframe').attr('src');
		var _newsrc = iframe_src + readCookie('iframeCookie');
		jQuery('#book-workout-form > iframe').attr('src', _newsrc);
	}, 100);
	} else {
		jQuery('#book-workout-form').css('opacity', 1);
	}
});

jQuery(window).load(function(){
	if (readCookie('iframeCookie') !== null ){
		setTimeout(function() {
			jQuery('#book-workout-form').css('opacity', 1);
		}, 400);
	}
});
</script>