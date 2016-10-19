// smooth scroll
// $('.smooth-scroll-link').smoothScroll({offset: -76});

/*$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});*/

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 120;
// var offset_top = $('#guideline-summary').offset().top;
var window_height = $(window).height();
$(window).resize(function(){
  // offset_top = $('#guideline-summary .demo-block-title').offset().top;
  window_height = $(window).height();
  // detectTouchTop();
})

$(window).scroll(function(event){
  // detectTouchTop();
  didScroll = true;
});

setInterval(function() {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function hasScrolled() {
  var st = $(this).scrollTop();
  var touch_bottom = $(document).height() - window_height - 120;

  // Make sure they scroll more than delta
  if(Math.abs(lastScrollTop - st) <= delta)
    return;

  // If they scrolled down and are past the navbar, add class .nav-up.
  // This is necessary so you never see what is "behind" the navbar.
  if (st > lastScrollTop && st > window_height){
    // Scroll Down
    $('.header-top, .back-to-top').removeClass('is-active').addClass('is-hide');

    // 當頁面接近底部的動作
    if ( st > touch_bottom ) {
      $('.header-top, .back-to-top').removeClass('is-hide').addClass('is-active');
    }
  } else {
    // Scroll Up

    // 當滾到底部
    if(st + window_height < $(document).height()) {
      $('.header-top, .back-to-top').removeClass('is-hide').addClass('is-active');
    }
  }
  // 當捲動還沒超出一個畫面的高度的時候
  if (st < window_height) {
    $('.back-to-top').removeClass('is-active');
  }

  lastScrollTop = st;
}