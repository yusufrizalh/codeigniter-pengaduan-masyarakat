<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cekUser();
    }

    public function index()
    {
        $where = [
            'nik'    => $this->session->userdata('user')['session_nik']
        ];
        $pengaduan = $this->M_all->tampilSatu('tb_pengaduan', $where)->result_array();
        $data = [
            "title"             => 'Pengaduan',
            "breadcumb"         => 'Pengaduan / Data',
            "content"           => 'pengaduan/index',
            "pengaduan"         => $pengaduan
        ];
        $this->load->view('template/view', $data, FALSE);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('isi', 'Isi Laporan', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('foto', 'Foto', 'required]', ['required' => '%s harus diisi']);

        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']  = '100';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $error = $this->upload->display_errors();
                echo $error;
            } else {
                $data = [
                    'tgl'           => date('Y-m-d'),
                    'nik'           => $this->session->userdata('user')['session_nik'],
                    'isi_laporan'   => htmlspecialchars($this->input->post('isi')),
                    'foto'          => $this->upload->data()["file_name"],
                    'status'        => "proses"
                ];
                $tambah = $this->M_all->simpan('tb_pengaduan', $data);
                if ($tambah) {
                    echo "<script>";
                    echo "alert('Pengaduan berhasil ditambah')";
                    echo "</script>";
                    redirect(base_url('pengaduan'), 'refresh');
                } else {
                    echo "<script>";
                    echo "alert('Pengaduan gagal ditambah')";
                    echo "</script>";
                    redirect(base_url('pengaduan/tambah'), 'refresh');
                }
            }
        } else {
            $data = [
                "title"             => 'Tambah pengaduan',
                "breadcumb"         => 'Pengaduan / tambah',
                "content"           => 'pengaduan/tambah'
            ];
            $this->load->view('template/view', $data, FALSE);;
        }
    }

    public function detail($id)
    {
        $where = [
            'id'    => $id,
            'nik'   => $this->session->userdata('user')['session_nik']
        ];
        $pengaduan = $this->M_all->tampilSatu('tb_pengaduan', $where)->row();
        $where = [
            'id_pengaduan'    => $id
        ];
        $tanggapan = $this->M_all->tampilSatu('tb_tanggapan', $where)->row();
        $data = [
            "title"             => 'Pengaduan',
            "breadcumb"         => 'Pengaduan / Data / Detail ',
            "content"           => 'pengaduan/detail',
            "pengaduan"         => $pengaduan,
            "tanggapan"         => $tanggapan
        ];
        $this->load->view('template/view', $data, FALSE);
    }
}
