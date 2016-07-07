<div class="col-md-1"></div>
<p><b></b></p>
	<h2>Annonces</h2>
  <span style="color: red;"><?php
    echo $this->session->flashdata('MSG');
  ?></span>
	<?php
	if (empty($user_id)) {
 	?>
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Filtre</h3>
		</div>
		<div class="panel-body">
			<form class="navbar-form" method="POST" action="<?php echo base_url(); ?>demand/" role="search">

				<input type="text" class="form-control" value="<?php echo $_POST['filter_by_text']; ?>" placeholder="<?php echo lang('search_ads') ?>" name="filter_by_text">
				<?php
				$field_by_type = $_POST['filter_by_type'];
				?>
				<select name="filter_by_type" class="form-control">
					<option <?php echo (empty($field_by_type) ? 'selected' : ''); ?> value="">(Toutes les types)</option>
					<option <?php echo (($field_by_type === 'dem') ? 'selected' : ''); ?> value="dem"><?php echo lang('move') ?></option>
					<option <?php echo (($field_by_type === 'veh') ? 'selected' : ''); ?> value="veh"><?php echo lang('vehicles') ?></option>
					<option <?php echo (($field_by_type === 'per') ? 'selected' : ''); ?> value="per"><?php echo lang('people') ?></option>
					<option <?php echo (($field_by_type === 'obj') ? 'selected' : ''); ?> value="obj"><?php echo lang('various_objects') ?></option>
				</select>
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Chercher</button>
				<?php
				if (!empty($_POST['filter_by_text']) || !empty($_POST['filter_by_type'])) {
					?>
					<a class="btn btn-warning" href="<?php echo base_url(); ?>demand">Effacer filtre</a>
					<?php
				}
				?>
			</form>
		</div>
	</div>
	<?php
	}
 	?>
<table class="table table-hover table-striped" style="border-bottom: 2px solid #666">
  <tbody>
  <?php for ($i = 0; $i < count($offer_list); ++$i) {
    if ($offer_list[$i]->user_id != $this->tank_auth->get_user_id() && $offer_list[$i]->state != 1) {
      continue;
    }
    ?>
    <tr>
			<?php
			if (!empty($user_id)) {
				?>
					<td style="width: 40px; vertical-align: middle;text-align: center; <?php echo ($user_id == $offer_list[$i]->user_id ? 'background: #3e8f3e' : 'background: #AAA'); ?>">
						<?php
						$messages_unread = 0;
						if ($offer_list[$i]->user_id == $user_id)  {
							foreach($offer_list[$i]->communication as $offer_user_id => $data) {
									foreach($data['messages'] as $message) {
										if ($message->from_user_id != $user_id) {
											if ($message->is_notified != '1') {
												$messages_unread++;
											}
										}
									}
							}
						}
						else {
							if (isset($offer_list[$i]->communication[$offer_list[$i]->user_id])) {
								$data = $offer_list[$i]->communication[$offer_list[$i]->user_id];
								$messages = $offer_list[$i]->communication[$offer_list[$i]->user_id]['messages'];
								foreach($messages as $message) {
									if ($message->to_user_id == $user_id) {
										if ($message->is_notified != '1') {
											$messages_unread++;
										}
									}
								}
							}
						}
						if ($messages_unread == 0) {
							echo "&nbsp;";
						}
						else {
							echo "<span class='bubble'>".$messages_unread."</span>";
						}
						?>
					</td>
				<?php
			}
			?>
      <td>
          <p>
          <?php
            switch ($offer_list[$i]->offer_type) {
              case 'dem':
                  echo '<center><span style="font-size: 75px; color: #666" class="glyphicon glyphicon-home" aria-hidden="true"></span><br><strong style="color: #AAA">Déménagement</strong></center>';
                break;
              case 'veh':
                  echo '<center><span style="font-size: 75px; color: #666" class="glyphicon glyphicon-send" aria-hidden="true"></span><br><strong style="color: #AAA">Véhicules</strong></center>';
                break;
              case 'per':
                  echo '<center><span style="font-size: 75px; color: #666" class="glyphicon glyphicon-user" aria-hidden="true"></span><br><strong style="color: #AAA">Personnes</strong></center>';
                break;
              case 'obj':
                  echo '<center><span style="font-size: 75px; color: #666" class="glyphicon glyphicon-transfer" aria-hidden="true"></span><br><strong style="color: #AAA">Objets divers</strong></center>';
                break;
              default:
                break;
            }
           ?>
        </p>
      </td>
      <td style="vertical-align: middle;">
        <p>
          Départ:&nbsp;&nbsp;<strong><?php echo $offer_list[$i]->start_place.", ".$offer_list[$i]->start_zip_code; ?></strong><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php echo $offer_list[$i]->start_street; ?>
        </p>
        <p>
          Arrivée:&nbsp;&nbsp;<strong><?php echo $offer_list[$i]->destination_place.", ".$offer_list[$i]->destination_zip_code; ?></strong><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php echo $offer_list[$i]->destination_street; ?>
        </p>
      </td>
      <td style="vertical-align: middle;">
        <p>
          Titre:&nbsp;<?php echo $offer_list[$i]->offer; ?><br>
          Date:&nbsp;&nbsp;<strong><?php echo $offer_list[$i]->date; ?></strong>
        </p>
        <p>
          Demandeur:&nbsp;
					<?php echo $offer_list[$i]->user->last_name." ".$offer_list[$i]->user->first_name; ?>
					<br>
          Telephone:&nbsp;<a href="tel:<?php echo $offer_list[$i]->user->tel; ?>"><strong><?php echo $offer_list[$i]->user->tel; ?></a></strong>
        </p>
      </td>
      <td style="vertical-align: middle; width: 100px">
        <p style="margin-bottom: 2px"><a style="width: 90px; display: inline-block; text-align: center" class="btn btn-primary" href="<?php echo base_url() ?>demand/get_offer/<?php echo $offer_list[$i]->id; ?>">Afficher</a></p>
        <?php
        if ($offer_list[$i]->user_id == $this->tank_auth->get_user_id())  {
          echo '<p style="margin-bottom: 2px"><a style="width: 90px; display: inline-block; text-align: center" class="btn btn-info btn-xs" href="'.base_url().'demand/edit_offer/'.$offer_list[$i]->id.'">Modifier</a></p>';
          if ($offer_list[$i]->state == 1) {
            echo '<p style="margin-bottom: 2px"><a style="width: 90px; display: inline-block; text-align: center" class="btn btn-warning btn-xs" href="'.base_url().'demand/toggle_offer/'.$offer_list[$i]->id.'">Désactiver</a></p>';
          }
          else {
            echo '<p style="margin-bottom: 2px"><a style="width: 90px; display: inline-block; text-align: center" class="btn btn-success btn-xs" href="'.base_url().'demand/toggle_offer/'.$offer_list[$i]->id.'">Activer</a></p>';
          }
        }
        ?>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
