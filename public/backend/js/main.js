$(document).ready(function () {
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 300) {
            // $(".main-nav").removeClass("bg-main");
            $(".main-nav").css("margin-top", "0px");
            $(".school-title").addClass("d-block").removeClass("d-none");
            $(".top-bar").removeClass("fixed-top");
            $(".main-school").children(".logos").children("img").css("height", "65px").css("width", "65px");
            
        } else {
            // $(".main-nav").addClass("bg-main");
            $(".main-nav").css("margin-top", "29px");
            $(".school-title").addClass("d-none").removeClass("d-block");
            $(".top-bar").addClass("fixed-top");
            $(".main-school").children(".logos").children("img").css("height", "80px").css("width", "80px");

        }
    });
});

