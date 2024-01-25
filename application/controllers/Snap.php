<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-pwUmgQxvIPk6OhqsI8kbecRy', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
		$this->load->library('cart');

    }

    public function index()
    {
    	$dataUser['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/customer_header', $dataUser);
		$this->load->view('pages/customer/cart');
		$this->load->view('templates/customer_footer');
    }

	// public function spp(){
    // 	$this->load->view('pembayaran_spp');
	// }

    public function token()
    {
		$totalAmount = $this->input->post('totalAmount');
		$items = $this->input->post('items');
		// Initialize an empty array to store item details
		// $item_details = array();
		
		// Required
		$transaction_details = array(
		  'order_id' => rand(),
		  'gross_amount' => $totalAmount, // no decimal allowed for creditcard
		);

		// // Optional
		// foreach ($items as $item) {
		// 	// Create an array for each item
		// 	$item_details[] = array(
		// 		'id' => 'a' . uniqid(),  // You may want to generate a unique ID for each item
		// 		'price' => $totalAmount,
		// 		'quantity' => $item['qty'],
		// 		'name' => $item['name']
		// 	);
		// }

		// // Optional
		// // Initialize an empty array to store item details
		// $item_details = array();

		// Optional
		$billing_address = array(
		  'first_name'    => "Prithu",
		  'address'       => "Jl. Mangku Rambang, Menteng,",
		  'city'          => "Palangka Raya",
		  'postal_code'   => "174874",
		  'phone'         => "081122334455",
		  'country_code'  => 'IDN'
		);

		// Optional
		$shipping_address = array(
		  'first_name'    => "Obet",
		  'last_name'     => "Supriadi",
		  'address'       => "Manggis 90",
		  'city'          => "Jakarta",
		  'postal_code'   => "16601",
		  'phone'         => "08113366345",
		  'country_code'  => 'IDN'
		);

		// Optional
		$customer_details = array(
		  'first_name'    => "Andri",
		  'last_name'     => "Litani",
		  'email'         => "andri@litani.com",
		  'phone'         => "081122334455",
		  'billing_address'  => $billing_address,
		  'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 15
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            // 'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

	public function finish()
	{
		$result = json_decode($this->input->post('result_data'), true);
	
		// Check if 'bank' and 'va_number' are null, if so, set them to 'N/A'
		$bank = isset($result['va_numbers'][0]["bank"]) ? $result['va_numbers'][0]["bank"] : 'N/A';
		$vaNumber = isset($result['va_numbers'][0]["va_number"]) ? $result['va_numbers'][0]["va_number"] : 'N/A';
		$pdf = isset($result['pdf_url']) ? $result: 'N/A';
		

		$data = [
			'order_id' => $result['order_id'],
			'gross_amount' => $result['gross_amount'],
			'payment_type' => $result['payment_type'],
			'transaction_time' => $result['transaction_time'],
			'bank' => $bank,
			'va_number' => $vaNumber,
			'status_code' => $result['status_code'],
		];
	
		$simpan = $this->db->insert('tbl_laporan', $data);
	
		if ($simpan) {
			echo 'sukses';
		} else {
			echo 'gagal';
		}
	}
}
