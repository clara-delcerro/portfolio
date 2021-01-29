'use strict';

/* DOCUMENT READY */

$(document).ready(function() {

  // Toggle nav
  $( document ).on('click', '.header__nav__btn--menu', function() {
    $(this).hasClass('is-active') ? toggleNav('hide') : toggleNav('show');
  });

  // Toggle nav
  $( document ).on('click', '.nav__list__btn', function() {
    if ( $('.header__nav__btn--menu').hasClass('is-active') && $('.nav').hasClass('is-active')) {
      $('.header__nav__btn--menu').removeClass('is-active');
      $('.nav').removeClass('is-active');
    }
  });
});

/* FUNCTIONS */

// Toggle nav
function toggleNav(action) {
  if (action === 'show') {
    $('.header__nav__btn--menu').addClass('is-active');
    $('.nav').addClass('is-active');
  } else {
    $('.header__nav__btn--menu').removeClass('is-active');
    $('.nav').removeClass('is-active');
  }
}

