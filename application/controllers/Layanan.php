<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function index()
    {
        $this->load->view('layanan/services');
    }

    public function detail()
    {
        $this->load->view('layanan/details');
    }

    public function shop()
    {
        $this->load->view('layanan/shop');
    }
}