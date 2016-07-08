<div class="col-md-1"></div>
<p><b></b></p>
	<h2>Annonces Map</h2>
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Filtre</h3>
		</div>
    <div class="panel-body" style="padding: 0">
      <!--  -->
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAAB-bHgz5wpl16jgtFk5WxSSDRhLq0Bt0&sensor=false"></script>
      <div id="map_canvas" style="width:100%; height:600px"></div>

      <?php
      $routes = array();
      for ($i = 0; $i < count($offer_list); ++$i) {
        if ($offer_list[$i]->user_id != $this->tank_auth->get_user_id() && $offer_list[$i]->state != 1) {
          continue;
        }
        $routes[] = array(
          'offer_id' => $offer_list[$i]->id,
          'start' => $offer_list[$i]->start_street.", ".$offer_list[$i]->start_place." ".$offer_list[$i]->start_zip_code.", CH",
          'end' => $offer_list[$i]->destination_street.", ".$offer_list[$i]->destination_place." ".$offer_list[$i]->destination_zip_code.", CH");
      }
      ?>
      <script>
      var routes = <?php echo json_encode($routes); ?>;
      var directionDisplay, map;
      var directionsService = new google.maps.DirectionsService();
      var geocoder = new google.maps.Geocoder();
      function initialize() {
        // set the default center of the map
        latlng = new google.maps.LatLng(46.861724, 8.036496);
        // set route options (draggable means you can alter/drag the route in the map)
        // set the display options for the map
        var myOptions = {
          zoom: 14,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          mapTypeControl: false
        };
        // add the map to the map placeholder
        map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);

        // get the travelmode, startpoint and via point from the form
        // compose a array with options for the directions/route request
        $.each(routes, function() {
          var directionsDisplay = new google.maps.DirectionsRenderer({preserveViewport: true});// also, constructor can get "DirectionsRendererOptions" object
          directionsDisplay.setMap(map); // map should be already initialized.
          var offer_id = this.offer_id;
          var request = {
            origin: this.start,
            destination: this.end,
            unitSystem: google.maps.UnitSystem.IMPERIAL,
            travelMode: google.maps.DirectionsTravelMode.DRIVING
          };
          // call the directions API
          directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
              directionsDisplay.setDirections(response);
              var step = 1;
              var infowindow2 = new google.maps.InfoWindow();
              infowindow2.setContent("<a href='<?php echo base_url(); ?>demand/get_offer/"+offer_id+"' target='_blank'>Voir l'annonce</a>");
              infowindow2.setPosition(response.routes[0].legs[0].steps[step].end_location);
              infowindow2.open(map);
            } else {
              //nothing
            }
          });
        });

      }
      $(document).ready(function() {
        initialize();
        window.setTimeout(function () {
        map.setCenter(latlng);
        map.setZoom(8);
        }, 2000);
      });
      </script>
    </div>
  </div>
