<?php


defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class Pembayaran extends REST_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('pembayaran_model');
  }


  public function index_get($id = 0)
  {
    $month = $this->get('month');

    if ($id) {
      $data = $this->pembayaran_model->getById($id);
      $this->response(
        [
          'data' => $data
        ],
        200
      );
    } elseif ($month) {
      $data = $this->pembayaran_model->getByMonth($month);
      $this->response(
        [
          'data' => $data
        ],
        200
      );
    } else {
      $data = $this->pembayaran_model->getAll();
      $this->response(
        [
          'data' => $data
        ],
        200
      );
    }
  }

  public function index_post()
  {
    $data = array(
      'username' => $this->post('username'),
      'bulan' => $this->post('bulan'),
      'tahun' => $this->post('tahun'),
      'tanggal' => date('Y/m/d', time()),
      'nominal' => $this->post('nominal'),
    );

    $this->pembayaran_model->save($data);

    $this->response([
      'response' => 200,
      'status' => 'ok'
    ], 200);
  }
}

/* End of file AnakKos.php */
