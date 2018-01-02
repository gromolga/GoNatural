$(function () {

    // Мобильное меню

    $("#header-burger").click(function () {
        $(".header-mobile-menu").slideToggle();
        $(".header-burger").toggleClass("header-burger-close");
    })

    // Поиск

    $("#header-nav-search").click(function () {
        $(".header-search-wrapper, .header-search-btn").slideToggle();
    })

    // Карусель на главной странице

    $(".main-banner-carousel").owlCarousel({
        loop:true,
        items: 1,
        dots: true
    });

    // Затемнение соседних элементов по наведению на текущий (в шапке страницы конкретного продукта)

    $(".product-navigation-left-col-img-box").hover(function() {
        $( ".product-navigation-left-col-img-box" ).not(this).toggleClass( "product-navigation-left-col-img-box-layout" );
    });

    // Аккордеон

    $(".accordeon-item").click(function() {
        if($(this).hasClass('active')) {
            $(".accordeon-item").removeClass('active');
        } else {
            $(".accordeon-item").removeClass('active');
            $(this).addClass("active");
        }
        $(".accordeon-item:not(.active) .accordeon-item-dropdown").slideUp();
        $(".accordeon-item.active .accordeon-item-dropdown").slideDown();
    });


})

// Социальные кнопки поделиться

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.11';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));