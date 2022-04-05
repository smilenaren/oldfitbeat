jQuery( document ).ready(function() {
  jQuery('.mobile-menu-toggle').click( function() {
      jQuery(".subnav").slideToggle().addClass("close-menu");
      jQuery(".fa-bars").toggleClass("fa-times");
  } );
});

jQuery(".subnav ul li a").click(function(e) {
    e.preventDefault();
    var section = jQuery(this).attr("href");
    jQuery("html, body").animate({
        scrollTop: jQuery(section).offset().top-75
    });
    jQuery(".close-menu").slideToggle();
    jQuery(".fa-bars").toggleClass("fa-times");
});

jQuery(".mute").click(function(e) {
	var video = document.getElementById("vi-banner-video");
	player = new Vimeo.Player(video);
				player.play();
	setTimeout(() => {
		player.setVolume(1);

	}, 500);

    jQuery(".hero-banner").toggleClass("remove-overlay");    
	
});

jQuery(".mobile-play-icon a").click(function(e) {
  jQuery("video").addClass('show')
});

jQuery(window).scroll(function() {
    var distanceFromTop = jQuery(this).scrollTop();
    if (distanceFromTop >= 0) {
        jQuery('header').addClass('fix-section');
        jQuery("video").prop('muted', true);
    } else {
        jQuery('header').removeClass('fix-section');
    }

});
