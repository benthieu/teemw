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
			$data = array();
			$this->form_validation->set_rules('offer', 'Transport', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');
			$this->form_validation->set_rules('start_street', 'Start Rue, Nr', 'trim|required');
			$this->form_validation->set_rules('start_place', 'Start Adresse', 'trim|required');
			$this->form_validation->set_rules('start_zip_code', 'Start NPA', 'trim|required|numeric');
			$this->form_validation->set_rules('destination_street', 'Destination Rue, Nr', 'trim|required');
			$this->form_validation->set_rules('destination_place', 'Destination Adresse', 'trim|required');
			$this->form_validation->set_rules('destination_zip_code', 'Destination NPA', 'trim|required|numeric');
			$data['errors'] = array();

			foreach($_REQUEST as $field => $value) {
				$data[$field] = $value;
			}
			if ($this->form_validation->run()) {								// validation ok
				$offer = array();
				$offer['user_id'] = $this->get_logged_in_user();
				$offer['offer'] = $data['offer'];
				$offer['start_street'] = $data['start_street'];
				$offer['start_zip_code'] = $data['start_zip_code'];
				$offer['start_place'] = $data['start_place'];
				$offer['destination_street'] = $data['destination_street'];
				$offer['destination_zip_code'] = $data['destination_zip_code'];
				$offer['destination_place'] = $data['destination_place'];
				$offer['description'] = $data['description'];
				$offer['offer_type'] = $data['offer_type'];
				$fields = array();
				foreach($data as $field => $value) {
					if (substr($field, 0, 9) == 'field_'.$offer['offer_type']) {
						$fields[substr($field, 10)] = $value;
					}
				}
				$offer['fields'] = json_encode($fields);

				$this->demand_model->create_demand($offer);
				redirect('/annonces/');
			}

		  $this->load->view('demand/demand_form', $data);

    }else {
      redirect('/auth/login/');
    }
	}

	public function save_offer() {
		if ($this->tank_auth->is_logged_in()) {
			var_dump($_REQUEST);
			exit;

    }else {
      redirect('/auth/login/');
    }
	}
}
