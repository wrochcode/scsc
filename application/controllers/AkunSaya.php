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
        // var_dump();

        $dataPenunjuk = $this->session->userdata('email');
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        // $tempVar = $tempVar[0]["email"];
        if($tempVar[0]["name"] != NULL):
            $tempVar = $tempVar[0]["name"];
        else:
            $tempVar = $tempVar[0]["email"];
        endif;
        $data['email'] = $tempVar;
        // var_dump($data['email']);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1));
        // $tempVar = $tempVar[0]["value"];
        $data['header'] = $tempVar;
        // var_dump($data['header']);

        $tempVar = $this->scsc->getAll("sidebarcategory");
        // $tempVar = $tempVar[0]["value"];
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        // $tempVar = $tempVar[0]["value"];
        $data['submenu'] = $tempVar;
        
        // $data['email'] = $this->session->userdata('email');
        $data['role'] = $this->session->userdata('role');
        $data['active'] = 1;
        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/home');
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }
    
    public function dashboard()
    {
        redirect('akunsaya');
    }
    
    public function pemberitahuan()
    {
        $data['title'] = "Pemberitahuan";
        // var_dump();

        $dataPenunjuk = array('email'=>$this->session->userdata('email'));
        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;

        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1));
        // $tempVar = $tempVar[0]["value"];
        $data['header'] = $tempVar;
        // var_dump($data['header']);
        
        $tempVar = $this->scsc->getAll("sidebarcategory");
        // $tempVar = $tempVar[0]["value"];
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);
        
        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        // $tempVar = $tempVar[0]["value"];
        $data['submenu'] = $tempVar;
        
        $data['email'] = $this->session->userdata('status');
        $data['role'] = $this->session->userdata('role');
        $data['active'] = 2;

        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/home');
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }
    
    public function logout()
    {
        // $this->session->sess_destroy();
        $this->session->unset_userdata('status');
        redirect('login');
    }
}