<?php

class Model_barang extends CI_Model
{
    public function getAllBarang()
    {
        // $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('stok_barang', 'stok_barang.kode_barang = barang.kode_barang');
        $query = $this->db->get();
    }
}
