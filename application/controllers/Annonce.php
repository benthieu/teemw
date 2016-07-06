<?php
class Annonce extends MY_Controller {

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
			$annonce_id = $this->uri->segment(3);

			$this->load->model('Annonce_model');

			$annonceresult = $this->Annonce_model->get_annonce($annonce_id);
			$data['annonce'] = $annonceresult;

      $this->load->view('annonces/annonce_form',$data);
	}
}
