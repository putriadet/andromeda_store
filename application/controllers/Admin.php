<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

public function index()
	{
		$data['title'] = 'Dashboard';
		$dataUser['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_nav', $dataUser);
		$this->load->view('pages/admin/index', $data);
	}

	public function __construct() {
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function invoice() {

		$data['title'] = 'Data Pesanan';
		$dataUser['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
        $dataMidtrans['midtrans'] = $this->Mcrud->getMidtransData();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_nav', $dataUser);
        $this->load->view('pages/admin/invoice', $dataMidtrans);
		$this->load->view('templates/admin_footer');
    }
}
