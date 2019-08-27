window.onscroll = function () {
    scrollFunction();
};

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

window.addEventListener('scroll', function(e) {
    //var t = 200;
    //if(window.scroll(0, 200)){
    //    console.log("gzuis");
    //    document.getElementById('id02').style.display = 'block';
    //}
    console.log(document.body.scrollTop);
    if (document.body.scrollTop == 200) {
        console.log("asdas");
        document.getElementById('id02').style.display = 'block';
    } else {
       document.getElementById('id02').style.display = 'none';
    }
  
});



var modal = document.getElementById('id01');






