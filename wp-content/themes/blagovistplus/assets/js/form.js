$(document).ready(function() {

    //E-mail Ajax Send
    $("form").submit(function() { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function() {
            if (true) {
                swal("Дякуємо за Вашу заявку!", "Найближчим часом з Вами зв'яжеться наш адміністратор", "success");
            } else {
                return swal("Сталася помилка!", "повторіть будь ласка заявку!", "error");
            }
            // alert("Thank you!");
            setTimeout(function() {
                // Done Functions
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });

});
/*// Маска ввода номера телефона (плагин maskedinput)
$(function($){
    $('[name="phone"]').mask("+3(999) 999-9999");
});*/
