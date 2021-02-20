<?php

class Model_supplier extends CI_Model
{
    public function getAllSupplier()
    {
        return $this->db->get('supplier');
    }

    public function hapus($kode_supplier)
    {
        $this->db->where('kode_supplier', $kode_supplier);
        $this->db->delete('supplier');
        return true;
    }
}
