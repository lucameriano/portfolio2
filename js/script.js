/* Smooth Scroll + für Scroll Spy */
const scroll = new SmoothScroll('.navbar a[href*="#"]', {
	speed: 680,
	customEasing: function (time) {
		return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

	}
});

$(document).ready(function () {
      $('header').hide().fadeIn(700);
 });



/* Galleria */
Galleria.loadTheme('js/lib/galleria/themes/classic/galleria.classic.min.js');
Galleria.configure({
	autoplay: '15500',
    transition: 'fade',
	lightboxFadeSpeed: '2000',
	lightboxTransitionSpeed: '3000',
	idleTime: '545',
	
	easing: 'galleriaIn',
    imageCrop: true,
	
	thumbnails: 'empty',
	popupLinks: 'true',
	showInfo: 'false',

	imagePan: 'true',
	imagePanSmoothness: '30',

});

Galleria.run('.galleria');