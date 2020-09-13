$(function() {
    var nav = $('.nav');
    //�\���ʒu
    var navTop = nav.offset().top+200;
    //�i�r�Q�[�V�����̍����i�V���h�E�̕����������Ă܂��j
    var navHeight = nav.height()+0;
    var showFlag = false;
    nav.css('top', -navHeight+'px');
    //�i�r�Q�[�V�����̈ʒu�܂ł�����\��
    $(window).scroll(function () {
        var winTop = $(this).scrollTop();
        if (winTop >= navTop) {
            if (showFlag == false) {
                showFlag = true;
                nav
                    .addClass('fixed')
                    .stop().animate({'top' : '0px'}, 200);
            }
        } else if (winTop <= navTop) {
            if (showFlag) {
                showFlag = false;
                nav.stop().animate({'top' : -navHeight+'px'}, 200, function(){
                    nav.removeClass('fixed');
                });
            }
        }
    });
});