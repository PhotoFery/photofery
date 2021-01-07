(function($, undefined) {

  'use strict';

  $.fn.smoothscroll = function(options) {

    var defaults = {
      duration:  400,
      easing: 'swing',
      offset: 0,
      hash: true,
      focus: true,
    };

    var config = $.extend(true, {}, defaults, options);

    return this.each(function() {
      $(this).on('click', function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
          &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var hash = this.hash;
          var $target = hash ? $(hash) : $('html');
          $target = $target.length ? $target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if ($target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').stop().animate({
              scrollTop: $target.offset().top + config.offset,
            }, config.duration, config.easing, function() {
              // Callback after animation
              // Add the target hash to the end of the URL
              if (config.hash) {
                if (history.pushState) {
                  history.pushState(null, null, hash);
                } else if (0 == config.offset) {
                  window.location.hash = hash;
                } else { // Fallback on old browsers without history API.
                  var operator = (config.offset > 0 ? '+' : '-');
                  window.location.hash = hash + '-offset-' + operator + Math.abs(config.offset);
                }
              }
              if (config.focus) {
                // Must change focus!
                $target.focus();
                if ($target.is(':focus')) { // Checking if the target was focused
                  return false;
                } else {
                  $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                  $target.focus(); // Set focus again
                }
              }
            });
          }
        }
      });
    });

  };

})($);


$(document).ready(function(){
    $(window).scroll(function() {
    if ($(window).scrollTop() >= 50) {
        $('.nav-menu').addClass('fixed-top');
    } else {
        $('.nav-menu').removeClass('fixed-top');
    }
});
});

/*SMOOTH SCROLL*/
$(document).ready(function(){
    $(function() {
  $('.nav-link[href*="#"]').smoothscroll({duration:  4000,
      easing: 'easeOutCirc',
      offset: 0,
      hash: true,});
});
});
  
      /* ==========================
        Stats Counter
   ========================== */
   $(document).ready(function(){
    $(function(){
  $('.counter').counterUp({
    delay: 10,
    time: 1000
})
});
});


$(document).ready(function(){
 $('.screen-slick').slick({
        autoplay:true,
  autoplaySpeed:1500,
  arrows:false,
  dots:true,
        responsive: [
      {
        breakpoint: 992,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        }
      }
    ]
      });
});


$(document).ready(function(){
        $('.collapsed').click(function() {

$(this).find('i').toggleClass('fa-plus fa-minus');


});
$('.collapsed-new').click(function() {

$(this).find('i').toggleClass('fa-minus fa-plus');


});
});


  $(window).scroll(function() {
    if ($(window).scrollTop() >= 50) {
        $('.nav-menu').addClass('fixed-top');
    } else {
        $('.nav-menu').removeClass('fixed-top');
    }
});
/*SMOOTH SCROLL*/
  $(function() {
  $('a[href*="#"]').smoothscroll({duration:  4000,
      easing: 'easeOutCirc',
      offset: 0,
      hash: true,});
});
      /* ==========================
        Stats Counter
   ========================== */

$(function(){
  $('.counter').counterUp({
    delay: 10,
    time: 1000
})
});



$('.screen-slick').slick({
        autoplay:true,
  autoplaySpeed:1500,
  arrows:false,
  dots:true,
        responsive: [
      {
        breakpoint: 992,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        }
      }
    ] 
      });

$('.collapsed').click(function() {

    $(this).find('i').toggleClass('fa-plus fa-minus');


});
$('.collapsed-new').click(function() {

    $(this).find('i').toggleClass('fa-minus fa-plus');


});

