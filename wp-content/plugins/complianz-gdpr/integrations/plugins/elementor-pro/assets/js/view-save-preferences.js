jQuery(document).ready(function ($) {
	$(document).on('click', '.cmplz-view-preferences', function() {
		$('.elementor-widget-cmplz-category').show();
		$('.cmplz-view-preferences').hide();
		$('.cmplz-save-preferences').css("display", "inline-block");
	});
});
