
$(".link[data-url]").click(function () {
	document.location = this.dataset.url;
});

if ($(".home-opening").length > 0) {
	$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    var offset = Math.round(scroll * 0.66);

    /*V1*/ $(".home-opening").css("top", offset);
    /*V2*/ // $(".home-opening").css({'transform': 'translate(0, '+ scroll * 0.66 +'px)'});

    var logo = $(".home-opening .logo");
    var logoBottom = logo.height() +  logo.offset().top
    
    var ee = $(".menu-item:first").offset().top - offset

    console.log(scroll - offset)


	});
}