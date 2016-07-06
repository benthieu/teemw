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
class Demand_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_offer_list()
	{
			 $sql = 'select id, user_id, offer, start_street, start_zip_code, start_place, destination_street, destination_zip_code, destination_place, description, offer_type, fields from offer';
			 $query = $this->db->query($sql);
			 $result = $query->result();
			 return $result;
	}

	function get_offer($offer_id)
	{
		$this->db->select('id, user_id, offer, start_street, start_zip_code, start_place, destination_street, destination_zip_code, destination_place, description, offer_type, fields');

		$this->db->from('offer');

		$this->db->where('id',$offer_id);

		$query=$this->db->get();
		$result = $query->result();
		return $result;
	}

  function create_demand($data)
	{
		if ($this->db->insert('offer', $data)) {
			$offer_id = $this->db->insert_id();
			return array('offer_id' => $offer_id);
		}
		return NULL;
	}

}
