<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cekAdmin();
    }

    public function index()
    {
        $pengaduan_jumlah = $this->M_all->tampilSemua('tb_pengaduan')->num_rows();
        $where = ['status' => 'proses'];
        $pengaduan_proses = $this->M_all->tampilSatu('tb_pengaduan', $where)->num_rows();
        $where = ['status' => 'ditanggapi'];
        $pengaduan_ditanggapi = $this->M_all->tampilSatu('tb_pengaduan', $where)->num_rows();
        $where = ['status' => 'selesai'];
        $pengaduan_selesai = $this->M_all->tampilSatu('tb_pengaduan', $where)->num_rows();

        $data = [
            "pengaduan_jml"         => $pengaduan_jumlah,
            "pengaduan_proses"      => $pengaduan_proses,
            "pengaduan_ditanggapi"  => $pengaduan_ditanggapi,
            "pengaduan_selesai"     => $pengaduan_selesai,
            "title"                 => 'Dashboard',
            "breadcumb"             => 'Dashboard',
            "content"               => 'dashboard/index'
        ];
        $this->load->view('template/view', $data, FALSE);
    }
}

/* End of file Dashboard.php */
