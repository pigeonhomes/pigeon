function paddToggle(classname,value) {
	jQuery(classname).focus(function() {
		if (value == jQuery(classname).val()) {
			jQuery(this).val('');
		}
	});
	jQuery(classname).blur(function() {
		if ('' == jQuery(classname).val()) {
			jQuery(this).val(value);
		}
	});
}

function paddAppendSpans(box) {
	jQuery(box + ' ul li a').wrapInner('<span></span>')
}

jQuery(document).ready(function() {
	jQuery.noConflict();

	if (jQuery('div#s3slider').length > 0) {
		jQuery('div#s3slider').s3Slider({
			timeOut: 4000
		});
	}

	paddToggle('input#s','Search this site');

	jQuery('div.search form').click(function () {
		jQuery('input#s').focus();
	});

	paddToggle('input#comment-author','Name');
	paddToggle('input#comment-email','Email');
	paddToggle('input#comment-url','Website');
	paddToggle('textarea#comment-comment','Message');

	if (jQuery.support.leadingWhitespace == false) {
		jQuery('div#padd-sidebar div.padd-box ul li span.padd-wrap:hover').css('background-color','#ebebd9');
		jQuery('div#padd-footer div.padd-box ul li span.padd-wrap:hover').css('background-color','#56504b'); 
	}
});
