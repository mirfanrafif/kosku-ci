<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Komplain extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('komplain_model');
  }


  public function index()
  {
    $data['title'] = "Data Komplain";
    $data['komplains'] = $this->komplain_model->getAll();
    $this->load->view('templates/header', $data);
    $this->load->view('admin/komplain/index', $data);
    $this->load->view('templates/footer');
  }

  public function detail($id)
  {
    $data['title'] = "Data Komplain";
    $data['komplains'] = $this->komplain_model->getById($id);
    $this->load->view('templates/header', $data);
    $this->load->view('admin/komplain/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['title'] = 'Tambah Data Komplain';
    $this->load->model('anakkos_model');
    $data['kos'] = $this->anakkos_model->getAll();
    $this->load->view('templates/header', $data);
    $this->load->view('komplain/tambah');
    $this->load->view('templates/footer');
  }
}

/* End of file Komplain.php */
