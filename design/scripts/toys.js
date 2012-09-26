jQuery(document).ready(function($) {
	
	
	$('.carousel').carousel('pause');

	
	$('.js_tooltip').tooltip();
	
	$('.scrollto_js').click(function(e) {
		e.preventDefault();
		$.scrollTo($($(e.currentTarget).attr('href')), 300);
	});
	
	$('.js_contact_click').click(function() {
		$('.js_contact_toggle').slideToggle(function() {
    // Animation complete.
		});
	});
	
	$('#slider').nivoSlider({
		pauseTime: 4000,
		effect: 'fade',
		directionNavHide: false,
	});
	
	$().UItoTop({ easingType: 'easeOutQuart' });

	
}); 