


var map, marker, infowindow;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat:60.195 ,lng:24.900 },
    zoom : 12
  });
}

function showMarker(){
  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: {lat:60.215 ,lng:24.814 },
    icon : 'caricon.jpg'
  });
}

function showInfo() {
  infowindow = new google.maps.InfoWindow({
    content: 'Sukky Cars Ltd'
  });

    infowindow.open(map, marker);
}

/*

function validateForm() {
  var x = document.forms["searchform"]["ccompany"].value;
  if (x == null || x = "") {
    alert("Please fill in this field.");
    return false;
  }
}

*/