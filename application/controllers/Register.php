<?php
defined('BASEPATH') or exit('No direct script access allowed');


class register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') == "login" ){
            $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
            $tempVar = $tempVar[0]["role"];
            if($tempVar == '5'){
                redirect(base_url());
            }else{
                redirect('akunsaya');
            }
        }
    }
    
    public function index()
    {
        $data['title'] = "Register";
        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $this->load->view('auth/header', $data);
        $this->load->view('auth/top', $data);
        $this->load->view('auth/register', $data);
        $this->load->view('auth/footer');
    }

    public function register(){
        $email = $this->input->post('username');
        $dataPenunjuk = array('email'=>$email);

        $dataUser = count($this->scsc->getLogin($dataPenunjuk));

        if($dataUser>0){
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center">Your email has been linked an another account!</div>');
            redirect('register');
        }else{
            $pass = $this->input->post('password');
            $pass2 = $this->input->post('password2');
            if($pass == $pass2){
                $this->session->set_flashdata('message', '<div class="alert alert-success text-center">Your account has been created, please login for go in your account. Thank you</div>');
                $submit_data = array(	
                                'email' => $email,
                            	'role' => 5,
                                'password' => md5($pass));
                $this->scsc->registerUser($submit_data);
                redirect('login');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center">your password is not same, please checked your password again. Thank you</div>');
                redirect('register');
            }
        }
    }
}