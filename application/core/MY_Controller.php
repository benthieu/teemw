<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function is_logged_in() {
		return $this->tank_auth->is_logged_in();
	}

	function get_logged_in_user() {
		return $this->tank_auth->get_user_id();
	}
}
