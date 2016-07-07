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
class Offer_communication_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_offer_communications_by_offer_id($offer_id)
	{
		$this->db->select('*');
		$this->db->from('offer_communication');
		$this->db->where('offer_id',$offer_id);

		$query=$this->db->get();
		$result = $query->result();
		$return = array();
		foreach($result as $obj) {
			$from_user = $this->users->get_user_by_id($obj->from_user_id);
			$to_user = $this->users->get_user_by_id($obj->to_user_id);
			$foreign_user_id = ($this->tank_auth->get_user_id() == $obj->from_user_id ? $obj->to_user_id : $obj->from_user_id);
			$return[$foreign_user_id]['user'] = ($this->tank_auth->get_user_id() == $obj->from_user_id ? $to_user : $from_user);
			$return[$foreign_user_id]['messages'][] = $obj;
		}
		return $return;
	}

  function create_offer_communication($data)
	{
		$data['	send_datetime'] = date('Y-m-d H:i:s');
		if ($this->db->insert('offer_communication', $data)) {
			$offer_communication_id = $this->db->insert_id();
			return array('offer_communication_id' => $offer_communication_id);
		}
		return NULL;
	}

	function set_offer_communications_read_by_offer_id($offer_id, $user_id)
	{
		$this->db->where('offer_id', $offer_id);
		$this->db->where('to_user_id', $user_id);
		if ($this->db->update('offer_communication', array('is_notified' => 1))) {
			return true;
		}
		return NULL;
	}

	function delete_offer_communication($offer_communication_id)
	{
		$this->db->where('offer_communication_id', $offer_communication_id);
		$this->db->delete('offer_communication');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		}
		return FALSE;
	}

}
