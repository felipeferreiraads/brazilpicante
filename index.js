$('.menu-mobile-link').click(function(){
    $('.menu-mobile').show("slide", { direction: "right" }, 500).css('display','flex');
    $('.overlay-menu').fadeIn();
    return false;
});

$('.close-menu, .menu-mobile a').click(function(){
    $('.menu-mobile').hide("slide", { direction: "right" }, 500);
    $('.overlay-menu').fadeOut();
    return false;
});

$('.overlay-menu').click(function() {
    $('.menu-mobile').hide("slide", { direction: "right" }, 500);
    $(this).fadeOut();
    if($(window).scrollTop() > 100){
        $('.open-menu-circle').fadeIn();
    }
});

$('#banner').parallax({imageSrc: template + 'img/banner.jpg'});

$('.carousel').owlCarousel({
    items: 1,
    thumbs: true,
	thumbsPrerendered: true
});

$('header a, #banner a, .menu-mobile a').on('click', function(event) {
    event.preventDefault();
    $.smoothScroll({
        scrollTarget: $(this).attr('href'),
        speed: 1400
    });
});

$('.carousel, .prev, .next').hover(function() {
    $('.prev').css('display','flex');
    $('.next').css('display','flex');
}, function() {
    $('.prev').css('display','none');
    $('.next').css('display','none');
});

$('.next').click(function() {
    $('.carousel').trigger('next.owl.carousel');
    return false;
});

$('.prev').click(function() {
    $('.carousel').trigger('prev.owl.carousel', [300]);
    return false;
});

var paged = 2;
$('.see-more').on('click', function(event) {
    event.preventDefault();
    $.ajax({
        url: base_url + 'ajax-posts/',
        type: 'POST',
        dataType: 'html',
        data: {paged: paged},
    })
    .done(function(html) {
        $('#dicas-do-chefe .items').append(html);
        paged++;
    })    
});

let didScroll;
let lastScrollTop = 0;
let delta = 5;
let navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    if (st > lastScrollTop && st > navbarHeight){
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}


function fancyboxAlert(mensagem)
{
    $.fancybox(
        '<div id="mensagem_fancybox"><h1>'+mensagem+'</h1></div>',
        {
            'autoDimensions'    : false,
            'width'             : 300,
            'height'            : 50,
            'transitionIn'      : 'none',
            'transitionOut'     : 'none',
            'centerOnScroll'    : true,
        }
    );
}

$('#form-contact').on('submit', function(event) {
    event.preventDefault();
    fancyboxAlert('AGUARDE...');
    $.ajax({
        type: 'POST',
        url: base_url + '/forms/',
        data: $(this).serialize(),
        dataType: 'json',
        success: function(json){
            $('#form-contact')[0].reset();
            fancyboxAlert(json.mensagem);
        },
        error: function(){
            fancyboxAlert('Aconteceu um erro. Tente novamente.');   
        }
    });
});

$('.address a').click(function(event) {
    $('.map-item').css('display', 'none');
    $($(this).attr('data-map')).css('display', 'block');
    return false;
});

$('#dicas-do-chefe .items a').on('click', function(event) {
    event.preventDefault();
    $.ajax({
        type: 'GET',
        url: $(this).attr('href'),
        dataType: 'html',
        success: function(html){
            $.fancybox(
                html,
                {
                    'autoDimensions'    : true,
                    'transitionIn'      : 'none',
                    'transitionOut'     : 'none',
                    'centerOnScroll'    : true,
                }
            );
        },
        error: function(){
            fancyboxAlert('Aconteceu um erro. Tente novamente.');   
        }
    });
});
