function initMap() {
    var location = {lat: 23.844716, lng: 91.428499};
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 16,
        center: location
    });
}
