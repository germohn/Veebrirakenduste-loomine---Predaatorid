function init_map() {
    var myOptions = {
        zoom: 16,
        center: new google.maps.LatLng(58.37824850000001, 26.71467329999996),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
    marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(58.37824850000001, 26.71467329999996)
    });
    infowindow = new google.maps.InfoWindow({content: '<strong>Predaatori oksjonid</strong><br>Liivi 2, Tartu, Estonia<br>'});
    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });
    infowindow.open(map, marker);
}
google.maps.event.addDomListener(window, 'load', init_map);