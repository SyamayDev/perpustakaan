<?php
defined('BASEPATH') or exit('No direct script access allowed');

class petugas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

        if ($this->session->userdata('status') != "petugas_login") {
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
    public function petugas_edit($id)
    {
        $where = array('id' => $id);
        $data['petugas'] = $this->m_data->edit_data($where, 'petugas')->result();
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_petugas_edit', $data);
        $this->load->view('petugas/v_footer');
    }
    public function petugas_update()
    {
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
    public function petugas_hapus($id)
    {
        $where = array('id' => $id);
        $this->m_data->delete_data($where, 'petugas');
        redirect(base_url('petugas/petugas'));
    }
    // akhir crud petuas

    // crud anggota
    public function anggota()
    {
        $data['anggota'] = $this->m_data->get_data('anggota')->result();
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_anggota', $data);
        $this->load->view('petugas/v_footer');
    }

    public function anggota_tambah()
    {
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_anggota_tambah');
        $this->load->view('petugas/v_footer');
    }

    public function anggota_tambah_aksi()
    {
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

    public function anggota_edit($id)
    {
        $where = array('id' => $id);
        $data['anggota'] = $this->m_data->edit_data($where, 'anggota')->result();
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_anggota_edit', $data);
        $this->load->view('petugas/v_footer');
    }
    public function anggota_update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $alamat = $this->input->post('alamat');

        $where = array(
            'id' => $id
        );

        if ($password == '') {
            $data = array(
                'nama' => $nama,
                'nik' => $nik,
                'alamat' => $alamat
            );
            $this->m_data->update_data($where, $data, 'anggota');
        } else {
            $data = array(
                'nama' => $nama,
                'nik' => $nik,
                'alamat' => $alamat
            );
            $this->m_data->update_data($where, $data, 'anggota');
        }
        redirect(base_url('petugas/anggota'));
    }
    public function anggota_hapus($id)
    {
        $where = array('id' => $id);
        $this->m_data->delete_data($where, 'anggota');
        redirect(base_url('petugas/anggota'));
    }
    public function anggota_kartu($id)
    {
        $where = array('id' => $id);
        // mengambil data dari database sesuai id
        $data['anggota'] = $this->m_data->edit_data($where, 'anggota')->result();
        $this->load->view('petugas/v_anggota_kartu', $data);
    }
    public function buku()
    {
        $data['buku'] = $this->m_data->get_data('buku')->result();
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_buku', $data);
        $this->load->view('petugas/v_footer');
    }
    public function buku_tambah()
    {
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_buku_tambah');
        $this->load->view('petugas/v_footer');
    }
    public function buku_tambah_aksi()
    {
        $judul = $this->input->post('judul');
        $tahun = $this->input->post('tahun');
        $penulis = $this->input->post('penulis');

        $data = array(
            'judul' => $judul,
            'tahun' => $tahun,
            'penulis' => $penulis,
            'status' => 1
        );
        $this->m_data->insert_data($data, 'buku');
        redirect(base_url('petugas/buku'));
    }
    public function buku_edit($id)
    {
        $where = array('id' => $id);
        $data['buku'] = $this->m_data->edit_data($where, 'buku')->result();
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_buku_edit', $data);
        $this->load->view('petugas/v_footer');
    }
    public function buku_update()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $tahun = $this->input->post('tahun');
        $penulis = $this->input->post('penulis');
        $status = $this->input->post('status');

        $where = array(
            'id' => $id
        );

        $data = array(
            'judul' => $judul,
            'tahun' => $tahun,
            'penulis' => $penulis,
            'status' => $status
        );
        $this->m_data->update_data($where, $data, 'buku');
        redirect(base_url('petugas/buku'));
    }
    public function buku_hapus($id)
    {
        $where = array('id' => $id);
        $this->m_data->delete_data($where, 'buku');
        redirect(base_url('petugas/buku'));
    }
    // akhir crud buku

    public function peminjaman()
    {
        $data['peminjaman'] = $this->db->query("select * from peminjaman,buku,anggota 
        where peminjaman.peminjaman_buku=buku.id and peminjaman.peminjaman_anggota=anggota.id 
        order by peminjaman_id desc")->result();
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_peminjaman', $data);
        $this->load->view('petugas/v_footer');
    }
    public function peminjaman_tambah()
    {
        $where = array('status' => 1);
        $data['buku'] = $this->m_data->edit_data($where, 'buku')->result();
        $data['anggota'] = $this->m_data->get_data('anggota')->result();
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_peminjaman_tambah', $data);
        $this->load->view('petugas/v_footer');
    }
    public function peminjaman_aksi()
    {
        $buku = $this->input->post('buku');
        $anggota = $this->input->post('anggota');
        $tanggal_mulai = $this->input->post('tanggal_mulai');
        $tanggal_sampai = $this->input->post('tanggal_sampai');

        $data = array(
            'peminjaman_buku' => $buku,
            'peminjaman_anggota' => $anggota,
            'peminjaman_tanggal_mulai' => $tanggal_mulai,
            'peminjaman_tanggal_sampai' => $tanggal_sampai,
            'peminjaman_status' => 2
        );

        $this->m_data->insert_data($data, 'peminjaman');

        $w = array(
            'id' => $buku
        );
        $d = array(
            'status' => 2
        );
        $this->m_data->update_data($w, $d, 'buku');
        redirect(base_url('petugas/peminjaman'));
    }
    public function peminjaman_batalkan($id)
    {
        // mengambil data peminjaman berdasarkan id
        $where = array('peminjaman_id' => $id);

        $data = $this->m_data->edit_data($where, 'peminjaman')->row();
        $buku = $data->peminjaman_buku;

        $w = array(
            'id' => $buku
        );
        $d = array(
            'status' => 1
        );
        $this->m_data->update_data($w, $d, 'buku');

        // ubah status peminjaman menjadi "dibatalkan" (status 0)
        $dd = array('peminjaman_status' => 0);
        $this->m_data->update_data($where, $dd, 'peminjaman');

        redirect(base_url('petugas/peminjaman'));
    }
    public function peminjaman_selesai($id)
    {
        // mengambil data peminjaman berdasarkan id
        $where = array('peminjaman_id' => $id);

        $data = $this->m_data->edit_data($where, 'peminjaman')->row();
        $buku = $data->peminjaman_buku;

        $w = array(
            'id' => $buku
        );
        $d = array(
            'status' => 1
        );
        $this->m_data->update_data($w, $d, 'buku');

        $dw = array(
            'peminjaman_id' => $id
        );
        $dd = array(
            'peminjaman_status' => 1
        );
        $this->m_data->update_data($dw, $dd, 'peminjaman');
        redirect(base_url('petugas/peminjaman'));
    }
    public function peminjaman_laporan()
    {
        if(isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])) {
            $mulai = $this->input->get('tanggal_mulai');
            $sampai = $this->input->get('tanggal_sampai');
            // mengammbil data peminjaman berdasrkan tanggal mulai sampai tanggal sampai
            $data['peminjaman'] = $this->db->query("select * from peminjaman,buku,anggota 
            where peminjaman.peminjaman_buku=buku.id and peminjaman.peminjaman_anggota=anggota.id 
            and date(peminjaman_tanggal_mulai) >= '$mulai' and date(peminjaman_tanggal_sampai)
            <= '$sampai' order by peminjaman_id desc")->result();
        } else {
            // mengambil data peminjaman buku dari database | dan mengurutkan data dari id peminjaman terbesar ke terkecil (desc)
            $data['peminjaman'] = $this->db->query("select * from peminjaman,buku,anggota 
            where peminjaman.peminjaman_buku=buku.id and peminjaman.peminjaman_anggota=anggota.id 
            order by peminjaman_id desc")->result();
        }
        $this->load->view('petugas/v_header');
        $this->load->view('petugas/v_peminjaman_laporan', $data);
        $this->load->view('petugas/v_footer');
    }
    public function peminjaman_cetak()
    {
        if(isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai']) ) {
            $mulai = $this->input->get('tanggal_mulai');
            $sampai = $this->input->get('tanggal_sampai');
            // mengammbil data peminjaman berdasrkan tanggal mulai sampai tanggal sampai
            $data['peminjaman'] = $this->db->query("select * from peminjaman,buku,anggota 
            where peminjaman.peminjaman_buku=buku.id and peminjaman.peminjaman_anggota=anggota.id 
            and date(peminjaman_tanggal_mulai) >= '$mulai' and date(peminjaman_tanggal_sampai)
            <= '$sampai' order by peminjaman_id desc")->result();
        $this->load->view('petugas/v_peminjaman_cetak', $data);
        } else {
            redirect(base_url('petugas/peminjaman'));
        }
    
    }
}
