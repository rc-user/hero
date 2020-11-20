$(function () {
  // スライダー
  $('.media__list').slick({
    arrows: false,
    dots: false,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    pauseOnFocus: false,
    variableWidth: true,
    speed: 400,
    cssEase: 'ease',
    autoplaySpeed: 4000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          speed: 400,
          centerMode: false,
          variableWidth: false,
        }
      }
    ]
  });
});