jQuery(document).ready(function() {
	jQuery('.boxes-section .b-ico1').attr('style', 'background-color:#fff; background-image:url("/wp-content/uploads/ico-donate.png");');
	jQuery('.boxes-section .b-box').mouseenter(function() {
		jQuery('.boxes-section .b-box .bb-inner').attr('style', 'background-image:none !important;');
		jQuery('.boxes-section .bb-inner1:after').attr('style', 'border-radius:0px !important');
		jQuery('.boxes-section .bb-inner1').addClass('default-box');
		jQuery(this).find('.bb-inner').attr('style', "background-image:url('/wp-content/uploads/image12.jpg')!important; animation: fadeIn 2s; ");
	})
	jQuery('.boxes-section .b-box').mouseleave(function() {
		jQuery('.boxes-section .b-box .bb-inner').attr('style', 'background-image:none !important;');
		//jQuery(this).find('.bb-inner').fadeOut( 1600, function() {  })

		jQuery('.boxes-section .b-box .bb-inner1').attr('style', "background-image:url('/wp-content/uploads/image12.jpg')!important;");
		jQuery('.boxes-section .bb-inner1').removeClass('default-box');
	})
	jQuery('.boxes-section .b-box-1').mouseenter(function() {
		jQuery('.boxes-section .bb-inner1').addClass('hover-box');
	})
	jQuery('.boxes-section .b-box-1').mouseleave(function() {
		jQuery('.boxes-section .bb-inner1').removeClass('hover-box');
	})
	jQuery('#boxes').mouseleave(function() {
		jQuery('.boxes-section .b-ico1').attr('style', 'background-color:#fff; background-image:url("/wp-content/uploads/ico-donate.png");');
	})
	jQuery('.boxes-section .b-box-1').hover(function() {
		jQuery(this).find('.b-ico').attr('style', 'background-color:#fff;background-image:url("/wp-content/uploads/ico-donate.png") !important;');
	})

	jQuery('.boxes-section .b-box-2').hover(function() {
		jQuery(this).find('.b-ico').attr('style', 'background-color:#fff;background-image:url("/wp-content/uploads/ico-volunteer.png") !important;');
		jQuery('.boxes-section .b-box-1 .b-ico').attr('style', 'background-color:transparent; background-image:url("/wp-content/uploads/ico-donate.svg");');
	})
	jQuery('.boxes-section .b-box-3').hover(function() {
		jQuery(this).find('.b-ico').attr('style', 'background-color:#fff;background-image:url("/wp-content/uploads/ico-attend.png") !important;');
		jQuery('.boxes-section .b-box-1 .b-ico').attr('style', 'background-color:transparent; background-image:url("/wp-content/uploads/ico-donate.svg");');
	})
	jQuery('.boxes-section .b-box-4').hover(function() {
		jQuery(this).find('.b-ico').attr('style', 'background-color:#fff;background-image:url("/wp-content/uploads/ico-email.png") !important;');
		jQuery('.boxes-section .b-box-1 .b-ico').attr('style', 'background-color:transparent; background-image:url("/wp-content/uploads/ico-donate.svg");');
	})

	jQuery('.boxes-section .b-box').mouseleave(function() {
		jQuery(this).find('.b-ico').attr('style', 'background-color:none;');
	})
	jQuery('.pin, .scroll').click(function() {
		jQuery('html,body').animate({
        	scrollTop: jQuery(".camp-section").offset().top},
        'slow');
	})
})