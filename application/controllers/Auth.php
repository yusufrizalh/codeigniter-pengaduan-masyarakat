<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        if (!isset($_SESSION['user'])) {

            redirect(base_url('auth/login'), 'refresh');
        } else {

            redirect(base_url(''), 'refresh');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nik', 'Nik', 'numeric|required|is_unique[tb_masyarakat.nik]|min_length[16]|max_length[16]', ['required' => '%s harus diisi', 'is_unique' => '%s tidak boleh sama', 'numeric' => '%s harus angka', 'max_length' => '%s Harus 16 karakter', 'min_length' => '%s Harus 16 karakter']);
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[tb_masyarakat.username]', ['required' => '%s harus diisi', 'is_unique' => '%s tidak boleh sama']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => '%s harus diisi']);
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]', ['required' => '%s harus diisi', 'matches' => 'Password tidak sama']);
        $this->form_validation->set_rules('telp', 'No Telepon', 'numeric|required', ['required' => '%s harus diisi', 'numeric' => '%s harus angka']);


        if ($this->form_validation->run() == TRUE) {
            $data = [
                'nik' => htmlspecialchars($this->input->post('nik')),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => SHA1(htmlspecialchars($this->input->post('password'))),
                'telp' => htmlspecialchars($this->input->post('telp'))
            ];
            $tambah = $this->M_all->simpan('tb_masyarakat', $data);
            if ($tambah) {
                echo "<script>";
                echo "alert('Berhasil Mendaftar .... Silahkan Login !')";
                echo "</script>";
                redirect(base_url('auth/login'), 'refresh');
            } else {
                echo "<script>";
                echo "alert('Gagal Mendaftar Silahkan Ulangi')";
                echo "</script>";
                redirect(base_url('auth/register'), 'refresh');
            }
        } else {
            $this->load->view('home/register');
        }
    }

    public function login()
    {
        $this->load->view('home/login');
    }

    public function masuk()
    {
        $username = htmlspecialchars($this->input->post("username"));
        $password = htmlspecialchars($this->input->post("password"));

        $where = [
            'username'  => $username
        ];

        $cek_user = $this->M_all->tampilSatu('tb_masyarakat', $where);

        if ($cek_user->num_rows() > 0) {
            $data_user = $cek_user->row();
            $hash_password = SHA1($password);
            // var_dump($data_user);die;
            if ($data_user->password === $hash_password) {

                $array = array(
                    "session_id"                => $data_user->id,
                    "session_nik"               => $data_user->nik,
                    "session_nama_masyarakat"   => $data_user->nama,
                    "session_username"          => $data_user->username,
                    "session_password"          => $data_user->password
                );

                $this->session->set_userdata("user", $array);
                $this->session->unset_userdata('admin');

                redirect(base_url(''), 'refresh');
            } else {
                $this->session->set_flashdata('pesan-login', 'Password salah');
                redirect(base_url('auth/login'), 'refresh');
            }
        } else {
            $this->session->set_flashdata('pesan-login', 'Username tidak ada');
            redirect(base_url('auth/login'), 'refresh');
        }
    }

    public function logOut()
    {
        $this->session->unset_userdata('user');

        redirect(base_url('auth/login'), 'refresh');
    }
}

/* End of file Auth.php */
