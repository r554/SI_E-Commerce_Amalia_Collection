<?php

class data_karyawan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/M_data_karyawan');
		$this->load->library('form_validation');
	}


	public function save()
	{
		$model = $this->M_data_karyawan;

		if ($model->save()) {
			$this->session->set_flashdata('success', 'Data Karyawan Berhasil Ditambahkan');
			redirect(site_url('Admin/data_karyawan/tampil'));
		}
	}

	public function tampil()
	{
		$show = $this->M_data_karyawan;
		$data = [
			"karyawan" => $show->tampil_data(),
			//"invoice" => $show->get_no_invoice(),
		];

		$this->load->view("Backend/data_karyawan", $data);
	}

	public function tampil_detail($id)
	{

		$data['detailKaryawan'] = $this->M_data_karyawan->tpdetailKaryawan($id);
		$this->load->view('Backend/detail_karyawan', $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_data_karyawan->delete($id)) {
			$this->session->set_flashdata('hapus', 'Berhasil Menghapus Produk');
			redirect(site_url('Admin/data_karyawan/tampil'));
		}
	}

	public function tambah_karyawan()
	{
		$karyawan = $this->M_data_karyawan;
		$data = [
			"invoice" => $karyawan->get_no_invoice(),
			//"kategori" => $this->M_data_produk->tampil_kategori(),
		];

		$this->load->view("Backend/tambah_data_karyawan", $data);
	}

	public function edit($id = null)
	{

		$model = $this->M_data_karyawan;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());


		if ($validation->run()) {
			$model->update();
			$this->session->set_flashdata('edit', 'Berhasil disimpan');
			redirect(site_url('Admin/data_karyawan/tampil'));
		}

		$data["edit"] = $model->getById($id);
		//var_dump($data);
		//die;

		$this->load->view("Backend/edit_karyawan", $data);
	}
}