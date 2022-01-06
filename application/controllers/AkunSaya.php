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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;
        
        
        $data['active'] = "Dashboard";

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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;
        
        
        $data['active'] = "Pemberitahuan";

        // var_dump($data['header']);

        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/pemberitahuan');
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }
    

    public function akun()
    {
        $data['title'] = "Akun";

        $dataPenunjuk = $this->session->userdata('email');
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        $data['user'] = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;
        
        
        $data['active'] = $data['title'];

        // var_dump($data['header']);

        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/akun', $data);
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }
    
    public function teknisi()
    {
        $data['title'] = "Teknisi";

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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        $tempVar = $this->scsc->getData("user",array('role'=>5));
        $data['teknisi'] = $tempVar;
        $data['jumlahtotal'] = count($tempVar);

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;
        
        
        $data['active'] = $data['title'];

        // var_dump($data['header']);

        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/teknisi');
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }
    
    public function admin()
    {
        $data['title'] = "Admin";

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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        $tempVar = $this->scsc->getData("user",array('role'=>6));
        $data['admin'] = $tempVar;
        $data['total1'] = count($tempVar);

        $tempVar = $this->scsc->getData("user",array('role'=>4));
        $data['adminarticle'] = $tempVar;
        $data['jumlahtotal'] = count($tempVar) + $data['total1'];

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;
        
        
        $data['active'] = $data['title'];

        // var_dump($data['header']);

        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/admin');
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }
    
    public function service()
    {
        $data['title'] = "Service";

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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;
        
        $tempVar = $this->scsc->getData("service",array('status'=>1));
        $data['services'] = $tempVar;
        $data['jumlahtotal'] = count($tempVar);
        
        $data['active'] = $data['title'];

        // var_dump($data['header']);

        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/service');
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }
    
    public function item()
    {
        $data['title'] = "Item";

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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;

        $tempVar = $this->scsc->getData("produk",array('status'=>1));
        $data['products'] = $tempVar;
        $data['jumlahtotal'] = count($tempVar);
        
        $data['active'] = $data['title'];

        // var_dump($data['header']);

        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/item');
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }

    public function artikel()
    {
        $data['title'] = "Artikel";

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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;
        
        $tempVar = $this->scsc->getData("artikel",array('status'=>1));
        $data['articles'] = $tempVar;
        
        $jumlah_barang = count($data['articles']);
        $data['countarticles'] = $jumlah_barang;
        // echo $data['countarticles'];

        $tempVar = $this->scsc->getAll("artikel_category");
        $data['articlecategories'] = $tempVar;
        $jumlah_barang = count($data['articlecategories']);
        $data['countarticlecategories'] = $jumlah_barang;

        $data['active'] = $data['title'];

        // var_dump($data['header']);

        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/artikel', $data);
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }

    public function tambahartikel()
    {
        $data['title'] = "Article";

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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;
        
        // $tempVar = $this->scsc->getData("artikel",array('status'=>1));
        // $data['articles'] = $tempVar;
        
        // $jumlah_barang = count($data['articles']);
        // $data['countarticles'] = $jumlah_barang;
        // echo $data['countarticles'];

        // $tempVar = $this->scsc->getAll("artikel_category");
        // $data['articlecategories'] = $tempVar;
        // $jumlah_barang = count($data['articlecategories']);
        // $data['countarticlecategories'] = $jumlah_barang;

        $data['active'] = $data['title'];

        // var_dump($data['header']);

        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/tambahartikel', $data);
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }
    
    public function invoice()
    {
        $data['title'] = "Invoice";

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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;

        $tempVar = $this->scsc->getData("invoiceproduk",array('kategori' => 'keranjang'));
        $data['invoices'] = $tempVar;
        $data['jumlahtotal'] = count($tempVar);
        
        $data['active'] = $data['title'];

        // var_dump($data['header']);

        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/invoice', $data);
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }

    public function transaksi()
    {
        $data['title'] = "Transaksi";

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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;
        
        $tempVar = $this->scsc->getData("invoiceproduk",array('kategori' => 'transaksi'));
        $data['invoices'] = $tempVar;
        $data['jumlahtotal'] = count($tempVar);
        
        $data['active'] = $data['title'];

        // var_dump($data['header']);

        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/transaksi', $data);
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }

    public function voucher()
    {
        $data['title'] = "Voucher";

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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;
        
        
        $data['active'] = $data['title'];

        // var_dump($data['header']);

        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/home');
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }

    public function quiz()
    {
        $data['title'] = "Quiz";

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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;
        
        
        $data['active'] = $data['title'];

        // var_dump($data['header']);

        $this->load->view('akun/header', $data);
        $this->load->view('akun/top', $data);
        $this->load->view('akun/home');
        $this->load->view('akun/sidebar', $data);
        $this->load->view('akun/footer');
    }

    public function sarandankritik()
    {
        $data['title'] = "Saran dan Kritik";

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
        $tempVar = $this->scsc->getData("user",array('email'=>$dataPenunjuk));
        if($tempVar[0]["photo"] != NULL):
            $tempVar = $tempVar[0]["photo"];
        else:
            $tempVar = "emptyphoto.png";
        endif;
        $data['photo'] = $tempVar;
        $tempVar = $this->scsc->getData("user",array('email'=>$this->session->userdata('email')));
        $role = $tempVar[0]['role'];
        // var_dump($role);

        $tempVar = $this->scsc->getData("profil",array('name'=>'logo'));
        $tempVar = $tempVar[0]["value"];
        $data['logo'] = $tempVar;
        
        $tempVar = $this->scsc->getData("profil",array('name'=>'singkatan'));
        $tempVar = $tempVar[0]["value"];
        $data['singkatan'] = $tempVar;

        $tempVar = $this->scsc->getData("mainsidebar",array('status'=>1, 'role'=>$role));
        $data['header'] = $tempVar;

        // $tempVar = $this->scsc->getData("sidebarcategory",array('role'=>$role));
        $tempVar = $this->scsc->getAll("sidebarcategory");
        $data['menu'] = $tempVar;
        // var_dump($data['menu']);

        $tempVar = $this->scsc->getData("sidebar",array('status'=>1));
        $data['submenu'] = $tempVar;
        
        
        $data['active'] = $data['title'];

        // var_dump($data['header']);

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