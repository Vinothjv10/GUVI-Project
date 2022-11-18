
// alert("HIII");

function ajaxCall() {
    $.ajax({
        type: "GET",
        url: 'php/profile.php',
        dataType: "html",
        success: function (data) {
            $('#mydata').html(data);

        }
    })
};
ajaxCall();

// function ajaxCall() {
//     $.ajax({

//         // Our sample url to make request
//         url:
//             'php/profile.php',

//         // Type of Request
//         type: "GET",

//         // Function to call when to
//         // request is ok
//         success: function (data) {
//             // var x = JSON.stringify(data);
//             // console.log(x);
//             console.log(JSON.parse(data));
//             var d = (JSON.parse(data));

//             console.log(d.name);
//             for (const [key, value] of Object.entries(d)) {
//                 $('input[name={key}]').val(value);
//                 console.log(`${value}`);
//             }
//         },

//         // Error handling
//         error: function (error) {
//             console.log(`Error ${error}`);
//         }
//     });
// }
// ajaxCall();