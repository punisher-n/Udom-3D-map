<?php require 'header.php'; ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h1>College Of Health and Allied Sciences</h1>

<div id="map" style="width:100%;height:400px;"></div>
</div>
<?php require 'footer.php' ?>

<script>
    function initMap(){
        var options ={
            zoom:18,
            center:{lat:-6.227157,lng:35.852941}
        }

        var map = new google.maps.Map(document.getElementById('map'), options);

         var marker = new google.maps.Marker({
          position: {lat:-6.227157,lng:35.852941},
          map: map
        });
    }
</script>
        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9mudJwbXHHz4k1q9wCIlcbysuqRqfsPY&callback=initMap">
    </script>