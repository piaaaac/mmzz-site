
$(".link[data-url]").click(function () {
	document.location = this.dataset.url;
});

if ($(".home-opening").length > 0) {
	$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    var offset = Math.round(scroll * 0.4);
    var logo = $(".home-opening .logo");
    var logoBottom = logo.outerHeight() - offset;
    // console.log(logoBottom)
    if (logoBottom > 0) {
			if ($(".home-opening").hasClass("stick")) {
				$(".home-opening").removeClass("stick")
			}
	    $(".home-opening").css("top", -offset);
		} else {
			if (!$(".home-opening").hasClass("stick")) {
				$(".home-opening").addClass("stick")
			}
		}
	});
}