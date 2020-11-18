<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cekUser();
    }

    public function index()
    {
        $nik = $this->session->userdata('user')['session_nik'];
        $where = [
            'nik'       => $nik
        ];
        $jml_pengaduan = $this->M_all->tampilSatu('tb_pengaduan', $where)->num_rows();
        $jml_pengaduan_belum = $this->M_all->homeHitungPengaduanBelum($nik)->num_rows();
        $data = [
            "jumlah_pengaduan"          => $jml_pengaduan,
            "jumlah_pengaduan_belum"    => $jml_pengaduan_belum,
            "title"                     => 'Sistem Pengaduan',
            "content"                   => 'home/index'
        ];
        $this->load->view('template/view', $data, FALSE);
    }
}
