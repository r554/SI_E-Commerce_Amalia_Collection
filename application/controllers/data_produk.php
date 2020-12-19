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

	//untuk menyimpan tambah data produk
	public function save()
	{
		$model = $this->M_data_produk;

		if ($model->save()) {
			$this->session->set_flashdata('success', 'Berhasil Menambah Produk');
			redirect(site_url('data_produk/tampil'));
		}
	}

	//untuk menampilkan produk keseluruhan 
	public function tampil()
	{
		$show = $this->M_data_produk;
		$data = [
			"produk" => $show->tampil_data(),
			"invoice" => $show->get_no_invoice(),
		];
		$this->load->view("Backend/data_produk", $data);
	}

	// untuk menampilkan detail produk sesuai id 
	public function tampil_detail($id)
	{
		$data = [
			"detailProduk" => $this->M_data_produk->tpdetailProduk($id),
			"attribut" => $this->M_warna->tampil_warna($id),
		];

		$this->load->view('Backend/detail_produk', $data);
	}

	// untuk menghapus produk 
	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_data_produk->delete($id)) {
			$this->session->set_flashdata('hapus', 'Berhasil Menghapus Produk');
			redirect(site_url('data_produk/tampil'));
		}
	}

	//untuk menambahkan produk 
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

	//untuk menyimpan warna dan stok produk 
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

	//untuk menyimpan warna dan stok produk pada edit
	public function save_warna_edit()
	{
		$id_produk = $this->input->post('id_produk');
		$product = $this->M_data_produk;
		$model = $this->M_warna;
		// $data = [
		// 	"edit" => $product->getById($id_produk),
		// 	"kategori" => $this->M_data_produk->tampil_kategori(),
		// 	"warnastok" => $this->M_data_produk->edit_warna_stok($id_produk),
		// ];

		if ($model->save_warna()) {
			//$this->load->view("Backend/data_produk_tambah", $data);
			redirect(site_url('data_produk/edit/' . $id_produk));
		}
	}

	//untuk menghapus warna dan stok 
	public function hapus_warna($id = null)
	{

		$id_produk = $this->uri->segment('4');
		//echo $id_produk;
		$model = $this->M_data_produk;

		$data = [
			"edit" => $model->getById($id_produk),
			"kategori" => $this->M_data_produk->tampil_kategori(),
			"warnastok" => $this->M_data_produk->edit_warna_stok($id_produk),
		];

		if ($this->M_warna->delete($id)) {
			$this->session->set_flashdata('hapus', 'Berhasil Menghapus Produk');
			//$this->load->view("Backend/edit_produk", $data);
			redirect(site_url('data_produk/edit/' . $id_produk));
		}
	}

	//untuk menampilkan view edit 
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
			"warnastok" => $this->M_data_produk->edit_warna_stok($id),
		];
		// var_dump($data);
		// die;
		$this->load->view("Backend/edit_produk", $data);
	}

	//untuk menampilkan tampilan warna dan stok 
	public function edit_warna_stok($id = null)
	{

		$model = $this->M_data_produk;
		$validation = $this->form_validation;
		$id_produk = $this->input->post('id_produk');

		$this->form_validation->set_rules('warna', 'warna', 'required');

		if ($validation->run()) {
			$model->update_warna();
			$this->session->set_flashdata('success', 'Data Produk Berhasil Diupdate');
			redirect(site_url('data_produk/edit/' . $id_produk));
		}
		$data = [
			"warnastok" => $this->M_data_produk->edit_warna_stok2($id),
		];
		// var_dump($data);
		// die;
		$this->load->view("Backend/edit_warna", $data);
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

	//Tambah Foto yang simpan
	function tambah_foto()
	{
		$model = $this->M_data_produk;

		if ($model->save_gambar()) {
			redirect(site_url('data_produk/tampil_foto/' . $this->input->post('id_produk')));
		}
	}

	//Menampilkan tambah foto 
	public function tampil_foto($id)
	{
		$data = [
			"foto_produk" => $this->M_data_produk->tampil_gambar($id),
		];

		$this->load->view('Backend/tambah_foto_produk', $data);
	}

	//hapus gambar tambahan
	public function delete_foto($id = null, $id2)
	{
		if (!isset($id)) show_404();

		if ($this->M_data_produk->delete_foto($id)) {
			redirect(site_url('data_produk/tampil_foto/' . $id2));
		}
	}
}