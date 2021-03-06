<?php
defined('BASEPATH') or exit('No direct script access allowed');

class keranjang extends CI_Controller
{
    public function index()
    {
        $data['title'] = "SCSC";
        $dataPenunjuk = $this->session->userdata('email');
        
        if(isset($dataPenunjuk)):
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
            $data['emailuser'] = $tempVar;
        endif;

        $tempVar = $this->scsc->getAll("homemenu");
        $data['menu'] = $tempVar;
        if(isset($dataPenunjuk)):
            $data['menu'][count($data['menu'])-1]['name']=$data['emailuser'];
        endif;
        
        
        $tempVar = $this->scsc->getAll("homemenuabout");
        $data['submenu'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'tentang'));
        $tempVar = $tempVar[0]["value"];
        $data['tentang'] = $tempVar;

        $tempVar = $this->scsc->getData("profil",array('name'=>'slogan'));
        $tempVar = $tempVar[0]["value"];
        $data['slogan'] = $tempVar;

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
        
        $tempVar = $this->scsc->getData("service",array('status'=>'1'));
        $data['services'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'adminkonfirmasi'));
        $tempVar = $tempVar[0]["value"];
        $data['adminkonfirmasi'] = $tempVar;

        if($this->session->userdata('status') == 'login'):
            $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
            $namauser = $tempVar[0]['name'];
            $tempVar = $this->scsc->getData("invoiceproduk",array('name'=>$namauser, 'kategori' => 'keranjang'));
            $data['keranjang'] = $tempVar;
        endif;

        // var_dump($data['keranjang']);
        
        // $tempVar = $this->scsc->getFew("testimoni", "ASC", 3);
        // $data['testimoni'] = $tempVar;
        
        $data['link'] = "Keranjangku";
        $data['active'] = 6;
        $data['dd'] = 2;
        $data['dda'] = 0;

        $this->load->view('home/header', $data);
        $this->load->view('home/top', $data);
        if($this->session->userdata('status') == 'login'):
            $this->load->view('home/keranjang');
        else:
            $this->load->view('home/belumlogin');
        endif;
        $this->load->view('home/footer', $data);
    }

    public function makeinvoice()
    {
        $dataPenunjuk = $this->session->userdata('email');
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        $user = $tempVar[0]['name'];
        $address = $tempVar[0]['name'];
        // var_dump($user);
        $jumlah = $this->input->post('jumlah');
        $catatan = $this->input->post('catatan');
        $link = $this->input->post('link');
        $tempVar = $this->scsc->getData("produk",array('link'=>$link));
        $produk = $tempVar[0]['name'];
        $harga = $tempVar[0]['price'];
        $photo = $tempVar[0]['photo'];
        $harga= $harga * $jumlah;
        $tempVar = $tempVar[0]['supply'];
        // var_dump($jumlah);
        if($jumlah>$tempVar):
            // echo 'haii';
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center">Stok orderan terbatas, mohon kurangi jumlah pesanan anda</div>');
            redirect('Shop/detail/'.$link);
        else:
            $status = "Belum dikonfirmasi";
            if($catatan == NULL):
                $catatan = "-";
            endif;
            $submit_data = array(
                'product' => $produk,
                'name' => $user,
                'photo' => $photo,
                'address' => $address,
                'jumlah' => $jumlah,
                'catatan' => $catatan,
                'kategori' => "keranjang",
                'status' => $status,
                'kurir' => " ",
                'price' => $harga);
            $this->scsc->inputData($submit_data, "invoiceproduk");
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center">Pesanan anda Sudah masuk keranjang, silahkan lakukan pembayaran dan jangan lupa konfirmai ke Admin ya..</div>');
            redirect('Shop/detail/'.$link);
        endif;
    }
}
