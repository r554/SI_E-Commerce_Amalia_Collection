<?php

class Banner extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/M_Banner');
		$this->load->library('form_validation');
	}


	public function save_banner()
	{
		$model = $this->M_Banner;

		if ($model->save()) {
			redirect(site_url('Admin/Banner/tampil'));
		}
	}

	public function tambah_data()
	{
		$this->load->view("Backend/tambah_banner");
	}

	public function tampil()
	{
		$show = $this->M_Banner;
		$data = [
			"banner" => $show->tampil_data()
		];

		$this->load->view("Backend/banner", $data);
		
	}

	public function edit_banner($id = null)
	{

		$model = $this->M_Banner;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());


		if ($validation->run()) {
			$model->update_banner();
			//$this->session->set_flashdata('success', 'Berhasil disimpan');
			$this->session->set_flashdata('message', 'Berhasil Disimpan');
		}

		$data["edit_banner"] = $model->getById($id);
		// var_dump($data);
		// die;
		$this->load->view("Backend/edit_banner", $data);
	}


	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_Banner->delete($id)) {
			redirect(site_url('Admin/Banner/tampil'));
		}
	}

	public function tampil_detail($id)
	{

		$data['detailProduk'] = $this->M_data_produk->tpdetailProduk($id);
		$this->load->view('Backend/detail_produk', $data);
	}

	

	

	
}