<?php

class profil extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/M_profil');
        $this->load->library('form_validation');
	}


	public function save()
	{
		$model = $this->MP;
		
		if ($model->save()) {
			redirect(site_url('crud/tampil'));
		}
	}

	public function tampil($id)
	{
        
        $show = $this->M_profil;

		$data = [
		"user" => $show->getById($id)
        ];
        
    

		$this->load->view("Backend/profil", $data);
    }
    
    public function ubah_password($id)
	{
        
        $show = $this->M_profil;

		$data = [
		"user" => $show->getById($id)
        ];
        
    

		$this->load->view("Backend/ubahpw", $data);
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
		$model = $this->M_profil;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());


		if ($validation->run()) {
			$model->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			//redirect(site_url('Admin/profil/tampil/'.$id));
		}
		
		$data["user"] = $model->getById($id);

        $this->load->view("Backend/profil", $data);
        

	}

	public function edit_ubahpw($id = null)
	{
		$model = $this->M_profil;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());


		if ($validation->run()) {
			$model->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			//redirect(site_url('Admin/profil/tampil/'.$id));
			$this->session->sess_destroy(); // Hapus semua session
			//redirect('welcome'); // Redirect ke halaman login
			redirect(site_url('Auth_Admin'));
		}
		
		$data["user"] = $model->getById($id);

        $this->load->view("Backend/ubahpw", $data);
        

	}

}


?>