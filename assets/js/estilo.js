window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("botao-topo").style.display = "block";
  } else {
    document.getElementById("botao-topo").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



var modal = document.getElementById('id01');


$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#botao-topo').fadeIn();
        } else {
            $('#botao-topo').fadeOut();
        }
    });

    $('#botao-topo').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});
