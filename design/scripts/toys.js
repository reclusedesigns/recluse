jQuery(document).ready(function($) {
	

	$('.js_tooltip').tooltip();
	$('.carousel').carousel();
	
	
	$('.scrollto_js').click(function(e) {
		e.preventDefault();
		$.scrollTo($($(e.currentTarget).attr('href')), 300);
	});
	
	$('#work .item').hover(
		function(){$('span',this).slideToggle('fast');
	});
	
	$().UItoTop({ easingType: 'easeOutQuart' });


});