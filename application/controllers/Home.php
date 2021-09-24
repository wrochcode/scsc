<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        $data['title'] = "SCSC";
        // var_dump();

        $tempVar = $this->scsc->getAll("homemenu");
        $data['menu'] = $tempVar;
        
        $tempVar = $this->scsc->getAll("homemenuabout");
        $data['submenu'] = $tempVar;

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'email'));
        $tempVar = $tempVar[0]["value"];
        $data['email'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'alamat'));
        $tempVar = $tempVar[0]["value"];
        $data['alamat'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'telp'));
        $tempVar = $tempVar[0]["value"];
        $data['telp'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'twitter'));
        $tempVar = $tempVar[0]["value"];
        $data['twitter'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'facebook'));
        $tempVar = $tempVar[0]["value"];
        $data['facebook'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'instagram'));
        $tempVar = $tempVar[0]["value"];
        $data['instagram'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'skype'));
        $tempVar = $tempVar[0]["value"];
        $data['skype'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'linkedin'));
        $tempVar = $tempVar[0]["value"];
        $data['linkedin'] = $tempVar;
        
        $data['active'] = 3;
        $data['dd'] = 2;
        $data['dda'] = 2;

        $this->load->view('home/header', $data);
        $this->load->view('home/top', $data);
        $this->load->view('home/index', $data);
        $this->load->view('home/footer', $data);
    }
}
