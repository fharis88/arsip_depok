<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Kategori_kegiatan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("kategori_model");
		$this->load->model("kegiatan_model");
		
		$this->load->database();
	}

	public function index()
	{
        // load view admin/overview.php
        $data["kategori"] = $this->kategori_model->getAll_kategori();
        $data["kegiatan"] = $this->kegiatan_model->getAll_kegiatan();
        
        $this->load->view("admin/kategori_kegiatan",$data);
	}

	    public function add_kategori()
    {

        $kategori = $this->kategori_model;
        $kategori->save_kategori();
        $this->session->set_flashdata('success','Kategori Berhasil Disimpan');

        $data["kategori"] = $this->kategori_model->getAll_kategori();
        $data["kegiatan"] = $this->kegiatan_model->getAll_kegiatan();
        $this->load->view("admin/kategori_kegiatan",$data);
    }

        public function delete_kategori($id=null)
    {
        if (!isset($id)) show_404();
        
        $this->kategori_model->delete_kategori($id);
        $this->session->set_flashdata('success','Kategori Berhasil Dihapus');
        $data["kategori"] = $this->kategori_model->getAll_kategori();
        $data["kegiatan"] = $this->kegiatan_model->getAll_kegiatan();
        $this->load->view("admin/kategori_kegiatan",$data);
        
    }

    
    	    public function add_kegiatan()
    {

        $kegiatan = $this->kegiatan_model;
        $kegiatan->save_kegiatan();
        $this->session->set_flashdata('success','Kegiatan Berhasil Disimpan');

        $data["kategori"] = $this->kategori_model->getAll_kategori();
        $data["kegiatan"] = $this->kegiatan_model->getAll_kegiatan();
        $this->load->view("admin/kategori_kegiatan",$data);
    }

    public function delete_kegiatan($id=null)
    {
        if (!isset($id)) show_404();
        
        $this->kegiatan_model->delete_kegiatan($id);
        $this->session->set_flashdata('success','Kegiatan Berhasil Dihapus');
        $data["kategori"] = $this->kategori_model->getAll_kategori();
        $data["kegiatan"] = $this->kegiatan_model->getAll_kegiatan();
        $this->load->view("admin/kategori_kegiatan",$data);
        
    }

}