/**
 * Slick Custom
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

	$('#awards').slick({
		dots: false,
		infinite: true,
        arrows:true,
		fade: false,
		autoplay: true,
  		autoplaySpeed: 3000,
  		speed: 800,
		slidesToShow: 6,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
              breakpoint: 821,
              settings: {
                    slidesToShow: 3,
                }
            },
            {
              breakpoint: 601,
              settings: {
                    slidesToShow: 2,
                }
            }
        ]
	});

    if ($(window).width() < 601) {

    $('.photo-grid').slick({
		dots: false,
        centerMode: true,
		infinite: true,
        arrows:false,
		fade: false,
		autoplay: true,
  		autoplaySpeed: 3000,
  		speed: 800,
		slidesToShow: 10,
		slidesToScroll: 1,
    	swipeToSlide: true,
		cssEase: 'ease-in-out',
        responsive: [
            {
              breakpoint: 601,
              settings: {
                    slidesToShow: 1,
                }
            }
        ]
	});

}
	
});