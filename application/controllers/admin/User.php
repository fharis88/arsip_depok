<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("user_model");
		
		$this->load->database();
	}

	public function index()
	{
        // load view admin/overview.php
		$data["user"] = $this->user_model->getAll_user();
        
        $this->load->view("admin/user",$data);

	}

	public function add_user()
    {

        $kategori = $this->user_model;
        $kategori->save_user();
        $this->session->set_flashdata('success','User Berhasil Disimpan');

 
        $data["user"] = $this->user_model->getAll_user();
        
        $this->load->view("admin/user",$data);
    }

    public function delete_user($id=null)
    {
        if (!isset($id)) show_404();
        
        $this->user_model->delete_user($id);
        $this->session->set_flashdata('success','User Berhasil Dihapus');
        $data["user"] = $this->user_model->getAll_user();
        
        $this->load->view("admin/user",$data);
        
    }
}