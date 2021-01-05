<?php

class Dokumen extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Dokumen_model");
        $this->load->model("Kategori_model");
        $this->load->model("Kegiatan_model");
        
        $this->load->library('upload');
        $this->load->helper(array('form', 'url','download'));

        $this->load->database();
    }

    public function index()
    {
        // load view admin/overview.php
        

        if ($this->session->userdata('masuk')) {
            $data["kategori"] = $this->Kategori_model->getAll_kategori();
        $data["kegiatan"] = $this->Kegiatan_model->getAll_kegiatan();
        $data["dokumen"] = $this->Dokumen_model->getAll_dokumen();
        
        $this->load->view("admin/dokumen",$data);
        }else{
            redirect('login');
        }
    }

    public function add_dokumen()
    {
        $post = $this->input->post();
        //$errorUploadType = $statusMsg = '';


        
        if(!empty($_FILES['File_data']['name']) ){ 

            $filesCount = count($_FILES['File_data']['name']);
            
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['File_data']['name'][$i]; 
                $_FILES['file']['type']     = $_FILES['File_data']['type'][$i]; 
                $_FILES['file']['tmp_name'] = $_FILES['File_data']['tmp_name'][$i]; 
                $_FILES['file']['error']     = $_FILES['File_data']['error'][$i]; 
                $_FILES['file']['size']     = $_FILES['File_data']['size'][$i]; 
                
                $config['upload_path']          = 'upload/'.$post["Kategori_data"].'/'.$post["Kegiatan_data"].'/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 102400;
                $config['overwrite']            = true;
                $config['remove_spaces']        = false;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('file')){
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('success','Dokumen Gagal Disimpan'.$this->upload->display_errors());
                }else{
                $data = array('upload_data' => $this->upload->data());
        

                $dokumen = $this->Dokumen_model;
        
                //$fileName = $_FILES['File_data']['name'];
                $size = $this->upload->data('file_size');

                //$pecah = explode(".", $fileName);
                $name = $this->upload->data('file_name');


                $dokumen->save_dokumen($name,$size);
                $this->session->set_flashdata('success','Dokumen Berhasil Disimpan');


                }

        }

         
        $data["kategori"] = $this->Kategori_model->getAll_kategori();
        $data["kegiatan"] = $this->Kegiatan_model->getAll_kegiatan();
        $data["dokumen"] = $this->Dokumen_model->getAll_dokumen();
        
        $this->load->view("admin/dokumen",$data);

        }
        
    }

    public function delete_dokumen($id=null)
    {
        if (!isset($id)) show_404();
        
        $this->Dokumen_model->delete_dokumen($id);
        $this->session->set_flashdata('success','Dokumen Berhasil Dihapus');
        
        $data["kategori"] = $this->Kategori_model->getAll_kategori();
        $data["kegiatan"] = $this->Kegiatan_model->getAll_kegiatan();
        $data["dokumen"] = $this->Dokumen_model->getAll_dokumen();

        
        $this->load->view("admin/dokumen",$data);
        
    }

    public function download_dokumen($id=NULL){
        $nama_file=$this->Dokumen_model->getById_dokumen($id);
        force_download('upload/'.$nama_file->kategori.'/'.$nama_file->kegiatan.'/'.$nama_file->file,NULL);
    }

    public function edit_dokumen($id = null)
    {
        if (!isset($id)) redirect('admin/dokumen');
        


        $kegiatan = $this->Kegiatan_model;
        $kategori = $this->Kategori_model;
        $dokumen = $this->Dokumen_model;


        $data["kategori"] = $kategori->getAll_kategori();
        $data["kegiatan"] = $kegiatan->getAll_kegiatan();
        $data["dokumen"] = $dokumen->getById_dokumen($id);
        
        
        $this->load->view("admin/edit_dokumen",$data);
    }

    public function update_dokumen(){
        
        

        $post = $this->input->post();


        $config['upload_path']          = 'upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|doc|docx|pdf|xls|xlsx|zip|mp3|mp4|flv';
        $config['max_size']             = 102400;
        $config['file_name']            = $post["Kategori_edit_data"].'-'.$post["Kegiatan_edit_data"].'-'.date('Y-m-d').'-'.$post["Judul_edit_data"];
        $config['overwrite']            = true;
        $config['remove_spaces']            = false;
        

        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('File_edit_data')){

        
        $data_upload = array(
            
            'kategori' => $post["Kategori_edit_data"],
            'kegiatan' => $post["Kegiatan_edit_data"],
            'judul' => $post["Judul_edit_data"],
            'jenis' => $post["Jenis_edit_data"],
            'tanggal' => $post["Tanggal_edit_data"],
            'keterangan' => $post["Keterangan_edit_data"],
            'id_user' => $post["Id_user"],
        );
     
        $where = [
            'id_data' => $this->input->post('Id_edit_data')
        ];

        $this->session->set_flashdata('success','Dokumen Berhasil Dirubah');
     
        //$this->Kegiatan_model->update_data($where,$data_upload,'data');
        


        //$dokumen->update_dokumen($last,$size);
        $this->Dokumen_model->update_dokumen($where,$data_upload,'data');
        $this->session->set_flashdata('success','Dokumen Berhasil Disimpan');

            $data["kategori"] = $this->Kategori_model->getAll_kategori();
            $data["kegiatan"] = $this->Kegiatan_model->getAll_kegiatan();
            $data["dokumen"] = $this->Dokumen_model->getAll_dokumen();
        
            $this->load->view("admin/dokumen",$data);
            



        }else{
            $data = array('upload_data' => $this->upload->data());
        

        $dokumen = $this->Dokumen_model;
        
        //$fileName = $_FILES['File_data']['name'];
        $size = $this->upload->data('file_size');

        //$pecah = explode(".", $fileName);
        $last = $this->upload->data('file_ext');


        $data_upload = array(
            
            'kategori' => $post["Kategori_edit_data"],
            'kegiatan' => $post["Kegiatan_edit_data"],
            'judul' => $post["Judul_edit_data"],
            'jenis' => $post["Jenis_edit_data"],
            'tanggal' => $post["Tanggal_edit_data"],
            'keterangan' => $post["Keterangan_edit_data"],
            'file' => $post["Kategori_edit_data"].'-'.$post["Kegiatan_edit_data"].'-'.date('Y-m-d').'-'.$post["Judul_edit_data"].$last,
            'id_user' => $post["Id_user"],
            'ukuran' => $size
        );
     
        $where = [
            'id_data' => $this->input->post('Id_edit_data')
        ];

        $this->session->set_flashdata('success','Dokumen Berhasil Dirubah');
     
        //$this->Kegiatan_model->update_data($where,$data_upload,'data');
        


        //$dokumen->update_dokumen($last,$size);
        $this->Dokumen_model->update_dokumen($where,$data_upload,'data');
        $this->session->set_flashdata('success','Dokumen Berhasil Disimpan');

 
        $data["kategori"] = $this->Kategori_model->getAll_kategori();
        $data["kegiatan"] = $this->Kegiatan_model->getAll_kegiatan();
        $data["dokumen"] = $this->Dokumen_model->getAll_dokumen();
        
        $this->load->view("admin/dokumen",$data);

        }

    }



} 