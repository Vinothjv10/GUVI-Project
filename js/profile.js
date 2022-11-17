
// alert("HIII");

$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "php/profile.php",
        dataType: "html",
        success: function (data) {
            $('#my-data').html(data);

        }
    })
});