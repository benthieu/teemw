<?php
class Demand extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    if ($this->tank_auth->is_logged_in()) {
        $this->load->view('header');
        $this->load->view('demand/demand_form');
			  $this->load->view('footer');
    }else {
      redirect('/auth/login/');
    }
	}
}
