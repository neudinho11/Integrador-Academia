$(function() {
    $("#form_Avaliac").validate({
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
            }
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

});