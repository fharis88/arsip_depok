<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Kategori_kegiatan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("kategori_model");
		$this->load->model("kegiatan_model");
		
		$this->load->database();
        $this->load->library('upload');
	}

	public function index()
	{
        // load view admin/overview.php
        

        if ($this->session->userdata('masuk')) {
            $data["kategori"] = $this->kategori_model->getAll_kategori();
        $data["kegiatan"] = $this->kegiatan_model->getAll_kegiatan();
        
        $this->load->view("admin/kategori_kegiatan",$data);
        }else{
            redirect('login');
        }
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

    public function edit_kategori($id = null)
    {
        if (!isset($id)) redirect('admin/kategori_kegiatan');
        


        $kategori = $this->kategori_model;
        
        $data["kategori"] = $kategori->getById_kategori($id);
        
        
        $this->load->view("admin/edit_kategori",$data);
    }

    public function edit_kegiatan($id = null)
    {
        if (!isset($id)) redirect('admin/kategori_kegiatan');
        


        $kegiatan = $this->kegiatan_model;
        $kategori = $this->kategori_model;

        $data["kategori"] = $kategori->getAll_kategori();
        $data["kegiatan"] = $kegiatan->getById_kegiatan($id);
        
        
        $this->load->view("admin/edit_kegiatan",$data);
    }

    public function update_kategori(){
        
        $data = array(
            
            'kategori' => $this->input->post('Kategori_edit_kategori'),
            'keterangan' => $this->input->post('Keterangan_edit_kategori')
        );
     
        $where = [
            'id_kategori' => $this->input->post('id_edit_kategori')
        ];

        $this->session->set_flashdata('success','Kategori Berhasil Dirubah');
     
        $this->kategori_model->update_data($where,$data,'kategori');
        $data["kategori"] = $this->kategori_model->getAll_kategori();
        $data["kegiatan"] = $this->kegiatan_model->getAll_kegiatan();
        $this->load->view("admin/kategori_kegiatan",$data);

    }

    public function update_kegiatan(){
        
        $data = array(
            
            'kategori' => $this->input->post('Kategori_edit_kegiatan'),
            'kegiatan' => $this->input->post('Kegiatan_edit_kegiatan'),
            'keterangan' => $this->input->post('Keterangan_edit_kegiatan')
        );
     
        $where = [
            'id_kegiatan' => $this->input->post('id_edit_kegiatan')
        ];

        $this->session->set_flashdata('success','Kegiatan Berhasil Dirubah');
     
        $this->kegiatan_model->update_data($where,$data,'kegiatan');
        $data["kategori"] = $this->kategori_model->getAll_kategori();
        $data["kegiatan"] = $this->kegiatan_model->getAll_kegiatan();
        $this->load->view("admin/kategori_kegiatan",$data);

    }

}