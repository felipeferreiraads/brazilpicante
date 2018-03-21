$.getScript('https://maps.google.com/maps/api/js?key=AIzaSyAWWlEtv-ApTzfB9oNiPaKnjcT6993tGIQ&libraries=places')
.done(function () {
    maps.forEach((map, i) => {
        var data = {lat: map.lat, lng: map.lng}    
        var maps_show = new google.maps.Map(document.getElementById('map-' + i), {
            zoom: 15,
            center: data
        })

        var service = new google.maps.places.PlacesService(maps_show);
        
        service.getDetails({placeId: 'ChIJp0PjVH_k3JQR-5CyKhAXfPA'}, function(place, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                var marker = new google.maps.Marker({
                    map: maps,
                    position: place.geometry.location
                })
            }
        });
    });
})
.fail(function () {
    console.log('Ocorreu algum erro ao carregar o script!')
})

$('.address a').click(function(event) {
    $('.map-item').css('display', 'none')
    $($(this).attr('data-map')).css('display', 'block')
    return false
})