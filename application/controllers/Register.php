<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Register extends CI_Controller
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
        $data['title'] = "Register";
        $this->load->view('auth/header', $data);
        $this->load->view('auth/register');
        $this->load->view('auth/footer');
    }

    public function register()
    {
        $email = $this->input->post('username');
        $dataPenunjuk = array('email'=>$email);

        $dataUser = count($this->scscModel->getLogin($dataPenunjuk));
        // var_dump($dataPenunjuk);
        // $email = $dataPenunjuk;
        if($dataUser>0){
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center">Your email has been linked an another account!</div>');
            redirect('Register');
        }else{
            // $user = $this->input->post('username');
            // $gender = $this->input->post('gender');
            // $address = $this->input->post('address');
            $pass = $this->input->post('password');
            $pass2 = $this->input->post('password2');
            if($pass == $pass2)
            {
                $this->session->set_flashdata('message', '<div class="alert alert-success text-center">Your account has been created, please login for go in your account. Thank you</div>');
                $submit_data = array(	'email' => $email,
                                // 'name' => $user,
                            	// 'gender' => $gender,
                            	// 'address' => $address,
                            	'role' => 2,
                                'password' => md5($pass));
                $this->scscModel->registerUser($submit_data);
                redirect('Login');
            }
            else
            {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center">your password is not same, please checked your password again. Thank you</div>');
                redirect('Register');
            }
            
        }
    }
}