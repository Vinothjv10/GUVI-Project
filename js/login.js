$('#submit').on('click', function () {
    $.ajax({
        type: 'post',
        url: 'php/login.php',
        data: $('#myForm').serialize(),
        success: function (response) {
            alert("Your Successfully logged");
            // var url = "http://localhost/GUVI/login.html";
            // $(location).attr('href', url);
            console.log(response);
        },
        error: function () {
            alert("error")
        }
    })
})