<?php

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
		$this->load->library('form_validation');
	}
 

	public function save()
	{
		$model = $this->MP;
		
		if ($model->save()) {
			redirect(site_url('crud/tampil'));
		}
	}

	public function tampil()
	{
		$show = $this->M_dashboard;

		$data = [
			"user" => $show->tampil_stok(),
			"user2"  => $show->pesanan_masuk(),
			"kaka" => $show->order_masuk(),
			"dora" => $show->produk_terjual(),
			"jarjit" => $show->stok()->result(),
		];
	
		$this->load->view("Backend/DashboardAdmin", $data);
	}


    


















	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->MP->delete($id)) {
			redirect(site_url('crud/tampil'));
		}
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('welcome');

		$model = $this->MP;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());


		if ($validation->run()) {
			$model->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect(site_url('crud/tampil'));
		}

		$data["data"] = $model->getById($id);

		$this->load->view("hello_edit", $data);
	}



}


?>