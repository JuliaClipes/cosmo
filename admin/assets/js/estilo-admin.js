$('.checkAll').on('change',function(){
	var target = $(this).data('target');
	var check = this.checked;
	$(this).closest('.row').siblings().find(target).prop('checked',check)
});
$('.dropAll').on('change',function(){
	var target = $(this).data('target');
	var check = this.checked;
	if(check){
		$(this).closest('.row').siblings().find(target).slideDown(200);  
	}
	else {
		$(this).closest('.row').siblings().find(target).slideUp(200);
	}
});
$('.btnDropDown').click(function(){
	$(this).toggleClass('is-active');
	$(this).closest('.row').children('.sublist').slideToggle(200);
});

// INPUT NUMBER
$('[data-type="number"]').keydown(function(e){
	if(
	// Allow: space, backspace, delete, tab, escape, enter and .
	$.inArray(e.keyCode, [32, 8, 46, 9, 27, 13, 110, 190]) !== -1 ||
	// Allow: Ctrl/cmd+A
	(e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
	// Allow: Ctrl/cmd+C
	(e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
	// Allow: Ctrl/cmd+X
	(e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
	// Allow: Ctrl/cmd+V
	(e.keyCode == 86 && (e.ctrlKey === true || e.metaKey === true)) ||
	// Allow: home, end, left, right
	(e.keyCode >= 35 && e.keyCode <= 39)
	){
		return;
	}
	// Ensure that it is a number and stop the keypress
	if(
	(e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)
	){
		e.preventDefault();
	}
});

// GET IMAGE
function getImg(x){
    if( x.files.length > 0 ){
        var fr = new FileReader();
        var imgSrc = null;
        var parent = x.parentElement;
        fr.onload = function(e){
            imgSrc = e.target.result;
            if( parent.getElementsByTagName("img").length > 0 ){
                parent.removeChild(parent.getElementsByTagName("img")[0]);
            }
            var img = document.createElement("img");
            img.setAttribute("src",imgSrc);
            img.style.width = "80px";
            img.style.verticalAlign = "top";
            parent.appendChild(img);
        }
        fr.readAsDataURL(x.files[0]);
    }
}