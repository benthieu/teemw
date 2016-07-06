<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Annonce_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }


     function get_annonce_list()
     {
          $sql = 'select id, user_id, offer, place, destination, place_coordinates, destination_coordinates, price, type, weight, volume from offer';
          $query = $this->db->query($sql);
          $result = $query->result();
          return $result;
     }

     function get_annonce($annonce_id)
     {
       $this->db->select('id', 'user_id', 'offer', 'place', 'destination', 'place_coordinates', 'destination_coordinates', 'price', 'type', 'weight', 'volume');

$this->db->from('offer');

$this->db->where('id',$annonce_id);

$query=$this->db->get();
$result = $query->result();
return $result;
     }
}
