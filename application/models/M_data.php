<?php
class M_data extends CI_Model{

    // FUNGSI CRUD

    // fungsi untuk mengambil data dari database
    public function get_data($table){
        return $this->db->get($table);
    }

    // fungsi untuk menginput data ke database
    public function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    // fungsi untuk edit data 
}
