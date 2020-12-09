<?php

class data_produk extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data_produk');
		$this->load->model('Admin/M_warna');
		$this->load->library('form_validation');
	}


	public function save()
	{
		$model = $this->M_data_produk;

		if ($model->save()) {
			redirect(site_url('data_produk/tampil'));
		}
	}

	public function tampil()
	{
		$show = $this->M_data_produk;
		$data = [
			"produk" => $show->tampil_data(),
			"invoice" => $show->get_no_invoice(),
		];

		$this->load->view("Backend/data_produk", $data);
	}

	public function tampil_detail($id)
	{
		$data = [
			"detailProduk" => $this->M_data_produk->tpdetailProduk($id),
			"attribut" => $this->M_warna->tampil_warna($id),
		];

		$this->load->view('Backend/detail_produk', $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_data_produk->delete($id)) {
			redirect(site_url('data_produk/tampil'));
		}
	}

	public function tambah_produk()
	{
		$id_produk = $this->M_data_produk->get_no_invoice();
		$product = $this->M_data_produk;
		$data = [
			"invoice" => $product->get_no_invoice(),
			"kategori" => $this->M_data_produk->tampil_kategori(),
			"attribut" => $this->M_warna->tampil_warna($id_produk),
		];

		$this->load->view("Backend/data_produk_tambah", $data);
	}

	public function save_warna()
	{
		$id_produk = $this->input->post('id_produk');
		$product = $this->M_data_produk;
		$model = $this->M_warna;
		$data = [
			"invoice" => $product->get_no_invoice(),
			"kategori" => $this->M_data_produk->tampil_kategori(),
			"attribut" => $this->M_warna->tampil_warna($id_produk),
		];

		if ($model->save_warna()) {
			//$this->load->view("Backend/data_produk_tambah", $data);
			redirect(site_url('data_produk/tambah_produk/' . $data));
		}
	}

	public function hapus_warna($id = null)
	{

		$id_produk = $this->uri->segment("4");
		$product = $this->M_data_produk;
		$model = $this->M_warna;
		$data = [
			"invoice" => $product->get_no_invoice(),
			"kategori" => $this->M_data_produk->tampil_kategori(),
			"attribut" => $this->M_warna->tampil_warna($id_produk),
		];
		if (!isset($id)) show_404();

		if ($this->M_warna->delete($id)) {
			redirect(site_url('data_produk/tambah_produk/' . $data));
		}
	}

	public function edit($id = null)
	{

		$model = $this->M_data_produk;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());


		if ($validation->run()) {
			$model->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect(site_url('data_produk/tampil'));
		}
		$data = [
			"edit" => $model->getById($id),
			"kategori" => $this->M_data_produk->tampil_kategori(),
		];
		// var_dump($data);
		// die;
		$this->load->view("Backend/edit_produk", $data);
	}

	public function detail_product($id)
	{
		$getProduct = $this->M_data_produk->getProductById($id);
		if ($getProduct == NULL) {
			redirect(base_url() . '404');
		} else {
			// $this->Products_model->updateViewer($slug);
			// $data['title'] = $getProduct['title'] . ' - ' . $this->config->item('app_name');
			// $data['css'] = 'detail';
			// $data['responsive'] = '';
			$data['product'] = $getProduct;
			$data['img'] = $this->M_data_produk->getImgProductById($id);
			$this->load->view('Frontend/template/head1');
			$this->load->view('Frontend/template/navbar3');
			$this->load->view('Frontend/detail_produk', $data);
		}
	}
	//jenis kategori
	function jenis()
	{
		$id = $this->input->post('id');
		$data = $this->M_data_produk->get_jenis($id)->result();
		echo json_encode($data);
	}
}