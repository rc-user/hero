//mainvisual-slide
var swiper = new Swiper('.swiper-container', {
  loop: true,
  loopedSlides: 3,
  slidesPerView: 'auto',
  centeredSlides: true,
  spaceBetween: 50,
  autoplay: {
    delay: 5000,
  },
  pagination: {
     el: '.swiper-pagination',
     clickable: true,
   },
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
