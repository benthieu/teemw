<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users
 *
 * This model represents user authentication data. It operates the following tables:
 * - user account data,
 * - user profiles
 *
 * @package	Tank_auth
 * @author	Ilya Konyukhov (http://konyukhov.com/soft/)
 */
class Offer_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_offer_list()
	{
		$this->db->select('*');
		$this->db->from('offer');
		$this->db->order_by('date', 'DESC');
		$query=$this->db->get();
		$result = $query->result();
		foreach ($result as $obj) {
			$obj->communication = $this->offer_communication_model->get_offer_communications_by_offer_id($obj->id);
		}
		return $result;
	}

	function get_offer_by_id($offer_id)
	{
		$this->db->select('*');
		$this->db->from('offer');
		$this->db->where('id',$offer_id);

		$query=$this->db->get();
		$result = $query->result();
		foreach ($result as $obj) {
			$obj->communication = $this->offer_communication_model->get_offer_communications_by_offer_id($obj->id);
		}
		return $result;
	}

  function create_offer($data)
	{
		if ($this->db->insert('offer', $data)) {
			$offer_id = $this->db->insert_id();
			return array('offer_id' => $offer_id);
		}
		return NULL;
	}

	function update_offer($data, $offer_id)
	{
		$this->db->where('id', $offer_id);
		if ($this->db->update('offer', $data)) {
			$offer_id = $this->db->insert_id();
			return array('offer_id' => $offer_id);
		}
		return NULL;
	}

	function toggle_offer_state($offer_id)
	{
		$this->db->select('state');
		$this->db->from('offer');
		$this->db->where('id',$offer_id);

		$query=$this->db->get();
		$result = $query->result();
		$this->db->where('id', $offer_id);
		if ($this->db->update('offer', array('state' => ($result[0]->state == 1 ? 0 : 1)))) {
			return TRUE;
		}
		return NULL;
	}

	function delete_offer($offer_id)
	{
		$this->db->where('id', $offer_id);
		$this->db->delete('offer');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		return FALSE;
	}

}
