<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Index_model extends CI_Model
{
    public function getModulPopularClass1() {
        $query = $this->db->query("SELECT * FROM tbl_modul WHERE kategori_modul = 'Kelas Populer' LIMIT 3");
        return $query->result();
    }
    public function getModulPopularClass2() {
        $query = $this->db->query("SELECT * FROM tbl_modul WHERE kategori_modul = 'Kelas Populer' AND id_modul > 3");
        return $query->result();
    }
    public function getModulNewestClass1() {
        $query = $this->db->query("SELECT * FROM tbl_modul WHERE kategori_modul = 'Kelas Terbaru' LIMIT 3");
        return $query->result();
    }
    public function getModulNewestClass2() {
        $query = $this->db->query("SELECT * FROM tbl_modul WHERE kategori_modul = 'Kelas Terbaru' AND id_modul > 8");
        return $query->result();
    }
    public function getModulExpertClass1() {
        $query = $this->db->query("SELECT * FROM tbl_modul WHERE kategori_modul = 'Kelas Expert' LIMIT 3");
        return $query->result();
    }
    public function getModulExpertClass2() {
        $query = $this->db->query("SELECT * FROM tbl_modul WHERE kategori_modul = 'Kelas Expert' AND id_modul > 12");
        return $query->result();
    }
    public function getModulBusinessClass1() {
        $query = $this->db->query("SELECT * FROM tbl_modul WHERE kategori_modul = 'Kelas Bisnis' LIMIT 3");
        return $query->result();
    }
    public function getModulBusinessClass2() {
        $query = $this->db->query("SELECT * FROM tbl_modul WHERE kategori_modul = 'Kelas Bisnis' AND id_modul > 16");
        return $query->result();
    }
    public function getModulMarketingClass1() {
        $query = $this->db->query("SELECT * FROM tbl_modul WHERE kategori_modul = 'Kelas Pemasaran' LIMIT 3");
        return $query->result();
    }
    public function getModulMarketingClass2() {
        $query = $this->db->query("SELECT * FROM tbl_modul WHERE kategori_modul = 'Kelas Pemasaran' AND id_modul > 21");
        return $query->result();
    }
    public function getModulOperationalManagementClass1() {
        $query = $this->db->query("SELECT * FROM tbl_modul WHERE kategori_modul = 'Kelas Manajemen Operasional' LIMIT 3");
        return $query->result();
    }
    public function getModulOperationalManagementClass2() {
        $query = $this->db->query("SELECT * FROM tbl_modul WHERE kategori_modul = 'Kelas Manajemen Operasional' AND id_modul > 25");
        return $query->result();
    }
}