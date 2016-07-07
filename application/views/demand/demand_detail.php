<div class="col-md-1"></div>
<p><b></b></p>
	<h2><?php echo $offer->offer; ?></h2>
<div class="row">
	<div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Information</h3>
      </div>
      <div class="panel-body">
        <p>
          Départ:&nbsp;&nbsp;<strong><?php echo $offer->start_place.", ".$offer->start_zip_code; ?></strong><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php echo $offer->start_street; ?>
        </p>
        <p>
          Arrivée:&nbsp;&nbsp;<strong><?php echo $offer->destination_place.", ".$offer->destination_zip_code; ?></strong><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php echo $offer->destination_street; ?>
        </p>
        <p>
          Titre:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $offer->offer; ?><br>
          Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $offer->date; ?></strong>
        </p>
        <p>
          Description:<br><?php echo nl2br($offer->description); ?>
        </p>
        <p>
          Demandeur:&nbsp;<?php echo $offer->user->last_name." ".$offer->user->first_name; ?><br>
          Telephone:&nbsp;<a href="tel:<?php echo $offer->user->tel; ?>"><strong><?php echo $offer->user->tel; ?></a></strong><br>
          Email:&nbsp;<a href="mailto:<?php echo $offer->user->email; ?>"><strong><?php echo $offer->user->email; ?></a></strong>
        </p>
      </div>
    </div>


    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Details</h3>
      </div>
      <div class="panel-body">
          <?php
          foreach($offer->fields as $field => $value) {
            echo '<div style="width: 33%; margin: 0; padding: 0; float: left">';
            echo $labels[$offer->offer_type.'_'.$field].":&nbsp;".$value;
            echo '</div>';
          }
          ?>
      </div>
    </div>
    <h3>Messages</h3>
    <?php
    if ($offer->user_id == $this->tank_auth->get_user_id())  {
      ?>
        <?php
          foreach($offer->communication as $user_id => $data) {
            ?>
            <div class="panel-group" id="accordion">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse_user_<?php echo $user_id; ?>"><?php echo $data['user']->last_name." ".$data['user']->first_name; ?></a>
                        </h4>
                    </div>
                    <div id="collapse_user_<?php echo $user_id; ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php
                              foreach($data['messages'] as $message) {
                                if ($message->from_user_id == $this->tank_auth->get_user_id()) {
                                  $from_user = $offer->user->last_name." ".$offer->user->first_name;
                                  $to_user = $data['user']->last_name." ".$data['user']->first_name;
                                }
                                else {
                                  $to_user = $offer->user->last_name." ".$offer->user->first_name;
                                  $from_user = $data['user']->last_name." ".$data['user']->first_name;
                                }
                            ?>
                              <div class="row" style="border-bottom: 2px solid black; margin-bottom: 10px;">
                              <div class="col-md-5">
                                <p>
                                  From: <?php echo $from_user; ?><br>
                                  To: <?php echo $to_user; ?><br><br>
                                  Date: <?php echo date('d.m.Y H:i', strtotime($message->send_datetime)); ?>
                                </p>
                              </div>
                              <div class="col-md-7"><?php echo nl2br($message->text); ?></div>
                            </div>
                            <?php
                              }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
          }
        ?>
      <?php
    }
    else {
      if (isset($offer->communication[$offer->user_id])) {
        $data = $offer->communication[$offer->user_id];
        $messages = $offer->communication[$offer->user_id]['messages'];
      ?>
      <div class="panel-group" id="accordion">
          <div class="panel panel-info">
              <div class="panel-heading">
                  <h4 class="panel-title">
                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse_user_<?php echo $offer->user_id; ?>"><?php echo $offer->user->last_name." ".$offer->user->first_name; ?></a>
                  </h4>
              </div>
              <div id="collapse_user_<?php echo $offer->user_id; ?>" class="panel-collapse collapse">
                  <div class="panel-body">
                      <?php
                        foreach($messages as $message) {
                          if ($message->from_user_id != $this->tank_auth->get_user_id() && $message->to_user_id != $this->tank_auth->get_user_id()) {
                            continue;
                          }
                          if ($message->from_user_id == $this->tank_auth->get_user_id()) {
                            $from_user = $this_user->last_name." ".$this_user->first_name;
                            $to_user = $data['user']->last_name." ".$data['user']->first_name;
                          }
                          else {
                            $to_user = $this_user->last_name." ".$this_user->first_name;
                            $from_user = $data['user']->last_name." ".$data['user']->first_name;
                          }
                      ?>
                        <div class="row" style="border-bottom: 2px solid black; margin-bottom: 10px;">
                        <div class="col-md-5">
                          <p>
                            From: <?php echo $from_user; ?><br>
                            To: <?php echo $to_user; ?><br><br>
                            Date: <?php echo date('d.m.Y H:i', strtotime($message->send_datetime)); ?>
                          </p>
                        </div>
                        <div class="col-md-7"><?php echo nl2br($message->text); ?></div>
                      </div>
                      <?php
                        }
                      ?>
                  </div>
              </div>
          </div>
      </div>
      <?php
      }
    }
    ?>



  </div>
	<div class="col-md-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Map</h3>
      </div>
      <div class="panel-body" style="padding: 0">
        <!--  -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAAB-bHgz5wpl16jgtFk5WxSSDRhLq0Bt0&sensor=false"></script>
        <div id="map_canvas" style="width:100%; height:400px"></div>
        <script>
        var directionDisplay, map;
        var directionsService = new google.maps.DirectionsService();
        var geocoder = new google.maps.Geocoder();
        function initialize() {
          // set the default center of the map
          var latlng = new google.maps.LatLng(51.764696,5.526042);
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


          var directionsDisplay = new google.maps.DirectionsRenderer();// also, constructor can get "DirectionsRendererOptions" object
          directionsDisplay.setMap(map); // map should be already initialized.

          // get the travelmode, startpoint and via point from the form
          var start = '<?php echo $offer->start_street; ?>, <?php echo $offer->start_place.", ".$offer->start_zip_code; ?>, CH';
          var end = '<?php echo $offer->destination_street; ?>, <?php echo $offer->destination_place.", ".$offer->destination_zip_code; ?>, CH';
          // compose a array with options for the directions/route request
          var request = {
            origin: start,
            destination: end,
            unitSystem: google.maps.UnitSystem.IMPERIAL,
            travelMode: google.maps.DirectionsTravelMode.DRIVING
          };
          // call the directions API
          directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
              directionsDisplay.setDirections(response);
            } else {
              // alert an error message when the route could nog be calculated.
              if (status == 'ZERO_RESULTS') {
                console.log('No route could be found between the origin and destination.');
              } else if (status == 'UNKNOWN_ERROR') {
                console.log('A directions request could not be processed due to a server error. The request may succeed if you try again.');
              } else if (status == 'REQUEST_DENIED') {
                console.log('This webpage is not allowed to use the directions service.');
              } else if (status == 'OVER_QUERY_LIMIT') {
                console.log('The webpage has gone over the requests limit in too short a period of time.');
              } else if (status == 'NOT_FOUND') {
                console.log('At least one of the origin, destination, or waypoints could not be geocoded.');
              } else if (status == 'INVALID_REQUEST') {
                console.log('The DirectionsRequest provided was invalid.');
              } else {
                console.log("There was an unknown error in your request. Requeststatus: nn"+status);
              }
            }
          });
        }
        $(document).ready(function() {
          initialize();
        });
        </script>
      </div>
    </div>
    <?php
    if ($offer->user_id == $this->tank_auth->get_user_id())  {
      echo '<p style="margin-bottom: 2px"><a style="width: 100%; display: inline-block; text-align: center" class="btn btn-info" href="'.base_url().'demand/edit_offer/'.$offer->id.'">Modifier</a></p>';
      if ($offer->state == 1) {
        echo '<p style="margin-bottom: 2px"><a style="width: 100%; display: inline-block; text-align: center" class="btn btn-warning" href="'.base_url().'demand/toggle_offer/'.$offer->id.'">Désactiver</a></p>';
      }
      else {
        echo '<p style="margin-bottom: 2px"><a style="width: 100%; display: inline-block; text-align: center" class="btn btn-success" href="'.base_url().'demand/toggle_offer/'.$offer->id.'">Activer</a></p>';
      }
    }
    ?>
    <br>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Communicate</h3>
      </div>
      <div class="panel-body">
        <form method="POST" action="<?php echo base_url(); ?>demand/add_offer_communication/<?php echo $offer->id; ?>">
          <input type="hidden" name="communication" value="true" />
          <?php
          if ($offer->user_id == $this->tank_auth->get_user_id())  {
            ?>
      			<select name="communication_partner" id="communication_partner" class="form-control">
      				<option value="-1">Please chose a user</option>
              <?php
                foreach($offer->communication as $user_id => $data) {
                  echo "<option value='".$user_id."'>".$data['user']->last_name." ".$data['user']->first_name."</option>";
                }
              ?>
      			</select>
            <?php
          }
          ?>
          <?php
          $communication_text = array(
          	'name'	=> 'communication_text',
          	'id'	=> 'communication_text',
          	'class' => 'form-control',
            'rows' => 3
          );
          ?>
          <div class="form-group">
              <?php echo form_textarea($communication_text); ?>
            	<button style="margin-top: 2px; width: 100%; text-align: center" type="submit" class="btn btn-primary">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
