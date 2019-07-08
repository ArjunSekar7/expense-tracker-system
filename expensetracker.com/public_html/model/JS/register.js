function verify(form) {
    password1 = form.password.value;
    password2 = form.rePassword.value;
    userName = form.userName.value;
    img_format = form.profileImage.value;
    img_format = img_format.split(".");
    img_format = img_format[1].toString();
    if (img_format != "jpg" && img_format != "png") {
        alert("Choose .png or .jpg format");
        return false;
    }
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
