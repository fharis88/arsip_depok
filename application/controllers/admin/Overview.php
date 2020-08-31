<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("overview_model");
	}

	public function index()
	{
        // load view admin/overview.php
        
        if ($this->session->userdata('masuk')) {
        	$data["kategori"]= $this->overview_model->getAll_data();
        	$data["summary"]= $this->overview_model->getAll_summary();

            $this->load->view("admin/overview",$data);
        }else{
            redirect('login');
        }

	}
}