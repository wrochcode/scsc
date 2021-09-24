<?php
defined('BASEPATH') or exit('No direct script access allowed');


class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') == "login" ){
            redirect('akunsaya');
        }
    }
    
    public function index()
    {
        $data['title'] = "Login";
        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;


        
        // var_dump($tempVar);
        
        
        $this->load->view('auth/header', $data);
        $this->load->view('auth/top', $data);
        $this->load->view('auth/login', $data);
        $this->load->view('auth/footer');
    }

    public function login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        $dataPenunjuk = array(
            'email'=>$user,
            'password'=>md5($pass)
        );

        $dataUser = count($this->scsc->getLogin($dataPenunjuk));
        
        if($dataUser==1){
            $accountUser = $this->scsc->getData("user",$dataPenunjuk);
            // $accountUser = $accountUser[0]["role"];
            $accountSession = array(
                'email'=>$user,
                'status'=>'login'
            );
            
            
            $this->session->set_userdata($accountSession);

            redirect('akunsaya',$data);
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center">Your account not already exist, please checked your configurated email and password. Thank you</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        // $this->session->sess_destroy();
        $this->session->unset_userdata('status');
        redirect('login');
    }
}