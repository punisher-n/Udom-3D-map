<?php require 'header.php'; ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 <div class="row">
     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="panel panel-card margin-b-30">
            <div class="panel-body  p-xl-3">


<form id="distance_form">
<div class="form-group"><label>Origin: </label> <input class="form-control" id="from_places" placeholder="Enter a location" /> <input id="origin" name="origin" required="" type="hidden" /></div>

<div class="form-group"><label>Destination: </label> <input class="form-control" id="to_places" placeholder="Enter a location" /> <input id="destination" name="destination" required="" type="hidden" /></div>
<input class="btn btn-primary" type="submit" value="Calculate" /></form>

                
            </div>
        </div>
     </div>
<style>
    .badge{
        color: black;
    }
</style>
     <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <div class="panel panel-card margin-b-30">
             <div class="panel-body">
                <div id="result">
<ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center" id>Distance In Mile :<span id="in_mile" class="badge" ></span></li>
    <li class="list-group-item d-flex justify-content-between align-items-center">Distance is Kilometers: <span class="badge" id="in_kilo"></span></li>
    <li class="list-group-item d-flex justify-content-between align-items-center">IN HOURS: <span class="badge" id="duration_text"></span></li>
    <li class="list-group-item d-flex justify-content-between align-items-center">IN MINUTES: <span class="badge" id="duration_value"></span></li>
    <li class="list-group-item d-flex justify-content-between align-items-center">FROM: <span class="badge" id="from"></span></li>
    <li class="list-group-item d-flex justify-content-between align-items-center">TO: <span class="badge" id="to"></span></li>
</ul>
</div>
             </div>
         </div>
     </div>
 </div>
   <?php require 'footer.php' ?>

</div>
<script  defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyA9mudJwbXHHz4k1q9wCIlcbysuqRqfsPY"  type="text/javascript"></script>

<script>
    $(function() {
        // add input listeners
        google.maps.event.addDomListener(window, 'load', function () {
            var from_places = new google.maps.places.Autocomplete(document.getElementById('from_places'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('to_places'));

            google.maps.event.addListener(from_places, 'place_changed', function () {
                var from_place = from_places.getPlace();
                var from_address = from_place.formatted_address;
                $('#origin').val(from_address);
            });

            google.maps.event.addListener(to_places, 'place_changed', function () {
                var to_place = to_places.getPlace();
                var to_address = to_place.formatted_address;
                $('#destination').val(to_address);
            });

        });
        // calculate distance
        function calculateDistance() {
            var origin = $('#origin').val();
            var destination = $('#destination').val();
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode.DRIVING,
                    unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                    // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, callback);
        }
        // get distance results
        function callback(response, status) {
            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Better get on a plane. There are no roads between "  + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;
                    console.log(response.rows[0].elements[0].distance);
                    var distance_in_kilo = distance.value / 1000; // the kilom
                    var distance_in_mile = distance.value / 1609.34; // the mile
                    var duration_text = duration.text;
                    var duration_value = duration.value;
                    $('#in_mile').text(distance_in_mile.toFixed(2));
                    $('#in_kilo').text(distance_in_kilo.toFixed(2));
                    $('#duration_text').text(duration_text);
                    $('#duration_value').text(duration_value);
                    $('#from').text(origin);
                    $('#to').text(destination);
                    console.log(distance_in_kilo);
                }
            }
        }
        // print results on submit the form
        $('#distance_form').submit(function(e){
            e.preventDefault();
            calculateDistance();
        });

    });

</script>