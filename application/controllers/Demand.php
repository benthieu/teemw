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
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
		$filter_by_text = $this->input->post('filter_by_text');
		$filter_by_type = $this->input->post('filter_by_type');
		$offer_result = $this->offer_model->get_offer_list($filter_by_text, $filter_by_type);
		$data['offer_list'] = $offer_result;
		foreach ($data['offer_list'] as &$offer) {
			$offer->user = $this->users->get_user_by_id($offer->user_id);
			$offer->date = date('d.m.Y', strtotime($offer->date));
		}

		$this->load->view('demand/demand_list',$data);
	}

	public function get_my_offers() {
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
		$offer_result = $this->offer_model->get_my_offer_list();
		$data['offer_list'] = $offer_result;
		$data['user_id'] = $this->get_logged_in_user();
		foreach ($data['offer_list'] as &$offer) {
			$offer->user = $this->users->get_user_by_id($offer->user_id);
			$offer->date = date('d.m.Y', strtotime($offer->date));
		}

		$this->load->view('demand/demand_list',$data);
	}

	public function get_offer() {
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
		$offer_id = $this->uri->segment(3);
		if (empty($offer_id)) {
			redirect('demand/');
		}
		$this->offer_communication_model->set_offer_communications_read_by_offer_id($offer_id, $this->get_logged_in_user());

		$offer = $this->offer_model->get_offer_by_id($offer_id);
		$offer = $offer[0];
		$offer->date = date('d.m.Y', strtotime($offer->date));

		$offer->user = $this->users->get_user_by_id($offer->user_id);

		$offer->fields = json_decode($offer->fields);

		$data['offer'] = $offer;

		$data['labels'] = $this->get_field_labels();

		$data['this_user'] = $this->users->get_user_by_id($this->get_logged_in_user());

		$this->load->view('demand/demand_detail',$data);
	}

	public function create_offer() {
		return $this->offer_form();
	}

	public function edit_offer() {
		$offer_id = $this->uri->segment(3);
		if (empty($offer_id)) {
			redirect('demand/');
		}

		return $this->offer_form($offer_id);
	}

	public function remove_offer() {
		$offer_id = $this->uri->segment(3);
		if (empty($offer_id)) {
			redirect('demand/');
		}
		$data = $this->offer_model->get_offer_by_id($offer_id);
		$data = $data[0];
		if ($data->user_id != $this->get_logged_in_user()) {
			$this->session->set_flashdata('MSG','Not Authorized');
			redirect('demand');
		}
		$this->offer_model->delete_offer($offer_id);
		redirect('demand');
	}

	public function offer_form($edit_id = false) {
		if ($this->tank_auth->is_logged_in()) {
			$data = array();$data['modify'] = false;

			if ($edit_id) {
				$data = $this->offer_model->get_offer_by_id($edit_id);
				$data = $data[0];
				if ($data->user_id != $this->get_logged_in_user()) {
					$this->session->set_flashdata('MSG','Not Authorized');
					redirect('demand');
				}
				$data->date = date('d.m.Y', strtotime($data->date));
				$data = get_object_vars($data);
				$data['fields'] = json_decode($data['fields']);
				foreach ($data['fields'] as $name => $value) {
					$data['field_'.$data['offer_type']."_".$name] = $value;
				}
				unset($data['fields']);
				foreach($data as $field => $value)
				{
					$_POST[$field] = $value;
				}
				$data['modify'] = true;
			}

			$this->form_validation->set_rules('date', 'Date', 'trim|required|callback_valid_date');
			$this->form_validation->set_rules('offer', 'Transport', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');
			$this->form_validation->set_rules('start_street', 'Start Rue, Nr', 'trim|required');
			$this->form_validation->set_rules('start_place', 'Start Adresse', 'trim|required');
			$this->form_validation->set_rules('start_zip_code', 'Start NPA', 'trim|required|numeric');
			$this->form_validation->set_rules('destination_street', 'Destination Rue, Nr', 'trim|required');
			$this->form_validation->set_rules('destination_place', 'Destination Adresse', 'trim|required');
			$this->form_validation->set_rules('destination_zip_code', 'Destination NPA', 'trim|required|numeric');

			foreach($_REQUEST as $field => $value) {
				$data[$field] = $value;
			}
			if (isset($data['date'])) {
				$data['date'] = date('d.m.Y', strtotime($data['date']));
			}
			if ($this->form_validation->run()) {								// validation ok
				$offer = array();
				$offer['user_id'] = $this->get_logged_in_user();
				$offer['date'] = date('Y-m-d', strtotime($data['date']));
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

				if ($edit_id) {
					$this->offer_model->update_offer($offer, $edit_id);
				}
				else {
					$new_offer = $this->offer_model->create_offer($offer);
					$edit_id = $new_offer['offer_id'];
				}
				redirect('demand/get_offer/'.$edit_id);
			}

		  $this->load->view('demand/demand_form', $data);

    }else {
      redirect('/auth/login/');
    }
	}

	public function toggle_offer() {
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
		$offer_id = $this->uri->segment(3);
		if (!empty($offer_id)) {
			$this->offer_model->toggle_offer_state($offer_id);
		}
		$this->load->library('user_agent');
		redirect($this->agent->referrer());
	}

	public function add_offer_communication() {
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
		$offer_id = $this->uri->segment(3);
		if (empty($offer_id)) {
			redirect('demand/');
		}
		$offer = $this->offer_model->get_offer_by_id($offer_id);
		$offer = $offer[0];
		//$offer->date
		if (!isset($_POST['communication']) || empty($_POST['communication_text'])) {
			redirect('demand/get_offer/'.$offer_id);
		}
		$data = array();
		$data['offer_id'] = $offer_id;
		$data['text'] = $_POST['communication_text'];
		$data['from_user_id'] = $this->tank_auth->get_user_id();
		if ($offer->user_id == $this->tank_auth->get_user_id()) {
			$data['to_user_id'] = $_POST['communication_partner'];
			if ($data['to_user_id'] == '-1') {
				redirect('demand/get_offer/'.$offer_id);
			}
		}
		else {
			$data['to_user_id'] = $offer->user_id;
		}

		$to_user = $this->users->get_user_by_id($data['to_user_id']);
		$this->load->library('email');
		$this->email->from('noreply@teemw.ch');
		$this->email->to($to_user->email);
		$this->email->subject('Nouveau message sur annonce');
		$mail_data = array(
			'user_name' => $to_user->last_name." ".$to_user->first_name,
			'comment' => $data['text'],
			'offer_titel' => $offer->offer
		);
		$this->email->message($this->load->view('email/communication-html', $mail_data, TRUE));
		$this->email->set_alt_message($this->load->view('email/communication-txt', $mail_data, TRUE));
		$this->email->send();

		$this->offer_communication_model->create_offer_communication($data);
		redirect('demand/get_offer/'.$offer_id);
	}

	public function get_field_labels() {
		$labels = array();
		$labels['dem_boxes'] = 'Nombres de cartons';
		$labels['dem_small_furniture'] = 'Nombre petits meubles';
		$labels['dem_middle_furniture'] = 'Nombre meubles moyens';
		$labels['dem_big_furniture'] = 'Nombre gros meubles';
		$labels['veh_brand'] = 'Marque';
		$labels['veh_model'] = 'Modèle';
		$labels['veh_length'] = 'Longueur';
		$labels['veh_width'] = 'Largeur';
		$labels['veh_height'] = 'Hauteur';
		$labels['veh_wheight'] = 'Poids';
		$labels['veh_number'] = 'Quantité';
		$labels['per_number'] = 'Quantité';
		$labels['per_bags'] = 'Bagages';
		$labels['per_mob_red'] = 'Mobilité réduite';
		$labels['obj_vol'] = 'Volume';
		$labels['obj_length'] = 'Longueur';
		$labels['obj_size'] = 'Largeur';
		$labels['obj_height'] = 'Hauteur';
		$labels['obj_weight'] = 'Poids';
		$labels['obj_number'] = 'Quantité';
		$labels['obj_frag'] = 'Fragilité';
		$labels[''] = '';
		$labels[''] = '';
		$labels[''] = '';
		return $labels;
	}

	//Define a callback and pass the format of date
	public function valid_date($date, $format = 'd.m.Y')
	{
	if (empty($format)) {
		$format = 'd.m.Y';
	}
	 $d = DateTime::createFromFormat($format, $date);
	 //Check for valid date in given format
	 if($d && $d->format($format) == $date) {
	    return true;
	 } else {
	   $this->form_validation->set_message('valid_date',
	             'La date n\'est pas en format '.$format);
	      return false;
	 }
 }
}
