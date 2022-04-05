/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
( function( $ ) {
	// Global Document Ready --------------------------------
     $(document).ready(function(){
		//hide book now button on mobile for book your first workout page
		var pathname = window.location.pathname;
		console.log(pathname);
		 if( pathname == "/book-your-first-workout/" || pathname == "/book-your-first-workout"){
			//$('.sticky-mob-btn').hide();
			$('.hide1').hide();
			jQuery('.fixed_btn').find('span').text('SPECIAL OFFERS');
		 };

		// On After Page load hides the dark overlay -------------------
		$(".preloader").addClass('hide');

		jQuery(".btn-dropdown").click(function(e) {
			jQuery(this).toggleClass('open');
			if( $(this).hasClass('open')){
				$(this).parents('.plan-desc').find('.dropdown-content').slideDown();
				$(this).find('.change-text').text('Hide');
			} else {
				$(this).parents('.plan-desc').find('.dropdown-content').slideUp();
				$(this).find('.change-text').text('View');
			}
		});

		var hasInfoLength = $('div.workout__plan div.item span.has-info').length;
		if(hasInfoLength > 0){
			$('div.workout__plan div.item span.has-info').parents('div.item').siblings('div.item').find('span.info').addClass('has-info');
		}
		if(jQuery("span.has-info").is(":visible")){
		var hasInfoItem = [];
		jQuery('body').find('span.has-info').each(function(n){
			hasInfoItem[n] = jQuery(this).innerHeight(),
			highest = Math.max.apply(Math, hasInfoItem);
			console.log(hasInfoItem);
			console.log(highest);
			$(this).css('height', highest);
		});
		}
		$(".workout__plan").each(function(){
			var workoutItemLength = $(this).find("div.item").length;
			$(this).addClass('col' + workoutItemLength);
		});

		var freeTrialURL = $("#freeTrialButton").attr('data-link-desktop');
    	$("#freeTrialButton").attr('href', freeTrialURL);
		getMobileOperatingSystem();

		// On page scroll after certain scroll make header sticky ----------
		var scrollTop = $(window).scrollTop();
		if(scrollTop > 50){
			$("#masthead").addClass('sticky');
		}

		// WOW Initialize -------------------------------------------
		 var wow = check('.wow');
	     if(wow > 0){
	      wow = new WOW(
	      {
	        boxClass:     'wow',      // default
	        animateClass: 'animated', // default
	        offset:       0,          // default
	        mobile:       false,       // default
	        live:         true        // default
	      }
	      )
	    wow.init();
	     }

	   // Menu Visible on click --------------------------------
	   $('#manNav').click(function(){
			if($(this).hasClass('open')){
				$(this).stop().removeClass('open');
				$("body").stop().removeClass('nav-visible');
				setTimeout(function(){
					$("body").stop().removeClass('disable-scroll');
				}, 1000);
			}
			else{
				$(this).stop().addClass('open');
				$("body").stop().addClass('nav-visible disable-scroll');			
			}
		});
	   	$("div.nav__overlay").on('click', function(){
			$('#manNav').stop().removeClass('open');
			$("body").stop().removeClass('disable-scroll nav-visible');
		});
		$("#menuClose").on("click", function(){
			$("body").stop().removeClass('disable-scroll nav-visible');
			$("#manNav").stop().removeClass('open');
		});

		// $("div.workout-type p").html(function(){
		//   var text= $(this).text().trim().split(" ");
		//   var first = text.shift();
		//   return (text.length > 0 ? "<span class='hide'>"+ first + "</span> " : first) + text.join(" ");
		// });

		$('div.workout-type').each(function(){
			$(this).html(function(i, h){
				return h.replace(/\(([^\)]+)\)/, "<span>($1)</span>");
			});
		});


		$(window).scroll(function(){
			var scrollTop = $(window).scrollTop();
			if(scrollTop > 50){
				$("#masthead").addClass('sticky');
			}else{
				$("#masthead").removeClass('sticky');
			}
		});

		$(".image__blocks .item a.link-holder").on('click', function(e){
			e.preventDefault();
		});

		var wrapIT = $('.content--grid .lists, .page-short-story .image_block_lists').children('div.item');    
	    for(var i=0, len = wrapIT.length; i < len; i+=3){
	        wrapIT.slice(i, i+3).wrapAll('<div class="flex-container"/>');
	    } 
	    var btnHTML = $(".free__trial").clone();
	    $(".featured.content--grid .lists .flex-container:first-child").after(btnHTML);

    	var winWidth = $(window).width();
	    if(winWidth > 768){
	    	$(".content--grid.animate").addClass('animateGIF');
	    	$(".page-short-story .image__blocks.animate").addClass('animateGIF');
	    	$('.image_block_lists .item').addClass('animate');
	    	$(".tab-menu .item:first-child").addClass("animate");
	    	$(".tab-menu .item:first-child a").addClass("current");
	    	$(".tab-menu .item:first-child").mouseenter(function(){
	   		// var gifSource = $(this).find('img').attr('data-gif');
				// $(this).find('img').stop().attr('src', gifSource);
				var videoSource = $(this).find('img').attr('data-video');
					$(this).find('video').attr('src', videoSource);
					$(this).find('video').get(0).play();
	    	});
	    	$(".tab-menu .item:first-child").mouseleave(function(){
	   //  		var coverSource = $(this).find('img').attr('data-cover');
				// $(this).find('img').stop().attr('src', coverSource);
				$(this).find('video').get(0).pause();
	    	});
	    	$(".tab-menu .item").on('click', function(){
	    		$(".tab-menu .item").removeClass('animate');
	    		$(this).addClass("animate");
	    		$(".tab-menu .item").unbind('mouseleave');
	    		var videoSource = $(this).find('img').attr('data-video');
				$(this).find('video').attr('src', videoSource);
				$(this).find('video').get(0).play();
	    	});
	    	
	    		// Pause Banner Promo Mobile Video on Desktop 
	    		var promoVidDesktop = check('.video.promo__video-desktop');
		        if(promoVidDesktop > 0){
			    	jQuery("promo__video-mob").get(0).pause();
			    }
	    	
	    }

	    if(winWidth <= 768){
	    	$(document).ready(function(){
		    // Check is in viewport --------------------------------
		    var viewBox = check('.viewBox');
	        if(viewBox > 0){
	        	var viewportHeight = $(window).height(),
		    	viewportMidHeight = parseInt(viewportHeight/2);
		    	concat = 'div.viewBox:in-viewport' +'(' + viewportMidHeight + ')';
		    	concatvid = concat + ' video';
		    	// Play first video in viewport -----------------------------------------
		    	if($(concatvid).length >= 1){
			    	$(concat).find('.loader').css('opacity', 1).css('visibility', 'visible');
			    	$('body').find(concatvid).get(0).play();
			    	$('body').find(concatvid).css('opacity', 1);
			    }
		    	// Handle video in viewport on scroll -----------------------------------
			    $(window).scroll(function() {
				      $('div.viewBox').find('.loader').css('opacity', 0).css('visibility', 'hidden');
				      $('div.viewBox').removeClass('inView').find('video').css('opacity', 0).get(0).pause();
				      $(concat).find('.loader').css('opacity', 1).css('visibility', 'visible');
				      $(concat).addClass('inView').find('video').css('opacity', 1);
				      if($(concatvid).length >= 1){
				      	$('body').find(concatvid).get(0).play();
				      }
			    });
	        }

	        // Pause Banner Promo Desktop Video on Mobile 
		    	var promoVidMob = check('.video.promo__video-mob');
		        if(promoVidMob > 0){
			    	jQuery("promo__video-desktop").get(0).pause();
			    }
		    });
		    
	    	
	    }

		$(".animateGIF .item").on('mouseenter', function(){
			$(this).parents('.flex-container').find('.item').stop().addClass('resize');
			$(this).stop().addClass('scale');
			// var gifSource = $(this).find('img').attr('data-gif');
			// $(this).find('img').stop().attr('src', gifSource);

			 var videoSource = $(this).find('img').attr('data-video');
			 //$(this).find('video').attr('src', videoSource);		 
			 $(this).find('video').get(0).play();
			
		});
		$(".animateGIF .item").on('mouseleave', function(){
			$(this).parents('.flex-container').find('.item').stop().removeClass('resize');
			$(this).stop().removeClass('scale');
			// var coverSource = $(this).find('img').attr('data-cover');
			// $(this).find('img').stop().attr('src', coverSource);
			$(this).find('video').get(0).pause();
		});

		$(".image_block_lists .item.animate, .tab-menu .item").on('mouseenter',function(){
			// var gifSource = $(this).find('img').attr('data-gif');
			// $(this).find('img').stop().attr('src', gifSource);
			//var videoSource = $(this).find('img').attr('data-video');
			 //$(this).find('video').attr('src', videoSource);
			 $(this).find('video').get(0).play();
		});
		$(".image_block_lists .item.animate, .tab-menu .item.animate").on('mouseleave', function(){
			// var coverSource = $(this).find('img').attr('data-cover');
			// $(this).find('img').stop().attr('src', coverSource);
			$(this).find('video').get(0).pause();
		});



		$("#showVideoPopup").on("click", function(e){
			e.preventDefault();
			var videoUrl = $(this).attr('href');
			$(this).parents('section.video__banner').find('div.full-video-popup').addClass("visible");
			$('#bannerVideo').attr('src' , videoUrl);
			var vid = document.getElementById("bannerVideo"); 
			vid.play();
		});
		$("#showVideoPopup1").on("click", function(e){
			e.preventDefault();
			console.log(1);
			var videoUrl = $(this).attr('href');
			$('.popup-video-wrap').find('div.full-video-popup').addClass("visible");
			$('#popupVideo').attr('src' , videoUrl);
			var vid = document.getElementById("popupVideo"); 
			vid.play();
		});
		$(".full-video-popup .video__close").on('click', function(){
			var vid = document.getElementById("bannerVideo"); 
			vid.pause();
			$(this).parents('section.video__banner').find('div.full-video-popup').removeClass("visible");
		});
		$(".full-video-popup .video__close1").on('click', function(){
			var vid = document.getElementById("popupVideo"); 
			vid.pause();
			$('.popup-video-wrap').find('div.full-video-popup').removeClass("visible");
		});

		var bannerVideo = check('#bannerVideo');
	        if(bannerVideo > 0){
	        	document.getElementById('bannerVideo').addEventListener('ended',myHandler,false);
				    function myHandler(e) {
				        var vid = document.getElementById("bannerVideo"); 
						vid.pause();
						$(this).parents('section.video__banner').find('div.full-video-popup').removeClass("visible");
				    }
	        }
	
	
		// $('.block__video-play').on('click', function(e){
		// 	$(this).parents('.block__video').addClass('playing');
		// 	e.preventDefault();
		// 	$(this).next('video').get(0).play();
		// });

		// Tab Content --------------------------------------------
		$("div.tab-content div.tab-item:first-child").fadeIn();
		$(".tab-menu .item a").on("click", function(e){
		    e.preventDefault();

		    $(".tab-menu .item a").stop().removeClass("current");
		    $(this).addClass("current");
		    var tabDataID = $(this).attr("data-tab");
		    $("div.tab-item").stop().css("display", "none");
		    $("#" + tabDataID).stop().fadeIn();
		    $(".image_block_lists .item.animate").on('mouseenter',function(){
				var videoSource = $(this).find('img').attr('data-video');
				 $(this).find('video').attr('src', videoSource);
				 $(this).find('video').get(0).play();
			});
			$(".image_block_lists .item.animate").on('mouseleave', function(){
				$(this).find('video').get(0).pause();
			});
			var winWidth = $(window).width();
			if(winWidth > 768){
				var curTabContentPos = $('#'+ tabDataID).offset().top,
				    headerHeight = $("#masthead").innerHeight();
				$('body, html').animate({
					scrollTop : curTabContentPos /2
				},1000);
			}
			jQuery(".workout__plan .item .info.has-info").removeAttr('style');
			var hasInfoItem = [];
			jQuery("#" + tabDataID).find('span.has-info').each(function(n){
				hasInfoItem[n] = jQuery(this).innerHeight(),
				highest = Math.max.apply(Math, hasInfoItem);
				$(this).css('height', highest);
			});

		  });

		if(winWidth <=768){
	    	$(".tab-menu-holder .tab-menu .item").each(function(){
	    		var tabDataId = $(this).find('a.link-holder').attr('data-tab');
	    		$(this).find("a.link-holder").attr('href', '#' + tabDataId);
	    	});
	    	$('.tab-menu-holder .tab-menu .item a.link-holder').unbind('click');
	    	$('.tab-menu-holder .tab-menu .item a.link-holder').featherlightGallery({
					gallery: {
						next: false,
						previous: false,
					},
					afterOpen: function(event){
							var visibleVideo = $(".featherlight-content .image_block_lists .item:first-child video").length;
				    		if(visibleVideo >= 1){
					    		$(".featherlight-content .image_block_lists .item:first-child").find('.loader').css('opacity', 1).css('visibility', 'visible');
					    		$(".featherlight-content .image_block_lists .item:first-child video").get(0).play();
					    		$(".featherlight-content .image_block_lists .item:first-child video").css('opacity', 1);
					    		$(".featherlight-content .image_block_lists .item:first-child").first().addClass('playing');
				    		}

							var viewBox = check('.viewBox');
					        if(viewBox > 0){
					        	var viewport = $('.featherlight-content'),
								viewportHeight = $(window).height(),
					    		viewportMidHeight = parseInt(viewportHeight/2),
					    		concat = 'div.featherlight-content div.viewBox:in-viewport' +'(' + viewportMidHeight +  ', .featherlight-content)',
					    		concatvid = concat + ' video';
					    		var timer;
								  $(".featherlight-content").scroll(function() {
								    clearTimeout(timer);
								    timer = setTimeout(function() {
								      $(".featherlight-content").trigger("scrollStop");
								    },100);
								  });
								  $('.featherlight-content').bind("scrollStop", function() {
									$('.featherlight-content').find('.loader').css('opacity', 0).css('visibility', 'hidden');
								    $('.featherlight-content').removeClass('inView').find('video').css('opacity', 0);
								    $('.featherlight-content').find('video').get(0).pause();
								    $(concat).find('.loader').css('opacity', 1).css('visibility', 'visible');
								    $(concat).addClass('inView').find('video').css('opacity', 1);			   
									    if($(concatvid).length >= 1 ){
										    var viewVideo = $('body').find($(concatvid)).get(0);
										    viewVideo.play();
										    if(viewVideo.paused){
										    	viewVideo.play();	
										    }					      		     
									    }
									});
					        	}
							},
						afterClose: function(event){
							location.reload();
						}
				});
	    	
	    }

	});
    // Global Document Ready --------------------------------

    // Global Window Load --------------------------------
    $(window).load(function(){
    		// $(".viewBox:eq(1) video").get(0).play();
    		// $(".viewBox:eq(2) video").get(0).play();
    		// setTimeout(function(){
    		// 	var count = 0;
    		// 	$(".viewBox video").each(function(){
    		// 		if(count >= 2){
    		// 		   $(this).get(0).play();
    		// 		}
    		// 		count++;
    		// 	});
    		// }, 3000);
    	});
    // Global Window Load --------------------------------

    // Functions ---------------------------------------------------
	function check(type){
	  return $('body').find(type).length;
	}

    function getMobileOperatingSystem() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;
    // Windows Phone must come first because its UA also contains "Android"
    if (/windows phone/i.test(userAgent)) {
        $("a.free_trial-btn").each(function(){
        	var freeTrialURL = $("#freeTrialButton").attr('data-link-desktop');
        	$("a.free_trial-btn").attr('href', freeTrialURL);
        });
    }

    if (/android/i.test(userAgent)) {
        //return "Android";
        $("a.free_trial-btn").each(function(){
        	var freeTrialURL = $("#freeTrialButton").attr('data-link-android');
        	$("a.free_trial-btn").attr('href', freeTrialURL);
        	$("#freeTrialButton").attr('href', freeTrialURL);
        	$('.footer__banner .external-links a.apple').remove();
        });
    }

    // iOS detection from:
    if (/iPad|iPhone|iPod/.test(userAgent)) {
        $("a.free_trial-btn").each(function(){
        	var freeTrialURL = $("#freeTrialButton").attr('data-link-ios');
        	$("a.free_trial-btn").attr('href', freeTrialURL);
        	$("#freeTrialButton").attr('href', freeTrialURL);
        	$('.footer__banner .external-links a.android').remove();
        });
    }

    return "unknown";
}

	var sPageURL = window.location.search.substring(1);
       	if(sPageURL == 'minView'){
       		$("body").addClass('minView');
       		$(".sticky-mob-btn").css('display', 'none');
       		$("body #page").css('padding', 0);
       	}
	//form validation for interest form on live site contact form 7 validation for phone no. is not working
	jQuery("#phoneno").keypress(function (e) {
		//if the letter is not digit then return false
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			return false;
		}
	});
	jQuery(".interest-from .wpcf7-submit").on('click',function(){
		var value_firstname = jQuery('.firstname input').val();
		var value_lastname = jQuery('.lastname input').val();
		var value_email = jQuery('.your-email input').val();
		var value_phone = jQuery('#phoneno').val();
		var value_location = jQuery('.location input').val();
		var country_val = jQuery('#countrytext').val();
		jQuery('.wpcf7-not-valid-tip').remove();
		if( value_firstname == '' ) {
			jQuery('.firstname').append('<span role="alert" class="wpcf7-not-valid-tip">The field is required.</span>');
		};
		if( value_lastname == '' ) {
			jQuery('.lastname').append('<span role="alert" class="wpcf7-not-valid-tip">The field is required.</span>');
			
		};
		if( value_email == '' ) {
			jQuery('.your-email').append('<span role="alert" class="wpcf7-not-valid-tip">The field is required.</span>');
		};
		if ( value_phone == '' ) {
			jQuery('.phonetext').append('<span role="alert" class="wpcf7-not-valid-tip">The field is required.</span>');
		} else if ( value_phone.length < 10 ) {
			jQuery('.phonetext').append('<span role="alert" class="wpcf7-not-valid-tip">Invalid phone number</span>');
		};
		if( value_location == '' ) {
			jQuery('.location').append('<span role="alert" class="wpcf7-not-valid-tip">The field is required.</span>');
		};
		jQuery('#phonenumber').val(value_phone);
		jQuery('#country').val(country_val);
		var country_val_new = jQuery('#country').val();
		if ( country_val_new == '') {
			return false;
		}
		if(jQuery('.wpcf7-not-valid-tip').length > 0) {
			return false;
		}
	});
} )( jQuery );