$(document).ready(function(){

    carousel();
    animation();

    var itemGaleria = $('.blocks-gallery-item a');
    itemGaleria.attr('data-lightbox','lightbox');
    lightbox.option({
        'resizeDuration': 500,
        'imageFadeDuration': 500,
        'wrapAround': true,
        'showImageNumberLabel' : false
    })

});

// config aos script
AOS.init({
	startEvent: 'DOMContentLoaded',
	offset: 100,
	delay: 300,
	duration: 1000,
	easing: 'ease',
	once: true,
	disable: 'mobile',
});