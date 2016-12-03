<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RAIST IMÓVEIS Busca</title>

    <!-- Bootstrap -->
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script src="js/pace.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:700,400|Open+Sans+Condensed:300" rel="stylesheet" type="text/css">
    <link href="css/theme-loading-bar.css" rel="stylesheet">

</head>

<br>
<body class="pace-done">
    <div class="container">
        <div class="row">
            <div style="background: #c1c1c1;" class="col-md-12">
                <div class="navbar-header">
                  <a class="navbar-brand top-navbar-brand" href="#">R.A.I.S.T - IMÓVEIS COMERCIAIS</a>
              </div>
          </div>
      </div>
<br>
<form id="form1" name="form1" method="post" action="apr.php">
<p>
<div class="row">
  <div class="col-xs-3">
    <div class="form-group">
      <select class="selectpicker form-control " name="tipoNegocio" id="select">
      <option value="">Tipo de Negócio</option>
      <option value="restaurant">Restaurantes</option>
      <option value="cafe">Cafeteria</option>
      <option value="bus_station">Ponto de ônibus</option>
      <option value="bakery">Padaria</option>
      </select>
       <input class="btn btn-success" type="submit" name="entrar" value="verificar valor recebido" id="btn-login"></imput>
    </div>
  </div>
  </p>
</form>


<div class="row">
  <div class="col-xs-3">
    <div class="form-group">
      <select class="selectpicker form-control">
  <option value="">Fluxo de Pessoas</option>
  <option value="baixo">100 Por Hora</option>
  <option value="medio">200 Por Hora</option>
  <option value="intermediario">500 Por Hora</option>
  <option value="alto">1000 Por Hora</option>
      </select>
    </div>
  </div>
 </div>

    <div class="row">
        <div class="col-md-12">
           
        </div>
    </div>

      <div class="row">
       <div class="col-md-1">
       
        <div class="col-md-4">
            <div id="map" style="height: 600px; width: 1150px; margin:0 auto; align: center"></div>

        </div>
    </div>
</div>
</div>
</div>


<script>
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
//tabela de pesquisas permitidas
//https://developers.google.com/places/supported_types?hl=pt-br
    var request = {
        location: myLatLng,
        radius: '5000',
        types: ['bar']
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

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlNY4FBi1qjYAJ8PLdvZS4FFuyt2InOQA&signed_in=true&libraries=places&callback=initMap"
async defer></script>

<!-- <script src="mapa.js"></script> 
<script src="pontos.js"></script> -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.js"></script>

</body>
</html>