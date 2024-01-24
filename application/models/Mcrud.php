<?php

class Mcrud extends CI_Model
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

	public function insert_produk($data)
	{
		$this->db->insert('tbl_produk', $data);
	}

	public function update($tabel, $data, $pk, $id)
	{
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function get_all_kategori()
	{
		return $this->db->get('tbl_kategori');
	}

	public function getid_produk($idProduk)
	{
		$q = $this->db->get_where('tbl_produk', array('idProduk' => $idProduk));
		return $q;
	}

	public function get_produk_by_id($idProduk)
	{
		return $this->db->get_where('tbl_produk', array('idProduk' => $idProduk));
	}


	public function getid_dproduk($idProduk)
	{
		$q = $this->db->query("SELECT namaProduk, foto, idProduk FROM tbl_produk JOIN tbl_kategori ON tbl_produk.idkat=tbl_kategori.idkat WHERE idProduk=$idProduk");
		return $q;
	}

	public function get_all_produk_terbaru()
	{
		$this->db->order_by('idProduk', 'DESC');
		$this->db->limit(6);
		return $this->db->get('tbl_produk');
	}

	public function get_by_id($tabel, $id)
	{
		return $this->db->get_where($tabel, $id);
	}

	public function delete($tabel, $id, $pk)
	{
		$this->db->where($pk, $id);
		$this->db->delete($tabel);
	}

	public function get_kategori()
	{
		$q = $this->db->query("SELECT namakat AS namaKATEGORI , idProduk, namaProduk, foto, deskripsiProduk, stok, berat, harga FROM tbl_produk JOIN tbl_kategori ON tbl_produk.idkat = tbl_kategori.idkat");
		return $q;
	}

	public function get_kategori_women()
	{
		$q = $this->db->query("SELECT * FROM tbl_produk where idkat=7");
		return $q;
	}

	public function get_kategori_men()
	{
		$q = $this->db->query("SELECT * FROM tbl_produk where idkat=5");
		return $q;
	}

	public function get_kategori_accesories()
	{
		$q = $this->db->query("SELECT * FROM tbl_produk where idkat=6");
		return $q;
	}

	public function get_transaksi()
	{
		$q = $this->db->query("SELECT namaProduk, foto, harga FROM tbl_produk JOIN tbl_transaksi ON tbl_transaksi.idProduk = tbl_produk.idProduk");
		return $q;
	}
	
	public function getMidtransData() {
        return $this->db->get('tbl_laporan')->result();
    }

	
}
