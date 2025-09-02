<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    public function index(){
        $data['karyawan'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_tampil', $data);
    }

    public function tambah(){
        $this->load->view('v_input');
    }

    public function tambah_aksi(){
        $nama       = $this->input->post('nama');
        $email      = $this->input->post('email');
        $departemen = $this->input->post('departemen');
        $posisi     = $this->input->post('posisi');
        $gaji       = $this->input->post('gaji');

        $data = array(
            'nama'       => $nama,
            'email'      => $email,
            'departemen' => $departemen,
            'posisi'     => $posisi,
            'gaji'       => $gaji
        );
        $this->m_data->input_data($data, 'karyawan');
        redirect('crud/index');
    }

    public function edit($id){
        $where = array('id' => $id);
        $data['karyawan'] = $this->m_data->edit_data($where,'karyawan')->result();
        $this->load->view('v_edit',$data);
    }

    public function update(){
        $id         = $this->input->post('id');
        $nama       = $this->input->post('nama');
        $email      = $this->input->post('email');
        $departemen = $this->input->post('departemen');
        $posisi     = $this->input->post('posisi');
        $gaji       = $this->input->post('gaji');

        $data = array(
            'nama'       => $nama,
            'email'      => $email,
            'departemen' => $departemen,
            'posisi'     => $posisi,
            'gaji'       => $gaji
        );

        $where = array('id' => $id);

        $this->m_data->update_data($where,$data,'karyawan');
        redirect('crud/index');
    }

    public function hapus($id){
        $where = array('id' => $id);
        $this->m_data->hapus_data($where,'karyawan');
        redirect('crud/index');
    }
}
