<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function index()
    {
        $kelola = $this->M_all->tampilKelola()->result_array();
        $data = [
            "list"    => $kelola,
            'title'     => 'Laporan',
            'breadcumb' => 'Laporan',
            'content'   => 'dashboard/laporan'
        ];
        $this->load->view('template/view', $data);
    }
}

/* End of file Laporan.php */
