<?php


defined('BASEPATH') or exit('No direct script access allowed');

class AnakKos extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('anakkos_model');
  }


  public function index()
  {
    $data['title'] = 'Data Anak Kos';
    $data['kos'] = $this->anakkos_model->getAll();
    $this->load->view('templates/header', $data);
    $this->load->view('admin/anakkos/index', $data);
    $this->load->view('templates/footer');
  }
}

/* End of file AnakKos.php */
