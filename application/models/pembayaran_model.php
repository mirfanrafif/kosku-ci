<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_Model extends CI_Model
{

  public function getAll()
  {
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('user', 'transaksi.id_user = user.id', 'inner');
    $this->db->where('MONTH(transaksi.tanggal)', date('m'));
    return $this->db->get()->result_array();
  }
}

/* End of file Pembayaran_Model.php */
