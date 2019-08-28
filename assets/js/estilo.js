function topFunction(){
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#botao-topo').fadeIn();
        } else {
            $('#botao-topo').fadeOut();
        }
    });

    $('#botao-topo').click(function () {
        $('html, body').animate({scrollTop: 0}, 500);
        return false;
    });
});
}

window.addEventListener('scroll', function (e) {
    if (document.body.scrollTop == 200) {
        document.getElementById('id02').style.display = 'block';
    } else {
        document.getElementById('id02').style.display = 'none';
    }

});



var modal = document.getElementById('id01');






