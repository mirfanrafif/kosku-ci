<?php


defined('BASEPATH') or exit('No direct script access allowed');

class anakkos_model extends CI_Model
{

  public function getAll()
  {
    $this->db->select('username, nama, no_hp, status');
    $this->db->from('user');
    $this->db->where('level', 'user');
    return $this->db->get()->result_array();
  }

  public function getById($username)
  {
    $this->db->where('username', $username);
    $this->db->where('level', 'user');
    return $this->db->get('user')->result_array();
  }

  public function countAll()
  {
    $this->db->select('count(*) as total');
    $this->db->from('user');
    $this->db->where('level', 'user');
    return $this->db->get()->result_array();
  }

  public function save($data)
  {
    $this->db->insert('user', $data);
  }
  public function update($data, $username)
  {
    $this->db->where('username', $username);
    $this->db->update('user', $data);
  }
  public function delete($username)
  {
    $this->db->where('username', $username);
    $this->db->delete('user');
  }
}

/* End of file anakkos_model.php */
