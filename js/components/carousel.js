import 'owl.carousel'
import 'owl.carousel2.thumbs'

$('.carousel').owlCarousel({
    items: 1,
    thumbs: true,
	thumbsPrerendered: true
});
 
$('.carousel, .prev, .next').hover(function() {
    $('.prev').css('display','flex')
    $('.next').css('display','flex')
}, function() {
    $('.prev').css('display','none')
    $('.next').css('display','none')
});

$('.slides, .prev-slider, .next-slider').hover(function () {
    $('.prev-slider').css('display', 'flex')
    $('.next-slider').css('display', 'flex')
}, function () {
    $('.prev-slider').css('display', 'none')
    $('.next-slider').css('display', 'none')
});

$('.next').click(function() {
    $('.carousel').trigger('next.owl.carousel')
    return false
});

$('.prev').click(function() {
    $('.carousel').trigger('prev.owl.carousel', [300])
    return false
});

$('.slides').owlCarousel({
    items: 1,
    thumbs: false,
    autoplay: true,
    loop: true,
    autoplayTimeout: 4000
});

$('.next-slider').click(function () {
    $('.slides').trigger('next.owl.carousel')
    return false
});

$('.prev-slider').click(function () {
    $('.slides').trigger('prev.owl.carousel', [300])
    return false
});