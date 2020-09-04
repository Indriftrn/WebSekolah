$(document).ready(function(){
	$('#hero-area-slider').owlCarousel({
		loop: true,
		nav: true,
		// mouseDrag: false,
		items: 1,
		dots: false,
		margin: 0,
		navText: [
			'<i class="fa fa-angel-left" aria-hidden="true"></i>',
			'<i class="fa fa-angel-right" aria-hidden="true"></i>',
		],
		navContainer: '#hero-area-nav',

	});

	$('#tenaga-pendidik-slider').owlCarousel({
		loop: true,
		nav: true,
		// mouseDrag: false,
		items: 3,
		dots: false,
		margin: 20,
		navText: [
			'<i class="fa fa-angel-left" aria-hidden="true"></i>',
			'<i class="fa fa-angel-right" aria-hidden="true"></i>',
		],
		//navContainer: '#hero-area-nav',

	});
});