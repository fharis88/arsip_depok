<?php

class Not_found extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->output->set_status_header('404');
        $this->load->view("not_found");
	}
}