<?php
/*
Template Name: Wizard Challenge
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Barlow:400,400i,500,700,800,800i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:700&display=swap" rel="stylesheet">
	<script src="https://embed.cogsworth.com/1.0.1/index.min.js"></script>
   <script src="https://www.googleoptimize.com/optimize.js?id=OPT-NCXC782"></script>
   <!-- Hotjar Tracking Code for fitbeat.com -->
	<script>
	(function(h,o,t,j,a,r){
	h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	h._hjSettings={hjid:1862738,hjsv:6};
	a=o.getElementsByTagName('head')[0];
	r=o.createElement('script');r.async=1;
	r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	a.appendChild(r);
	})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
	<?php wp_head(); ?>
	<link rel="stylesheet"  href="<?php echo get_template_directory_uri()?>/css/wizard.css" media="all">
</head>
<body data-hardypress="1" class="wizard__template">
   <div class="preloader"></div>
   <div id="page" class="site">
         <header id="masthead" class="site__header">
            <div class="layout__container">
            <div class="site__branding">
               <div class="grid--table">
                  <div class="grid__item">
                     <div class="flex-logo">
                        <a href="#" class="custom-logo-link" rel="home">
                           <img width="470" height="178" src="https://www.fitbeat.com/wp-content/uploads/2019/07/fitbeat_logo_header.png" class="custom-logo" alt="Fitbeat">
                           </a>
                           <span class="site__title">
                              <a href="#" rel="home">Fitbeat</a>
                           </span>
                           <span class="site__description">gym smart</span>
                           <div class="logo-text">
								Challenge<br>Wizard
                              </div>
                           </div>
                        </div>
                        <div class="grid__item">
                           <div class="header__info">
                              <div class="call-div hide-mobile">
                                 <p>
                                    <i class="icon-telephone"></i>
                                    <a href="tel:(02) 9160 7692">(02) 9160 7692</a>
                                 </p>
                                 <p>
                                    <i class="icon-map"></i>
                                    <span>118 SUSSEX ST, SYDNEY, CBD</span>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
</div>
               </header>
               <div id="content" class="site-content">
                     <div class="wizard">
                        <div class="layout__container ">
                           <div class="wizard__bg-img">
                              <div class="wizard__container">
                                 <div class="wizard__heading">
                                    <div class="wizard__survey-running">
                                       <h2>WANT TO RECLAIM YOUR BODY?</h2>
                                       <h3>FIND OUT <strong>EXACTLY</strong> WHAT TYPE OF <strong>TRAINING, NUTRITION</strong> & <br><strong>TRACKING</strong> IS RIGHT FOR YOU!</h3>
                                    </div>
                                    <div class="wizard__survey-complete">
                                       <h2>ALL DONE!</h2>
                                    </div>
                                 </div>
                                 <div class="wizard__body">
                                    <div class="wizard__slider">
                                          <div class="wizard__item">
                                             <div class="wizard__que">
                                                <h4>1. Enter your gender:</h4>
                                             </div>
                                             <ul class="wizard__ans">
                                                <li><span>A</span><strong>Male</strong></li>
                                                <li><span>B</span><strong>Female</strong></li>
                                             </ul>
                                          </div>
                                          <div class="wizard__item">
                                             <div class="wizard__que">
                                                <h4>2. Enter your age:</h4>
                                             </div>
                                             <ul class="wizard__ans">
                                                <li><span>A</span><strong>18 - 30</strong></li>
                                                <li><span>B</span><strong>31 - 45</strong></li>
                                                <li><span>c</span><strong>46 - 60</strong></li>
                                             </ul>
                                          </div>
                                          <div class="wizard__item">
                                             <div class="wizard__que">
                                                <h4>3. Enter your activity Level:</h4>
                                             </div>
                                             <ul class="wizard__ans">
                                                <li><span>A</span><strong>Low</strong></li>
                                                <li><span>B</span><strong>Moderate</strong></li>
                                                <li><span>c</span><strong>High</strong></li>
                                             </ul>
                                          </div>
                                          <div class="wizard__item">
                                             <div class="wizard__que">
                                                <h4>4. Enter what appeals most:</h4>
                                             </div>
                                             <ul class="wizard__ans">
                                                <li><span>A</span><strong>To get strong & muscular</strong></li>
                                                <li><span>B</span><strong>To get fitter & thinner</strong></li>
                                                <li><span>c</span><strong>To get stronger & thinner</strong></li>
                                             </ul>
                                          </div>
                                          <div class="wizard__item">
                                             <div class="wizard__que">
                                                <h4>5. Enter your training activities in past 12 months:</h4>
                                             </div>
                                             <ul class="wizard__ans">
                                                <li><span>A</span><strong>Cardio</strong></li>
                                                <li><span>B</span><strong>Weight training</strong></li>
                                                <li><span>c</span><strong>Both</strong></li>
                                                <li><span>D</span><strong>None</strong></li>
                                             </ul>
                                          </div>
                                          <div class="wizard__item">
                                             <div class="wizard__que">
                                                <h4>Wizard complete!</h4>
                                             </div>
                                             <a class="btn btn--primary btn-see-result" href="#">
                                                <span>See your results</span>
                                                <svg width="17px" height="16px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
                                                </svg>
                                             </a>
                                          </div>
                                          <div class="wizard__item">
                                             <div class="wizard__result-title">
                                                <h4>WE RECOMMEND THE FOLLOWING  FITNESS GOAL FOR YOU:</h4>
                                             </div>
                                             <div class="wizard__result">
                                                <div class="wizard__result-item" id="wizard-result-1">
                                                   <div class="wizard__result-icon">
                                                      <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/icon-muscle.png" alt="Icon">
                                                   </div>
                                                   <div class="wizard__result-goal">
                                                      <h2>Muscle and Strength</h2>
                                                   </div>
                                                </div>
                                                <div class="wizard__result-item" id="wizard-result-2">
                                                   <div class="wizard__result-icon">
                                                      <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/thin.png" alt="Lean and Fit">
                                                   </div>
                                                   <div class="wizard__result-goal">
                                                      <h2>Lean and Fit</h2>
                                                   </div>
                                                </div>
                                                 <div class="wizard__result-item" id="wizard-result-3">
                                                   <div class="wizard__result-icon">
                                                      <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/allrounder.png" alt="ALL ROUNDER">
                                                   </div>
                                                   <div class="wizard__result-goal">
                                                      <h2>ALL ROUNDER</h2>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="wizard-footer">
                        <div class="layout__container">
                        <div class="button-holder">
                           <div class="flex-container">
                              <a class="btn btn--primary pulse-button" href="<?php echo get_site_url(); ?>/home-training/">
                                 <span>6 week <br>home challenge</span>
                                 <svg width="17px" height="16px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
                                 </svg>
                              </a>
                              <a class="btn btn--primary pulse-button" href="<?php echo get_site_url(); ?>/studio-training/challenge/">
                                 <span>6 week <br>studio challenge</span>
                                 <svg width="17px" height="16px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
                                 </svg>
                              </a>
                              <a class="btn btn--primary active" href="<?php echo get_site_url(); ?>/discovery-call/">
                                 <span>Book a discovery <br>phone call</span>
                                 <svg width="17px" height="16px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                     <img class="wizard-footer__ftr-img" src="<?php echo get_template_directory_uri(); ?>/img/img5.png" alt="">
                     <div class="wizard-footer-call">
                                <div class="call-div">
                                 <p>
                                    <i class="icon-telephone"></i>
                                    <a href="tel:(02) 9160 7692">(02) 9160 7692</a>
                                 </p>
                                 <p>
                                    <i class="icon-map"></i>
                                    <span>118 SUSSEX ST, SYDNEY, CBD</span>
                                 </p>
                              </div>
                           </div>
                     </div>
                  </div>
                </div>
<!-- <script src="https://www.fitbeat.com/wp-content/themes/fitbeat/js/customizer.js"></script> -->
<script>
   jQuery(document).ready(function($){
      $(".preloader").addClass('hide'); // this is from customizer.js. Please remove this line after integrating to wordpress
      var counter = 1;
      var final_ht = 0;
      var data = [];
      $('.wizard__body').height($('.wizard__item:first').outerHeight(true));
      $('.wizard__ans li, .btn-see-result').click(function(){
         var _this = $(this);
         // Selected data
         if(_this.parent().hasClass('wizard__ans')){
            data[counter - 1] = _this.find('strong').text();
         }
         // Final Result
         if(_this.hasClass('btn-see-result')){
            wizardRule(data);
         }
         // slideup animation
         _this.addClass('active').delay(350).queue(function(){
               var item_ht = _this.parents('.wizard__item').outerHeight(true) + 1;
               final_ht = final_ht + item_ht;
               $('.wizard__slider').animate({
                  'top':-final_ht
               },300);
               counter++;
               $('.wizard__item').removeClass('active');
               $('.wizard__item:nth-child('+counter+')').addClass('active');
               var current_ht =  $('.wizard__item.active').outerHeight(true);
               $('.wizard__body').height(current_ht);
               $('.wizard__item:nth-child('+counter+')').addClass('active');
               // change header on next step after clicking button(See result).
               if(_this.hasClass('btn-see-result')){
                  $('.wizard__survey-running').hide();
                  $('.wizard__survey-complete').show();
               }
         }) // queue end
      }) // click end
	  if($(window).width() > 767){
			$(window).resize(function(){
				$('.wizard__body').height($('.wizard__item:first').outerHeight(true));
			})
		}
       function wizardRule(data){
            if(data.indexOf("To get strong & muscular") > -1){
               $('#wizard-result-1').show();
            }else if(data.indexOf("To get fitter & thinner") > -1){
               $('#wizard-result-2').show();
            }else if(data.indexOf("To get stronger & thinner") > -1){
               $('#wizard-result-3').show();
            }
       }
   })
</script>
</body></html>