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

  function create_demand($data)
	{
		if ($this->db->insert('offer', $data)) {
			$offer_id = $this->db->insert_id();
			return array('offer_id' => $offer_id);
		}
		return NULL;
	}

}
