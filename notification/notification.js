$(".search").bind("click", function() {
    $(".search-bar").toggleClass("active");
    $(".search-bar").removeClass("no-animation");
})

$(".menu").bind("click", function() {
    $(".outer-notification").toggleClass("active-menu");
    $(".outer-notification").removeClass("menu-no-animation");
    $(".under-menu").toggleClass("under-menu-active");
    $(".under-menu").removeClass("menu-no-animation");
})