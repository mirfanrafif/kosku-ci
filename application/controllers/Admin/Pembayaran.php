<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('pembayaran_model');
  }


  public function index()
  {
    $data['title'] = 'Data Pembayaran Kos';
    $data['pembayaran'] = $this->pembayaran_model->getAll();
    $this->load->view('templates/header', $data);
    $this->load->view('admin/pembayaran/index', $data);
    $this->load->view('templates/footer');
  }
}

/* End of file Pembayaran.php */
