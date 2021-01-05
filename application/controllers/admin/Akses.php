<?php

class Akses extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        
		if ($this->session->userdata('masuk')) {
        $this->load->view("admin/akses");
               
        }else{
        
        redirect("admin/login");
        }
        // load view admin/overview.php
        
	}
}