<?php

/*
Template Name: Default with plan
*/

get_header();
?>
<div class="page">
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
			<div class="membership-wrap padding-top">
				<div class="plan-item-list">
					<div class="flex-container">
						<div class="plan-item">
							<div class="plan-item-content hightlight-wrap">
								<div class="highlight bg-primary">
									Brand new
								</div>
								<div class="item-title">
									<h3>Outdoor Bootcamp</h3>
								</div>
								<div class="price-wrap">
									<div class="price">
										<div class="promo">Special Offer</div>
										<span>$30</span> /week
									</div>
								</div>
								<div class="item-desc">
									<p>Limited spots available. Limit of 10 people per class.</p>
								</div>
								<div class="item-btn">
									<a href="https://app.fitbeat.com/api/payment-router/bootcamp-barangaroo?coupon=" class="btn btn--primary" target="_blank">Buy Now 
										<svg width="14px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
									</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>
<style>
	.membership-wrap.padding-top {
		padding-top: 40px;
		max-width: 1070px;
	}
	.plan-item .price-wrap .price:first-child {
		text-align: right;
	}
	.btn.btn-challenge {
		display:none;
	}
	.flex-content {
		display:flex;
	}
	.flex-content .col {
		width: 62%;
	}
	.flex-content .col img {
		margin-bottom: 20px;
		border: 2px solid rgb(96, 96, 96);
	}
	.flex-content .col:last-child {
		padding: 20px 0 0 30px;
		max-width: 440px;
	}
	.video-div {
		background-color: red;
		width: 100%;
		padding-top: 100%; /* 1:1 Aspect Ratio */
		position: relative; /* If you want text inside of it */
		overflow: hidden;
	}
	.video-div  embed {
		position: absolute;
		top: 0;
		left: 0;
		height:100%;
		width: 100%;
	}
	@media screen and (min-width: 1320px) {
		.flex-content .col:first-child {
			min-width: 700px;
		}
	}
	@media screen and (max-width: 800px) {
		.flex-content {
		flex-direction: column;
	}
	.flex-content .col {
		width: 100%;
	}
	.flex-content .col:last-child {
		width: 100%;
		padding: 30px 0 0;
		max-width: 100%;
	}
	}
</style>