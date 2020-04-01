<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('anakkos_model');
		$this->load->model('pembayaran_model');
	}


	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['kos'] = $this->anakkos_model->getAll();
		$data['kos_count'] = $this->anakkos_model->countAll();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}
}
