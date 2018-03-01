import $ from 'jquery'
import '../modules/smooth-scroll'
import '../modules/jquery-ui'

$('.menu-mobile-link').click(function(){
    $('.menu-mobile').show("slide", { direction: "right" }, 500).css('display','flex')
    $('.overlay-menu').fadeIn()
    return false
});

$('.close-menu, .menu-mobile a').click(function(){
    $('.menu-mobile').hide("slide", { direction: "right" }, 500)
    $('.overlay-menu').fadeOut()
    return false
});

$('.overlay-menu').click(function() {
    $('.menu-mobile').hide("slide", { direction: "right" }, 500)
    $(this).fadeOut()
    if($(window).scrollTop() > 100){
        $('.open-menu-circle').fadeIn()
    }
})

$('header a, #banner a, .menu-mobile a').on('click', function(event) {
    event.preventDefault()
    $.smoothScroll({
        scrollTarget: $(this).attr('href'),
        speed: 1400
    });
});