$(function () {
    $("#loginform").validate({
        rules: {
            username: "required",
            password: "required"
        },
        messages: {
            username: "Please enter your username",
            lastname: "Please enter your password"
        }
    });
});
$(function () {
    $(".preloader").fadeOut();
    $('[data-toggle="tooltip"]').tooltip();
});
