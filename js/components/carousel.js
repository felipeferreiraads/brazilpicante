import $ from 'jquery'
import 'owl.carousel'

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

$('.next').click(function() {
    $('.carousel').trigger('next.owl.carousel')
    return false
});

$('.prev').click(function() {
    $('.carousel').trigger('prev.owl.carousel', [300])
    return false
});