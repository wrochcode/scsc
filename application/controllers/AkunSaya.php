<?php
defined('BASEPATH') or exit('No direct script access allowed');


class AkunSaya extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status')!="login"){
            redirect('Login');
        }
    }

    public function index()
    {
        // var_dump($oi1);
        // var_dump($oi2);
        // var_dump($oi3);
        // $oi1 = $this->session->unset_userdata('status');
        // $oi2 = $this->session->unset_userdata('email');
        // $oi3 = $this->session->unset_userdata('role');
        // var_dump($oi1);
        // var_dump($oi2);
        // var_dump($oi3);
        // var_dump($this->session->userdata('status'));
        // var_dump($this->session->userdata('email'));
        // var_dump($this->session->userdata('role'));


        // var_dump($this->session->userdata('status'));

        $data['title'] = "Profile Account";

        $dataPenunjuk = array('email'=>$this->session->userdata('email'));
        $accountUser = $this->scscModel->getData("user",$dataPenunjuk);
        
        $data['email'] = $accountUser[0]["email"];
        $data['role'] = $this->session->userdata('role');
        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/home');
        $this->load->view('akun/sidebar');
        $this->load->view('akun/footer');


        // $this->load->view('auth/footer');
    }
}