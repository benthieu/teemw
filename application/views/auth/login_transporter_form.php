<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'class' => 'form-control',
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php echo form_open($this->uri->uri_string()); ?>
<div class="page-header">
	<h1>Login Transporteur</h1>
</div>
<div class="input-group">
		<?php echo form_label($login_label, $login['id']); ?><?php echo form_input($login); ?>
		<span style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></span>
	<br>
		<?php echo form_label('Password', $password['id']); ?><?php echo form_password($password); ?>
		<span style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></span>
	<br>
	<br>
	<br>
		<?php echo form_label(form_checkbox($remember).'Remember me', $remember['id']); ?>
</div>

<?php echo form_submit('submit', 'Login' ,"class='btn btn-primary'"); ?>

<?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>
<?php if ($this->config->item('allow_registration', 'tank_auth')) echo "&nbsp;&nbsp;".anchor('/auth/register/', 'Register'); ?>
<?php echo form_close(); ?>
