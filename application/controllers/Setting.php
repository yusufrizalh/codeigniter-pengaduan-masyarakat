<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cekUser();
    }

    public function changePassword()
    {
        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required', ["required" => "%s belum diisi"]);
        $this->form_validation->set_rules('password_baru', 'Password Baru', 'required', ["required" => "%s belum diisi"]);
        $this->form_validation->set_rules('password_konfirmasi', 'Konfirmasi Password', 'required|matches[password_baru]', ["required" => "%s belum diisi", "matches" => "Password tidak sama"]);

        if ($this->form_validation->run() == TRUE) {
            $password = htmlspecialchars($this->input->post('password_lama'));
            $where = [
                'nik'       => $this->session->userdata('user')['session_nik'],
                'password'  => SHA1($password)
            ];
            $cek_password_lama = $this->M_all->tampilSatu('tb_masyarakat', $where);
            if ($cek_password_lama->num_rows() > 0) {
                $data = [
                    'password' => SHA1(htmlspecialchars($this->input->post('password_baru')))
                ];
                $where = [
                    'id'   => $this->session->userdata('user')['session_id']
                ];
                $ubah = $this->M_all->ubah('tb_masyarakat', $data, $where);
                if ($ubah) {
                    echo "<script>";
                    echo "alert('Password berhasil diubah')";
                    echo "</script>";
                    redirect(base_url(''), 'refresh');
                } else {
                    echo "<script>";
                    echo "alert('Password gagal diubah')";
                    echo "</script>";
                    redirect(base_url('setting/change-password'), 'refresh');
                }
            } else {
                $this->session->set_flashdata('pesan', 'Password Lama Salah');

                redirect(base_url('setting/change-password'), 'refresh');
            }
        } else {
            $data = [
                "title"                     => 'Sistem Pengaduan',
                "breadcumb"                 => 'Setting / ganti - password',
                "content"                   => 'setting/index'
            ];
            $this->load->view('template/view', $data, FALSE);
        }
    }
}
