
$(document).ready(function () {
    var $seuCampoCpf = $("#cpf");
    $seuCampoCpf.mask("999.999.999-99", {
        reverse: true
    });
});
$(document).ready(function () {
    var $seuCampoCpf = $("#telefone");
    $seuCampoCpf.mask('(99) 99999-9999', {
        reverse: true
    });
});
$(document).ready(function () {
    var $seuCampoCep = $("#cep");
    $seuCampoCep.mask('99999-999', {
        reverse: false
    });
})