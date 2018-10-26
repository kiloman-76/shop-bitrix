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
                var orderPopup = new BX.PopupWindow(
                    "order_popup",
                    null,
                    {
                        content: '<b>Ваш промокод:'+ data['PROMOCODE'] +'</b>',
                        closeIcon: false,
                        titleBar: {content: BX.create("span", {html:'<p>Вы подписались на нашу рассылку!</p>', 'props': {'className': 'access-title-bar'}})},
                        zIndex: 1000,
                        offsetLeft: 0,
                        offsetTop: 0,
                        draggable: {restrict: false},
                        buttons: [
                            new BX.PopupWindowButton({
                                text: "Закрыть" ,
                                className: "webform-button-link-cancel" ,
                                events: {click: function(){
                                    this.popupWindow.close();
                                    document.location.href = '/test/';
                                }}
                            })
                        ]
                    });
                orderPopup.show();
                $(".popup").show();
                $(".popup__close").on('click', function () {
                    $(".popup").hide();
                })
                // window.location.reload();
            }
        })
    });
});