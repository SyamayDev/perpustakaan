<?php
defined('BASEPATH') or exit('No direct script access allowed');

class petugas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

        if($this->session->userdata('status') != "petugas_login"){
            redirect(base_url('login?alert=belum_login'));
        }
    }

    public function index()
    {
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_index');
        $this->load->view('petugas/v_footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login?alert=logout'));
    }

    public function ganti_password()
    {
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_ganti_password');
        $this->load->view('petugas/v_footer');
    }

    public function ganti_password_aksi()
    {
        $baru = $this->input->post('password_baru');
        $ulang = $this->input->post('password_ulang');

        $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|matches[password_ulang]');
        $this->form_validation->set_rules('password_ulang', 'Ulangi Password', 'required');

        if ($this->form_validation->run() != false) {
            $id = $this->session->userdata('id');
            $where = array('id' => $id);
            $data = array('password' => md5($baru));
            $this->m_data->update_data($where, $data, 'petugas');
            redirect(base_url('petugas/ganti_password?alert=sukses'));
        } else {
            $this->load->view('petugas/v_header');
            $this->load->view('petugas/v_ganti_password');
            $this->load->view('petugas/v_footer');
        }
    }

    // CRUD PETUGAS
    public function petugas()
    {
        // mengambil data dari database
        $data['petugas'] = $this->m_data->get_data('petugas')->result();
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_petugas', $data);
        $this->load->view('petugas/v_footer');
    }

    public function petugas_tambah()
    {
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_petugas_tambah');
        $this->load->view('petugas/v_footer');
    }

    public function petugas_tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => md5($password)
        );
        $this->m_data->insert_data($data, 'petugas');
        redirect(base_url('petugas/petugas'));
    }
    public function petugas_edit($id){
        $where = array('id' => $id);
        $data['petugas'] = $this->m_data->edit_data($where, 'petugas')->result();
        $this->load->view('petugas/v_header');    
        $this->load->view('petugas/v_petugas_edit', $data);
        $this->load->view('petugas/v_footer');
    }
    public function petugas_update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'id' => $id
        );

        if ($password == '') {
            $data = array(
                'nama' => $nama,
                'username' => $username
            );
            $this->m_data->update_data($where, $data, 'petugas');
    } else {
        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => md5($password)
        );
        $this->m_data->update_data($where, $data, 'petugas');
    }
        redirect(base_url('petugas/petugas'));
    }
    public function petugas_hapus($id){
            $where = array('id' => $id);
            $this->m_data->delete_data($where, 'petugas');
            redirect(base_url('petugas/petugas'));
    }
    // akhir crud petuas

    // crud anggota
    public function anggota() {
        $data['anggota'] = $this->m_data->get_data('anggota')->result();
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_anggota',$data);
        $this->load->view('petugas/v_footer');
    }

    public function anggota_tambah() {
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_anggota_tambah');
        $this->load->view('petugas/v_footer');
    }

    public function anggota_tambah_aksi() {
        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nama' => $nama,
            'nik' => $nik,
            'alamat' => $alamat
        );
        $this->m_data->insert_data($data, 'anggota');
        redirect(base_url('petugas/anggota'));
    }
    
}
