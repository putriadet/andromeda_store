<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index()
	{
		$data['title'] = 'Data Category';
		$datakat['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_nav', $datakat);
		$this->load->view('pages/admin/categories/index', $data);
		$this->load->view('templates/admin_footer');
	}

	public function add()
	{
		$data['title'] = 'Form Add Category';
		$datakat['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['kategori'] = $this->db->get_where('tbl_kategori', ['namakat' =>
		$this->session->userdata('namakat')])->row_array();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_nav', $datakat);
		$this->load->view('pages/admin/Categories/add_kategori', $data);
		$this->load->view('templates/admin_footer');
	}

	public function save()
	{
		$namaKategori = $this->input->post('namaKategori');
		$data = [
			'namakat' => $namaKategori
		];
		$this->db->insert('tbl_kategori', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kategori Berhasil Ditambahkan!</div>');
		redirect('Categories');
	}

	public function getid($id)
	{
		$dataWhere = array('idKat' => $id);
		$data['kategori'] = $this->Mcrud->get_by_id('tbl_kategori', $dataWhere)->row_object();
		$data['title'] = 'Form Edit Category';
		$datakat['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_nav', $datakat);
		$this->load->view('pages/admin/Categories/edit_kategori', $data);
		$this->load->view('templates/admin_footer');
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$namaKategori = $this->input->post('namaKategori');
		$dataUpdate = array('namaKat' => $namaKategori);
		$this->Mcrud->update('tbl_kategori', $dataUpdate, 'idkat', $id);
		redirect('Categories');
		$dataUpdate = [
			'jenis' => $namaKategori
		];
		$this->Mcrud->update('tbl_kategori', $dataUpdate, 'idkat', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kategori Berhasil Diubah!</div>');
		redirect('Categories');
	}

	public function hapus($id)
	{
		$this->Mcrud->delete('tbl_kategori', $id, 'idKat');
		redirect('Categories');
	}
}
