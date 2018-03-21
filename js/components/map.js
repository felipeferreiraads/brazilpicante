$('.address a').click(function(event) {
    $('.map-item').css('display', 'none')
    $($(this).attr('data-map')).css('display', 'block')
    return false
})