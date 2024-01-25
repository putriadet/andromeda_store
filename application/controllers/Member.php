<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index()
	{
		$data['title'] = 'Data Member';
		$datakat['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['user'] = $this->Mcrud->get_all_data('user')->result();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_nav', $datakat);
		$this->load->view('pages/admin/member', $data);
		$this->load->view('templates/admin_footer');
	}

	public function aktif($id)
	{
		$dataUpdate = array('active' => 1);
		$this->Mcrud->update('user', $dataUpdate, 'id', $id);
		redirect('member');
	}
	public function non_aktif($id)
	{
		$dataUpdate = array('active' => 2);
		$this->Mcrud->update('user', $dataUpdate, 'id', $id);
		redirect('member');
	}
}
