
<?php
/*
Template Name: Home Training
*/
get_header('home-training');
?>

<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content-home-training', 'page' );
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		?>
<?php
get_footer('home-training');
?>
<script>
	// fixed scroll div js
	jQuery( function($) {
		$(document).ready(function () {
			if( $(window).width() < 769 ) {
				$('.scroll-fixed-wrap').each(function () {
					var _this = $(this);
					var fixed_length = _this.find('.fixed-item').length;
					var fixed_height = _this.find('.fixed-item').innerHeight();
					if( fixed_length > 0 ) {
						_this.addClass('fixed-section');
						_this.find('.fixed-wrap').css('padding-top', fixed_height);
					}
				});
				$(document).on("scroll", onScroll);
			}
		});

		function onScroll(event) {
			var scrollPos = $(document).scrollTop();
			$('.scroll-fixed-wrap').each(function () {
				var currLink = $(this);
				var refElement = $(this);
				if (refElement.position().top - 89 <= scrollPos && refElement.position().top + refElement.innerHeight() - $(window).height()/2 > scrollPos) {
					currLink.addClass("active");
				}
				else {
					currLink.removeClass("active");
				}
			});
		}
	});
	jQuery(function () {
		jQuery( ".play-video" ).each(function(index) {
			jQuery(this).click(function (event) {
				event.preventDefault();
				var video_url = (jQuery(this).data('video'));
				if (video_url) {
					if ( jQuery(this).hasClass('play-video-open')) {
						var video = jQuery(this).find('.video-loader video').get(0);
						if (video.paused === false) {
							video.pause();
						} else {
							video.play();
						}
					} else {
						jQuery('.video-loader').html('');
						jQuery(".play-video").removeClass("play-video-open");
						jQuery(this).find('.video-loader').prepend('<video controls  controlsList="nodownload" autoplay><source src="'+video_url+'" type="video/mp4"></video>');
						jQuery(this).addClass("play-video-open");
					}
				jQuery(this).find('video').on('ended',function(){
					jQuery('.video-loader, .video-ajax').html('');
					jQuery(".play-video, .play-video-popup").removeClass("play-video-open");
				});
				}
			});
		});
		jQuery( ".play-video-popup" ).each(function(index) {
			jQuery(this).click(function (event) {
				alert();
			event.preventDefault();
			var video_url = (jQuery(this).data('video'));
			if (video_url) {
				if ( jQuery(this).hasClass('play-video-open')) {
					var video = jQuery(this).find('.video-ajax video').get(0);
					if (video.paused === false) {
						video.pause();
					} else {
						video.play();
					}
				} else {
					jQuery('.video-ajax').html('');
					jQuery(".play-video-popup").removeClass("play-video-open");
					jQuery(this).find('.video-ajax').prepend('<video controls controlsList="nodownload" autoplay><source src="'+video_url+'" type="video/mp4"></video>');
					jQuery(this).addClass("play-video-open");
				}
				jQuery(this).find('video').on('ended',function(){
					jQuery('.video-loader, .video-ajax').html('');
					jQuery(".play-video, .play-video-popup").removeClass("play-video-open");
				});
			}
			});
		});
		jQuery(".video-close").on("click", function(e){
			e.stopPropagation();
			jQuery('.video-loader, .video-ajax').html('');
			jQuery(".play-video, .play-video-popup").removeClass("play-video-open");
			jQuery(this).parent().removeClass("resize scale");
		});
		jQuery(window).load(function(){
			var site_url = jQuery(location).attr('href');
			console.log(site_url);
			jQuery('.hidderUrl').val(site_url);
		});
	});
</script>
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

	var onceoff = getUrlParameter('onceoff');
	if(onceoff !== undefined){
		var cookie_value_user = onceoff;
		eraseCookie('onceoff');
		createCookie('onceoff' ,cookie_value_user, 1); // 86400 = 1 day

		jQuery('.standand-home-plan .btn').each(function( index, value ) {
			var _href = jQuery(this).attr('href');
			var _newHref = _href + '&onceoff=' + onceoff;
			jQuery(this).attr('href', _newHref);
		});
	} else if (readCookie('user') !== null ){
		jQuery('.standand-home-plan .btn').each(function( index, value ) {
			var _href = jQuery(this).attr('href');
			var _newHref = _href + '&onceoff=' + readCookie('onceoff');
			jQuery(this).attr('href', _newHref);
		});
	}
	var errorMsg = getUrlParameter('errorMessage');
	if(errorMsg !== undefined){
		//jQuery('.errorMsg').append(errorMsg).addClass('active');
	};
});
</script>
<style>
	.grecaptcha-badge {
		visibility: hidden;
		opacity: 0;
	}
</style>
