<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_Model extends CI_Model
{

  public function getByMonth($month)
  {
    $this->db->select('id, nama, bulan, tahun, nominal');
    $this->db->from('transaksi');
    $this->db->join('user', 'transaksi.username = user.username', 'inner');
    $this->db->where('bulan', $month);
    return $this->db->get()->result_array();
  }

  public function getAll()
  {
    $this->db->select('id, nama, bulan, tahun, nominal');
    // $this->db->from('transaksi');
    $this->db->join('user', 'transaksi.username = user.username', 'inner');
    // $this->db->where('MONTH(transaksi.tanggal)', date('m'));
    return $this->db->get('transaksi')->result_array();
  }

  public function getById($id)
  {
    $this->db->select('id, nama, bulan, tahun, nominal');
    // $this->db->from('transaksi');
    $this->db->join('user', 'transaksi.username = user.username', 'inner');
    // $this->db->where('MONTH(transaksi.tanggal)', date('m'));
    $this->db->where('id', $id);

    return $this->db->get('transaksi')->result_array();
  }

  public function save($data)
  {
    $this->db->insert('transaksi', $data);
  }
}

/* End of file Pembayaran_Model.php */
