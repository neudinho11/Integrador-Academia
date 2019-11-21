$(function() {
    $(".num").keyup(function(e) {
        this.val(this.val().replace(/[^\d\.]/g, ''));
    });

    //$("#txtPressao").attr("readonly", true);

});