$(document).ready(function () {
    $("#form").validate();
});

$('#submit').on('click', function () {
    $.ajax({
        type: 'POST',
        url: 'php/login.php',
        data: $('#form').serialize(),
        success: function (response) {
            // alert("Your Successfully logged");


            console.log(response);

        },
        error: function () {
            alert("error")
        }
    }).done(function () {
        var url = "http://localhost/GUVI-Project/profile.html";
        $(location).attr('href', url);
    });
})