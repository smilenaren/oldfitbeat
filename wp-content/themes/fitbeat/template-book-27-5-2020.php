<?php

/*
Template Name:
*/

get_header();
?>
<div class="page page-book">
	<div class="layout__container">
		<div class="inner">
			<div class="mobile-btn-wrap">
			<?php if( get_field('header_button_switch' , 'option') ): ?>
			<a class="btn btn--primary btn--small mobile-show" href="<?php the_field('header_button_link_url_desktop' , 'option')?>"><span><?php the_field('header_button_text' , 'option')?> </span>
				<svg width="10px" height="10px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
				</svg>
			</a>
			<?php endif; ?>
			<?php if( get_field('third_button_switch' , 'option') ): ?>
				<a class="btn btn--primary btn--small mobile-show btn-challenge" href="<?php the_field('third_button_url' , 'option')?>"><?php the_field('third_button_text' , 'option')?>
				<svg width="10px" height="10px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
				<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
				</svg>
				</a>
			<?php endif; ?>
			</div>
		</div>
	</div>
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
<style>
	.page-book {
		padding: 0 30px;
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
		margin-left: 10px;
		margin-bottom: 10px;
	}
	.btn.btn--small {
		font-size: 12px;
	}
	.fixed_btn{
		display:none;
	}
</style>