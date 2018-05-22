<?php require 'header.php'; ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h1>College of Informatics and Virtual Education Map</h1>

<div id="map" style="width:100%;height:400px;"></div>

<!-- AIzaSyA9mudJwbXHHz4k1q9wCIlcbysuqRqfsPY -->
</div>
<br><br>
<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-default">
        <div class="panel-body">
        <div class="container">
          <iframe src="https://3dwarehouse.sketchup.com/embed.html?mid=01fc98cf-c193-47db-988c-d1f26626fbf9&width=580&height=326" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="326" allowfullscreen></iframe>
        </div>
       </div>
      </div>
		</div>
</div>
<?php require 'footer.php' ?>

<script>
    function initMap(){
        var options ={
            zoom:15,
            center:{lat:-6.215847,lng:35.812681}
        }

        var map = new google.maps.Map(document.getElementById('map'), options);

         var marker = new google.maps.Marker({
          position: {lat:-6.215847,lng:35.812681},
          map: map
        });
    }
</script>
        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9mudJwbXHHz4k1q9wCIlcbysuqRqfsPY&callback=initMap">
    </script>