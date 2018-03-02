$.getScript('https://maps.google.com/maps/api/js?key=AIzaSyAWWlEtv-ApTzfB9oNiPaKnjcT6993tGIQ&libraries=places')
.done(function () {
	var data_agua_verde = {lat: -25.449732, lng: -49.283924}    
    var agua_verde = new google.maps.Map(document.getElementById('agua-verde'), {
        zoom: 15,
        center: data_agua_verde
    })

    var infowindow = new google.maps.InfoWindow();
    var service_agua_verde = new google.maps.places.PlacesService(agua_verde);

    service_agua_verde.getDetails({placeId: 'ChIJp0PjVH_k3JQR-5CyKhAXfPA'}, function(place, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            var marker = new google.maps.Marker({
                map: agua_verde,
                position: place.geometry.location
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(
                    '<div><strong>' + place.name + '</strong><br>' +
                    place.formatted_address + '</div>'
                );
                
                infowindow.open(map, this);
            });
        }
    });

    var data_alto_gloria = {lat: -25.4037501, lng: -49.2576924}    
    var alto_gloria = new google.maps.Map(document.getElementById('alto-gloria'), {
        zoom: 15,
        center: data_alto_gloria
    })

    var service_alto_gloria = new google.maps.places.PlacesService(alto_gloria);

    service_alto_gloria.getDetails({placeId: 'ChIJT96JNpzm3JQRVUVAcUIcVqg'}, function(place, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            var marker = new google.maps.Marker({
                map: alto_gloria,
                position: place.geometry.location
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(
                    '<div><strong>' + place.name + '</strong><br>' +
                    place.formatted_address + '</div>'
                );
                
                infowindow.open(map, this);
            });
        }
    });

    var data_ahu = {lat: -25.4165126, lng: -49.2647355}    
    var ahu = new google.maps.Map(document.getElementById('ahu'), {
        zoom: 15,
        center: data_ahu
    })

    var service_ahu = new google.maps.places.PlacesService(ahu);

    service_ahu.getDetails({placeId: 'ChIJl3BcdyLk3JQRrHmjMSPVkck'}, function(place, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            var marker = new google.maps.Marker({
                map: ahu,
                position: place.geometry.location
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(
                    '<div><strong>' + place.name + '</strong><br>' +
                    place.formatted_address + '</div>'
                );
                
                infowindow.open(map, this);
            });
        }
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