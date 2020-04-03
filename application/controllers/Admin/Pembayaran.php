<?php

defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Pembayaran extends CI_Controller
{

  private $_client;

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pembayaran_model');
  }


  public function index()
  {
    $data['title'] = 'Data Pembayaran Kos';
    $month = date('M', time());
    $data['list_bulan_ini'] = $this->pembayaran_model->getByMonth($month);
    $this->load->view('templates/header', $data);
    $this->load->view('admin/pembayaran/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    if ($this->input->post('submit')) {
    } else {
      $this->load->model('anakkos_model');
      $data['kos'] = $this->anakkos_model->getAll();
      $data['title'] = 'Data Pembayaran Kos';

      $this->load->view('templates/header', $data);
      $this->load->view('admin/pembayaran/tambah', $data);
      $this->load->view('templates/footer');
    }
  }
}

/* End of file Pembayaran.php */
