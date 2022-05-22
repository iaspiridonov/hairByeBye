$(document).ready(function () {
	// Init mmenu
    menu = new Mmenu("#js-main-menu", {
		"navbars": [
			{
				"position": "bottom",
				"content": [
					"<a target='_blank' class='u-mx-3' href='#'><img src='site/templates/static/img/icon/ico-inst.png'></a><a target='_blank' class='u-mx-3' href='#'><img src='site/templates/static/img/icon/ico-fb.png'></a><a target='_blank' class='u-mx-3' href='#'><img src='site/templates/static/img/icon/ico-tg.png'></a><a target='_blank' class='u-mx-3' href='#'><img src='site/templates/static/img/icon/ico-wh.png'></a>"
				]
			},
			"close"
		],
		extensions: [
			"pagedim-black",
			"fullscreen"
		],
		navbar: {
			title: "<img class='navbar__logo' src='site/templates/static/img/logo.svg' alt='logo'><a href='#js-page' class='mmenu-close'><img src='site/templates/static/img/icon/ico-close.svg' alt='close'></a>"
		},
	},
	{
		offCanvas: {
			clone: true
		}
	});

	// Init swiper-agitation
	const swiperAgitation = new Swiper('.js-swiper-reviews', {
		loop: true,
		navigation: {
			nextEl: '.review__nav-item--next',
			prevEl: '.review__nav-item--prev',
		},
	});
	
	// Accordion
	$('.accordion__title').click(function (e) { 
		e.preventDefault();
		let accordion = $(this).parent('.accordion');
		accordion.toggleClass('accordion--active');
	});
});