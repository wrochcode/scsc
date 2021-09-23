<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status')=="login"){
            redirect(base_url());
        }
    }
    
    public function index()
    {
        $data['title'] = "Login";
        // var_dump($title);
        $this->load->view('auth/header', $data);
        $this->load->view('auth/login');
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

        $dataUser = count($this->scscModel->getLogin($dataPenunjuk));
        // var_dump($dataUser);
        if($dataUser==1){
            $accountUser = $this->scscModel->getData("user",$dataPenunjuk);
            $accountUser = $accountUser[0]["role"];
            $accountSession = array(
                'email'=>$user,
                'role'=>$accountUser,
                'status'=>"login",
            );
            
            $this->session->set_userdata($accountSession);

            redirect('AkunSaya',$data);
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center">Your account not already exist, please checked your configurated email and password. Thank you</div>');
            redirect('Login');
        }
    }

    public function logout()
    {
        $array_items = array('status', 'email','role');
        $this->session->unset_userdata($array_items);
        // $oi1 =$this->session->userdata('status');
        // $oi2 =$this->session->userdata('email');
        // $oi3 =$this->session->userdata('role');
        // $this->session->unset_userdata($oi1);
        // $this->session->unset_userdata($oi2);
        // $this->session->unset_userdata($oi3);

        // $halo = "halo";
        // var_dump($halo);
        // $this->session->sess_destroy();
        redirect('login');
    }
}