<?php require 'header.php'; ?>
                                    <div class="panel-body">
                                        
                                        <div id="yfinder-content">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h1>Univeristy of Dodoma</h1>
<div id="googleMap" style="width:100%;height:400px;"></div>
<?php

  $address ='University of Dodoma';
  $prepAddr = str_replace(' ','+',$address);
  $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?key=AIzaSyA9mudJwbXHHz4k1q9wCIlcbysuqRqfsPY&address='.$prepAddr.'&sensor=false');

  
  $output= json_decode($geocode);
  // print_r($output);

  $latitude = $output->results[0]->geometry->location->lat;
  $longitude = $output->results[0]->geometry->location->lng;
    
  echo "latitude - ".$latitude;
  echo "longitude - ".$longitude;
  echo "<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng($latitude,$longitude),
    zoom:13,
};
var map=new google.maps.Map(document.getElementById('googleMap'),mapProp);
}
</script>";
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9mudJwbXHHz4k1q9wCIlcbysuqRqfsPY&callback=myMap"></script>

<!-- AIzaSyA9mudJwbXHHz4k1q9wCIlcbysuqRqfsPY -->
</div>
                                        </div>
                                    </div>
    <?php require 'footer.php' ?>