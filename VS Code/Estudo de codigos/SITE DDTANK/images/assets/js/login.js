const loginModule = function () {
    const uiElements = {
        loginForm: $("#login_form"),
        loginBtn: $("#login_btn"),
        loginTips: $("#elexSiteTips"),
    };

    const data = {
        username: uiElements.loginForm.find('[name="email"]').val(),
        password: uiElements.loginForm.find('[name="password"]').val(),
    };

    if (data.username.trim() === "" || data.password.trim() === "") {
        uiElements.loginTips.html("O nome do usuário e a senha não podem ser deixados em branco");
        uiElements.loginTips.addClass("alert alert-error");
        uiElements.loginTips.show();
        return;
    }

    uiElements.loginTips.html("");

    uiElements.loginBtn.attr("disabled", true);
    uiElements.loginBtn.html("Entrando...");

    //submit form
    uiElements.loginForm.submit();
};

$("#login_form input").keypress(function (event) {
    if (event.which === 13) loginModule();
});

const registerModule = function () {
    const uiElements = {
        registerForm: $("#registerForm"),
        registerBtn: $("#register_btn"),
        registerTips: $("#elexSiteTips"),
    };

    const data = {
        username: uiElements.registerForm.find('[name="email"]').val(),
        email: uiElements.registerForm.find('[name="email"]').val(),
        password: uiElements.registerForm.find('[name="password"]').val(),
        password2: uiElements.registerForm.find('[name="password_confirmation"]').val(),
    };

    if (data.username.trim() === "" || data.password.trim() === "" || data.password2.trim() === "" || data.email.trim() === "") {
        uiElements.registerTips.html("Todos os campos devem ser preenchidos");
        uiElements.registerTips.addClass("alert alert-error");
        uiElements.registerTips.show();
        return;
    }

    //check terms
    if (!uiElements.registerForm.find('[name="terms"]').is(":checked")) {
        uiElements.registerTips.html("Você deve aceitar os termos de uso");
        uiElements.registerTips.addClass("alert alert-error");
        uiElements.registerTips.show();
        return;
    }

    if (data.password != data.password2) {
        uiElements.registerTips.html("As senhas não coincidem");
        uiElements.registerTips.addClass("alert alert-error");
        uiElements.registerTips.show();
        return;
    }

    uiElements.registerTips.html("");

    uiElements.registerBtn.attr("disabled", true);
    uiElements.registerBtn.html("Registrando...");

    //submit form
    uiElements.registerForm.submit();
};

$("#registerForm input").keypress(function (event) {
    if (event.which === 13) {
        registerModule.register();
    }
});
