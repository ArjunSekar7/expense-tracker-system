function verify(form) {
    password1 = form.password.value;
    password2 = form.rePassword.value;
    userName = form.userName.value;
    pass_length = password1.length;
    if (/[^a-zA-Z]/.test(userName)) {
        alert("Provide valid UserName");
        return false;
    }
    if (password1 != password2) {
        alert("Password does not match");
        return false;
    }
    if (pass_length < 7) {
        alert("Password Week - Give atlest 8 characters");
        return false;
    }
}
