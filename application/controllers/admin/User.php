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
        if ($this->session->userdata('masuk') and $this->session->userdata('tipe_user')=="admin") {
            $data["user"] = $this->user_model->getAll_user();
        
        $this->load->view("admin/user",$data);
        }else{
            redirect('login');
        }

		

	}

	public function add_user()
    {

        $user = $this->user_model;
        $user->save_user();
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

    public function edit_user($id = null)
    {
        if (!isset($id)) redirect('admin/user');
        


        $user = $this->user_model;
        
        $data["user"] = $kegiatan->getById_user($id);
        
        
        $this->load->view("admin/edit_user",$data);
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

