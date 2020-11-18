<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_petugas extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cekAdmin();
    }

    public function index()
    {
        $Pengguna_petugas = $this->M_all->tampilSemua('tb_petugas')->result_array();
        $data = [
            "pengguna_petugas"  => $Pengguna_petugas,
            "title"             => 'Data petugas',
            "breadcumb"         => 'Pengguna / petugas',
            "content"           => 'pengguna/petugas/index'
        ];
        $this->load->view('template/view', $data, FALSE);
    }

    // public function tambah()
    // {
    //     $data = [
    //         "title"             => 'Tambah data petugas',
    //         "breadcumb"         => 'Pengguna / petugas / tambah',
    //         "content"           => 'pengguna/petugas/tambah'
    //     ];
    //     $this->load->view('template/view', $data, FALSE);
    // }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_petugas', 'Nama Petugas', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('telp', 'No Telepon', 'numeric|required', ['required' => '%s harus diisi', 'numeric' => '%s harus angka']);
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[tb_petugas.username]', ['required' => '%s harus diisi', 'is_unique' => '%s tidak boleh sama']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('level', 'Level', 'required', ['required' => '%s harus diisi']);


        if ($this->form_validation->run() == TRUE) {
            $data = [
                'nama_petugas' => htmlspecialchars($this->input->post('nama_petugas')),
                'telp' => htmlspecialchars($this->input->post('telp')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => SHA1(htmlspecialchars($this->input->post('password'))),
                'level' => htmlspecialchars($this->input->post('level'))
            ];
            $tambah = $this->M_all->simpan('tb_petugas', $data);
            if ($tambah) {
                echo "<script>";
                echo "alert('Data berhasil ditambah')";
                echo "</script>";
                redirect(base_url('admin/pengguna/petugas'), 'refresh');
            } else {
                echo "<script>";
                echo "alert('Data gagall ditambah')";
                echo "</script>";
                redirect(base_url('admin/pengguna/petugas/tambah'), 'refresh');
            }
        } else {
            $data = [
                "title"             => 'Tambah data petugas',
                "breadcumb"         => 'Pengguna / petugas / tambah',
                "content"           => 'pengguna/petugas/tambah'
            ];
            $this->load->view('template/view', $data, FALSE);;
        }
    }

    public function hapus($id)
    {
        $where = [
            'id'    => $id
        ];
        $hapus = $this->M_all->hapus('tb_petugas', $where);
        if ($hapus) {
            echo "<script>";
            echo "alert('Data berhasil dihapus')";
            echo "</script>";
            redirect('admin/pengguna/petugas', 'refresh');
        } else {
            echo "<script>";
            echo "alert('Data gagal dihapus')";
            echo "</script>";
            redirect('admin/pengguna/petugas', 'refresh');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama_petugas', 'Nama Petugas', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('telp', 'No Telepon', 'numeric|required', ['required' => '%s harus diisi', 'numeric' => '%s harus angka']);
        $this->form_validation->set_rules('level', 'Level', 'required', ['required' => '%s harus diisi']);


        if ($this->form_validation->run() == TRUE) {
            $data = [
                'nama_petugas' => htmlspecialchars($this->input->post('nama_petugas')),
                'telp' => htmlspecialchars($this->input->post('telp')),
                'password' => SHA1(htmlspecialchars($this->input->post('password'))),
                'level' => htmlspecialchars($this->input->post('level'))
            ];
            $where = [
                'id'    =>  $id
            ];
            $ubah = $this->M_all->ubah('tb_petugas', $data, $where);
            // var_dump($ubah);die;
            if ($ubah) {
                echo "<script>";
                echo "alert('Data berhasil diubah')";
                echo "</script>";
                redirect(base_url('admin/pengguna/petugas'), 'refresh');
            } else {
                echo "<script>";
                echo "alert('Data gagall diubah')";
                echo "</script>";
                redirect(base_url('admin/pengguna/petugas/ubah'), 'refresh');
            }
        } else {
            $where = [
                'id'    =>  $id
            ];
            $petugas = $this->M_all->tampilSatu('tb_petugas', $where)->row();
            $data = [
                "petugas"           => $petugas,
                "title"             => 'Ubah data petugas',
                "breadcumb"         => 'Pengguna / petugas / ubah',
                "content"           => 'pengguna/petugas/ubah'
            ];
            $this->load->view('template/view', $data, FALSE);;
        }
    }
}

/* End of file Pengguna_petugas.php */
