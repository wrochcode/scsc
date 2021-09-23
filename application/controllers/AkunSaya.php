<?php
defined('BASEPATH') or exit('No direct script access allowed');


class akunsaya extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != 'login'){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = "Profile Account";

        $dataPenunjuk = array('email'=>$this->session->userdata('email'));
        $accountUser = $this->scsc->getData("user",$dataPenunjuk);
        
        // $data['email'] = $accountUser[0]["email"];
        $data['email'] = $this->session->userdata('status');
        $data['role'] = $this->session->userdata('role');
        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/home');
        $this->load->view('akun/sidebar');
        $this->load->view('akun/footer');
    }

    public function logout()
    {
        // $this->session->sess_destroy();
        $this->session->unset_userdata('status');
        redirect('login');
    }
}