<?php

class Mtransaksi extends CI_Model
{

	public function get_all_data($tabel)
	{
		$q = $this->db->get($tabel);
		return $q;
	}


	public function insert($tabel, $data)
	{
		$this->db->insert($tabel, $data);
	}

	public function find($idProduk)
	{
		$result = $this->db->where('idProduk', $idProduk)
			->limit(1)
			->get('tbl_produk');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}

	public function detail_brg($id_brg)
	{
		$result = $this->db->where('idProduk', $id_brg)->get('tbl_produk');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	// Mtransaksi model
	public function reduceStock($idProduk, $qty)
	{
    $product = $this->find($idProduk);

		if ($product && $product->stok >= $qty) {
			$this->db->where('idProduk', $idProduk);
			$this->db->set('stok', 'stok - ' . $qty, false);
			$this->db->update('tbl_produk'); // Replace with your actual product table name
			return true;
		} else {
			return false; // Stock reduction failed
    	}
	}

}
