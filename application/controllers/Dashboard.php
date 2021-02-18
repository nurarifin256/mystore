<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['judul']  = 'Landing Page';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }
}
