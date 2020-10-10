$(document).ready(function() {
    $('.step').hide();
    $('.step').first().show();

    var passoexibido = function() {
        var index = parseInt($('.step:visible').index());
        if (index == 0) {
            $('#prev').prop('disabled', true);
        } else if (index == (parseInt($('.step').length) - 1)) {
            $('#next').prop('disabled', true);
        } else {
            $('#prev').prop('disabled', false);
            $('#next').prop('disabled', false);
        }
        $cd1 = (parseInt($('.step')));

    }
    passoexibido();

    $('#next').click(function() {
        $('.step:visible').hide().next().show();
        passoexibido();
    });
    $('#prev').click(function() {
        $('.step:visible').hide().prev().show();
        passoexibido();
    });

})