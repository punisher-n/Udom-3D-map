<?php require 'header.php'; ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-card margin-b-30">
            <div class="panel-body  p-xl-3">
                    <h5>Get direction From place to place</h5>
                    <div class="form-group row"><label class="col-lg-2 form-control-label">From</label>

<div class="col-lg-10"><select id="start" onchange="calcRoute();"  class="form-control" required="required">
<option value="College of Informatics Cafeteria, TZ">College of Informatics Cafeteria</option>
  <option value="CIVE Students Hostels, TZ">CIVE Students Hostels</option>
  <option value="College of Informatics Lecture Theatre, TZ">College of Informatics Lecture Theatre</option>
  <option value="UDOM Central Administration Building, TZ">UDOM Central Administration Building</option>
  <option value="College of Education, UDOM">College of Education</option>



                        </select>
                        </div>
                    </div>
                    <div class="form-group row"><label class="col-lg-2 form-control-label">To</label>

                        <div class="col-lg-10"><select id="end" onchange="calcRoute();" class="form-control" required="required">
                            <option value="College of Informatics Cafeteria
, TZ">College of Informatics Cafeteria
</option>
  <option value="CIVE Students Hostels, TZ">CIVE Students Hostels</option>
  <option value="College of Informatics Lecture Theatre, TZ">College of Informatics Lecture Theatre</option>
  <option value="UDOM Central Administration Building, TZ">UDOM Central Administration Building</option>
  <option value="College of Education, TZ">College of Education</option>
                        </select>
                        </div>
                    </div>
<div class="form-group row"><label class="col-lg-2 form-control-label">Mode of Transport</label>

                        <div class="col-lg-10"><select id="mode" onchange="calcRoute();" class="form-control" required="required">
                            <option value="DRIVING">Driving</option>
  <option value="WALKING">Walking</option>
  <option value="BICYCLING">Bicycling</option>
  <option value="TRANSIT">Transit</option>

                        </select>
                        </div>
                    </div>
            </div>
        </div>
     </div>
</div>
<style>
    #map{
        height: 400px;
        width: 100%;
    }
</style>
<div class='row'>
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-card margin-b-30">
             <div class="panel-body">
<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    <div id="map"></div>
</div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div id="directionsPanel"></div>
</div>
</div>
            
                
             </div>
         </div>
     </div>
 </div>


</div>
   <?php require 'footer.php' ?>

<script>
    function initMap() {
   directionsService = new google.maps.DirectionsService();
   directionsDisplay = new google.maps.DirectionsRenderer();
  var udom = new google.maps.LatLng(-6.2142, 35.8248);
  var mapOptions = {
    zoom:7,
    center: udom
  }
  var map = new google.maps.Map(document.getElementById('map'), mapOptions);
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById('directionsPanel'));
}

function calcRoute() {
  var start = document.getElementById('start').value;
  var end = document.getElementById('end').value;
  var request = {
    origin:start,
    destination:end,
    travelMode: 'DRIVING'
  };
  directionsService.route(request, function(response, status) {
    if (status == 'OK') {
      directionsDisplay.setDirections(response);
    }
  });
}
</script>

        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9mudJwbXHHz4k1q9wCIlcbysuqRqfsPY&callback=initMap">
    </script>