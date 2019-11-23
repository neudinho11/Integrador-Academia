$(function() {

    $(".rad").checkboxradio();

    $(document).ready(function() {
        $("#form_cadastro").validate({
            rules: {
                txtNome: {
                    required: true,
                    minlength: 5
                },
                txtEmail: {
                    required: true,
                    email: true
                },
                txtMatricula: {
                    required: true,
                    digits: true
                },
                txtSenha: {
                    required: true,
                    minlength: 6
                },
                txtSenhaConf: {
                    required: true,
                    equalTo: "#txtSenha",
                    minlength: 6
                },
                txtDataNasc: {
                    required: true,
                    date: true
                },
                radSexo: {
                    required: true
                },
                radTipoConta: {
                    required: true
                }
            },
            messages: {
                txtNome: {
                    required: "Informe seu nome",
                    minlength: "O nome deve ter mais de 5 caracteres"
                },
                txtEmail: {
                    required: "Informe seu e-mail",
                    email: "e-mail invalido"
                },
                txtMatricula: {
                    required: "Informe a matricula",
                    digits: "Informe somente numeros"
                },
                txtSenha: {
                    required: "Informe a senha",
                    minlength: "A senha deve ter mais de 6 caracteres"
                },
                txtSenhaConf: {
                    required: "Informe a confirmação da senha",
                    equalTo: "As senhas devem ser iguais",
                    minlength: "A senha deve ter mais de 6 caracteres"
                },
                txtDataNasc: {
                    required: "Informe a data de nascimento",
                    date: "Data invalida"
                },
                radSexo: {
                    required: "Informe o sexo"
                },
                radTipoConta: {
                    required: "Informe o tipo de conta"
                }
            }
        });
    });

})

/*$(function() {

    var boole = true;
    var verificao;

    function inputInvalido(nInput, verif) {
        nInput.removeClass("valid").addClass("invalid");
        verif.removeClass("noErro").addClass("error");
        boole = false;
    }

    function inputValido(nInput, verif) {
        nInput.removeClass("invalid").addClass("valid");
        verif.removeClass("Error").addClass("noErro");
        boole = true;
    }

    $("#txtNome").keypress(function(e) {
        var key = (e.key ? e.key : e.which);
        if (key > 47 && key < 58)
            e.preventDefault();
    });

    $("#txtEmail").keypress(function(e) {
        var key = (e.key ? e.key : e.which);
        if (key < 48 && key > 57)
            e.preventDefault();
    });

    $("#txtMatricula").keyup(function(e) {
        this.val(this.val().replace(/[^\d\.]/g, ''));
    });

    $("#txtNome").on('input', function() {
        var nome = $(this);
        var vNome = $("#vNome");

        if (nome.val().length < 8) {
            inputInvalido(nome, vNome);
            vNome.html("Nome invalido");
        } else {
            inputValido(nome, vNome);
        }

        verificao[0] = boole;
    });

    $("#txtEmail").on('input', function() {
        var email = $(this);
        var vEmail = $("#vEmail");

        if (email.val().length < 8) {
            inputInvalido(email, vEmail);
            vEmail.html("E-mail Invalido");
        } else {
            inputValido(email, vEmail);
        }

        verificao[1] = boole;
    });

    $("#txtMatricula").on('input', function() {
        var matricula = $(this);
        var vMat = $("#vMat");

        if (matricula.val().length < 8) {
            inputInvalido(matricula, vMat);
            vMat.html("E-mail Invalido");
        } else {
            inputValido(matricula, vMat);
        }

        verificao[2] = boole;
    });

    $("#txtSenha").on('input', function() {
        var senha = $(this);
        var vSenha = $("#vSenha");

        if (senha.val().length < 6) {
            inputInvalido(senha, vSenha);
            vSenha.html("Senha curta");
        } else {
            inputValido(senha, vSenha);
        }

        verificao[3] = boole;
    });

    $("#txtSenhaConf").on('input', function() {
        var senha = $(this);
        var vSenha = $("#vSenha2");

        if (senha.val() != $("#txtSenha").val()) {
            inputInvalido(senha, vSenha);
            vSenha.html("As senhas não correspondem");
        } else {
            inputValido(senha, vSenha);
        }

        verificao[4] = boole;
    });

    $("#form_cadastro").submit(function() {
        for (var i = 0; i < 5; i++) {
            if (verificao[i] == false)
                return false;
        }
    });

    $(".rad").checkboxradio();

});*/