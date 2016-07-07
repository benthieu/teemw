<?php
$date = array(
	'name'	=> 'date',
	'id'	=> 'date',
	'value'	=> set_value('date'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control bootstrap-datepicker',
);
$offer = array(
	'name'	=> 'offer',
	'id'	=> 'offer',
	'value'	=> set_value('offer'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
$description = array(
	'name'	=> 'description',
	'id'	=> 'description',
	'value'	=> set_value('description'),
	'class' => 'form-control',
);
$start_street = array(
	'name'	=> 'start_street',
	'id'	=> 'start_street',
	'value'	=> set_value('start_street'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
$start_place = array(
	'name'	=> 'start_place',
	'id'	=> 'start_placeress',
	'value'	=> set_value('start_place'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
$start_zip_code = array(
	'name'	=> 'start_zip_code',
	'id'	=> 'start_zip_code',
	'value'	=> set_value('start_zip_code'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
$destination_street = array(
	'name'	=> 'destination_street',
	'id'	=> 'destination_street',
	'value'	=> set_value('destination_street'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
$destination_place = array(
	'name'	=> 'destination_place',
	'id'	=> 'destination_place',
	'value'	=> set_value('destination_place'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
$destination_zip_code = array(
	'name'	=> 'destination_zip_code',
	'id'	=> 'destination_zip_code',
	'value'	=> set_value('destination_zip_code'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
?>
<style type="text/css">
	.div_demand {
		display: none;
	}
</style>
<script type="text/javascript">
$(document).ready(function() {
	$(".btn-group.choice .btn").click(function() {
		$(".div_demand").hide();
		$(".div_"+$(this).attr("id")).show();
		$("#offer_type").val($(this).attr("id"));
	})
	if ($("#offer_type").val() != "") {
		$(".div_demand").hide();
		$(".div_"+$("#offer_type").val()).show();
	}
})
</script>
<div class="col-md-1"></div>
<p><b></b></p>
<form name="form-inline" action="" method="post">
	<h2>Informations</h2>
	<span style="color: red;"><?php echo validation_errors(); ?></span>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
					<?php echo form_label(lang('title'), $offer['id']); ?><?php echo form_input($offer); ?>
					<br>
					<?php echo form_label('Description', $description['id']); ?><?php echo form_textarea($description); ?>
					<br>
					<?php echo form_label('Date', $date['id']); ?><?php echo form_input($date); ?>
		  </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2><?php echo lang('departure') ?></h2>
		  <div class="form-group">
					<?php echo form_label(lang('street_no'), $start_street['id']); ?><?php echo form_input($start_street); ?>
					<br>
					<?php echo form_label(lang('zip_city'), $start_zip_code['id']); ?>
					<div class="row">
						<div class="col-md-4">
							<?php echo form_input($start_zip_code); ?>
						</div>
						<div class="col-md-8">
							<?php echo form_input($start_place); ?>
						</div>
					</div>
				</div>
		</div>
		<div class="col-md-6">
			<h2><?php echo lang('arrival') ?></h2>
		  <div class="form-group">
					<?php echo form_label(lang('street_no'), $destination_street['id']); ?><?php echo form_input($destination_street); ?>
					<br>
					<?php echo form_label(lang('zip_city'), $destination_zip_code['id']); ?>
					<div class="row">
						<div class="col-md-4">
							<?php echo form_input($destination_zip_code); ?>
						</div>
						<div class="col-md-8">
							<?php echo form_input($destination_place); ?>
						</div>
					</div>
				</div>
		</div>
	</div>
	<h2><?php echo lang('make_choice') ?></h2>
	<div class="btn-group choice" role="group" aria-label="...">
		<button type="button" class="btn btn-default btn-lg" id="dem"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo lang('move') ?></button>
		<button type="button" class="btn btn-default btn-lg" id="veh"><span class="glyphicon glyphicon-send" aria-hidden="true"></span><?php echo lang('vehicles') ?></button>
		<button type="button" class="btn btn-default btn-lg" id="per"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo lang('people') ?></button>
		<button type="button" class="btn btn-default btn-lg" id="obj"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span><?php echo lang('various_objects') ?></button>
	</div>
	<input type="hidden" name="offer_type" id="offer_type" value="<?php echo set_value('offer_type'); ?>" />
	<br /> <br />
	<div class="div_dem div_demand">
    <div class="form-group col-md-3">
      <label for="nbreBoxes"><?php echo lang('number_boxes') ?></label>
      <input type="number" class="form-control col-md-1" name="field_dem_boxes" id="nbreBoxes" value="<?php echo set_value('field_dem_boxes'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="nbreSmFournitures"><?php echo lang('number_small_furniture') ?></label>
      <input type="number" class="form-control" name="field_dem_small_furniture" id="nbreSmFournitures" value="<?php echo set_value('field_dem_small_furniture'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="nbreMdFournitures"><?php echo lang('number_medium_furniture') ?></label>
      <input type="number" class="form-control" name="field_dem_middle_furniture" id="nbreMdFournitures" value="<?php echo set_value('field_dem_middle_furniture'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="nbreBgFournitures"><?php echo lang('number_big_furniture') ?></label>
      <input type="number" class="form-control" name="field_dem_big_furniture" id="nbreBgFournitures" value="<?php echo set_value('field_dem_big_furniture'); ?>">
    </div>
  </div>

	<div class="div_veh div_demand">
    <div class="form-group col-md-3">
      <label for="brand"><?php echo lang('brand') ?></label>
      <input type="text" class="form-control" name="field_veh_brand" id="brand" placeholder="Mercedes" value="<?php echo set_value('field_veh_brand'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="model"><?php echo lang('model') ?></label>
      <input type="text" class="form-control" name="field_veh_model" id="model" placeholder="S600" value="<?php echo set_value('field_veh_model'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="length"><?php echo lang('length') ?></label>
      <input type="text" class="form-control" name="field_veh_length" id="length" value="<?php echo set_value('field_veh_length'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="width"><?php echo lang('width') ?></label>
      <input type="text" class="form-control" name="field_veh_width" id="width" value="<?php echo set_value('field_veh_width'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="height"><?php echo lang('height') ?></label>
      <input type="text" class="form-control" name="field_veh_height" id="height" value="<?php echo set_value('field_veh_height'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="wheight"><?php echo lang('weight') ?></label>
      <input type="text" class="form-control" name="field_veh_wheight" id="wheight" placeholder="1300Kg" value="<?php echo set_value('field_veh_wheight'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="quant"><?php echo lang('quantity') ?></label>
      <input type="number" class="form-control" name="field_veh_number" id="quant" placeholder="1" value="<?php echo set_value('field_veh_number'); ?>">
    </div>
  </div>

	<div class="div_per div_demand">
    <div class="form-group col-md-3">
      <label for="quant"><?php echo lang('quantity') ?></label>
      <input type="number" class="form-control" name="field_per_number" id="quant" value="<?php echo set_value('field_per_number'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="nbLug"><?php echo lang('baggage') ?></label>
      <input type="number" class="form-control" name="field_per_bags" id="nbLug" value="<?php echo set_value('field_per_bags'); ?>">
    </div>
    <div class="form-group col-md-3">
			<label>&nbsp;</label>
			<?php
			$field_per_mob_red_val = set_value('field_per_mob_red');
			?>
			<select name="field_per_mob_red" class="form-control">
				<option <?php echo (($field_per_mob_red_val == -1 || empty($field_per_mob_red_val)) ? 'selected' : ''); ?> value="-1">Mobilité réduite</option>
				<option <?php echo (($field_per_mob_red_val === 1) ? 'selected' : ''); ?> value="1">Oui</option>
				<option <?php echo (($field_per_mob_red_val === 0) ? 'selected' : ''); ?> value="0">Non</option>
			</select>
    </div>
	</div>

	<div class="div_obj div_demand">
		<div class="form-group col-md-3">
      <label for="volume"><?php echo lang('volume') ?></label>
      <input type="text" class="form-control" id="volume" placeholder="6m³" name="field_obj_vol" value="<?php echo set_value('field_obj_vol'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="length"><?php echo lang('length') ?></label>
      <input type="text" class="form-control" id="length" placeholder="8m" name="field_obj_length" value="<?php echo set_value('field_obj_length'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="width"><?php echo lang('width') ?></label>
       <input type="text" class="form-control" id="width" placeholder="3,5m" name="field_obj_size" value="<?php echo set_value('field_obj_size'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="height"><?php echo lang('height') ?></label>
      <input type="text" class="form-control" id="height" placeholder="2,80m" name="field_obj_height" value="<?php echo set_value('field_obj_height'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="wheight"><?php echo lang('weight') ?></label>
      <input type="text" class="form-control" id="wheight" placeholder="1300Kg" name="field_obj_weight" value="<?php echo set_value('field_obj_weight'); ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="quant"><?php echo lang('quantity') ?></label>
      <input type="number" class="form-control" id="quant" placeholder="1" name="field_obj_number" value="<?php echo set_value('field_obj_number'); ?>">
    </div>
		<div class="form-group col-md-3">
			<label for="field_per_mob_red"><?php echo lang('fragility') ?></label>
			<?php
			$field_obj_frag_val = set_value('field_obj_frag');
			?>
			<select name="field_obj_frag" id="field_obj_frag" class="form-control">
				<option <?php echo (($field_obj_frag_val == -1 || empty($field_obj_frag_val)) ? 'selected' : ''); ?> value="-1">Particulièrement fragile</option>
				<option <?php echo (($field_obj_frag_val === 1) ? 'selected' : ''); ?> value="1">Oui</option>
				<option <?php echo (($field_obj_frag_val === 0) ? 'selected' : ''); ?> value="0">Non</option>
			</select>
    </div>
  </div>
	<div style="clear: both"></div>
	<button type="submit" class="btn<?php echo ($modify ? ' btn-info">Modifier la demande' : ' btn-primary">Envoyer la demande'); ?></button>
	<br>
	<br>
</form>
</body>
</html>
