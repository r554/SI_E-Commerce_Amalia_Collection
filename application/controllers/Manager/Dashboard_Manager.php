<?php

class Dashboard_Manager extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard_manager');
		$this->load->library('form_validation');
	}

	public function tampil_manager()
	{
		$show = $this->M_dashboard_manager;

		$data = [
			"messi" => $show->tampil_data7(),
			"ronaldo"  => $show->tampil_data10(),
			"maradona" => $this->M_dashboard_manager->jumlah_data_order(),
			"dora" => $this->M_dashboard_manager->jumlah_data_produk_terjual(),
			"upin" => $this->M_dashboard_manager->jumlah_data_stokseluruh()->result(),
		
		];
		
		$this->load->view("Backend/Dashboard_manager",$data);
	}

	
		





}


?>