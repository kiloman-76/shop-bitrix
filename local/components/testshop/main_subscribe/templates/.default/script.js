$( document ).ready(function() {
    console.log($('#main-subscribe-form'));

    $('#main-subscribe-form').on('submit', function (event) {
        event.preventDefault();
        var sendData = new Object();
        sendData.email_subscribe = $('#main-subscribe-form .subscribe__entry').val();
        sendData.subscribe = $('#main-subscribe-form .subscribe__checkbox').val();
        console.log(sendData);

        $.post(window.location, sendData, function(data){
            console.log(data);
            $("#main-subscribe-form .error").remove();
            $("#main-subscribe-form .success").remove();
            if(data['ERROR']){
                $("#main-subscribe-form").find('.subscribe__agreement').prepend("<p class='error'>" + data['ERROR'] + "</p>");
            } else {
                $(".popup__text").append(data['PROMOCODE']);
                $(".popup").show();
                $(".popup__close").on('click', function () {
                    $(".popup").hide();
                })
                // window.location.reload();
            }
        })
    });
});