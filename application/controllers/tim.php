<?php
defined('BASEPATH') or exit('No direct script access allowed');


class tim extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function index(){
        $data['title'] = "Tim SCSC";
        // var_dump();
        $dataPenunjuk = $this->session->userdata('email');
        
        if(isset($dataPenunjuk)):
            $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
            if($tempVar[0]["name"] != NULL):
                $sumVar = strlen($tempVar[0]["name"]);
                $stop=0;
                $hasil=$tempVar[0]["name"][1];
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
            $data['emailuser'] = $tempVar;
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

        $tempVar = $this->scsc->getAll("corefitur");
        $data['mainfitur'] = $tempVar;

        $tempVar = $this->scsc->getData("user",array('role'=>'1'));
        $data['role1'] = $tempVar;

        $tempVar = $this->scsc->getData("user",array('role'=>'2'));
        $data['role2'] = $tempVar;

        $tempVar = $this->scsc->getData("user",array('role'=>'3'));
        $data['role3'] = $tempVar;

        $tempVar = $this->scsc->getData("user",array('role'=>'4'));
        $data['role4'] = $tempVar;

        $tempVar = $this->scsc->getData("user",array('role'=>'5'));
        $data['role5'] = $tempVar;
        
        $tempVar = $this->scsc->getData("user",array('role'=>'6'));
        $data['role6'] = $tempVar;

        // $tempVar = $this->scsc->getFew("testimoni", "ASC", 3);
        // $data['testimoni'] = $tempVar;

        $data['link'] = "Tim SCSC";
        
        $data['active'] = 0;
        $data['dd'] = 2;
        $data['dda'] = 2;
        $this->load->view('home/header', $data);
        $this->load->view('home/top', $data);
        $this->load->view('home/tim', $data);
        $this->load->view('home/footer', $data);
    }
}