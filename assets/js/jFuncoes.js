$(function() {
    $('.nome').clear();
    $('.email').clear();
    $('.phone').clear();
    $('.interesse').clear();
    $('.msg').clear();

    $('.btn_enviar').on('click', function() {
        var n, e, t, i, m;
        var msg = "";
        n = $('.nome').val();
        e = $('.email').val();
        t = $('.phone').val();
        i = $('.interesse').val();
        m = $('.msg').val();
    });

});