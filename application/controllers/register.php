<?php 

class register extends CI_Controller{

    function __construct(){

		parent::__construct();		
        $this->load->model('M_register');
        $this->load->helper('url');
        $this->load->library('form_validation');
	}
    
    public function tambah_register()
    {
        $model = $this->M_register;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());

        if ($validation->run()) {
            $model->save_register();
            $this->session->set_flashdata('success', 'Berhasil disimpan');

            $this->load->view("Frontend/landing_page");
        }
    }




}
        
       
        

        ?>