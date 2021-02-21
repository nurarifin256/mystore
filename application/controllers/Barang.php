<?php

class Barang extends CI_Controller
{
    public function index()
    {
        $data["judul"]      = "Daftar Supplier";
        // $data["barang"]     =

        $this->load->view("templates/header", $data);
        $this->load->view("templates/navbar");
        $this->load->view("admin/barang");
        $this->load->view("templates/footer");
    }
}
