<?php

class Admin extends CI_Controller
{
    public function supplier()
    {
        $data["judul"]      = "Daftar Supplier";
        $data["supplier"]   = $this->Model_supplier->getAllSupplier();
        // var_dump($data);
        // die();

        $this->load->view("templates/header", $data);
        $this->load->view("templates/navbar");
        $this->load->view("admin/supplier", $data);
        $this->load->view("templates/footer");
    }

    public function hapus_supplier($kode_supplier)
    {
        $this->Model_supplier->hapus($kode_supplier);
        redirect('Admin/supplier');
    }

    public function tambah_supplier()
    {
        redirect('Admin/supplier');

        $this->form_validation->set_rules('nama_supplier', 'nama_supplier', 'required', [
            'required' => 'Nama wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'Alamat wajib di isi'
        ]);
    }
}
