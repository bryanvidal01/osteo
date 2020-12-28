$(document).ready(function(){

    $('#rendez-vous').submit(function (event) {

        event.preventDefault();
        var userName = $(this).find('#yourSubName');
        var userSecondName = $(this).find('#yourName');
        var userMail = $(this).find('#yourMailAdress');
        var userPhone = $(this).find('#yourPhone');
        var userSubject = $(this).find('#yourNeed option:checked');
        var userMessage = $(this).find('#yourMessage');
        var userDisponibility = $(this).find('#yourDisponibility');
        var donotreply = $(this).find('#donotreply');

        var error = 0;
        if(userName.val() == ''){
            userName.addClass('error');
            error++;
        }else{
            userName.removeClass('error');
        }

        if(userSubject.val() == ''){
            userName.addClass('error');
            error++;
        }else{
            userSubject.removeClass('error');
        }

        if(userSecondName.val() == ''){
            userSecondName.addClass('error');
            error++;
        }else{
            userSecondName.removeClass('error');
        }

        if(userMail.val() == ''){
            userMail.addClass('error');
            error++;
        }else{
            userMail.removeClass('error');
        }

        if(userDisponibility.val() == ''){
            userDisponibility.addClass('error');
            error++;
        }else{
            userDisponibility.removeClass('error');
        }

        if(userPhone.val() == ''){
            userPhone.addClass('error');
            error++;
        }else{
            userPhone.removeClass('error');
        }





        if(error === 0){
            $.post(
                ParamsData.wp_ajax_url,
                {
                    'action': 'send_message',
                    'userName': userName.val(),
                    'userSecondName' : userSecondName.val(),
                    'userMail' : userMail.val(),
                    'userPhone' : userPhone.val(),
                    'userSubject' : userSubject.val(),
                    'userMessage' : userMessage.val(),
                    'userDisponibility' : userDisponibility.val(),
                    'donotreply' : donotreply.val()
                },
                function (response) {
                    if(response.code == 200){
                        console.log('toto');
                        $('#rendez-vous').find('.popin .info-return').html(response.message)
                        $('#rendez-vous').find('.popin').fadeIn();

                        $('html, body').animate({
                            scrollTop: $('#rendez-vous').offset().top - 30
                        }, 800, function(){

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    }
                }
            );
        }

    });

});


$(window).ready(function () {

});


window.onload = function() {
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        infinite: true,
        speed: 500,
        autoplay: true,
        arrows: false,
    });
};




