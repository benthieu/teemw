<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
		'class' => 'form-control',
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
$first_name = array(
	'name'	=> 'first_name',
	'id'	=> 'first_name',
	'value'	=> set_value('first_name'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
$last_name = array(
	'name'	=> 'last_name',
	'id'	=> 'last_name',
	'value'	=> set_value('last_name'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
$tel = array(
	'name'	=> 'tel',
	'id'	=> 'tel',
	'value'	=> set_value('tel'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
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
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' => 'form-control',
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' => 'form-control',
);
?>
<?php echo form_open($this->uri->uri_string()); ?>
<div class="page-header">
	<h1><?php echo lang('register_transporter') ?></h1>
</div>


<!--<div class="container tabs-wrap">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
      <a href="#transporteur" aria-controls="transport" role="tab" data-toggle="tab" aria-expanded="true">Devenez transporteur</a>
    </li>
    <li>
      <a href="#specialite" aria-controls="spec" role="tab" data-toggle="tab" aria-expanded="false">Vos spécialités</a>
    </li>
    <li>
      <a href="#description" aria-controls="desc" role="tab" data-toggle="tab" aria-expanded="false">Description</a>
    </li>
		<li>
			<a href="#validation" aria-controls="valid" role="tab" data-toggle="tab" aria-expanded="false">Validation</a>
		</li>
  </ul>



<div class="tab-content">

  <div role="tabpanel" class="tab-pane active" id="transporteur">
    <h3 class="">Devenez transporteur</h3>
    <p>Trouvez des chargements proches de vous ou sur vos trajets réguliers, proposez vos offres et remportez de nouvelles courses !</p>
		<h4>Conditions pour devenir Transporteur</h4>
		<ol>
<li> Être une société de transport (kbis, licence de transporteur et assurance)</li>
<li> S'inscrire gratuitement </li>
</ol>
    <a class="btn btn-primary continue">Suivant</a>
  </div>

  <div role="tabpanel" class="tab-pane" id="specialite">
    <h3 class="">Vos spécialités</h3>
    <p>veuillez cocher (plusieurs choix possibles)</p>
		<h4>Vos trajets réguliers</h4>
		<h4>Vos régions favorites</h4>
    <a class="btn btn-primary back">Précédent</a>
    <a class="btn btn-primary continue">Suivant</a>
  </div>

  <div role="tabpanel" class="tab-pane" id="description">
    <h3 class="">Description</h3>
    <h4>Informations générales</h4>
		<h4>Décrivez votre entreprise en 2-3 lignes</h4>
    <a class="btn btn-primary back">Précédent</a>
    <a class="btn btn-primary continue">Suivant</a>
  </div>

	<div role="tabpanel" class="tab-pane" id="validation">
    <h3 class="">Review &amp; Place Order</h3>
    <p>Review &amp; Payment Tab</p>
    <a class="btn btn-primary back">Go Back</a>
    <a class="btn btn-primary continue">Place Order</a>
  </div>
</div></div>-->

<div class="input-group">
	<?php if ($use_username) { ?>
		<?php echo form_label('Username', $username['id']); ?><?php echo form_input($username); ?>
		<span style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></span>
		<br>
	<?php } ?>
		<?php echo form_label('Email Address', $email['id']); ?><?php echo form_input($email); ?>
		<span style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></span>
	<br>
		<?php echo form_label('Prénom', $first_name['id']); ?><?php echo form_input($first_name); ?>
		<span style="color: red;"><?php echo form_error($first_name['name']); ?><?php echo isset($errors[$first_name['name']])?$errors[$first_name['name']]:''; ?></span>
	<br>
		<?php echo form_label('Nom', $last_name['id']); ?><?php echo form_input($last_name); ?>
		<span style="color: red;"><?php echo form_error($last_name['name']); ?><?php echo isset($errors[$last_name['name']])?$errors[$last_name['name']]:''; ?></span>
	<br>
		<?php echo form_label('Telephone', $tel['id']); ?><?php echo form_input($tel); ?>
		<span style="color: red;"><?php echo form_error($tel['name']); ?><?php echo isset($errors[$tel['name']])?$errors[$tel['name']]:''; ?></span>
	<br>
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
		<?php echo form_label('Password', $password['id']); ?><?php echo form_password($password); ?>
		<span style="color: red;"><?php echo form_error($password['name']); ?></span>
	<br>
		<?php echo form_label('Confirm Password', $confirm_password['id']); ?><?php echo form_password($confirm_password); ?>
		<span style="color: red;"><?php echo form_error($confirm_password['name']); ?></span>
</div>
<br>
<?php echo form_submit('register', 'Register', 'class="btn btn-primary"'); ?>
<?php echo form_close(); ?>
