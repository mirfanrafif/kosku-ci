<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Komplain_Model extends CI_Model
{

  public function getAll()
  {
    return $this->db->get('komplain')->result_array();
  }
  
  public function getById($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('komplain')->result_array();
  }
}

/* End of file Komplain_Model.php */
