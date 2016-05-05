<?php
$street = array(
	'name'	=> 'street',
	'id'	=> 'street',
	'value'	=> set_value('street'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
$address = array(
	'name'	=> 'address',
	'id'	=> 'address',
	'value'	=> set_value('address'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
$zip_code = array(
	'name'	=> 'zip_code',
	'id'	=> 'zip_code',
	'value'	=> set_value('zip_code'),
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
	})
})
</script>
<p><b>Faites votre choix: </b></p>
<form name="form-inline" action="" method="post">
	<div class="btn-group choice" role="group" aria-label="...">
		<button type="button" class="btn btn-default" id="dem">Déménagement</button>
		<button type="button" class="btn btn-default" id="veh">Véhicules</button>
		<button type="button" class="btn btn-default" id="per">Personnes</button>
		<button type="button" class="btn btn-default" id="obj">Objets divers</button>
	</div>
	<div class="row">
		<div class="col-md-6">
		  <div class="form-group">
					<?php echo form_label('Rue, Nr', $street['id']); ?><?php echo form_input($street); ?>
					<span style="color: red;"><?php echo form_error($street['name']); ?><?php echo isset($errors[$street['name']])?$errors[$street['name']]:''; ?></span>
				<br>
					<?php echo form_label('NPA / Lieu ', $zip_code['id']); ?>
					<div class="row">
						<div class="col-md-4">
							<?php echo form_input($zip_code); ?>
						</div>
						<div class="col-md-8">
							<?php echo form_input($address); ?>
						</div>
					</div>
					<span style="color: red;"><?php echo form_error($address['name']); ?><?php echo isset($errors[$address['name']])?$errors[$address['name']]:''; ?></span>
					<span style="color: red;"><?php echo form_error($zip_code['name']); ?><?php echo isset($errors[$zip_code['name']])?$errors[$zip_code['name']]:''; ?></span>
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="form-group">
					<?php echo form_label('Rue, Nr', $street['id']); ?><?php echo form_input($street); ?>
					<span style="color: red;"><?php echo form_error($street['name']); ?><?php echo isset($errors[$street['name']])?$errors[$street['name']]:''; ?></span>
				<br>
					<?php echo form_label('NPA / Lieu ', $zip_code['id']); ?>
					<div class="row">
						<div class="col-md-4">
							<?php echo form_input($zip_code); ?>
						</div>
						<div class="col-md-8">
							<?php echo form_input($address); ?>
						</div>
					</div>
					<span style="color: red;"><?php echo form_error($address['name']); ?><?php echo isset($errors[$address['name']])?$errors[$address['name']]:''; ?></span>
					<span style="color: red;"><?php echo form_error($zip_code['name']); ?><?php echo isset($errors[$zip_code['name']])?$errors[$zip_code['name']]:''; ?></span>
		  </div>
		</div>
	</div>
	<div class="div_dem div_demand">
    <div class="form-group">
      <label for="exampleInputName2">Name</label>
      <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail2">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
    </div>
    <button type="submit" class="btn btn-default">Send invitation</button>
	</div>

	<div class="div_veh div_demand">
		vehic
		<label>Prénom de l'amateur <input type="text" /></label> <label>Département de l'amateur <input type="text" /></label>
	</div>

	<div class="div_per div_demand">
		pers
		<label>Nom de l'animalerie <input type="text" /></label> <label>Département de l'animalerie <input type="text" /></label>
	</div>

	<div class="div_obj div_demand">
		obj
		<label>Nom de l'association <input type="text" /></label> <label>Département de l'association <input type="text" /></label>
	</div>

</form>
</body>
</html>
