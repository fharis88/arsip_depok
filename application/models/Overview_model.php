<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Overview_model extends CI_Model
{
    private $_table = "data";

    public $id_data;
    public $kategori;
    public $kegiatan;
    public $judul;
    public $jenis;
    public $tanggal;
    public $keterangan;
    public $file;
    public $id_user;
    public $waktu_upload;
    public $ukuran;
    
    


    public function getAll_data()
    {
        $query = $this->db->query('SELECT kategori,COUNT(ukuran) as "count" ,SUM(ukuran) as "sum" FROM data  GROUP BY kategori');
            return $query->result();

    }

    public function getAll_summary()
    {
        $query = $this->db->query('SELECT kategori,COUNT(ukuran) as "count" ,SUM(ukuran) as "sum" FROM data');
            return $query->result();

    }




}