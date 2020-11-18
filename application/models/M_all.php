<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_all extends CI_Model
{

    public function tampilSatu($tabel, $where)
    {
        return $this->db->get_where($tabel, $where);
    }

    public function tampilSemua($tabel)
    {
        return $this->db->get($tabel);
    }

    public function simpan($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }

    public function hapus($tabel, $where)
    {
        return $this->db->delete($tabel, $where);
    }

    public function ubah($tabel, $data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }

    public function tampilKelola()
    {
        $this->db->select('tb_pengaduan.*, tb_masyarakat.nama ');
        $this->db->from('tb_pengaduan');
        $this->db->join('tb_masyarakat', 'tb_pengaduan.nik = tb_masyarakat.nik', 'left');
        return $query = $this->db->get();
    }

    public function tampilPengaduanSatu($where)
    {
        $this->db->select('tb_pengaduan.*, tb_masyarakat.nama ');
        $this->db->from('tb_pengaduan');
        $this->db->join('tb_masyarakat', 'tb_pengaduan.nik = tb_masyarakat.nik', 'left');
        $this->db->where('tb_pengaduan.id', $where);
        return $query = $this->db->get();
    }

    public function homeHitungPengaduanBelum($nik)
    {
        $this->db->where('nik', $nik);
        $this->db->where('status', 'proses');
        $this->db->or_where('status', 'ditanggapi');
        $this->db->where('nik', $nik);
        return $this->db->get('tb_pengaduan');
    }
}

/* End of file M_all.php */
