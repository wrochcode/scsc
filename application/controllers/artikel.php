<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function index()
    {
        $data['title'] = "SCSC - Artikel";
        // var_dump();
        $dataPenunjuk = $this->session->userdata('email');
        if($dataPenunjuk!=null):
            $value=1;
            $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
            if($tempVar[0]["name"] != NULL):
                $tempVar = $tempVar[0]["name"];
            else:
                $tempVar = $tempVar[0]["email"];
            endif;
            $data['emailuser'] = $tempVar;
            // var_dump($data['emailuser']);
        endif;

        $tempVar = $this->scsc->getAll("homemenu");
        $data['menu'] = $tempVar;
        if(isset($dataPenunjuk)):
            $data['menu'][count($data['menu'])-1]['name']=$data['emailuser'];
            // echo $data['menu'][5]['value'];
        endif;
        
        
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

        $tempVar = $this->scsc->getData("artikel",array('status'=>'1'));
        $data['articles'] = $tempVar;

        $tempVar = $this->scsc->getAll("artikel_category");
        $data['categories'] = $tempVar;

        $tempVar = $this->scsc->getData("service",array('status'=>'1'));
        // $tempVar = $tempVar[0]["value"];
        $data['services'] = $tempVar;
        
        $data['active'] = 5;
        $data['dd'] = 2;
        $data['dda'] = 0;

        $this->load->view('home/header', $data);
        $this->load->view('home/top', $data);
        $this->load->view('layanan/blog', $data);
        $this->load->view('home/footer', $data);
    }

    public function detail($detail)
    {
        $data['title'] = "SCSC - Artikel - Detail";
        // var_dump();
        $dataPenunjuk = $this->session->userdata('email');
        if($dataPenunjuk!=null):
            $value=1;
            $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
            if($tempVar[0]["name"] != NULL):
                $tempVar = $tempVar[0]["name"];
            else:
                $tempVar = $tempVar[0]["email"];
            endif;
            $data['emailuser'] = $tempVar;
            // var_dump($data['emailuser']);
        endif;

        $tempVar = $this->scsc->getAll("homemenu");
        $data['menu'] = $tempVar;
        if(isset($dataPenunjuk)):
            $data['menu'][count($data['menu'])-1]['name']=$data['emailuser'];
            // echo $data['menu'][5]['value'];
        endif;
        
        
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

        $tempVar = $this->scsc->getData("artikel",array('slug'=>$detail));
        $data['components'] = $tempVar;
        // var_dump($data['components']);

        $tempVar = $this->scsc->getAll("artikel_category");
        $data['categories'] = $tempVar;

        $tempVar = $this->scsc->getData("service",array('status'=>'1'));
        // $tempVar = $tempVar[0]["value"];
        $data['services'] = $tempVar;
        
        $data['link'] = "Artikel";
        $data['active'] = 3;
        $data['dd'] = 2;
        $data['dda'] = 3;

        $this->load->view('home/header', $data);
        $this->load->view('home/top', $data);
        $this->load->view('layanan/blog-single', $data);
        $this->load->view('home/footer', $data);
    }

    
}