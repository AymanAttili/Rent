function initialize(x, y){
    let myCenter = new google.maps.LatLng(x, y);
    let mapProp = {
        center:myCenter,
        zoom:17,
        mapTypeId:'hybrid'
    };

    let map = new google.maps.Map(document.getElementById("map"),mapProp);

    let marker = new google.maps.Marker({
        position:myCenter,
        icon: './SVG/map_marker.svg'
    });

    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize(32.304956, 35.038719));