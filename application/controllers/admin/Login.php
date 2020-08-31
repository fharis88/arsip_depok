<?php

class Login extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
        // load view admin/overview.php

        if ($this->session->userdata('masuk')) {
        redirect(base_url());
        
        $this->load->view("admin/user",$data);
        }else{
        $this->load->view("admin/login");
        }


        
	}

	function auth(){
        $username=$this->input->post('username_login');
        $password=$this->input->post('password_login');
 
        $cek_user=$this->login_model->auth_user($username,$password);
 
        if($cek_user->num_rows() > 0){ //jika login sebagai dosen
                $data=$cek_user->row_array();
                $this->session->set_userdata('masuk',TRUE);
                $this->session->set_userdata('nip_lama',$data['nip_lama']);
                $this->session->set_userdata('nama',$data['nama']);
                $this->session->set_userdata('tipe_user',$data['tipe_user']);
                $this->session->set_userdata('seksi',$data['seksi']);
                redirect('dashboard');
                
 
        }else{  // jika username dan password tidak ditemukan atau salah
                            
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect('login');
                   
        }
 
    }

    public function logout(){
        $this->session->sess_destroy();
        
        redirect('login');
    }

}