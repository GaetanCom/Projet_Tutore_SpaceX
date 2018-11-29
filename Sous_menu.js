$(window).scroll(function() {   
    var scroll = $(window).scrollTop();

    if (scroll > 4) {
    	$("#Sous_Menu").add("#fixed");
    } else {
        $("#Sous_Menu").remove("#fixed");
    }
});
