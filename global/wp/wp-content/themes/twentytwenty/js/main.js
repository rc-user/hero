//mainvisual-slide
var topslider = new Swiper ('.top-slider', {
  loop: true,
  loopedSlides: 3,
  autoplay: 2000,
  speed: 2000,
  slidesPerView: 'auto',
  centeredSlides: true,
  spaceBetween: 50,  
});

/*
jQuery(function() {
  // スクロールアニメーション
  jQuery('.scroll-link a').on('click', function(event) {
    event.preventDefault();

    var $this = $(this);
    var linkTo = $this.attr('href');
    var $target = $(linkTo);
    var offset = 0;
    var pos = $target.offset().top - offset;
    jQuery('html,body').animate({
      scrollTop: pos
    }, 400);
  });
});
*/
