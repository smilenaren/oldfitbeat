<?php
/*
Template Name: Invite Friend
*/
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

get_header();
?>
<div class="invite-form">
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'page' );
		
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
				comments_template();
		endif;

	endwhile; // End of the loop.
	?>
	</div>
	<section class="page page-success">
		<div class="layout__container">
			<div class="inner">
				<div class="entry-content success-inner">
					<div class="fitbeat-img">
					<img alt="" src="https://images.typeform.com/images/ijjGTdhYCVJK/image/default" class="Image__StyledImage-sc-28bftl-0 juzjfx" data-qa-loaded="true" style="height: 178px; width: 470px;">
						<p>Hi <span id="inviteName"></span>, good news! You have been pre-approved for the FREE TWO WEEK membership.</p>

						<p>In order to secure it, please visit <a rel="noopener noreferrer" href="https://www.fitbeat.com/book-your-first-workout/">https://www.fitbeat.com/book-your-first-workout/</a> and sign up using the email address <span id="inviteEmail"></span>, then come to a class within 2 working days.</p>
						<p><a class="btn btn--primary btn--medium" href="https://www.fitbeat.com/book-your-first-workout/">SIGN-UP NOW</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
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

function urlencode(str) {
    str = (str + '')
        .toString();
    // Tilde should be allowed unescaped in future versions of PHP (as reflected below), but if you want to reflect current
    // PHP behavior, you would need to add ".replace(/~/g, '%7E');" to the following.
    return encodeURIComponent(str)
        .replace(/!/g, '%21')
        .replace(/'/g, '%27')
        .replace(/\(/g, '%28')
        .
    replace(/\)/g, '%29')
        .replace(/\*/g, '%2A')
        .replace(/%20/g, '+');
}

jQuery(document).ready(function(){
	var friend_name = getUrlParameter('friend');
	var friend_email = getUrlParameter('e');
	var facebook_link = jQuery('.s-facebook').attr('href');
	var whatsapp_link = jQuery('.s-whatsapp').attr('href');
	var mail_link = jQuery('.s-mail').attr('href');
	//console.log(friend_email);
	if(friend_name !== undefined){
		var title = jQuery('.entry-title').text();
		title = title+ ' by '+ friend_name;
		jQuery('.entry-title').text(title);
		jQuery('#friend_name').val(friend_name.charAt(0).toUpperCase() + friend_name.substr(1).toLowerCase());
		jQuery('#friendName').text(friend_name.charAt(0).toUpperCase() + friend_name.substr(1).toLowerCase());
		//url
		var friendnameurl = "?friend="+friend_name;

	} else {
		var friendnameurl = "";
	}
	if(friend_email !== undefined){
		jQuery('#friend_email').val(friend_email);
		//url
		var friendemailurl = urlencode("&e="+friend_email);
		//console.log(1);
	} else {
		var friendemailurl = "";
	}

	if(friend_name !== undefined && friend_email !== undefined){
		var facebook_newlink = facebook_link+friendnameurl+friendemailurl;
		var whatsapp_newlink = whatsapp_link+friendnameurl+friendemailurl;
		var mail_newlink = mail_link+friendnameurl+friendemailurl;
		jQuery('.s-facebook').attr('href', facebook_newlink);
		jQuery('.s-whatsapp').attr('href', whatsapp_newlink);
		jQuery('.s-mail').attr('href', mail_newlink);
	} else if (friend_name !== undefined && friend_email === undefined) {
		var facebook_newlink = facebook_link+friendnameurl;
		var whatsapp_newlink = whatsapp_link+friendnameurl;
		var mail_newlink = mail_link+friendnameurl;
		jQuery('.s-facebook').attr('href', facebook_newlink);
		jQuery('.s-whatsapp').attr('href', whatsapp_newlink);
		jQuery('.s-mail').attr('href', mail_newlink);
	}

	document.addEventListener( 'wpcf7submit', function( event ) {
		var value_name = jQuery('#name').val();
		var value_email = jQuery('#email').val();
		jQuery('#inviteName').text(value_name);
		jQuery('#inviteEmail').text(value_email);
	}, false );
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		jQuery('.invite-form').hide();
		jQuery('.page-success').fadeIn();
	}, false );

});
</script>

<style>
	h1.entry-title {
		text-align: center;
	}
	.invite-form .entry-content {
		max-width: 1000px;
		margin: 0 auto;
	}
	.invite-form p {
		font-size: 20px;
	}
	.invite-form .wpcf7 {
		margin: 50px 0;
	}
	.page-success{display:none;}
	.success-inner {
		max-width: 750px;
		margin: 0 auto;
		text-align: center;
	}
	.success-inner .btn{
		color: rgb(26, 8, 2);
		margin-top: 20px;
	}
	.invite-form input[type=submit]{
		float: right;
	}
	/*************************

Styles for the buttons.
@Vivek Kumar Poddar
https://wpvkp.com

*************************/

.social-box {
	display: block;
	margin: -20px 0 40px;
	padding: 0 20px 0;
}

.social-box:last-of-type {
	margin: 0 0 40px;
}

.social-btn {
	display: block;
	width: 100%;
}

a.col-2.sbtn span {
	display: none;
}

a.col-1.sbtn {
	display: inline-block;
	text-align: center;
	border-radius: 50px;
	padding: 10px 15px;
	color: #fff;
	margin: 0 10px 10px 0;
	font-size: 15px;
	text-decoration: none;
}

a.col-1.sbtn span {
	margin: 0 0 0 10px;
}

a.col-2.sbtn {
	width: 6%;
	display: inline-block;
	text-align: center;
	border-radius: 50px;
	padding: 10px;
	color: #fff;
	margin: 0 0.5% 0 0;
	line-height: 1.825 !important;
	max-width: 50px;
	min-width: 50px;
}

.s-twitter {
	background: #03A9F4;
}
.s-twitter::before {
	font-family: fontawesome;
	content: '\f099';
}
.s-twitter:hover {
	background: #0093d6;
}


.s-facebook {
	background: #3F51B5;
}
.s-facebook::before {
	content: '';
	background-image: url('../wp-content/themes/fitbeat/img/facebook-f.svg');
	background-repeat: no-repeat;
	background-size: 15px auto;
	height: 24px;
	width: 15px;
	float: left;
}
a.col-1.sbtn.s-facebook:hover {
	background: #2f409f;
}

.s-mail {
	background: #bbb;
}
.s-mail::before {
	content: '';
	background-image: url('../wp-content/themes/fitbeat/img/envelope.svg');
	background-repeat: no-repeat;
	background-size: 22px auto;
	height: 24px;
	width: 22px;
	float: left;
}
a.col-1.sbtn.s-mail:hover {
	background: #aaa;
}


.s-googleplus {
	background: #F44336;
}
.s-googleplus::before {
	font-family: fontawesome;
	content: '\f0d5';
}
.s-googleplus:hover {
	background: #c82c21;
}



.s-whatsapp {
	background: #4CAF50;
}
.s-whatsapp::before {
	content: '';
	background-image: url('../wp-content/themes/fitbeat/img/whatsapp.svg');
	background-size: 20px auto;
	background-repeat: no-repeat;
	height: 24px;
	width: 20px;
	float: left;
}
a.col-1.sbtn.s-whatsapp:hover {
	background: #3d9440;
}



.s-linkedin {
	background: #1a7baa;
}
.s-linkedin::before {
	font-family: fontawesome;
	content: '\f0e1';
}
a.col-2.sbtn.s-linkedin:hover {
	background: #136288;
}


.s-pinterest {
	background: #bd081c;
}
.s-pinterest::before {
	font-family: fontawesome;
	content: '\f231';
}
a.col-2.sbtn.s-pinterest:hover {
	background: #a10718;
}



/*.s-buffer {
	background: #ced7df;
}
.s-buffer::before {
	font-family: fontawesome;
	content: '\e804';
}
a.col-2.sbtn.s-buffer:hover {
	background: #c3c5c8;
}*/

/********************************
////// Important
*******************************/


@media only screen and (max-width: 800px) {
	.social-btn {
		text-align: center;
	}
	a.col-1.sbtn {
		width: 50px;
		height: 50px;
		padding: 10px 5px;
		line-height: 30px;
		margin: 0 8px;
	}
	a.col-1.sbtn:before {
		float: none;
		display:block;
		margin: 0 auto;
		background-size: 26px auto;
		height: 30px;
		width: 26px;
	}
	a.col-1.sbtn.s-facebook::before {
		background-size: 20px auto;
		width: 20px;
	}
	a.col-1.sbtn.s-mail::before{
		background-position: 0 2px;
	}
	a.col-1.sbtn span {
		display: none;
	}
}
</style>
