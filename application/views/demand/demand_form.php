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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<div class="col-md-1"></div>
<p><b>Faites votre choix: </b></p>
<form name="form-inline" action="" method="post">
  <div class="col-md-1"></div>
	<div class="btn-group choice" role="group" aria-label="...">
		<button type="button" class="btn btn-default" id="dem">Déménagement</button>
		<button type="button" class="btn btn-default" id="veh">Véhicules</button>
		<button type="button" class="btn btn-default" id="per">Personnes</button>
		<button type="button" class="btn btn-default" id="obj">Objets divers</button>
	</div>
  <br /><br />
	<div class="row">
    <div class="col-md-1"></div>
    <fieldset class="col-md-5">
      <legend class="scheduler-border">Départ</legend>
    		<div class="col-md-12">
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
    </fieldset>
    <fieldset class="scheduler-border col-md-5">
      <legend class="scheduler-border">Arrivée</legend>
  		<div class="col-md-12">
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
    </fieldset>
    <div class="col-md-1"></div>
=======
<form name="form-inline" action="" method="post">
=======
<form name="form-inline" action="" method="post">
>>>>>>> origin/master
=======
<form name="form-inline" action="" method="post">
>>>>>>> 60e685ae806fe7256286227f790c1cc2b1b35a63
	<div class="row">
		<div class="col-md-6">
			<h2>départ</h2>
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
			<h2>arrivée</h2>
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
>>>>>>> origin/master
	</div>
	<p><b>Faites votre choix: </b></p>
	<div class="btn-group choice" role="group" aria-label="...">
		<button type="button" class="btn btn-default btn-lg" id="dem"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Déménagement</button>
		<button type="button" class="btn btn-default btn-lg" id="veh"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>  Véhicules</button>
		<button type="button" class="btn btn-default btn-lg" id="per"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Personnes</button>
		<button type="button" class="btn btn-default btn-lg" id="obj"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>  Objets divers</button>
	</div>
	<p><b>Faites votre choix: </b></p>
	<div class="btn-group choice" role="group" aria-label="...">
		<button type="button" class="btn btn-default btn-lg" id="dem"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Déménagement</button>
		<button type="button" class="btn btn-default btn-lg" id="veh"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>  Véhicules</button>
		<button type="button" class="btn btn-default btn-lg" id="per"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Personnes</button>
		<button type="button" class="btn btn-default btn-lg" id="obj"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>  Objets divers</button>
	</div>
	<p><b>Faites votre choix: </b></p>
	<div class="btn-group choice" role="group" aria-label="...">
		<button type="button" class="btn btn-default btn-lg" id="dem"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Déménagement</button>
		<button type="button" class="btn btn-default btn-lg" id="veh"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>  Véhicules</button>
		<button type="button" class="btn btn-default btn-lg" id="per"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Personnes</button>
		<button type="button" class="btn btn-default btn-lg" id="obj"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>  Objets divers</button>
	</div>
	<div class="div_dem div_demand">
    <div class="form-group col-md-3">
      <label for="nbreBoxes">Nombres de cartons</label>
      <input type="number" class="form-control col-md-1" id="nbreBoxes" value="40">
    </div>
    <div class="form-group col-md-3">
      <label for="nbreSmFournitures">Nombre petits meubles</label>
      <input type="number" class="form-control" id="nbreSmFournitures" value="20">
    </div>
    <div class="form-group col-md-3">
      <label for="nbreMdFournitures">Nombre meubles moyens</label>
      <input type="number" class="form-control" id="nbreMdFournitures" value="10">
    </div>
    <div class="form-group col-md-3">
      <label for="nbreBgFournitures">Nombre gros meubles</label>
      <input type="number" class="form-control" id="nbreBgFournitures" value="5">
    </div>
    <br /><br />
    <div class="col-md-5"></div>
    <button type="submit" class="btn btn-default">Envoyer la demande</button>
	</div>

	<div class="div_veh div_demand">
    <div class="form-group col-md-3">
      <label for="brand">Marque</label>
      <input type="text" class="form-control" id="brand" placeholder="Mercedes">
    </div>
    <div class="form-group col-md-3">
      <label for="model">Modèle</label>
      <input type="text" class="form-control" id="model" placeholder="S600">
    </div>
    <div class="form-group col-md-3">
      <label for="length">Longueur</label>
      <input type="text" class="form-control" id="length">
    </div>
    <div class="form-group col-md-3">
      <label for="width">Largeur</label>
      <input type="text" class="form-control" id="width" >
    </div>
    <div class="form-group col-md-3">
      <label for="height">Hauteur</label>
      <input type="text" class="form-control" id="height" >
    </div>
    <div class="form-group col-md-3">
      <label for="wheight">Poids</label>
      <input type="text" class="form-control" id="wheight" placeholder="1300Kg">
    </div>
    <div class="form-group col-md-3">
      <label for="quant">Quantité</label>
      <input type="number" class="form-control" id="quant" placeholder="1">
    </div>
    <br /><br /><br /><br /><br /><br /><br /><br />
    <div class="col-md-5"></div>
    <button type="submit" class="btn btn-default">Envoyer la demande</button>
	</div>

	<div class="div_per div_demand">
    <div class="form-group col-md-3">
      <label for="quant">Quantité</label>
      <input type="number" class="form-control" id="quant" value="1">
    </div>
    <div class="form-group col-md-3">
      <label for="nbLug">Bagages</label>
      <input type="number" class="form-control" id="nbLug" value="0">
    </div>
    <br />
    <div class="form-group col-md-3">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mobilité réduite
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <li><a href="#">Oui</a></li>
          <li><a href="#">Non</a></li>
        </ul>
    </div>
    <div class="col-md-5"></div>
    <button type="submit" class="btn btn-default">Envoyer la demande</button>
	</div>

	<div class="div_obj div_demand">
		obj
		<label>Nom de l'association <input type="text" /></label> <label>Département de l'association <input type="text" /></label>
	</div>

</form>
</body>
</html>
