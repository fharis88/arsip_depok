<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public $nip_lama;
    public $nama;
    public $tipe_user;
    public $seksi;
    public $password;
    


    public function getAll_user()
    {
        return $this->db->get($this->_table)->result();
    }
    
        public function save_user()
    {
        $post = $this->input->post();
        $this->nip_lama = $post["nip_lama_user"];
        $this->nama = $post["nama_user"];
        $this->tipe_user = $post["tipe_user"];
        $this->seksi = $post["seksi_user"];
        $this->password = $post["password_user"];
        return $this->db->insert($this->_table, $this);
    }

        public function getById_user($id)
    {
        return $this->db->get_where($this->_table, ["nip_lama" => $id])->row();
    }

        public function delete_user($id)
    {
        return $this->db->delete($this->_table, array("nip_lama" => $id));
    }

    public function update_user($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }


}