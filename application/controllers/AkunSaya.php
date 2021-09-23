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
        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;

        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;
        
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