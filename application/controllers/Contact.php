<?php
class Contact extends MY_Controller {

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
		if (isset($_POST['contact_form'])) {
			$this->load->library('email');
			$this->email->from('noreply@teemw.ch');
			$this->email->to('mathieu.b93@gmail.com');
			$this->email->subject('Contact form');
			$mail_data['entries'] = $_POST;
			$this->email->message($this->load->view('email/contact-txt', $mail_data, TRUE));
			$this->email->set_alt_message($this->load->view('email/contact-txt', $mail_data, TRUE));
			$this->email->send();
		}
		$this->load->view('informations/contact_form');
	}

}
