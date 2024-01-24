<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->helper('file');
	}

	public function index()
	{
		$data['title'] = 'Data Product';
		$dataUser['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$dataProduk['produk'] = $this->Mcrud->get_kategori('tbl_kategori')->result();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_nav', $dataUser);
		$this->load->view('pages/admin/product/index', $dataProduk);
		$this->load->view('templates/admin_footer');
	}

	public function add()
	{
		$data['title'] = 'Form Add Product';
		$dataUser['data']['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$dataUser['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$dataproduk['produk'] = $this->Mcrud->get_all_data('tbl_produk')->result();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_nav', $dataUser);
		$this->load->view('pages/admin/product/add_produk', $dataproduk);
		$this->load->view('templates/admin_footer');
	}

	public function save()
	{
		$id = $this->session->userdata('id');
		$namaProduk = $this->input->post('namaProduk');
		$namaKategori = $this->input->post('namaKategori');
		$hargaProduk = $this->input->post('harga');
		$stokProduk = $this->input->post('stok');
		$beratProduk = $this->input->post('berat');
		$deskripsiProduk = $this->input->post('deskripsiProduk');

		$config['upload_path'] = './upload_produk/';
		$config['allowed_types'] = 'jpg|png|jpeg';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto_produk')) {
			$data_file = $this->upload->data();
			$dataInsert = array(
				'idProduk' => $id,
				'namaProduk' => $namaProduk,
				'idkat' => $namaKategori,
				'foto' => $data_file['file_name'],
				'harga' => $hargaProduk,
				'stok' => $stokProduk,
				'berat' => $beratProduk,
				'deskripsiProduk' => $deskripsiProduk
			);
			$this->Mcrud->insert_produk($dataInsert);
			$this->session->set_flashdata('berhasil', 'Produk Berhasil Ditambah');
			redirect('product');
		} else {
			redirect('product/save');
		}
	}

	public function getid($id)
	{
		$data['title'] = 'Form Edit Product';
		$dataWhere = array('idProduk' => $id);
		$dataproduk['produk'] = $this->Mcrud->get_by_id('tbl_produk', $dataWhere)->row_object();
		$dataUser['data']['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$dataUser['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_nav', $dataUser);
		$this->load->view('pages/admin/product/edit_produk', $dataproduk);
		$this->load->view('templates/admin_footer');
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$namaProduk = $this->input->post('namaProduk');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$berat = $this->input->post('berat');
		$deskripsiProduk = $this->input->post('deskripsiProduk');
		$namaKategori = $this->input->post('namaKategori');

		$config['upload_path'] = './upload_produk/';
		$config['allowed_types'] = 'jpg|png|jpeg';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto_produk')) {
			$data_file = $this->upload->data();
			$dataUpdate = array(
				'namaProduk' => $namaProduk,
				'foto' => $data_file['file_name'],
				'deskripsiProduk' => $deskripsiProduk,
				'stok' => $stok,
				'berat' => $berat,
				'harga' => $harga,
				'idkat' => $namaKategori
			);
			$this->Mcrud->update('tbl_produk', $dataUpdate, 'idProduk', $id);
			$this->session->set_flashdata('berhasil', 'Produk Berhasil Diubah');
			redirect('product');
		} else {
			$dataUpdate = array(
				'namaProduk' => $namaProduk,
				'deskripsiProduk' => $deskripsiProduk,
				'stok' => $stok,
				'harga' => $harga,
				'berat' => $berat,
				'idkat' => $namaKategori
			);
			$this->Mcrud->update('tbl_produk', $dataUpdate, 'idProduk', $id);
			$this->session->set_flashdata('berhasil', 'Produk Berhasil Diubah');
			redirect('product');
		}
	}


	public function hapus($id)
	{
		$this->Mcrud->delete('tbl_produk', $id, 'idProduk');
		redirect('product');
	}
}
