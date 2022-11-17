
$('#submit').on('click', function () {
    $.ajax({
        type: 'post',
        url: 'php/register.php',
        data: $('#myForm').serialize(),
        success: function (response) {
            // alert("Your Successfully Signup");
            // var url = "http://localhost/GUVI/login.html";
            // $(location).attr('href', url);
            console.log(response);
        },
        error: function () {
            alert("error")
        }
    })
})
