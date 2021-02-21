<?php

class Barang extends CI_Controller
{
    public function index()
    {
        $data["judul"]      = "Daftar Barang";
        $data["barang"]     = $this->Model_barang->getAllBarang();

        $this->load->view("templates/header", $data);
        $this->load->view("templates/navbar");
        $this->load->view("admin/barang", $data);
        $this->load->view("templates/footer");
    }
}
