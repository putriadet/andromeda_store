<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mtransaksi');
		// $this->load->model('Minvoice');
		$this->load->model('Mcrud');
		$this->load->library('cart');
	}

	public $api_key = "92fff8d4e96c155ca88e225b3f9d1adc";

	public function index()
	{
		 // Fetching cities from Rajaongkir API
		 $curlCities = curl_init();
		 curl_setopt_array($curlCities, array(
			 CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
			 CURLOPT_RETURNTRANSFER => true,
			 CURLOPT_ENCODING => "",
			 CURLOPT_MAXREDIRS => 10,
			 CURLOPT_TIMEOUT => 30,
			 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			 CURLOPT_CUSTOMREQUEST => "GET",
			 CURLOPT_HTTPHEADER => array(
				 "key: ".$this->api_key,
			 ),
		 ));
		 
		 $responseCities = curl_exec($curlCities);
		 $errCities = curl_error($curlCities);
		 curl_close($curlCities);
 
		 if ($errCities) {
			 echo "cURL Error #:" . $errCities;
			 // $data['kota'] = array('error'=>true);
		 } else {
			 $data['kota'] = json_decode($responseCities);
		 }
 
		 // Fetching provinces from Rajaongkir API
		 $curlProvinces = curl_init();
		 curl_setopt_array($curlProvinces, array(
			 CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
			 CURLOPT_RETURNTRANSFER => true,
			 CURLOPT_ENCODING => "",
			 CURLOPT_MAXREDIRS => 10,
			 CURLOPT_TIMEOUT => 30,
			 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			 CURLOPT_CUSTOMREQUEST => "GET",
			 CURLOPT_HTTPHEADER => array(
				 "key: ".$this->api_key,
			 ),
		 ));
		 
		 $responseProvinces = curl_exec($curlProvinces);
		 $errProvinces = curl_error($curlProvinces);
		 curl_close($curlProvinces);
 
		 if ($errProvinces) {
			 echo "cURL Error #:" . $errProvinces;
			 // $dataProvinsi['provinsi'] = array('error'=>true);
		 } else {
			 $data['provinsi'] = json_decode($responseProvinces);
		 }
 
		// Check if shipping cost is set in session
		$data['shippingCost'] = isset($_SESSION['shipping_cost']) ? $_SESSION['shipping_cost'] : null;

		$dataUser['title'] = 'Detail Keranjang';
		$dataUser['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/customer_header', $dataUser);
		$this->load->view('pages/customer/cart', $data);
		$this->load->view('templates/customer_footer');
	}

	
	public function checkShippingCost(){
		
		// $fromCity = $this->input->post('kotaAsal');
		$toCity = $this->input->post('kotaTujuan');

		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "origin=326"."&destination=".$toCity."&weight=1000"."&courier=jne",
		CURLOPT_HTTPHEADER => array(
			"content-type: application/x-www-form-urlencoded",
			"key: ".$this->api_key,
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		// echo "cURL Error #:" . $err;
		$data['hasil'] = array('error' => true);
		} else {
		// echo $response;
		$data['hasil'] = json_decode($response);
		// Store shipping cost in session
        $_SESSION['shipping_cost'] = $data['hasil']->rajaongkir->results[0]->costs[0]->cost[0]->value;
		}

		$dataUser['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$dataUser['title'] = 'Detail Keranjang';
		$this->load->view('templates/customer_header', $dataUser);
		$this->load->view('pages/customer/cart', $data);
		$this->load->view('templates/customer_footer');
	}


	public function add_to_cart($idProduk)
{
    // Login Session
    if (!$this->session->userdata('email')) {
        redirect('auth');
    }

    $produk = $this->Mtransaksi->find($idProduk);
    if ($produk) {
        if ($produk->stok > 0) {
            $data = array(
                'id'      => $produk->idProduk,
                'qty'     => 1,
                'price'   => $produk->harga,
                'name'    => $produk->namaProduk,
                'gambar' => array('gambar' => $produk->foto)
            );

            $this->cart->insert($data);
            $this->Mtransaksi->reduceStock($idProduk, 1);
            redirect('Transaksi');
        } else {
            // Stock is 0, show a warning message
            $this->session->set_flashdata('stock_warning', 'This product is out of stock!');
            redirect('Transaksi');
        }
    } else {
        redirect('Transaksi');
    }
}


	public function delete_cart()
	{
		$this->cart->destroy();
		redirect('transaksi');
	}

}
