'use strict';

/* VARS */
var mqJustDesktop = window.matchMedia( "(min-width: 1280px)" );
var mqDesktop = window.matchMedia( "(min-width: 768px)" );
var mqTabletPortrait = window.matchMedia( "(min-width: 768px) and (max-width: 1279px)" );
var mqMobilePortrait = window.matchMedia( "(max-width: 767px)" );

/* WINDOW LOAD */

window.onload = function() {
  if(/iP(hone|ad)/.test(window.navigator.userAgent)) {
    document.body.addEventListener('touchstart', function() {}, false);
  }
};

/* DOCUMENT READY */

$(document).ready(function() {
  //Remove # from href
  $( document ).on('click', 'a, area', function(event) {
    var ahref = $(this).attr('href');
    ahref == "#" ? event.preventDefault() : '';
  });

  // Add touch-device class to body if it is a touch device
  isTouchDevice() ? $('body, a, button, [type="button"]').addClass('touch') : $('body, a, button, [type="button"]').addClass('no-touch');

  // Close cookies and accept them
  $( document ).on('click', '.cookies__btn', function() {
    setCookie();
    $('.cookies').slideUp();
  });

  // Scroll to
  $( document ).on('click', '[data-scroll-to]', function() {
    var data = $(this).data('scroll-to');
    var element = $('#' + data);
    var offset = 0;

    scrollToElement(element, offset);
  });

   // Match Height
  $('.card__title').matchHeight();
  $('.card').matchHeight();
  $('.card__text').matchHeight();
});

/* FUNCTIONS */

//ScrollTo
function scrollToElement(element, offset) {
  var target = element;

  $('html,body').animate({
    scrollTop: target.offset().top - offset
  }, 500);

  return false;
}

// Detect if it is a touch device
function isTouchDevice() {
  return true == ('ontouchstart' in window || window.DocumentTouch && document instanceof DocumentTouch);
}

// Scroll to element
function scrollToElement(element, offset) {
  var target = element;

  $('html,body').animate({
    scrollTop: target.offset().top - offset
  }, 500);

  return false;
}

// Set cookie
function setCookie() {
  var name = "aceptaWebCookie=si;";
  var date = new Date();
  // 30 dias
  date.setTime(date.getTime()+(30*24*60*60*1000));
  var expires = "expires="+date.toGMTString()+";";
  document.cookie = name+expires+"path=/";
}
