<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
		// $this->load->model('Mtransaksi');
		$this->load->helper('file');
		$this->load->library('cart');
	}


	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$dataProduk['produk'] = $this->Mcrud->get_all_data('tbl_produk')->result();
		$dataProduk['produk_terbaru'] = $this->Mcrud->get_all_produk_terbaru()->result();
		// $dataProduk['testimoni'] = $this->Mtransaksi->get_all_data('tbl_testimoni')->result();
		$this->load->view('templates/customer_header', $data);
		$this->load->view('pages/customer/home', $dataProduk);
		$this->load->view('templates/customer_footer');
	}

	public function all_product()
	{
		$data['title'] = 'Product';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$dataProduk['produk'] = $this->Mcrud->get_all_data('tbl_produk')->result();
		$this->load->view('templates/customer_header', $data);
		$this->load->view('pages/customer/all_product', $dataProduk);
		$this->load->view('templates/customer_footer');
	}

	public function new_arrival()
	{
		$data['title'] = 'Product';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$dataProduk['produk'] = $this->Mcrud->get_all_data('tbl_produk')->result();
		$dataProduk['produk_terbaru'] = $this->Mcrud->get_all_produk_terbaru()->result();
		$this->load->view('templates/customer_header', $data);
		$this->load->view('pages/customer/new_product', $dataProduk);
		$this->load->view('templates/customer_footer');
	}

	public function Categories_women()
	{
		$data['title'] = 'Categories';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$dataProduk['women'] = $this->Mcrud->get_kategori_women()->result();
		$this->load->view('templates/customer_header', $data);
		$this->load->view('pages/customer/women', $dataProduk);
		$this->load->view('templates/customer_footer');
	}

	public function Categories_men()
	{
		$data['title'] = 'Categories';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$dataProduk['men'] = $this->Mcrud->get_kategori_men()->result();
		$this->load->view('templates/customer_header', $data);
		$this->load->view('pages/customer/men', $dataProduk);
		$this->load->view('templates/customer_footer');
	}

	public function Categories_accesories()
	{
		$data['title'] = 'Categories';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$dataProduk['accesories'] = $this->Mcrud->get_kategori_accesories()->result();
		$this->load->view('templates/customer_header', $data);
		$this->load->view('pages/customer/accesories', $dataProduk);
		$this->load->view('templates/customer_footer');
	}

		public function details($idProduk)
	{
		$dataUser['title'] = 'Detail Product';
		$dataproduk['kategori'] = $this->Mcrud->get_all_kategori()->result();
		$dataproduk['produk'] = $this->Mcrud->getid_produk($idProduk)->row_object();
		$dataproduk['dproduk'] = $this->Mcrud->getid_dproduk($idProduk)->row_object();
		$dataUser['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/customer_header', $dataUser);
		$this->load->view('pages/customer/details_produk', $dataproduk);
		$this->load->view('templates/customer_footer');
	}

}



