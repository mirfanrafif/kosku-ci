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

  public function tambah()
  {
    if ($this->input->post('submit')) {
      $anakkos = array(
        'nama' => $this->input->post('nama'),
        'no_hp' => $this->input->post('nohp'),
        'asal' => $this->input->post('asal'),
        'status' => $this->input->post('status'),
        'username' => $this->input->post('username'),
        'password' => md5($this->input->post('password')),
        'id_kos' => $this->input->post('idkos'),
        'level' => 'user'
      );

      $this->anakkos_model->save($anakkos);

      redirect('admin/anakkos');
    } else {
      $data['title'] = 'Tambah Data Anak Kos';
      $this->load->view('templates/header', $data);
      $this->load->view('admin/anakkos/tambah');
      $this->load->view('templates/footer');
    }
  }

  public function ubah($username)
  {
    if ($this->input->post('submit')) {
      $anakkos = array(
        'nama' => $this->input->post('nama'),
        'no_hp' => $this->input->post('nohp'),
        'status' => $this->input->post('status'),
        'username' => $this->input->post('username'),
        'password' => md5($this->input->post('password')),
        'id_kos' => $this->input->post('idkos'),
        'level' => 'user'
      );

      $this->anakkos_model->update($anakkos, $username);

      redirect('admin/anakkos');
    } else {
      $data['title'] = 'Tambah Data Anak Kos';
      $data['kos'] = $this->anakkos_model->getById($username);
      $this->load->view('templates/header', $data);
      $this->load->view('admin/anakkos/ubah', $data);
      $this->load->view('templates/footer');
    }
  }

  public function hapus($username)
  {
    $this->anakkos_model->delete($username);
    redirect('admin/anakkos', 'refresh');
  }
}

/* End of file AnakKos.php */
