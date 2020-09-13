$(function(){
  $('a[href^="#"]').SmoothScroll({
      duration : 2000,
      easing : 'easeOutQuint'
  });

    var topBtn = $('.pagetop');
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

/*スライダーの2マイ目ができしだい公開
$(function() {
  $('#top_slider').slick({
    fade: true,
    speed: 2000,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: true,
    infinite: true,
    pauseOnHover: false,
    pauseOnDotsHover: true,
    slidesToShow: 1
  });
});
*/

$(function() {
  $('#news_slider').slick({
    speed: 1700,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    dots: false,
    infinite: true,
    pauseOnHover: false,
    pauseOnDotsHover: true,
    slidesToShow: 1
  });
});

$(function() {
  $('#news_slider02').slick({
    speed: 1700,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    dots: false,
    infinite: true,
    pauseOnHover: false,
    pauseOnDotsHover: true,
    slidesToShow: 1
  });
});


$(function() {
  $(".accordion li .nest").hide();
  $(".accordion .button").on("click", function() {
    $(this).next().slideToggle();
    $(this).toggleClass("active");
  });
});

/*
$(function(){
    var fadeSpeed = 700;
    $('#block02,#block03').find('.col2').hide();
    $('#block03').find('.ttl_type01,p').hide();


        $('#block02').waypoint(function (direction) {

            if (direction === 'down') {
                $('#block02').find('.col2:eq(0)').fadeIn(fadeSpeed);
                $('#block02').find('.col2:eq(1)').fadeIn(fadeSpeed);
            }
            if (direction === 'up') {
            }

        },{offset: 500});

        $('#block03').waypoint(function (direction) {

            if (direction === 'down') {
                $('#block03').find('.ttl_type01:eq(0)').fadeIn(fadeSpeed);
                $('#block03').find('p:eq(0)').fadeIn(fadeSpeed);
            }
            if (direction === 'up') {
            }

        },{offset: 450});

        $('#block03').waypoint(function (direction) {

            if (direction === 'down') {
                $('#block03').find('.col2:eq(0)').fadeIn(fadeSpeed);
                $('#block03').find('.col2:eq(1)').fadeIn(fadeSpeed);
            }
            if (direction === 'up') {
            }

        },{offset: 350});


});
*/