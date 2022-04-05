<?php

/*
Template Name: Membership New
*/

get_header();
?>

<section class="page page-membership">
	<div class="layout__container">
		<div class="inner">
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						fitbeat_posted_on();
						fitbeat_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
				<?php if( get_field('page_sub_title') ): ?>
					<h2><?php the_field('page_sub_title'); ?></h2>
				<?php endif; ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fitbeat' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fitbeat' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->
		</div>
	</div>
	<?php
		//geting post data
		$post_objects = get_field('post_list');
	?>
	<div class="layout__container">
		<div class="inner">
			<div class="membership-wrap">
				<?php
				$flashimage = get_field('flash_sale_image', $post_objects->ID);
				if( !empty( $flashimage ) ): ?>
					<div class="flashsale-wrap">
						<h2><?php echo get_field('flash_sale_text', $post_objects->ID); ?></h2>
						<img src="<?php echo esc_url($flashimage['url']); ?>" alt="<?php echo esc_attr($flashimage['alt']); ?>" />
					</div>
				<?php endif; ?>
				<?php if ( get_field('all_membership_title', $post_objects->ID) || get_field('all_membership_content', $post_objects->ID)) : ?>
				<div class="plan-desc all-membership">
					<div class="plan-desc-text ul-col3">
						<?php
							if ( get_field('all_membership_title', $post_objects->ID)) :
								 echo '<h2>'. get_field ('all_membership_title', $post_objects->ID) .'</h2>';
							 endif;
						?>
						<?php
							if ( get_field('all_membership_content', $post_objects->ID)) :
								echo get_field('all_membership_content', $post_objects->ID);
							endif;
						?>
					</div>
				</div>
				<?php endif; ?>
				<?php if( have_rows('plans_repeater', $post_objects->ID) ): ?>
					<?php  $numrows = 0; ?>
					<?php while( have_rows('plans_repeater', $post_objects->ID) ): the_row(); ?>
					<?php  if ($numrows == 1) {	break;}	?>
						<div class="repeater-wrap">
							<div class="plan-desc">
								<div class="plan-title">
									<h2>
										<svg width="18px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
											<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
										</svg>
										<?php the_sub_field('plan_title'); ?>
									</h2>
								</div>
								<div class="plan-desc-content">
									<?php the_sub_field('plan_description'); ?>
								</div>
							</div>
							<div class="plan-item-list">
								<div class="flex-container">
								<?php if( have_rows('plan_item_repeater', $post_objects->ID) ): ?>
									<?php while( have_rows('plan_item_repeater', $post_objects->ID) ): the_row(); ?>
									<?php if(get_sub_field('duration_type') == 'day') {
										$duration = 'day';
									} elseif (get_sub_field('duration_type') == 'week') {
										$duration = 'week';
									} elseif (get_sub_field('duration_type') == 'month') {
										$duration = 'month';
									} elseif (get_sub_field('duration_type') == 'once-off') {
										$duration = 'once-off';
									} else {
										$duration = '';
									}
									?>

									<div class="plan-item">
										<?php
											$header_class = '';
											if(get_sub_field('header_type') != 'none') :
											$header_class = 'hightlight-wrap';
										 endif; ?>
										<div class="plan-item-content <?php echo $header_class;?>">
										 	<?php if(get_sub_field('header_type') == 'popular') : ?>
												<div class="highlight bg-white">
													Popular
												</div>
											 <?php endif; ?>
											 <?php if(get_sub_field('header_type') == 'bestvalue') : ?>
												<div class="highlight bg-primary">
													Best Value
												</div>
											 <?php endif; ?>
											<div class="item-title">
												<h3><?php the_sub_field('item_title'); ?></h3>
												<?php if ( get_sub_field('item_sub_title') ) { ?>
												<p><?php the_sub_field('item_sub_title'); ?></p>
												<?php } ?>
											</div>
											<div class="price-wrap">
											<?php
												$discount_price = get_sub_field('plan_price');
												if( $discount_price ) {
													$cut_class = ' cutline';
												} else {
													$cut_class = '';
												}
											?>
												<?php if(get_sub_field('normal_price')) : ?>
												<div class="price">
													<?php if( $discount_price ) { ?>
														<div class="normal">Normally</div>
													<?php } ?>
													<span class="<?php echo $cut_class; ?>">$<?php the_sub_field('normal_price');?></span><?php if($duration!=''):?> /<?php echo $duration; ?><?php endif; ?>
												</div>
												<?php endif ?>
												<?php if( $discount_price ) { ?>
												<div class="price">
													<?php if(get_sub_field('promotion_text')) : ?>
													<div class="promo"><?php the_sub_field('promotion_text');?></div>
													<?php endif; ?>
													<span>$<?php the_sub_field('plan_price');?></span><?php if($duration!='none'):?> /<?php echo $duration; ?><?php endif; ?>
												</div>
												<?php } ?>
											</div>
											<?php if(get_sub_field('item_description')) : ?>
											<div class="item-desc">
												<?php echo get_sub_field('item_description');?>
											</div>
											<?php endif; ?>

											<?php if(get_sub_field('item_button_text')) :
												$base_url = get_field('base_url',$post_objects->ID);
												$plan_id  = get_sub_field('plan_id');
												//$plan_id_url = 'planId='. $plan_id;
												$coupon_id  = get_sub_field('coupon_id');
												$coupon_id_url  = 'coupon='. get_sub_field('coupon_id');
												if ($plan_id) {
													$item_link = $base_url . $plan_id .'?';
												};
												if ($coupon_id) {
													$item_link = $base_url . $plan_id .'?'. $coupon_id_url;
												};
												//override the URL for 6week challenge as the URL is different for this https://challenge.fitbeat.com/Checkout
												if ($plan_id == '6-week-challenge'){
												    $item_link = 'https://challenge.fitbeat.com/Checkout';
												}
											?>

											<div class="item-btn">
												<a href="<?php echo $item_link;?>" class="btn btn--primary" target="_blank"><?php echo get_sub_field('item_button_text');?>
												<svg width="12px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
											<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
										</svg>
											</a>
											<?php endif; ?>
											</div>
										</div>
									</div>
									<?php endwhile;
								endif; ?>
								</div>
							</div>
							<div class="class-time-wrapper plan-desc">
								<a href="javascript:;" class="btn btn-outline btn-dropdown open">
									<span class="open-text"><?php echo the_sub_field('open_class_time_drop_down'); ?></span>
									<span class="close-text"><?php echo the_sub_field('close_class_time_drop_down'); ?></span>
									<span class="arrow-icon">
										<span class="left-bar"></span>
										<span class="right-bar"></span>
									</span>
								</a>
								<div class="plan-class-time dropdown-content">
									<?php if( get_sub_field('class_time_description')) : ?>
								    <div class="time-description">
                                        <?php the_sub_field('class_time_description'); ?>
                                    </div>
									<?php endif; ?>
									<div class="flex-container">
										<?php the_sub_field('class_time_content'); ?>
									</div>
								</div>
							</div>
						</div>
						<?php  $numrows++; ?>
					<?php endwhile;
					endif;
				?>
				<div class="repeater-wrap">
					<div class="plan-desc">
						<div class="plan-title">
							<h2>
								<svg width="18px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
								</svg>
								Home training membership Plans
							</h2>
						</div>
						<div class="btn-wrap">
							<a class="btn btn--primary btn--medium" href="<?php echo get_site_url(); ?>/home-training/#scrollplans"><span>See Home Training </span>
								<svg width="12px" height="15px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>
<script>
//get url
var getUrlParameter = function getUrlParameter(sParam) {
	var sPageURL = window.location.search.substring(1),
		sURLVariables = sPageURL.split('&'),
		sParameterName,
		i;

	for (i = 0; i < sURLVariables.length; i++) {
		sParameterName = sURLVariables[i].split('=');

		if (sParameterName[0] === sParam) {
			return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
		}
	}
};
//cookie create function
function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}
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
//cookie erase function
function eraseCookie(name) {
	createCookie(name,"",-1);
}
jQuery(document).ready(function(){
	var precode = getUrlParameter('continueSignupToken');
	if(precode !== undefined){
		var cookie_value = precode;
		eraseCookie('token');
		createCookie('token' ,cookie_value, 1); // 86400 = 1 day

		jQuery('.item-btn .btn').each(function( index, value ) {
			var _href = jQuery(this).attr('href');
			var _newHref = _href + '&continueSignupToken=' + precode;
			jQuery(this).attr('href', _newHref);
		});
	} else if (readCookie('token') !== null ){
		jQuery('.item-btn .btn').each(function( index, value ) {
			var _href = jQuery(this).attr('href');
			var _newHref = _href + '&continueSignupToken=' + readCookie('token');
			jQuery(this).attr('href', _newHref);
		});
	}
	var userid = getUrlParameter('userId');
	if(userid !== undefined){
		var cookie_value_user = userid;
		eraseCookie('user');
		createCookie('user' ,cookie_value_user, 1); // 86400 = 1 day

		jQuery('.item-btn .btn').each(function( index, value ) {
			var _href = jQuery(this).attr('href');
			var _newHref = _href + '&userId=' + userid;
			jQuery(this).attr('href', _newHref);
		});
	} else if (readCookie('user') !== null ){
		jQuery('.item-btn .btn').each(function( index, value ) {
			var _href = jQuery(this).attr('href');
			var _newHref = _href + '&userId=' + readCookie('user');
			jQuery(this).attr('href', _newHref);
		});
	}
	var errorMsg = getUrlParameter('errorMessage');
	if(errorMsg !== undefined){
		//jQuery('.errorMsg').append(errorMsg).addClass('active');
	};
	jQuery('.free_trial-btn').hide();
});
</script>
<style>
.promo {
	text-align: center;
}
.plan-item-list .plan-item:last-child {
	display: flex;
}
.plan-item-list .flex-container {
	margin-left: -12px;
	margin-right: -12px;
}
.plan-item-list .plan-item {
	padding-left: 12px;
	padding-right: 12px;
}
.plan-item-content {
	padding-left: 15px;
	padding-right: 15px;
}
.plan-item .price-wrap .price {
	white-space: nowrap;
}
.plan-item .item-desc ul {
	padding: 0;
	margin: 0;
	font-size: 14px;
	line-height: 1.2;
	list-style: none;
}
.plan-item .item-desc ul li{
	margin-bottom: 5px;
	padding-left: 14px;
    position: relative;
}
.plan-item .item-desc ul li:before {
    content: '';
    position: absolute;
    top: 4px;
    left: 0;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 4px 0 4px 7px;
    border-color: transparent transparent transparent #ffffff;
}
@media screen and (min-width: 769px) {
		body #page {
			padding-bottom: 10px;
		}
	}
.btn-right {
	float: right;
	margin-bottom: 10px;
	padding-right: 10px;
	padding-left: 10px;
}
.time-description p:first-child{
	margin: 0;
}
.time-description p{
	margin-top: 10px;
}
.plan-class-time {
	display:block;
}
.btn.btn--small.btn-right  {
	font-size: 12px;
}
.flashsale-wrap h2 {
	max-width: 100%;
}
.plan-item .price-wrap .price:nth-child(2){
	text-align: right;
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
	.errorMsg.active {
		font-size: 20px;
		margin-bottom: 20px;
		border: 1px solid #ff621d;
		padding: 7px 10px 10px;
		color: #ff621d;
	}
</style>