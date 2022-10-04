import './bootstrap';

function initMap (){
    const _coordinates = new google.maps.LatLng(-33.2837553, 26.5696254)
    const map = new google.maps.Map(document.getElementById("map"), {
        center: _coordinates,
        zoom: 8,
    });

    new google.maps.Marker({
        position: _coordinates,
        map,
    });

    console.log(_coordinates);
}

window.initMap = initMap();
