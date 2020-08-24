<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Kategori_kegiatan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("kategori_model");
		$this->load->database();
	}

	public function index()
	{
        // load view admin/overview.php
        $data["kategori"] = $this->kategori_model->getAll();
        $this->load->view("admin/kategori_kegiatan",$data);
	}

	    public function add()
    {

        $kategori = $this->kategori_model;
        $kategori->save();
        $this->session->set_flashdata('success','Berhasil Disimpan');

        $data["kategori"] = $this->kategori_model->getAll();
        $this->load->view("admin/kategori_kegiatan",$data);
    }

        public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {

            redirect(site_url('admin/kategori_kegiatan'));
        }
    }

}