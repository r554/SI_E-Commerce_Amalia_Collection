<?php

class kategori extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->model('Admin/M_kategori');
        $this->load->model('Admin/M_jenis');
		$this->load->library('form_validation');
	}

    public function tampil_kategori()
	{
		$show = $this->M_kategori;
		$data = [
			"kategori" => $show->tampil_kategori()
		];

		$this->load->view("Backend/tampil_kategori", $data);
		
    }
    
    public function tampil_detail_kategori($id)
    {
        $show = $this->M_kategori;
        $data = [
            "kategori" => $show->get_tampil_detail_kategori($id),
        ];
        // var_dump($data);
        // die;
        $this->load->view("Backend/detail_kategori", $data);
    }

	public function save_kategori_jenis($id)
	{
		$model = $this->M_jenis;
	
		if ($model->save_kategori_jenis()) {
			redirect(site_url('Admin/kategori/tampil_detail_kategori/'.$id));
		}
	}

	public function save_kategori()
	{
		$model = $this->M_kategori;
	
		if ($model->save_kategori()) {
			redirect(site_url('Admin/kategori/tampil_kategori/'));
		}
	}

	public function delete_kategori($id = null)
	{
		if (!isset($id)) show_404();
		$id2 = $this->uri->segment('5');

		if ($this->M_jenis->delete($id)) {
			redirect(site_url('Admin/kategori/tampil_detail_kategori/'.$id2));
		}
	}
 
	public function tambah_data()
	{
		$this->load->view("Backend/tambah_banner");
	}

	public function edit_kategori($id = null)
	{

		$model = $this->M_kategori;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());


		if ($validation->run()) {
			$model->update_kategori();
			redirect(site_url('Admin/kategori/tampil_kategori/'));
			$this->session->set_flashdata('message', 'Berhasil Disimpan');
		}

		$data["edit_kategori"] = $model->getById($id);
		// var_dump($data);
		// die;
		$this->load->view("Backend/edit_kategori", $data);
	}

	public function tampil_detail($id)
	{

		$data['detailProduk'] = $this->M_data_produk->tpdetailProduk($id);
		$this->load->view('Backend/detail_produk', $data);
	}

	
	public function hapus_kategori($id)
	{

		$this->db->set('status', '1');
		$this->db->where('id_kategori', $id);
		$this->db->update('tbl_kategori');

		redirect(site_url('Admin/kategori/tampil_kategori/'));
	}
	

	
}