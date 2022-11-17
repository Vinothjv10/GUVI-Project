// console.log("hiiii")

let email = document.forms['myForm']['email'];
let password = document.forms['myForm']['password'];

let email_error = document.getElementById('email_error');
let pass_error = document.getElementById('pass_error');

function validateForm() {
    console.log("hiiii")

    if (email.value.length < 9) {
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        // alert('fsfsdf');
        email.focus();
        return false;
    }
    if (password.value.length < 9) {
        password.style.border = "1px solid red";
        pass_error.style.display = "block";
        password.focus();
        return false;
    }
}
