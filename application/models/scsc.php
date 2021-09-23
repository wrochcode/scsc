<?php
defined('BASEPATH') or exit('No direct script access allowed');

class scsc extends CI_Model
{
    public function getLogin($data) //dapat session
    {
        // return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $res = $this->db->get_where('user', $data);
        return $res->result_array();
    }

    public function registerUser($data)
    {
        $res = $this->db->insert('user', $data);
        return $res;
    }

    public function getData($dataBase, $where)
    {
        $res = $this->db->get_where($dataBase, $where);
        return $res->result_array();
    }

    public function getAll($tabel)
    {
        $aban = $this->db->get($tabel);
        return $aban->result_array();
    }
}
