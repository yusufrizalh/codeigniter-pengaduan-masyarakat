<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        if (!isset($_SESSION['admin'])) {

            redirect(base_url('admin/auth/login'), 'refresh');
        } else {

            redirect(base_url('admin/dashboard'), 'refresh');
        }
    }

    public function login()
    {
        $pesan['error'] = False;

        $this->load->view('dashboard/login', $pesan);
    }

    public function masuk()
    {
        $username = htmlspecialchars($this->input->post("username"));
        $password = htmlspecialchars($this->input->post("password"));

        $where = [
            'username'  => $username
        ];

        $cek_user = $this->M_all->tampilSatu('tb_petugas', $where);

        if ($cek_user->num_rows() > 0) {
            $data_user = $cek_user->row();
            $hash_password = SHA1($password);
            // var_dump($data_user);die;
            if ($data_user->password === $hash_password) {

                $array = array(
                    "session_id"            => $data_user->id,
                    "session_nama_petugas"  => $data_user->nama_petugas,
                    "session_username"      => $data_user->username,
                    "session_password"      => $data_user->password,
                    "session_level"         => $data_user->level,
                );

                $this->session->set_userdata("admin", $array);

                $this->session->unset_userdata('user');

                redirect(base_url('admin/dashboard/'), 'refresh');
            } else {
                $pesan['error'] = True;
                $pesan['isi_pesan'] = "password salah";

                $this->load->view('dashboard/login', $pesan);
            }
        } else {
            $pesan['error'] = True;
            $pesan['isi_pesan'] = "username tidak ada";

            $this->load->view('dashboard/login', $pesan);
        }
    }

    public function logOut()
    {
        $this->session->unset_userdata('admin');

        redirect(base_url('admin/auth/login'), 'refresh');
    }
}

/* End of file Auth.php */
