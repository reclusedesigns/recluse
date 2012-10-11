jQuery(document).ready(function($) {
	
	
	$(".bw").hover(
		function() {
		$(this).stop().animate({"opacity": "0"}, "fast");
		},
		function() {
		$(this).stop().animate({"opacity": "1"}, "fast");
	});
	
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