<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fitbeat
 */

?>
<section class="page-fitness-challenge">
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
			<?php if( get_field('header_button_switch' , 'option') ): ?>
			<a class="btn btn--primary btn--small mobile-show" href="<?php the_field('header_button_link_url_desktop' , 'option')?>"><span><?php the_field('header_button_text' , 'option')?> </span>
				<svg width="10px" height="10px" viewBox="0 0 12 15" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none" />
				</svg>
			</a>
      <?php endif; ?>
      
		
			</div>
		</div>
	</div>
	<header class="entry-header">
		<div class="layout__container">
			<h1 class="entry-title">HOW HEALTHY IS YOUR COMPANY?</h1>
			<div class="mid-line">Enter The</div>
			<div class="last-line"><div><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-fitbeat-inline.png" alt="Fitbeat Logo Inline"></div><span>corporate fitness CHALLENGE</span></div>
		</div>
	</header><!-- .entry-header -->
	<div class="sub-header">
		<div class="layout__container">
			<h2>ENERGIZE YOUR TEAM & BOOST ENGAGEMENT</h2>
		</div>
	</div>
	<div class="page-container">
		<div class="layout__container">
			<div class="grid-box-container block icon-block">
				<div class="flex-container">
					<div class="item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-single-building.png" alt="">
						<h3>Intra-Company: challenge divisions within your company</h3>
					</div>
					<div class="item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-double-building.png" alt="">
						<h3>Inter-Company: challenge other companies</h3>
					</div>
					<div class="item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-calendar.png" alt="">
						<h3>12 weeks of functional group training</h3>
					</div>
					<div class="item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-zero-perentage.png" alt="">
						<h3>Zero experience required!</h3>
					</div>
					<div class="item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-faces.png" alt="">
						<h3>We customise to each person’s skill level & fitness goal.</h3>
					</div>
					<div class="item">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-trophy.png" alt="">
						<h3>Weekly team progress reports & 3 trophies (attendance + lean muscle gain + body fat reduction)</h3>
					</div>
				</div>
			</div>
			<div class="special-offer-block block">
				<div class="special-offer-box">
					<div class="header">
						<div class="flex-container">
							<img class="offer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/badge-special-offer.png" alt="special offer">
							<div class="content">
								<h2>SPECIAL OFFER <span>LIMITED TIME</span></h2>
                <div class="flex-container flex-end">
                  <div class="offer">
                    <span>15<span class="thin-font">%</span><br>OFF</span>
                  </div>
                  <div class="offer-content">
                    <p><strong>$61 per week</strong> (normally $72)</p>
                    <p><strong>$732 full 12 weeks</strong> (normally $864)</p>
                    <h4>YOU SAVE $132</h4>
                  </div>
                </div>
							</div>
						</div>
					</div>
					<div class="content">
						<div class="flex-container flex-box">
							<h3>Includes:</h3>
							<ul>
								<li>Free Tigernovo heart rate monitor (worth $100)</li>
								<li>Free custom boxing gloves (worth $50)</li>
								<li>Monthly body scans (worth $200)</li>
								<li>Personalised workouts nutrition + stats</li>
								<li>Monthly 1-on-1 progress consultations</li>
							</ul>
							<ul>
								<li>Personal trainers in every class</li>
								<li>Weekly team dashboards</li>
								<li>Personal tracking stats in app</li>
								<li>Unlimited sessions</li>
								<li>No joining fees</li>
								<li>Recruitment presentation at your venue</li>
								<li>Award ceremony at your venue (3 trophies)</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="corporate__share--container">
<div class="layout__container">
  <div class="register-interest">
  <h2><strong>act fast! </strong>limited places</h2>
  <a class="btn btn--primary btn--big" href="https://www.fitbeat.com/corporate-fitness-challenge/">Register your interest <svg width="16px" height="18px" viewBox="0 0 12 15" version="1.1" xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
  <path d="M6.92779e-13 2.67133e-12L7.5591 5.24357L15 2.67133e-12L15 6.56304L7.5 12L8.52651e-13 6.56304L6.92779e-13 2.67133e-12Z" transform="matrix(-4.371139E-08 -1 1 -4.371139E-08 0 15)" fill="#1A1B1B" stroke="none"></path>
  </svg>
  </a>
  </div>
<div class="corporate__share--cnt">
  <h2><strong>share this page</strong> with others to build your challenge</h2>
  <ul class="corporate__share--btns a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-title="Join the Fitbeat Corporate Fitness Challenge">
    <li>
      <a href="#" class="fbs a2a_button_facebook">
      <i><svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"/></svg></i>
      <span>Share with <br>Facebook</span>
    </a>
  </li>
  <li>
      <a href="#" class="lin a2a_button_linkedin">
      <i><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="56.693px" height="56.693" viewBox="0 0 438.536 438.535" style="enable-background:new 0 0 438.536 438.535;"
   xml:space="preserve">
<g>
  <g>
    <rect x="5.424" y="145.895" width="94.216" height="282.932"/>
    <path d="M408.842,171.739c-19.791-21.604-45.967-32.408-78.512-32.408c-11.991,0-22.891,1.475-32.695,4.427
      c-9.801,2.95-18.079,7.089-24.838,12.419c-6.755,5.33-12.135,10.278-16.129,14.844c-3.798,4.337-7.512,9.389-11.136,15.104
      v-40.232h-93.935l0.288,13.706c0.193,9.139,0.288,37.307,0.288,84.508c0,47.205-0.19,108.777-0.572,184.722h93.931V270.942
      c0-9.705,1.041-17.412,3.139-23.127c4-9.712,10.037-17.843,18.131-24.407c8.093-6.572,18.13-9.855,30.125-9.855
      c16.364,0,28.407,5.662,36.117,16.987c7.707,11.324,11.561,26.98,11.561,46.966V428.82h93.931V266.664
      C438.529,224.976,428.639,193.336,408.842,171.739z"/>
    <path d="M53.103,9.708c-15.796,0-28.595,4.619-38.4,13.848C4.899,32.787,0,44.441,0,58.529c0,13.891,4.758,25.505,14.275,34.829
      c9.514,9.325,22.078,13.99,37.685,13.99h0.571c15.99,0,28.887-4.661,38.688-13.99c9.801-9.324,14.606-20.934,14.417-34.829
      c-0.19-14.087-5.047-25.742-14.561-34.973C81.562,14.323,68.9,9.708,53.103,9.708z"/>
  </g>
</g>
</svg></i>
      <span>Share with <br>Linkedin</span>
    </a>
  </li>
  <!--<li>
      <a href="#" class="ins a2a_button_instagram">
      <i><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 56.7 56.7" enable-background="new 0 0 56.7 56.7" xml:space="preserve">
<g>
  <path d="M28.2,16.7c-7,0-12.8,5.7-12.8,12.8s5.7,12.8,12.8,12.8S41,36.5,41,29.5S35.2,16.7,28.2,16.7z M28.2,37.7
    c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2S32.7,37.7,28.2,37.7z"/>
  <circle cx="41.5" cy="16.4" r="2.9"/>
  <path d="M49,8.9c-2.6-2.7-6.3-4.1-10.5-4.1H17.9c-8.7,0-14.5,5.8-14.5,14.5v20.5c0,4.3,1.4,8,4.2,10.7c2.7,2.6,6.3,3.9,10.4,3.9
    h20.4c4.3,0,7.9-1.4,10.5-3.9c2.7-2.6,4.1-6.3,4.1-10.6V19.3C53,15.1,51.6,11.5,49,8.9z M48.6,39.9c0,3.1-1.1,5.6-2.9,7.3
    s-4.3,2.6-7.3,2.6H18c-3,0-5.5-0.9-7.3-2.6C8.9,45.4,8,42.9,8,39.8V19.3c0-3,0.9-5.5,2.7-7.3c1.7-1.7,4.3-2.6,7.3-2.6h20.6
    c3,0,5.5,0.9,7.3,2.7c1.7,1.8,2.7,4.3,2.7,7.2V39.9L48.6,39.9z"/>
</g>
</svg></i>
      <span>Share with <br>Instagram</span>
    </a>
  </li>-->
  <li>
      <a href="#" class="wapps a2a_button_whatsapp">
      <i><svg height="56.693px" id="Layer_1" style="enable-background:new 0 0 56.693 56.693;" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
  .st0{fill-rule:evenodd;clip-rule:evenodd;}
</style><g><path class="st0" d="M46.3802,10.7138c-4.6512-4.6565-10.8365-7.222-17.4266-7.2247c-13.5785,0-24.63,11.0506-24.6353,24.6333   c-0.0019,4.342,1.1325,8.58,3.2884,12.3159l-3.495,12.7657l13.0595-3.4257c3.5982,1.9626,7.6495,2.9971,11.7726,2.9985h0.01   c0.0008,0-0.0006,0,0.0002,0c13.5771,0,24.6293-11.0517,24.635-24.6347C53.5914,21.5595,51.0313,15.3701,46.3802,10.7138z    M28.9537,48.6163h-0.0083c-3.674-0.0014-7.2777-0.9886-10.4215-2.8541l-0.7476-0.4437l-7.7497,2.0328l2.0686-7.5558   l-0.4869-0.7748c-2.0496-3.26-3.1321-7.028-3.1305-10.8969c0.0044-11.2894,9.19-20.474,20.4842-20.474   c5.469,0.0017,10.6101,2.1344,14.476,6.0047c3.8658,3.8703,5.9936,9.0148,5.9914,14.4859   C49.4248,39.4307,40.2395,48.6163,28.9537,48.6163z"/><path class="st0" d="M40.1851,33.281c-0.6155-0.3081-3.6419-1.797-4.2061-2.0026c-0.5642-0.2054-0.9746-0.3081-1.3849,0.3081   c-0.4103,0.6161-1.59,2.0027-1.9491,2.4136c-0.359,0.4106-0.7182,0.4623-1.3336,0.1539c-0.6155-0.3081-2.5989-0.958-4.95-3.0551   c-1.83-1.6323-3.0653-3.6479-3.4245-4.2643c-0.359-0.6161-0.0382-0.9492,0.27-1.2562c0.2769-0.2759,0.6156-0.7189,0.9234-1.0784   c0.3077-0.3593,0.4103-0.6163,0.6155-1.0268c0.2052-0.4109,0.1027-0.7704-0.0513-1.0784   c-0.1539-0.3081-1.3849-3.3379-1.8978-4.5706c-0.4998-1.2001-1.0072-1.0375-1.3851-1.0566   c-0.3585-0.0179-0.7694-0.0216-1.1797-0.0216s-1.0773,0.1541-1.6414,0.7702c-0.5642,0.6163-2.1545,2.1056-2.1545,5.1351   c0,3.0299,2.2057,5.9569,2.5135,6.3676c0.3077,0.411,4.3405,6.6282,10.5153,9.2945c1.4686,0.6343,2.6152,1.013,3.5091,1.2966   c1.4746,0.4686,2.8165,0.4024,3.8771,0.2439c1.1827-0.1767,3.6419-1.489,4.1548-2.9267c0.513-1.438,0.513-2.6706,0.359-2.9272   C41.211,33.7433,40.8006,33.5892,40.1851,33.281z"/></g></svg></i>
      <span>Share with <br>WhatsApp</span>
    </a>
  </li>
  <li>
      <a href="#" class="slink a2a_button_copy_link">
      <i><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="56px" height="56px" viewBox="0 0 465.951 465.951" style="enable-background:new 0 0 465.951 465.951;"
   xml:space="preserve">
<g>
  <path d="M441.962,284.364l-59.389-59.383c-15.984-15.985-35.396-23.982-58.238-23.982c-23.223,0-43.013,8.375-59.385,25.125
    l-25.125-25.125c16.751-16.368,25.125-36.256,25.125-59.671c0-22.841-7.898-42.157-23.698-57.958l-58.815-59.097
    c-15.798-16.178-35.212-24.27-58.242-24.27c-22.841,0-42.16,7.902-57.958,23.7L24.267,65.386C8.088,81.188,0,100.504,0,123.343
    c0,22.841,7.996,42.258,23.982,58.245l59.385,59.383c15.99,15.988,35.404,23.982,58.245,23.982
    c23.219,0,43.015-8.374,59.383-25.126l25.125,25.126c-16.75,16.371-25.125,36.258-25.125,59.672
    c0,22.843,7.898,42.154,23.697,57.958l58.82,59.094c15.801,16.177,35.208,24.27,58.238,24.27c22.844,0,42.154-7.897,57.958-23.698
    l41.973-41.682c16.177-15.804,24.271-35.118,24.271-57.958C465.947,319.771,457.953,300.359,441.962,284.364z M200.999,162.178
    c-0.571-0.571-2.334-2.378-5.28-5.424c-2.948-3.046-4.995-5.092-6.136-6.14c-1.143-1.047-2.952-2.474-5.426-4.286
    c-2.478-1.809-4.902-3.044-7.28-3.711c-2.38-0.666-4.998-0.998-7.854-0.998c-7.611,0-14.084,2.666-19.414,7.993
    c-5.33,5.327-7.992,11.799-7.992,19.414c0,2.853,0.332,5.471,0.998,7.851c0.666,2.382,1.903,4.808,3.711,7.281
    c1.809,2.474,3.237,4.283,4.283,5.426c1.044,1.141,3.09,3.188,6.136,6.139c3.046,2.95,4.853,4.709,5.424,5.281
    c-5.711,5.898-12.563,8.848-20.555,8.848c-7.804,0-14.277-2.568-19.414-7.705L62.81,142.761c-5.327-5.33-7.992-11.802-7.992-19.417
    c0-7.421,2.662-13.796,7.992-19.126l41.971-41.687c5.523-5.14,11.991-7.705,19.417-7.705c7.611,0,14.083,2.663,19.414,7.993
    l58.813,59.097c5.33,5.33,7.992,11.801,7.992,19.414C210.418,149.321,207.278,156.27,200.999,162.178z M403.147,361.732
    l-41.973,41.686c-5.332,4.945-11.8,7.423-19.418,7.423c-7.809,0-14.27-2.566-19.41-7.707l-58.813-59.101
    c-5.331-5.332-7.99-11.8-7.99-19.41c0-7.994,3.138-14.941,9.421-20.841c0.575,0.567,2.334,2.381,5.284,5.42
    c2.95,3.046,4.996,5.093,6.14,6.14c1.143,1.051,2.949,2.478,5.42,4.288c2.478,1.811,4.9,3.049,7.282,3.713
    c2.382,0.667,4.997,0.999,7.851,0.999c7.618,0,14.086-2.665,19.418-7.994c5.324-5.328,7.994-11.8,7.994-19.41
    c0-2.854-0.339-5.472-1-7.851c-0.67-2.382-1.902-4.809-3.72-7.282c-1.811-2.471-3.23-4.284-4.281-5.428
    c-1.047-1.136-3.094-3.183-6.139-6.14c-3.046-2.949-4.853-4.709-5.428-5.276c5.715-6.092,12.566-9.138,20.554-9.138
    c7.617,0,14.085,2.663,19.41,7.994l59.388,59.382c5.332,5.332,7.995,11.807,7.995,19.417
    C411.132,350.032,408.469,356.415,403.147,361.732z"/>
</g></i>
      <span>Share with <br>Link</span>
    </a>
  </li>
  <li>
      <a href="#" class="email a2a_button_email">
      <i><svg enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 24 24" width="56px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path clip-rule="evenodd" d="M11.984,13C10.031,13-0.031,4.891-0.031,4.891V4c0-1.104,0.896-2,2.002-2h20.026  C23.104,2,24,2.896,24,4l-0.016,1C23.984,5,14.031,13,11.984,13z M11.984,15.75c2.141,0,12-7.75,12-7.75L24,20  c0,1.104-0.896,2-2.003,2H1.971c-1.105,0-2.002-0.896-2.002-2l0.016-12C-0.016,8,10.031,15.75,11.984,15.75z" fill-rule="evenodd"/></svg></i>
      <span>Share with <br>Email</span>
    </a>
  </li>
  <li>
      <a href="#" class="stext a2a_button_sms">
      <i><svg id="Capa_1" enable-background="new 0 0 511.096 511.096" height="512" viewBox="0 0 511.096 511.096" width="56" xmlns="http://www.w3.org/2000/svg"><g id="Speech_Bubble_48_"><g><path d="m74.414 480.548h-36.214l25.607-25.607c13.807-13.807 22.429-31.765 24.747-51.246-59.127-38.802-88.554-95.014-88.554-153.944 0-108.719 99.923-219.203 256.414-219.203 165.785 0 254.682 101.666 254.682 209.678 0 108.724-89.836 210.322-254.682 210.322-28.877 0-59.01-3.855-85.913-10.928-25.467 26.121-59.973 40.928-96.087 40.928z"/></g></g></svg></i>
      <span>Share with <br>Text</span>
    </a>
  </li>
  </ul>
</div>
</div>
</div>
<div class="corporate__footer">
  <div class="layout__container">
    <div class="corporate__footer--cols flex-container">
      <div class="corporate__footer--col-item">
        <div class="corporate__footer--adtext">
        <h2>group <br>training.<br> <strong>reinvented<span> + </span><br>personalised</strong></h2>
        <address><span>
          <svg width="28" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <g>
              <g>
                <path fill="#ffffff" d="M256,0C156.748,0,76,80.748,76,180c0,33.534,9.289,66.26,26.869,94.652l142.885,230.257
                  c2.737,4.411,7.559,7.091,12.745,7.091c0.04,0,0.079,0,0.119,0c5.231-0.041,10.063-2.804,12.75-7.292L410.611,272.22
                  C427.221,244.428,436,212.539,436,180C436,80.748,355.252,0,256,0z M384.866,256.818L258.272,468.186l-129.905-209.34
                  C113.734,235.214,105.8,207.95,105.8,180c0-82.71,67.49-150.2,150.2-150.2S406.1,97.29,406.1,180
                  C406.1,207.121,398.689,233.688,384.866,256.818z"/>
              </g>
            </g>
            <g>
              <g>
                <path fill="#ffffff" d="M256,90c-49.626,0-90,40.374-90,90c0,49.309,39.717,90,90,90c50.903,0,90-41.233,90-90C346,130.374,305.626,90,256,90z
                  M256,240.2c-33.257,0-60.2-27.033-60.2-60.2c0-33.084,27.116-60.2,60.2-60.2s60.1,27.116,60.1,60.2
                  C316.1,212.683,289.784,240.2,256,240.2z"/>
              </g>
            </g>
          </svg>
          </span>118 Sussex St Syd CBD
        </address>
      </div>
      </div>
      <div class="corporate__footer--col-item">
        <div class="corporate__testimonials">
          <figure>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/billy-tucker.png" alt="Billy Tucker, CEO" />
          </figure>
          <p>I’m blown away at how Fitbeat has transformed and energized my staff in 3 short months.</p>
          <span>Billy Tucker </span>
          <p>CEO Oneflare Group</p>
      </div>
      </div>
      <div class="corporate__footer--col-item corporate__grp-photo-holder" >
        
      </div>
    </div>
  </div>
    <div class="corporate__grp-photo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fitbeat-group-pic.png" alt="Fitbeat group picture">
    </div>
</div>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/challenge.css?v=1.2">
<style>
  .btn-challenge {
    display:none;
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
  .mobile-btn-wrap {
    margin-bottom: 15px;
  }
  @media screen and (max-width: 479px){
	.mobile-btn-wrap {
		margin: 0 0 15px;
  }
}
</style>
<script async src="https://static.addtoany.com/menu/page.js"></script>