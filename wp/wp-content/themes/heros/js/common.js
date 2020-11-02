$(function () {
  // ドロワーメニュー
  $(function () {
    $('.drawer').drawer();
  });
  $('.drawer-nav a').on('click', function () {
    $('.drawer').drawer('close');
  });
  $('.drawer-nav dt').on('click', function () {
    $(this).toggleClass('active');
    $(this).siblings('dd').slideToggle(200);
  });

  //メガメニュー
  $('.mega-trigger').mouseover(function () {
    $(this).addClass('active');
    $('.mv').addClass('active');
    $('.second__mv').addClass('active');
  }).mouseout(function () {
    $(this).removeClass('active');
    $('.mv').removeClass('active');
    $('.second__mv').removeClass('active');
  });

  // スクロールアニメーション
  $('.scroll-link a').on('click', function (event) {
    event.preventDefault();

    var $this = $(this);
    var linkTo = $this.attr('href');
    var $target = $(linkTo);
    var offset = 0;
    var pos = $target.offset().top - offset;
    $('html,body').animate({
      scrollTop: pos
    }, 400);
  });
});