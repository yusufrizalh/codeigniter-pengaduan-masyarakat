<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cekAdmin();
    }


    public function changePassword()
    {
        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required', ["required" => "%s belum diisi"]);
        $this->form_validation->set_rules('password_baru', 'Password Baru', 'required', ["required" => "%s belum diisi"]);
        $this->form_validation->set_rules('password_konfirmasi', 'Konfirmasi Password', 'required|matches[password_baru]', ["required" => "%s belum diisi", "matches" => "Password tidak sama"]);

        if ($this->form_validation->run() == TRUE) {
            $password = htmlspecialchars($this->input->post('password_lama'));
            $where = [
                'id'        => $this->session->userdata('admin')['session_id'],
                'password'  => SHA1($password)
            ];
            $cek_password_lama = $this->M_all->tampilSatu('tb_petugas', $where);
            if ($cek_password_lama->num_rows() > 0) {
                $data = [
                    'password' => SHA1(htmlspecialchars($this->input->post('password_baru')))
                ];
                $where = [
                    'id'   => $this->session->userdata('admin')['session_id']
                ];
                $ubah = $this->M_all->ubah('tb_petugas', $data, $where);
                if ($ubah) {
                    echo "<script>";
                    echo "alert('Password berhasil diubah')";
                    echo "</script>";
                    redirect(base_url('admin/dashboard'), 'refresh');
                } else {
                    echo "<script>";
                    echo "alert('Password gagal diubah')";
                    echo "</script>";
                    redirect(base_url('admin/ssetting/change-password'), 'refresh');
                }
            } else {
                $this->session->set_flashdata('pesan', 'Password Lama Salah');

                redirect(base_url('admin/setting/change-password'), 'refresh');
            }
        } else {
            $data = [
                "title"                     => 'Sistem Pengaduan',
                "breadcumb"                 => 'Setting / ganti - password',
                "content"                   => 'setting/admin_index'
            ];
            $this->load->view('template/view', $data, FALSE);
        }
    }
}
