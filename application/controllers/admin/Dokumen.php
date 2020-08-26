<?php

class Dokumen extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Dokumen_model");
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));

        $this->load->database();
    }

    public function index()
    {
        // load view admin/overview.php
        $data["dokumen"] = $this->Dokumen_model->getAll_dokumen();
        
        $this->load->view("admin/dokumen",$data);
    }

    public function add_dokumen()
    {
        $post = $this->input->post();
        $config['upload_path']          = 'upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|doc|docx|pdf|xls|xlsx|zip|mp3|mp4|flv';
        $config['max_size']             = 102400;
        $config['file_name']            = $post["Kategori_data"].'-'.$post["Kegiatan_data"].'-'.date('Y-m-d').'-'.$post["Judul_data"];
        $config['overwrite']            = true;

        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('File_data')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/dokumen', $error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('admin/dokumen', $data);

        $dokumen = $this->Dokumen_model;
        
        $dokumen->save_dokumen();
        $this->session->set_flashdata('success','Dokumen Berhasil Disimpan');

 
        $data["dokumen"] = $this->Dokumen_model->getAll_dokumen();
        
        $this->load->view("admin/user",$data);

        }
    }

    public function delete_dokumen($id=null)
    {
        if (!isset($id)) show_404();
        
        $this->Dokumen_model->delete_dokumen($id);
        $this->session->set_flashdata('success','Dokumen Berhasil Dihapus');
        $data["dokumen"] = $this->Dokumen_model->getAll_dokumen();
        
        $this->load->view("admin/dokumen",$data);
        
    }

}