<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fitbeat
 */
/* Template Name: Step Form*/
get_header('stepform');
?>

<main class="stepform__wrapper">
	<section class="content__wrapper">
		<div class="stepform__wrap__main">
			<div class="main-wrapper main-form active">
				<div class="mainform-step mainform-wrap active">
					<h2>Enter your details</h2>
					<?php echo do_shortcode ('[contact-form-7 id="3005" title="plan form" html_class="plan-form"]') ?>
					<!-- <form id="step-form" action="">
						<ul>
							<li>
								<label>Name <span>*</span></label>
								<input type="text" id="name" name="name" required>
							</li>
							<li>
								<label>Email <span>*</span></label>
								<input type="email" id="email" name="email" required>
							</li>
							<li>
								<label>Phone <span>*</span></label>
								<input type="tel" id="phone" name="phone" required>
							</li>
							<li>
								<input type="submit" id="submit-btn" value="See if you qualify">
							</li>
						</ul>
					</form> -->
				</div>
			</div>
			<!-- #mainform -->
			<div class="main-wrapper">
				<div class="bg-white">
					<div class="steps-msg-block one">
						<h3>We’re 100% committed to getting you results, but this can only happen if you are willing to do the same.</h3>
						<h4> Please answer the following 3 questions.</h4>
					</div>
				</div>
				<div class="mainform-step step1">
					<h3>Are you ready to commit to your health <span class="dynamic-name"></span>?</h3>
					<a class="book-btn" href="#">Yes</a>
					<p class="align-center"> or </p>
					<div class="click">
						<a class="btn-color notready" href="#">No, I am not ready</a>
					</div>
				</div>
			</div>
			<!-- #mainstepform1 -->
			<div class="main-wrapper">
				<div class="bg-white">
					<div class="steps-msg-block two">
						<h2>Question 2 of 3</h2>
					</div>
				</div>
				<div class="mainform-step step2">
					<h3>Are you willing to train at least 3 times per week and to eat healthily?</h3>
					<a class="book-btn" href="#">Yes</a>
					<p class="align-center"> or </p>
					<div class="click">
									<a class="btn-color notready" href="#">No, I am not ready</a>
							</div>
				</div>
			</div>
			<!-- #mainstepform2 -->
			<div class="main-wrapper">
				<div class="bg-white">
					<div class="steps-msg-block three">
						<h2>Question 3 of 3</h2>
					</div>
				</div>
				<div class="mainform-step step3">
					<h3>If you select a callback time slot, do you promise to answer the phone when we ring you?</h3>
					<a class="book-btn" href="#">Yes</a>
					<p class="align-center"> or </p>
					<div class="click">
						<a class="btn-color notready" href="#">No, I am not ready</a>
					</div>
				</div>
			</div>
			<!-- #mainstepform3 -->
			<div class="main-wrapper">
				<div class="bg-white">
					<div class="steps-msg-block final">
						<h2>Congratulations <span class="dynamic-name"></span>!</h2>
						<h3> You qualify for the Fitbeat 6 Week Challenge. <br/>Places are limited and selling fast.</h3>
					</div>
				</div>
				<div class="mainform-step finalstage">
					<h4>The Challenge Includes: </h4>
					<ul>
						<li><i class="fas fa-angle-right"></i> 6 weeks of personalised group training</li>
						<li><i class="fas fa-angle-right"></i> Personalised meal plans &amp; recipes</li>
						<li><i class="fas fa-angle-right"></i> Home-delivered meals (optional extra)</li>
						<li><i class="fas fa-angle-right"></i> Personalised tracking uploaded to your app</li>
						<li><i class="fas fa-angle-right"></i> 3 body composition scans worth $150</li>
						<li><i class="fas fa-angle-right"></i> Tigernovo heart rate monitor worth $99</li>
						<li><i class="fas fa-angle-right"></i> 3 sets of hygienic training gloves worth $30</li>
						<li><i class="fas fa-angle-right"></i> Personal trainers in every workout</li>
						<li><i class="fas fa-angle-right"></i> Unlimited classes</li>
						<li><i class="fas fa-angle-right"></i> 1-on-1 personal trainer consultations</li>
						<li><i class="fas fa-angle-right"></i> Home workout app</li>
					</ul>
					<h5>Normally $549</h5>
					<h3>SPECIAL OFFER $274.50</h3>
					<a class="book-btn btn-url" href="https://app.fitbeat.com/api/payment-router/price_1HVCutCYhDMVLM8mBd9dEYO2?coupon=50OffCovid"><span>Checkout &amp; Secure My Place</span></a>
					<p class="align-center"> or </p>
					<div class="click">
									<a class="btn-color call-btn" href="<?php echo get_site_url();?>/discovery-call/"><span>
									SCHEDULE A 15 MIN DISCOVERY PHONE CALL</span></a>
							</div>
				</div>
			</div>
			<!-- #success -->
			<div class="main-wrapper notready-wrap">
				<div class="mainform-step">
					<p>Sorry mate. You do not qualify for the Fitbeat 6 Week Recovery Challenge. Please try us again when you are 100% ready to reclaim your health.</p>
					<a class="book-btn btn-url" href="<?php echo get_site_url();?>/studio-training/challenge/">Restart</a>
				</div>
			</div>
			<!-- #notready -->
			</div>
			<!-- #mainstepform -->
		</div><!-- #layout -->
	</section><!-- #content -->
</main>

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
<script type="text/javascript">
jQuery(document).ready(function(){
	//mainformwrap
	jQuery(document).ready(function(jQuery){
			jQuery(".wpcf7-form-control").prop('required',true);
			jQuery(".wpcf7-form").removeAttr('novalidate');
		});
	jQuery( "form" ).submit(function( event ) {

		jQuery('.main-form').fadeOut(300);
		setTimeout(function(){
			jQuery('.main-form').next('.main-wrapper').fadeIn(300);
		}, 300);
		var call_btn_url = jQuery('.call-btn').attr('href');
		var _name = jQuery('#name').val();
		var _email = jQuery('#email').val();
		var _phone = jQuery('#phone').val();
		var new_url = call_btn_url+'?phone=' + _phone + '&email=' + _email + '&name='+ _name;
		console.log(new_url);
		//jQuery('.call-btn').attr('href', new_url);
		jQuery('.dynamic-name').text(_name);
	});
    //mainformstep1
	jQuery(".book-btn:not(.btn-url)").click(function(evt){
		evt.preventDefault();
		var _this = jQuery(this);
		_this.parents('.main-wrapper').fadeOut(300);
		setTimeout(function(){
			_this.parents('.main-wrapper').next('.main-wrapper').fadeIn(300);
		}, 300);
	});
    //notready
	jQuery(".main-wrapper .click .btn-color.notready").click(function(evt){
		evt.preventDefault();
		var _this = jQuery(this);
		jQuery(this).parents(".main-wrapper").fadeOut(300);
		setTimeout(function(){
			jQuery('.notready-wrap').fadeIn(300);
		}, 300);
	});
});
</script>

