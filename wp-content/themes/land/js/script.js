$(document).ready(function() {

/*** Header Dropdown ***/
$('.header-dropdown').on('click', function(event) {
  var targetParent = $(event.target).closest('li');
  var targetButtom = targetParent.find('.header-button');
  var targetWrap = targetParent.find('.header-dropmenu-wrap');
  var targetElem = targetParent.find('.header-dropmenu');

  targetButtom.toggleClass('is-active');

  if ( targetWrap.hasClass('is-hidden') ) {
    targetWrap.removeClass('is-hidden');
    targetElem.addClass('slide-up');
    setTimeout(function() {
      targetElem.removeClass('slide-up');
    }, 300);
  } else {
    targetElem.addClass('slide-down');
    setTimeout(function() {
      targetElem.removeClass('slide-down');
      targetWrap.addClass('is-hidden');
    }, 300);
  }
});

/*** Header Inner Menu ***/
$('.header-hamburger').on('click', function() {
  $('body').css('overflow', 'hidden');
  $('.innerMenu-wrap').removeClass('is-hidden');
  $('.innerMenu').addClass('slide-left');
  setTimeout(function() {
    $('.innerMenu').removeClass('slide-left');
  }, 500);
});

$('.innerMenu .close-button, .innerMenu-link').on('click', function() {
  $('.innerMenu').addClass('slide-right');
  setTimeout(function() {
    $('.innerMenu').removeClass('slide-right');
    $('.innerMenu-wrap').addClass('is-hidden');
    $('body').removeAttr('style');
  }, 500);
});

$('.innerMenu-wrap').on('click', function(event) {
  if ( $(event.target).hasClass('innerMenu-wrap') ) {
    $('.innerMenu').addClass('slide-right');
    setTimeout(function() {
      $('.innerMenu').removeClass('slide-right');
      $('.innerMenu-wrap').addClass('is-hidden');
      $('body').removeAttr('style');
    }, 500);
  }
})

/*** Products Slider ***/
var productsSliderLarge;
var productsSliderSmall;
createProductsSlider();
$(window).on('resize', createProductsSlider);

function createProductsSlider() {
  if ( $(window).width() > 400 ) {
    if ( productsSliderSmall ) {
      productsSliderSmall.slick('unslick');
      productsSliderSmall = null;
    }

    if ( !productsSliderLarge ) {
      $('.products-list-nav-dots').empty();

      productsSliderLarge = $('.products-list').slick({
        rows: 2,
        slidesPerRow: 4,
        dots: true,
        appendArrows: $('.products-list-nav'),
        appendDots: $('.products-list-nav-dots'),
        prevArrow: '<button type="button" class="products-list-nav-prev"><svg class="icon icon-arrow-l"><use xlink:href="img/symbol-defs.svg#icon-arrow-l"></use></svg></button>',
        nextArrow: '<button type="button" class="products-list-nav-next"><svg class="icon icon-arrow-r"><use xlink:href="img/symbol-defs.svg#icon-arrow-r"></use></svg></button>',
        dotsClass: 'products-list-nav-dots-inner',
        responsive: [
          {
            breakpoint: 1280,
            settings: {
              slidesPerRow: 3,
            },
          },
          {
            breakpoint: 640,
            settings: {
              slidesPerRow: 2,
            },
          },
        ],
      });
    }
  } else {
    if ( productsSliderLarge ) {
      productsSliderLarge.slick('unslick');
      productsSliderLarge = null;
    }

    if ( !productsSliderSmall ) {
      $('.products-list-nav-dots').append('<span class="current-slide">1</span><span class="number-slides">' + $('.products-list').children().length + '</span>');

      productsSliderSmall = $('.products-list').slick({
        slidesToShow: 1,
        appendArrows: $('.products-list-nav'),
        prevArrow: '<button type="button" class="products-list-nav-prev"><svg class="icon icon-arrow-l"><use xlink:href="img/symbol-defs.svg#icon-arrow-l"></use></svg></button>',
        nextArrow: '<button type="button" class="products-list-nav-next"><svg class="icon icon-arrow-r"><use xlink:href="img/symbol-defs.svg#icon-arrow-r"></use></svg></button>',
      });
      productsSliderSmall.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        $('.products-list-nav-dots .current-slide').html(nextSlide + 1);
        console.log(slick);
      });
    }
  }
}

/*** Products Pop-up ***/
$('.product-list-item-btn, .offers-list-item .btn-grey, .l-additional .btn-general').on('click', function() {
  $('.products-popup-wrap').removeClass('is-hidden');
  $('.products-popup').addClass('fade-in');
  setTimeout(function() {
    $('.products-popup').removeClass('fade-in');
  }, 400);
});

$('.products-popup .close-button').on('click', function() {
  $('.products-popup').addClass('fade-out');
  setTimeout(function() {
    $('.products-popup').removeClass('fade-out');
    $('.products-popup-wrap').addClass('is-hidden');
  }, 400);
});

$('.products-popup-wrap').on('click', function(event) {
  if ( $(event.target).hasClass('products-popup-wrap') ) {
    $('.products-popup').addClass('fade-out');
    setTimeout(function() {
      $('.products-popup').removeClass('fade-out');
      $('.products-popup-wrap').addClass('is-hidden');
    }, 400);
  }
});

$('.products-popup form').on('submit', function(event) {
  event.preventDefault();
  /// Function when Form send was success
  var title = $('.products-popup .title-section').html();
  $('.products-popup .title-section').html('Thank you!');
  var form = $('.products-popup form').detach();
  $('.products-popup').css({minHeight: '435px'});
  $('.products-popup').append('<p class="light-gray text-center">Our specialist will contact you</p>');
  setTimeout(function() {
    $('.products-popup .title-section').html( title );
    $('.products-popup p').detach();
    $('.products-popup').removeAttr('style');
    $('.products-popup').append( form );
  }, 10000);
  /// End of Form send Success
});

/*** Horizontal block - Responsive height ***/
setResponsiveHeight({
  maxWidth: 1280,
  minWidth: 1023,
  changedElem: '.l-about',
  sampleElem: '.about-text',
});
$(window).on('resize', function() {
  setResponsiveHeight({
    maxWidth: 1280,
    minWidth: 1023,
    changedElem: '.l-about',
    sampleElem: '.about-text',
  });
});

});

function setResponsiveHeight(options) {
  var maxWidth = options.maxWidth,
      minWidth = options.minWidth,
      changedElem = options.changedElem,
      sampleElem = options.sampleElem;
  if ( $(window).width() <= maxWidth && $(window).width() > minWidth ) {
    $(changedElem).height( $(sampleElem).innerHeight() );
  } else {
    $(changedElem).removeAttr('style');
  }
}
