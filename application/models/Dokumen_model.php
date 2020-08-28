<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen_model extends CI_Model
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
    
    


    public function getAll_dokumen()
    {
        return $this->db->get($this->_table)->result();

    }
    
   
    
        public function save_dokumen($pecah,$size)
    {
        $post = $this->input->post();
        $this->judul = $post["Judul_data"];
        $this->kategori = $post["Kategori_data"];
        $this->kegiatan = $post["Kegiatan_data"];
        $this->jenis = $post["Jenis_data"];
        $this->tanggal = $post["Tanggal_data"];
        $this->keterangan = $post["Keterangan_data"];
        $this->id_user = $post["Id_user"];
        $this->ukuran = $size;


        
        $this->file = $post["Kategori_data"].'-'.$post["Kegiatan_data"].'-'.date('Y-m-d').'-'.$post["Judul_data"].$pecah;
        

        return $this->db->insert($this->_table, $this);
    }

        public function getById_dokumen($id)
    {
        return $this->db->get_where($this->_table, ["id_data" => $id])->row();
    }

        public function delete_dokumen($id)
    {
        return $this->db->delete($this->_table, array("id_data" => $id));
    }

    public function update_dokumen($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }   




}