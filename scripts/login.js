function ShowPassword() {
    let x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function ValidateEmail(mail) {
    const emailRegEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return emailRegEx.test(mail);
}

function IsEmpty(val) {
    return (val == "") || (val == null);
}

function ParseLoginForm() {
    let mail = document.getElementById("email");
    let password = document.getElementById("password");
    const emailCorrect = ValidateEmail(mail.value);

    if (emailCorrect && !IsEmpty(mail.value) && !IsEmpty(password.value)) {
        // Проверка через БД пароля и логина
        return;
    }
}