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

        $dataPenunjuk = $this->session->userdata('email');
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["name"] != NULL):
            $sumVar = strlen($tempVar[0]["name"]);
            $stop = 0;
            $hasil = $sumVar;
            for($i=0;$i<$sumVar;$i++):
                // echo $tempVar[0]["name"][$i];
                if($tempVar[0]["name"][$i] == " " && $stop == 0):
                    $stop = 1;
                    $hasil = $i;
                endif;

            endfor;
            $stop = $tempVar[0]["name"][0];
            for($i=1;$i<$hasil;$i++):
                $stop = $stop.$tempVar[0]["name"][$i];
            endfor;
            // $tempVar = $tempVar[0]["name"];
            $tempVar = $stop;
        else:
            $tempVar = $tempVar[0]["email"];
        endif;
        $data['email'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>7));
        $data['header'] = $tempVar;

        $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>7));
        $data['menu'] = $tempVar;

        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;
        
        
        $data['active'] = 1;

        // var_dump($data['header']);

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
        $data['header'] = $tempVar;
        
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        
        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
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
        $this->session->unset_userdata('status');
        redirect('login');
    }
}