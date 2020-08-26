<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_model extends CI_Model
{
    private $_table = "kegiatan";

    public $id_kegiatan;
    public $kategori;
    public $kegiatan;
    public $keterangan;


    public function getAll_kegiatan()
    {
        return $this->db->get($this->_table)->result();
    }
    
        public function save_kegiatan()
    {
        $post = $this->input->post();
        $this->kategori = $post["Kategori_kegiatan"];
        $this->kegiatan = $post["Kegiatan_kegiatan"];
        $this->keterangan = $post["Keterangan_kegiatan"];
        return $this->db->insert($this->_table, $this);
    }

        public function getById_kegiatan($id)
    {
        return $this->db->get_where($this->_table, ["id_kegiatan" => $id])->row();
    }

        public function delete_kegiatan($id)
    {
        return $this->db->delete($this->_table, array("id_kegiatan" => $id));
    }


}