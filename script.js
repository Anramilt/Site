/* jshint esversion: 6 */
$(document).ready(function() {
    $("form").submit(function() {
        let th = $(this);
        $.ajax({
            type: "POST",
            url: "send.php",
            data: th.serialize()
        }).done(function() {
            alert("Сообщение успешно отправлено!");
            setTimeout(function() {
                th.trigger("reset");
            }, 1000);
        }).fail(function () {
            alert("Произошла ошибка!");
        });
        return false;
    });
});