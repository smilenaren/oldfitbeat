<?php

/*
Template Name: Membership
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
				<div class="plan-desc all-membership">
					<div class="plan-desc-text ul-col3">
						<h2>All Memberships include:</h2>
						<ul>
							<li><strong>Personalised workouts</strong></li>
							<li><strong>Personalised nutrition</strong></li>
							<li><strong>Personalised analytics</strong></li>
							<li>Full access to all gym &amp; app features</li>
							<li>28 or 48 minute classes</li>
							<li>No joining fee</li>
							<li>Unlimited sessions</li>
						</ul>
					</div>
				</div>

				<?php //if( have_rows('plans_repeater', $post_objects->ID) ): ?>
					<?php //while( have_rows('plans_repeater', $post_objects->ID) ): the_row(); ?>
						<div class="repeater-wrap">
							<div class="plan-desc">
								<div class="plan-title">
									<h2>
										<svg width="18px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
											<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
										</svg>
										CARBON PLANS
									</h2>
								</div>
								<div class="plan-desc-content">
									<ul>
										<li><strong>CLASSES INCLUDE PERSONAL TRAINERS</strong></li>
									</ul>
									<a href="javascript:;" class="btn btn-outline btn-dropdown"><span class="change-text">View</span> carbon class times 
										<span class="arrow-icon">
											<span class="left-bar"></span>
											<span class="right-bar"></span>
										</span>
									</a>
								</div>
								<div class="plan-class-time dropdown-content">
									<div class="flex-container">
										<div class="col">
											<h3>MONDAY - THURSDAY</h3>
											<table>
												<tbody>
												<tr>
												<th>48 min class</th>
												<th>28 min class</th>
												</tr>
												<tr>
												<td rowspan="2">6:00 AM</td>
												<td>6:00 AM</td>
												</tr>
												<tr>
												<td>6:30 AM</td>
												</tr>
												<tr>
												<td rowspan="2">7:00 AM</td>
												<td>7:00 AM</td>
												</tr>
												<tr>
												<td>7:30 AM</td>
												</tr>
												<tr>
												<td rowspan="2">8:00 AM</td>
												<td>8:00 AM</td>
												</tr>
												<tr>
												<td>8:30 AM</td>
												</tr>
												<tr>
												<td rowspan="2">12:00 PM</td>
												<td>12:00 PM</td>
												</tr>
												<tr>
												<td>12:30 PM</td>
												</tr>
												<tr>
												<td></td>
												<td>1:00 PM</td>
												</tr>
												<tr>
												<td rowspan="2">5:00 PM</td>
												<td>5:00 PM</td>
												</tr>
												<tr>
												<td>5:30 PM</td>
												</tr>
												<tr>
												<td rowspan="2">6:00 PM</td>
												<td>6:00 PM</td>
												</tr>
												<tr>
												<td>6:30 PM</td>
												</tr>
												</tbody>
											</table>
										</div>
										<div class="col">
											<h3>FRIDAY</h3>
											<table>
												<tbody>
												<tr>
												<th>48 min class</th>
												<th>28 min class</th>
												</tr>
												<tr>
												<td rowspan="2">6:00 AM</td>
												<td>6:00 AM</td>
												</tr>
												<tr>
												<td>6:30 AM</td>
												</tr>
												<tr>
												<td rowspan="2">7:00 AM</td>
												<td>7:00 AM</td>
												</tr>
												<tr>
												<td>7:30 AM</td>
												</tr>
												<tr>
												<td rowspan="2">8:00 AM</td>
												<td>8:00 AM</td>
												</tr>
												<tr>
												<td>8:30 AM</td>
												</tr>
												<tr>
												<td rowspan="2">12:00 PM</td>
												<td>12:00 PM</td>
												</tr>
												<tr>
												<td>12:30 PM</td>
												</tr>
												<tr>
												<td></td>
												<td>1:00 PM</td>
												</tr>
												</tbody>
											</table>
										</div>
										<div class="col">
											<h3>SATURDAY</h3>
											<table width="0">
												<tbody>
												<tr>
												<th>48 min class</th>
												<th>28 min class</th>
												</tr>
												<tr>
												<td rowspan="2">7:00 AM</td>
												<td>7:00 AM</td>
												</tr>
												<tr>
												<td>7:30 AM</td>
												</tr>
												<tr>
												<td rowspan="2">8:00 AM</td>
												<td>8:00 AM</td>
												</tr>
												<tr>
												<td>8:30 AM</td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="plan-item-list">
								<div class="flex-container">
									<div class="plan-item">
										<div class="plan-item-content">
											<div class="item-title">
												<h3>1 Day Membership</h3>
												<p>Auto-terminates 24 hours after time of purchase.</p>
											</div>
											<div class="price-wrap">
												<div class="price">
													<span>$35 </span>/day
												</div>
											</div>
											<div class="item-desc">
												
											</div>
											<div class="item-btn">
												<a href="https://app.fitbeat.com/web/AuthLoading?planId=1-day-membership" class="btn btn--primary" target="_blank">Buy Now 
												<svg width="12px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
											<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
										</svg>
											</a>
											</div>
										</div>
									</div>
									<div class="plan-item">
										<div class="plan-item-content">
											<div class="item-title">
												<h3>Standard Membership</h3>
												<p>1 week cancellation period</p>
											</div>
											<div class="price-wrap">
												<div class="price">
													<span>$75 </span>/week
												</div>
											</div>
											<div class="item-desc">
												
											</div>
											<div class="item-btn">
												<a href="https://app.fitbeat.com/web/AuthLoading?planId=peak-standard-membership-weekly" class="btn btn--primary" target="_blank">Buy Now 
												<svg width="18px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
											<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
										</svg>
											</a>
											</div>
										</div>
									</div>
									<div class="plan-item">
										<div class="plan-item-content">
											<div class="item-title">
												<h3>3 Month Membership</h3>
											</div>
											<div class="price-wrap">
												<div class="price">
													<span>$72 </span>/week
												</div>
											</div>
											<div class="item-desc">
												<p>Includes FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
											</div>
											<div class="item-btn">
												<a href="https://app.fitbeat.com/web/AuthLoading?planId=peak-3-month-membership-weekly" class="btn btn--primary" target="_blank">Buy Now 
												<svg width="18px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
											<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
										</svg>
											</a>
											</div>
										</div>
									</div>
									<div class="plan-item">
										<div class="plan-item-content hightlight-wrap">
											<div class="highlight bg-white">
												Popular
											</div>
											<div class="item-title">
												<h3>6 Month Membership</h3>
											</div>
											<div class="price-wrap">
												<div class="price">
													<span>$69 </span>/week
												</div>
											</div>
											<div class="item-desc">
												<p>Includes FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
											</div>
											<div class="item-btn">
												<a href="https://app.fitbeat.com/web/AuthLoading?planId=peak-6-month-membership-weekly" class="btn btn--primary" target="_blank">Buy Now 
												<svg width="18px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
											<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
										</svg>
											</a>
											</div>
										</div>
									</div>
									<div class="plan-item">
										<div class="plan-item-content hightlight-wrap">
											<div class="highlight bg-primary">
												Best Value
											</div>
											<div class="item-title">
												<h3>12 Month Membership</h3>
											</div>
											<div class="price-wrap">
												<div class="price">
													<span>$65 </span>/week
												</div>
											</div>
											<div class="item-desc">
												<p>Includes FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
											</div>
											<div class="item-btn">
												<a href="https://app.fitbeat.com/web/AuthLoading?planId=peak-12-month-membership-weekly" class="btn btn--primary" target="_blank">Buy Now 
												<svg width="18px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
											<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
										</svg>
											</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php //endwhile; 
					//endif;	
				?>
				<div class="repeater-wrap">
				<div class="flex-container">
					<div class="plan-desc">
						<div class="plan-title">
							<h2>
								<svg width="14px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
								</svg>	
								Neon plans
							</h2>
						</div>
						<div class="plan-desc-content">
							<ul>
								<li><strong>CLASSES DO NOT INCLUDE PERSONAL TRAINERS</strong></li>
							</ul>
							<a href="javascript:;" class="btn btn-outline btn-dropdown"><span class="change-text">View</span> Neon class times 
								<span class="arrow-icon">
									<span class="left-bar"></span>
									<span class="right-bar"></span>
								</span>
							</a>
						</div>

						<div class="plan-class-time dropdown-content">
							<div class="flex-container">
								<div class="col">
									<h3>MONDAY - THURSDAY</h3>
									<table>
										<tbody>
										<tr>
										<th>48 min class</th>
										<th>28 min class</th>
										</tr>
										<tr>
										<td rowspan="2">10:00 AM</td>
										<td>10:00 AM</td>
										</tr>
										<tr>
										<td>10:30 AM</td>
										</tr>
										<tr>
										<td rowspan="2">11:00 AM</td>
										<td>11:00 AM</td>
										</tr>
										<tr>
										<td>11:30 AM</td>
										</tr>
										<tr>
										<td rowspan="2">2:00 PM</td>
										<td>2:00 PM</td>
										</tr>
										<tr>
										<td>2:30 PM</td>
										</tr>
										<tr>
										<td rowspan="2">3:00 PM</td>
										<td>3:00 PM</td>
										</tr>
										<tr>
										<td>3:30 PM</td>
										</tr>
										<tr>
										<td rowspan="2">4:00 PM</td>
										<td>4:00 PM</td>
										</tr>
										<tr>
										<td>4:30 PM</td>
										</tr>
										</tbody>
									</table>
								</div>
								<div class="col">
									<h3>FRIDAY</h3>
									<table>
										<tbody>
										<tr>
										<th>48 min class</th>
										<th>28 min class</th>
										</tr>
										<tr>
										<td rowspan="2">10:00 AM</td>
										<td>10:00 AM</td>
										</tr>
										<tr>
										<td>10:30 AM</td>
										</tr>
										<tr>
										<td rowspan="2">11:00 AM</td>
										<td>11:00 AM</td>
										</tr>
										<tr>
										<td>11:30 AM</td>
										</tr>
										<tr>
										<td rowspan="2">2:00 PM</td>
										<td>2:00 PM</td>
										</tr>
										<tr>
										<td>2:30 PM</td>
										</tr>
										<tr>
										<td rowspan="2">3:00 PM</td>
										<td>3:00 PM</td>
										</tr>
										<tr>
										<td>3:30 PM</td>
										</tr>
										</tbody>
									</table>
								</div>
								<div class="col">
									<h3>SATURDAY</h3>
									<table>
										<tbody>
										<tr>
										<th>48 min class</th>
										<th>28 min class</th>
										</tr>
										<tr>
										<td rowspan="2">10:00 AM</td>
										<td>10:00 AM</td>
										</tr>
										<tr>
										<td>10:30 AM</td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="plan-item-list">
						<div class="flex-container">
							<div class="plan-item">
								<div class="plan-item-content">
								<div class="item-title">
									<h3>Standard Membership</h3>
									<p>1 week cancellation period</p>
								</div>
								<div class="price-wrap">
									<div class="price">
										<span>$49 </span>/week
									</div>
								</div>
								<div class="item-desc">
									
								</div>
								<div class="item-btn">
									<a href="https://app.fitbeat.com/web/AuthLoading?planId=off-peak-standard-membership-weekly" class="btn btn--primary" target="_blank">Buy Now 
									<svg width="14px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
								</svg>
								</a>
								</div>
							</div>
							</div>
							<div class="plan-item">
								<div class="plan-item-content">
								<div class="item-title">
									<h3>3 Month Membership</h3>
								</div>
								<div class="price-wrap">
									<div class="price">
										
										<span>$47 </span>/week
									</div>
								</div>
								<div class="item-desc">
									<p>Includes FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
								</div>
								<div class="item-btn">
									<a href="https://app.fitbeat.com/web/AuthLoading?planId=off-peak-3-month-membership-weekly" class="btn btn--primary" target="_blank">Buy Now 
									<svg width="14px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
								</svg>
								</a>
								</div>
							</div>
							</div>
							<div class="plan-item">
								<div class="plan-item-content hightlight-wrap">
									<div class="highlight bg-white">
										Popular
									</div>
								<div class="item-title">
									<h3>6 Month Membership</h3>
								</div>
								<div class="price-wrap">
									<div class="price">
										
										<span>$45 </span>/week
									</div>
								</div>
								<div class="item-desc">
									<p>Includes FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
								</div>
								<div class="item-btn">
									<a href="https://app.fitbeat.com/web/AuthLoading?planId=off-peak-6-month-membership-weekly" class="btn btn--primary" target="_blank">Buy Now 
									<svg width="14px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
									<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
								</svg>
								</a>
								</div>
							</div>
							</div>
							<div class="plan-item">
								<div class="plan-item-content hightlight-wrap">
									<div class="highlight bg-primary">
										Best Value
									</div>
								<div class="item-title">
									<h3>12 Month Membership</h3>
								</div>
								<div class="price-wrap">
									<div class="price">
										
										<span>$42 </span>/week
									</div>
								</div>
								<div class="item-desc">
									<p>Includes FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
								</div>
								<div class="item-btn">
									<a href="https://app.fitbeat.com/web/AuthLoading?planId=off-peak-12-month-membership-weekly" class="btn btn--primary" target="_blank">Buy Now 
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
</section>
<div class="plan-popup-wrap">
	<div class="plan-overlay"></div>

</div>
<?php
get_footer();
?>
<script>
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
jQuery(document).ready(function(){
	var precode = getUrlParameter('continueSignupToken');
	if(precode !== undefined){
		jQuery('.item-btn .btn').each(function( index, value ) {
			var _href = jQuery(this).attr('href');
			var _newHref = _href + '&continueSignupToken=' + precode;
			jQuery(this).attr('href', _newHref);
		});
	}
});
</script>