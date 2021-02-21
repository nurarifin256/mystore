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

    public function hapus_supplier()
    {
        $kode_supplier = $this->input->post('kode_supplier');

        $this->Model_supplier->hapus($kode_supplier);
        $this->session->set_flashdata('flash', 'Dihapus');

        redirect('Admin/supplier');
    }

    public function tambah_supplier()
    {
        $data = [
            "nama_supplier" => $this->input->post('nama_supplier', true),
            "alamat"        => $this->input->post('alamat', true)
        ];

        $this->Model_supplier->tambahSupplier($data);
        $this->session->set_flashdata('flash', 'Ditambahkan');

        redirect('Admin/supplier');
    }

    public function ubah_supplier()
    {
        $kode_supplier = $this->input->post('kode_supplier');
        $data = [
            "nama_supplier" => $this->input->post('nama_supplier', true),
            "alamat" => $this->input->post('alamat', true),
        ];

        $this->Model_supplier->ubahSupplier($kode_supplier, $data);
        $this->session->set_flashdata('flash', 'Diubah');

        redirect('Admin/supplier');
    }
}
