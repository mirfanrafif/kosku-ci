<?php


defined('BASEPATH') or exit('No direct script access allowed');

class anakkos_model extends CI_Model
{

  public function getAll()
  {
    $this->db->select('nama, no_hp, status');
    $this->db->from('user');
    $this->db->where('level', 'user');
    return $this->db->get()->result_array();
  }

  public function countAll()
  {
    $this->db->select('count(*) as total');
    $this->db->from('user');
    $this->db->where('level', 'user');
    return $this->db->get()->result_array();
  }
}

/* End of file anakkos_model.php */
