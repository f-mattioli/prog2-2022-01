$(document).ready(function() {

    // seletor -> evento -> callback
    $("#btn").click(function () {
        $("#saida").html($("#msg").val());
    });

    $(".btnTeste").click(function () {
        $("#saida2").html($(this).html());
    });

});

