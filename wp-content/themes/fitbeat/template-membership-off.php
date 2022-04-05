<?php

/*
Template Name: Membership 15% off
*/

get_header();
?>

<section class="page page-membership">
	<div class="layout__container">
		<div class="inner">
		<div class="mobile-btn-wrap">
		<?php if( get_field('header_button2_switch' , 'option') ): ?>
		<a class="btn btn--primary btn--small mobile-show btn-right" href="<?php the_field('header_button2_url' , 'option')?>"><?php the_field('header_button_2_text' , 'option')?>
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
				<div class="flashsale-wrap">
					<h2>15% off 6/12 month memberships. Limited time. Act fast!</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/img/offer.png" alt="Special">
				</div>
				<div class="plan-desc all-membership">
					<div class="plan-desc-text ul-col3">
						<h2>All Memberships include:</h2>
						<ul>
							<li><strong>Personalised workouts</strong></li>
							<li><strong>Personalised nutrition</strong></li>
							<li><strong>Personalised tracking</strong></li>
							<li>Full access to all gym &amp; app features</li>
							<li>28 or 48 minute classes</li>
							<li>New home workout app to supplement training</li>
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
									<a href="javascript:;" class="btn btn-outline btn-dropdown open"><span class="change-text">Hide</span> carbon class times 
										<span class="arrow-icon">
											<span class="left-bar"></span>
											<span class="right-bar"></span>
										</span>
									</a>
								</div>
								<div class="plan-class-time dropdown-content" style="display:block;">
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
												<td rowspan="2">8:00 AM</td>
												<td>8:00 AM</td>
												</tr>
												<tr>
												<td>8:30 AM</td>
												</tr>
												<tr>
												<td rowspan="2">9:00 AM</td>
												<td>9:00 AM</td>
												</tr>
												<tr>
												<td>9:30 AM</td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="plan-item-list">
								<div class="flex-container">
									<!-- <div class="plan-item">
										<div class="plan-item-content">
										
											<div class="item-title">
												<h3>1 Day Membership</h3>
												<p>Auto-terminates 24 hours after time of purchase.</p>
											</div>
											<div class="price-wrap">
												<div class="price">
													<div class="promo">Special Offer</div>
													<span>$30</span> /day
												</div>
												<div class="price">
													<div class="normal">Normally</div>
													<span class="cutline">$35</span> /day
												</div>
											</div>
											<div class="item-desc">
												
											</div>
											<div class="item-btn">
												<a href="https://app.fitbeat.com/api/payment-router/1-day-membership?coupon=15percent-flash-sale" class="btn btn--primary" target="_blank">Buy Now 
													<svg width="14px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
														<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
													</svg>
												</a>
											</div>
										</div>
									</div> -->
									<div class="plan-item">
										<div class="plan-item-content">
											<div class="item-title">
												<h3>Standard Membership</h3>
												<p>1 week cancellation period</p>
											</div>
											<div class="price-wrap">
												<div class="price">
													<span>$75</span> /week
												</div>
											</div>
											<div class="item-desc">
												<p>Includes Home Workout App</p>
											</div>
											<div class="item-btn">
												<a href="https://app.fitbeat.com/api/payment-router/peak-standard-membership-weekly?" class="btn btn--primary" target="_blank">Buy Now 
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
													<span>$72</span> /week
												</div>
											</div>
											<div class="item-desc">
												<p><strong>Includes</strong> FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
												<p>Plus new Home Workout App</p>
											</div>
											<div class="item-btn">
												<a href="https://app.fitbeat.com/api/payment-router/peak-3-month-membership-weekly?" class="btn btn--primary" target="_blank">Buy Now 
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
													<div class="promo">Special Offer</div>
													<span>$59</span> /week
												</div>
												<div class="price">
													<div class="normal">Normally</div>
													<span class="cutline">$69</span> /week
												</div>
											</div>
											<div class="item-desc">
												<p><strong>Includes</strong> FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
												<p>Plus new Home Workout App</p>
											</div>
											<div class="item-btn">
												<a href="https://app.fitbeat.com/api/payment-router/peak-6-month-membership-weekly?coupon=15percent-flash-sale" class="btn btn--primary" target="_blank">Buy Now 
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
													<div class="promo">Special Offer</div>
													<span>$55</span> /week
												</div>
												<div class="price">
													<div class="normal">Normally</div>
													<span class="cutline">$65</span> /week
												</div>
											</div>
											<div class="item-desc">
												<p><strong>Includes</strong> FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
												<p>Plus new Home Workout App</p>
											</div>
											<div class="item-btn">
												<a href="https://app.fitbeat.com/api/payment-router/peak-12-month-membership-weekly?coupon=15percent-flash-sale" class="btn btn--primary" target="_blank">Buy Now 
													<svg width="14px"  viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
													<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#fff" stroke="none"></path>
												</svg>
												</a>
											</div>
										</div>
									</div>
									<?php /*
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
								*/?>
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
							<a href="javascript:;" class="btn btn-outline btn-dropdown open"><span class="change-text">Hide</span> Neon class times 
								<span class="arrow-icon">
									<span class="left-bar"></span>
									<span class="right-bar"></span>
								</span>
							</a>
						</div>

						<div class="plan-class-time dropdown-content" style="display:block;">
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
										<span>$49</span> /week
									</div>
								</div>
								<div class="item-desc">
								<p>Includes Home Workout App</p>	
								</div>
								<div class="item-btn">
									<a href="https://app.fitbeat.com/api/payment-router/off-peak-standard-membership-weekly?" class="btn btn--primary" target="_blank">Buy Now 
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
										<span>$47</span> /week
									</div>
								</div>
								<div class="item-desc">
									<p><strong>Includes</strong> FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
									<p>Plus new Home Workout App</p>
								</div>
								<div class="item-btn">
									<a href="https://app.fitbeat.com/api/payment-router/off-peak-3-month-membership-weekly?" class="btn btn--primary" target="_blank">Buy Now 
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
										<div class="promo">Special Offer</div>
										<span>$38</span> /week
									</div>
									<div class="price">
										<div class="normal">Normally</div>
										<span class="cutline">$45</span> /week
									</div>
								</div>
								<div class="item-desc">
									<p><strong>Includes</strong> FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
									<p>Plus new Home Workout App</p>
								</div>
								<div class="item-btn">
									<a href="https://app.fitbeat.com/api/payment-router/off-peak-6-month-membership-weekly?coupon=15percent-flash-sale" class="btn btn--primary" target="_blank">Buy Now 
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
										<div class="promo">Special Offer</div>
										<span>$36</span> /week
									</div>
									<div class="price">
										<div class="normal">Normally</div>
										<span class="cutline">$42</span> /week
									</div>
								</div>
								<div class="item-desc">
									<p><strong>Includes</strong> FREE <strong>Tigernovo Heart Rate Monitor</strong> & <strong>custom boxing gloves</strong> worth $150</p>
									<p>Plus new Home Workout App</p>
								</div>
								<div class="item-btn">
									<a href="https://app.fitbeat.com/api/payment-router/off-peak-12-month-membership-weekly?coupon=15percent-flash-sale" class="btn btn--primary" target="_blank">Buy Now 
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
	jQuery('.fixed_btn').hide();
});
</script>
<style>
body #page {
	padding-bottom: 10px;
}
.btn-right {
	float: right;
	margin-bottom: 10px;
	padding-right: 10px;
	padding-left: 10px;
	
}
.btn.btn--small.btn-right  {
	font-size: 12px;
}
.flashsale-wrap h2 {
	max-width: 100%;
}
.plan-item .price-wrap .price:first-child{
	order:2;
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
	.fixed_btn{
		display:none;
	}
	.errorMsg.active {
		font-size: 20px;
		margin-bottom: 20px;
		border: 1px solid #ff621d;
		padding: 7px 10px 10px;
		color: #ff621d;
	}
</style>