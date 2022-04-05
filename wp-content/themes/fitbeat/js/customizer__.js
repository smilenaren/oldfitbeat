/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
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

     $(document).ready(function(){
		$(".preloader").addClass('hide');
	});

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
	$("div.workout-type p").html(function(){
	  var text= $(this).text().trim().split(" ");
	  var first = text.shift();
	  return (text.length > 0 ? "<span class='hide'>"+ first + "</span> " : first) + text.join(" ");
	});
	$('div.workout-type').each(function(){
		$(this).html(function(i, h){
			return h.replace(/\(([^\)]+)\)/, "<span>($1)</span>");
		});
	});

	$("div.nav__overlay").on('click', function(){
		$('#manNav').stop().removeClass('open');
		$("body").stop().removeClass('disable-scroll nav-visible');
	});

	$("#menuClose").on("click", function(){
		$("body").stop().removeClass('disable-scroll nav-visible');
		$("#manNav").stop().removeClass('open');
	});

	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();
		if(scrollTop > 50){
			$("#masthead").addClass('sticky');
		}else{
			$("#masthead").removeClass('sticky');
		}
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
   //  		var gifSource = $(this).find('img').attr('data-gif');
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
    		if($(this).hasClass('animate')){
    			$(this).mouseenter(function(){
					// var gifSource = $(this).find('img').attr('data-gif');
					// $(this).find('img').stop().attr('src', gifSource);
					 var videoSource = $(this).find('img').attr('data-video');
					 $(this).find('video').attr('src', videoSource);
					 $(this).find('video').get(0).play();
				});
				$(this).mouseleave(function(){
					// var coverSource = $(this).find('img').attr('data-cover');
					// $(this).find('img').stop().attr('src', coverSource);
					$(this).find('video').get(0).pause();
				});
    		}
    	});
    	
    }

    if(winWidth <= 768){
    	jQuery(".image_block_lists .item").on('click touchstart',function(){
			// var gifSource = $(this).find('img').attr('data-gif');
			// $(this).find('img').stop().attr('src', gifSource);
			var videoSource = jQuery(this).find('img').attr('data-video');
			 jQuery(this).find('video').attr('src', videoSource);
			 jQuery(this).find('video').get(0).play();
		});
	    // Check is in viewport --------------------------------
	    $(window).scroll(function() {
	      //var viewVideoSource = $('div.viewBox:in-viewport(250)').find('img').attr('data-video');
	      $('div.viewBox').find('.loader').css('opacity', 0).css('visibility', 'hidden');
	      $('div.viewBox').removeClass('inView').find('video').css('opacity', 0).get(0).pause();
	      $('div.viewBox:in-viewport(250)').find('.loader').css('opacity', 1).css('visibility', 'visible');
	      $('div.viewBox:in-viewport(250)').addClass('inView').find('video').css('opacity', 1);
	      $('body').find('div.viewBox:in-viewport(250) video').get(0).play();
	    });
    }

	$(".animateGIF .item").on('mouseenter', function(){
		$(this).parents('.flex-container').find('.item').stop().addClass('resize');
		$(this).stop().addClass('scale');
		// var gifSource = $(this).find('img').attr('data-gif');
		// $(this).find('img').stop().attr('src', gifSource);

		 var videoSource = $(this).find('img').attr('data-video');
		 $(this).find('video').attr('src', videoSource);
		 $(this).find('video').get(0).play();
		
	});
	$(".animateGIF .item").on('mouseleave', function(){
		$(this).parents('.flex-container').find('.item').stop().removeClass('resize');
		$(this).stop().removeClass('scale');
		// var coverSource = $(this).find('img').attr('data-cover');
		// $(this).find('img').stop().attr('src', coverSource);
		$(this).find('video').get(0).pause();
	});

	$(".image_block_lists .item.animate").on('mouseenter',function(){
		// var gifSource = $(this).find('img').attr('data-gif');
		// $(this).find('img').stop().attr('src', gifSource);
		var videoSource = $(this).find('img').attr('data-video');
		 $(this).find('video').attr('src', videoSource);
		 $(this).find('video').get(0).play();
	});
	$(".image_block_lists .item.animate").on('mouseleave', function(){
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
	$(".full-video-popup .video__close").on('click', function(){
		var vid = document.getElementById("bannerVideo"); 
		vid.pause();
		$(this).parents('section.video__banner').find('div.full-video-popup').removeClass("visible");
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
	
	function check(type){
	  return $('body').find(type).length;
	}
	$('.block__video-play').on('click', function(e){
		$(this).parents('.block__video').addClass('playing');
		e.preventDefault();
		$(this).next('video').get(0).play();
	});

	// Tab Content --------------------------------------------
	$("div.tab-content div.tab-item:first-child").fadeIn();
	$(".tab-menu .item a").on("click", function(e){
	    e.preventDefault();
	    $(".tab-menu .item a").stop().removeClass("current");
	    $(this).addClass("current");
	    var tabDataID = $(this).attr("tab-data");
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

	  });

	if(winWidth <=768){
    	$(".tab-menu-holder .tab-menu .item").each(function(){
    		var tabDataId = $(this).find('a.link-holder').attr('tab-data');
    		$(this).find("a.link-holder").attr('href', '#' + tabDataId);
    		$(this).find("a.link-holder")
    	});
    	$('.tab-menu-holder .tab-menu .item a.link-holder').magnificPopup({
		    type: 'inline',
		    midClick: true,
		    mainClass: 'mfp-fade',
		    fixedContentPos: true,
		    callbacks: {
		    	open: function(){
		    		jQuery(".image_block_lists .item").on('click touchstart',function(){
						var videoSource = jQuery(this).find('img').attr('data-video');
						jQuery(this).find('video').attr('src', videoSource);
						jQuery(this).find('video').get(0).play();
					});
		    	}
		    }
		});
    }
    var freeTrialURL = $("#freeTrialButton").attr('data-link-desktop');
    $("#freeTrialButton").attr('href', freeTrialURL);
	getMobileOperatingSystem();
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
        });
    }

    // iOS detection from:
    if (/iPad|iPhone|iPod/.test(userAgent)) {
        $("a.free_trial-btn").each(function(){
        	var freeTrialURL = $("#freeTrialButton").attr('data-link-ios');
        	$("a.free_trial-btn").attr('href', freeTrialURL);
        	$("#freeTrialButton").attr('href', freeTrialURL);
        });
    }

    return "unknown";
}

} )( jQuery );
