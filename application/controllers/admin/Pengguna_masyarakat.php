<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_masyarakat extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cekAdmin();
    }

    public function index()
    {
        $Pengguna_masyarakat = $this->M_all->tampilSemua('tb_masyarakat')->result_array();
        $data = [
            "pengguna_masyarakat"  => $Pengguna_masyarakat,
            "title"                => 'Data masyarakat',
            "breadcumb"            => 'Pengguna / masyarakat',
            "content"              => 'pengguna/masyarakat/index'
        ];
        $this->load->view('template/view', $data, FALSE);
    }

    public function hapus($id)
    {
        $where = [
            'id'    => $id
        ];
        $hapus = $this->M_all->hapus('tb_masyarakat', $where);
        if ($hapus) {
            echo "<script>";
            echo "alert('Data berhasil dihapus')";
            echo "</script>";
            redirect('admin/pengguna/masyarakat', 'refresh');
        } else {
            echo "<script>";
            echo "alert('Data gagal dihapus')";
            echo "</script>";
            redirect('admin/pengguna/masyarakat', 'refresh');
        }
    }
}

/* End of file Pengguna_masyarakat.php */
