jQuery(document).ready(function($) {
	
	/* the image swap thing */
	$(".bw").hover(
		function() {
		$(this).stop().animate({"opacity": "0"}, "fast");
		},
		function() {
		$(this).stop().animate({"opacity": "1"}, "fast");
	});
	
	$('.js_tooltip').tooltip();
	
	
	$('.scrollto_js').click(function(e) {
		e.preventDefault();
		$.scrollTo($($(e.currentTarget).attr('href')), 300);
	});

	
	$().UItoTop({ easingType: 'easeOutQuart' });

	
});