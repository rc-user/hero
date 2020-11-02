$(function () {
  // スライダー
  $('.mv').slick({
    arrows: false,
    dots: false,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    variableWidth: true,
    speed: 400,
    cssEase: 'ease',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          speed: 200,
          centerMode: false,
          variableWidth: false,
        }
      }
    ]
  });
});