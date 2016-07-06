<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Annonce_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }


     function get_annonce_list()
     {
          $sql = 'select id, user_id, offer, start_street, start_zip_code, start_place, destination_street, destination_zip_code, destination_place, description, offer_type, fields from offer';
          $query = $this->db->query($sql);
          $result = $query->result();
          return $result;
     }

     function get_annonce($annonce_id)
     {
       $this->db->select('id, user_id, offer, start_street, start_zip_code, start_place, destination_street, destination_zip_code, destination_place, description, offer_type, fields');

       $this->db->from('offer');

       $this->db->where('id',$annonce_id);

       $query=$this->db->get();
       $result = $query->result();
       return $result;
     }
}
