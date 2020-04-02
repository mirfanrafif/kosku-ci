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
    if ($id) {
      $data = $this->pembayaran_model->getById($id);
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
}

/* End of file AnakKos.php */
