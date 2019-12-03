$(function() {
    $("#form_Treino").validate({
        rules: {
            txtDataAval: {
                required: true
            },
            txtPressao: {
                required: true
            },
            txtPeso: {
                required: true,
                number: true
            },
            txtAltura: {
                required: true,
                number: true
            },
            txtPescoco: {
                required: true,
                number: true
            },
            txtBicepsD: {
                required: true,
                number: true
            },
            txtBicepsE: {
                required: true,
                number: true
            },
            txtPeito: {
                required: true,
                number: true
            },
            txtAntD: {
                required: true,
                number: true
            },
            txtAntE: {
                required: true,
                number: true
            },
            txtCintura: {
                required: true,
                number: true
            },
            txtCoxaD: {
                required: true,
                number: true
            },
            txtCoxaE: {
                required: true,
                number: true
            },
            txtQuadris: {
                required: true,
                number: true
            },
            txtPantD: {
                required: true,
                number: true
            },
            txtPantE: {
                required: true,
                number: true
            }
        },
        messages: {
            txtDataAval: {
                required: "Campo obrigatorio"
            },
            txtPressao: {
                required: "Campo obrigatorio"
            },
            txtPeso: {
                required: "Campo obrigatorio",
                number: "Somente números"
            },
            txtAltura: {
                required: "Campo obrigatorio",
                number: "Somente números"
            },
            txtPescoco: {
                required: "Campo obrigatorio",
                number: "Somente números"
            },
            txtBicepsD: {
                required: "Campo obrigatorio",
                number: "Somente números"
            },
            txtBicepsE: {
                required: "Campo obrigatorio",
                number: "Somente números"
            },
            txtPeito: {
                required: "Campo obrigatorio",
                number: "Somente números"
            },
            txtAntD: {
                required: "Campo obrigatorio",
                number: "Somente números"
            },
            txtAntE: {
                required: "Campo obrigatorio",
                number: "Somente números"
            },
            txtCintura: {
                required: "Campo obrigatorio",
                number: "Somente números"
            },
            txtCoxaD: {
                required: "Campo obrigatorio",
                number: "Somente números"
            },
            txtCoxaE: {
                required: "Campo obrigatorio",
                number: "Somente números"
            },
            txtQuadris: {
                required: "Campo obrigatorio",
                number: "Somente números"
            },
            txtPantD: {
                required: "Campo obrigatorio",
                number: "Somente números"
            },
            txtPantE: {
                required: "Campo obrigatorio",
                number: "Somente números"
            }
        }
    })

    var cont = 0;

    $("#btnExerc").click(function() {
        var nome = "nome" + cont;
        var parte = "parte" + cont;
        var series = "series" + cont;
        var repet = "repet" + cont;
        var dia = "dia" + cont;
        $("#divAppend").append("<span><hr><div class='row'><div class='form-group col-md-2'><label>Nome do exercicio: </label><input id=" + nome + "' name=" + nome + " type='text' placeholder='Nome do exercicio' class='form-control input-md' required>" +
            "</div><div class='form-group col-md-2'><label>Parte do corpo: </label><input id=" + parte + " name=" + parte + " type='text' placeholder='Parte do corpo' class='form-control input-md' required></div>" +
            "<div class='form-group col-md-2'><label>Series: </label><input id=" + series + " name=" + series + " type='number' placeholder='Series' class='form-control input-md' required></div>" +
            "<div class='form-group col-md-2'><label>Repetições: </label><input id=" + repet + " name=" + repet + " type='number' placeholder='Repetições' class='form-control input-md' required></div>" +
            "<div class='form-group col-md-3'><label>Dia da semana: </label><input id=" + dia + " name=" + dia + " type='text' placeholder='Dia da semana' class='form-control input-md' required></div>" +
            "<div class='form-group col-md-1'><p></p><p class='btn btn-danger' id='btnRmv" + cont + "' name='btnRmv" + cont + "' onclick='remover(this)'>X</p></div></div></span>");

        $("#ttlExerc").val(cont);
        cont++;
    });

    remover = function(id) {
        var span = id.closest('span');
        span.remove();
    }

});