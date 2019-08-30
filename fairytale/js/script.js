//Page Scroll
(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 40) 
        }, 1000, "easeInOutExpo");
        return false; 
      }
    }
  });
  //smooth scroller//
/* $(function () {
  $('a[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 50
        }, 1000);
        return false;
      }
    }
  });
});*/

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 54
  });

})(jQuery); // End of use strict




$( document ).ready(function() {
//Slick Slider
	$(".regular").slick({
		dots: true,
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1
	});
	
//Tab
 $('#parentHorizontalTab').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion
		width: 'auto', //auto or any width like 600px
		fit: true, // 100% fit in a container
		tabidentify: 'hor_1', // The tab groups identifier
		activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#nested-tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			//$info.show();
		}
  });

	// Child Tab
	$('#ChildVerticalTab_1').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		fit: true,
		tabidentify: 'ver_1', // The tab groups identifier
		activetab_bg: '#fff', // background color for active tabs in this group
		inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
		active_border_color: '#c1c1c1', // border color for active tabs heads in this group
		active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
    });


});
//index//
var testimonialCarousel = $('.testimonialCarousel');
      testimonialCarousel.owlCarousel({
      loop:true,
      margin:80,
      startPosition: 0,
      nav: false,
      responsiveClass:true,
	  autoplay:true,
      responsive:{
        0:{
            items:1
        },
        1000:{
            items:2,
            loop:true
        }
      }
    });

    var heroCarousel = $('.heroCarousel');
      heroCarousel.owlCarousel({
      loop:true,
      margin:10,
      nav: false,
      startPosition: 0,
      responsiveClass:true,
	  autoplay:true,
      responsive:{
        0:{
            items:1
        }
      }
	});

	var dropToggle = $('.menu_right > li').has('ul').children('a');
	dropToggle.on('click', function() {
		dropToggle.not(this).closest('li').find('ul').slideUp(200);
		$(this).closest('li').children('ul').slideToggle(200);
		return false;
	});

	$( ".toggle_icon" ).on('click', function() {
		$( 'body' ).toggleClass( "open" );
	});
//Tab//


$('.spec').owlCarousel({
    loop:true,
    margin:35,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

//Quick Link//
$(".sideBtn").on('click', function(){
	  $('#slideModal').addClass('open');
  });
  $(".slideModalClose").on('click', function(){
	  $('#slideModal').removeClass('open');
  });
  $(".sideLinkBtn").on('click', function(){
	  $('#sideLink').addClass('open');
  });
  $(".sideLinkClose").on('click', function(){
	  $('#sideLink').removeClass('open');
  });
  
 