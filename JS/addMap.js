let lat = document.getElementById('lat');
let lng = document.getElementById('lng');
let getBtn = document.getElementById('getBtn');

let map, marker;
function initial() {
map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: Number(lat.value), lng: Number(lng.value) },
    zoom: 16,
    mapTypeId: 'hybrid'
});
marker = new google.maps.Marker({
    position: { lat: Number(lat.value), lng: Number(lng.value) },
    map: map,
    title: 'Your property location',
    draggable: true,
    icon: './SVG/map_marker.svg'
})
getBtn.href=`//maps.google.com/maps?f=d&amp;daddr=${Number(lat.value)},${Number(lng.value)}&amp;hl=en`;



map.addListener('click', (googleMapsEvent) => {
    lat.value = googleMapsEvent.latLng.lat();
    lng.value = googleMapsEvent.latLng.lng();
    marker.setMap(null);

    marker.setPosition({lat: Number(lat.value), lng: Number(lng.value)});
    marker.setMap(map);
    getBtn.href=`//maps.google.com/maps?f=d&amp;daddr=${Number(lat.value)},${Number(lng.value)}&amp;hl=en`;
});

marker.addListener('mouseup', (googleMapsEvent) => {
    lat.value = googleMapsEvent.latLng.lat();
    lng.value = googleMapsEvent.latLng.lng();
    getBtn.href=`//maps.google.com/maps?f=d&amp;daddr=${Number(lat.value)},${Number(lng.value)}&amp;hl=en`;
});


}
navigator.geolocation.getCurrentPosition(function (position) {
    lat.value = position.coords.latitude;
    lng.value = position.coords.longitude;
    initial();
}); 




lat.addEventListener('keyup',function(){
initial();
})
lng.addEventListener('keyup',function(){
initial();
})