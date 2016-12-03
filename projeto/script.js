function initMap() {
  //var myLatLng = {lat: -22.2008856, lng: -49.9623364};

$(document).ready(function(){

var myLatLng= new google.maps.LatLng(-22.21869284, -49.94530559);
      var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 15
  });

  var marker = new google.maps.Marker({
        map: map,
        position: myLatLng,
        title: 'Hello World!'
    });

function createMarker(latlng, icn, name){
 var marker = new google.maps.Marker({
    position: latlng,
    map: map,
    icon:icn,
    title: name
  });

}


  var request = {
      location: myLatLng,
      radius: '1000',
      types: ['restaurant']
 };


  service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);


  function callback(results, status) {
    //console.log(results);

  if (status == google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
      var place = results[i];
      console.log(place);
      latlng = place.geometry.location;
      icn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
      name=place.name;

      createMarker(latlng, icn, name);
      }
  }
}

});
}