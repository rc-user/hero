$(function () {
  // スライダー
  $('.archive__slick').slick({
    arrows: true,
    dots: false,
    autoplay: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    variableWidth: true,
    speed: 400,
    cssEase: 'ease',
    responsive: [
      {
        breakpoint: 1140,
        settings: {
          speed: 200,
          centerMode: false,
          variableWidth: false,
        }
      }
    ]
  });
});