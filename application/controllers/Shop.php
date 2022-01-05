<?php
defined('BASEPATH') or exit('No direct script access allowed');

class shop extends CI_Controller
{

    public function index()
    {
        // home data
        $data['title'] = "SCSC - Service";
        // var_dump();
        $dataPenunjuk = $this->session->userdata('email');
        
        if(isset($dataPenunjuk)):
            $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
            if($tempVar[0]["name"] != NULL):
                $sumVar = strlen($tempVar[0]["name"]);
                $stop=0;
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
            $data['emailuser'] = $tempVar;
        endif;
        
        $tempVar = $this->scsc->getAll("homemenu");
        $data['menu'] = $tempVar;
        if(isset($dataPenunjuk)):
            $data['menu'][count($data['menu'])-1]['name']=$data['emailuser'];
            // echo $data['menu'][5]['value'];
        endif;

        $tempVar = $this->scsc->getAll("homemenuabout");
        $data['submenu'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'tentang'));
        $tempVar = $tempVar[0]["value"];
        $data['tentang'] = $tempVar;

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
        // end home data

        //show data
        $tempVar = $this->scsc->getData("produk",array('status'=>1));
        $data['products'] = $tempVar;
        
        $tempVar = $this->scsc->getData("produkcategory",array('status'=>1));
        $data['produkcategory'] = $tempVar;

        $tempVar = $this->scsc->getData("service",array('status'=>'1'));
        $data['services'] = $tempVar;
        // var_dump($data['produk']);
        // end show data
        
        $data['link'] = "Shop";
        $data['active'] = 4;
        $data['dd'] = 2;
        $data['dda'] = 0;

        $this->load->view('home/header', $data);
        $this->load->view('home/top', $data);
        $this->load->view('layanan/shop',$data);
        $this->load->view('home/footer', $data);
    }

    public function detail($detail){
        // home data
        $data['title'] = "SCSC - Shop - Detail";
        // var_dump();
        $dataPenunjuk = $this->session->userdata('email');
        
        if(isset($dataPenunjuk)):
            $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
            if($tempVar[0]["name"] != NULL):
                $sumVar = strlen($tempVar[0]["name"]);
                $stop=0;
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
            $data['emailuser'] = $tempVar;
        endif;
        
        $tempVar = $this->scsc->getAll("homemenu");
        $data['menu'] = $tempVar;
        if(isset($dataPenunjuk)):
            $data['menu'][count($data['menu'])-1]['name']=$data['emailuser'];
            // echo $data['menu'][5]['value'];
        endif;

        $tempVar = $this->scsc->getAll("homemenuabout");
        $data['submenu'] = $tempVar;

        $tempVar = $this->scsc->getData("profil",array('name'=>'tentang'));
        $tempVar = $tempVar[0]["value"];
        $data['tentang'] = $tempVar;

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

        $tempVar = $this->scsc->getData("service",array('status'=>'1'));
        $data['services'] = $tempVar;
        
        // echo $detail;
        $tempVar = $this->scsc->getData("produk",array('link'=>$detail));
        if($tempVar[0]['condition'] == 1):
            $tempVar[0]['condition'] = "Baru";
        else:
            $tempVar[0]['condition'] = "Bekas";
        endif;
        $data['detail'] = $tempVar;
        // var_dump($data['detail']);

        // end home data


        
        $data['link'] = "Shop";
        $data['active'] = 4;
        $data['dd'] = 2;
        $data['dda'] = 0;

        $this->load->view('home/header', $data);
        $this->load->view('home/top', $data);
        $this->load->view('layanan/details', $data);
        $this->load->view('home/footer', $data);
    }

}