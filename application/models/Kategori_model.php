<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    private $_table = "kategori";

    public $id_kategori;
    public $kategori;
    public $keterangan;


    public function getAll_kategori()
    {
        return $this->db->get($this->_table)->result();
    }
    
        public function save_kategori()
    {
        $post = $this->input->post();
        $this->kategori = $post["Kategori_kategori"];
        $this->keterangan = $post["Keterangan_kategori"];
        return $this->db->insert($this->_table, $this);
    }

        public function getById_kategori($id)
    {
        return $this->db->get_where($this->_table, ["id_kategori" => $id])->row();
    }

        public function delete_kategori($id)
    {
        return $this->db->delete($this->_table, array("id_kategori" => $id));
    }

    

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }   



}