<?php

class dashboard_admin extends CI_Controller {
    public function index()
	{
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard_admin');
        // $this->load->view('admin/dashboard_admin', $data);
        $this->load->view('templates_admin/footer');
	}
}