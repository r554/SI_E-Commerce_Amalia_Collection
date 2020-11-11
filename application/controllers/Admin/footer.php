<?php
defined('BASEPATH') or exit('No direct script access allowed');

class footer extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->model('M_footer');
    $this->load->library('form_validation');
	}

    public function tampilfooter()
	{
        $show = $this->M_footer;
        $data = 
        ["footer" => $show->tampil_footer(),            
      ];
    //   var_dump($data);
    //   die;
       $this->load->view('Backend/footer',$data);
        }
        
        public function editfooter($id = null)
        {
          $model = $this->M_footer;
          $validation = $this->form_validation;
          $validation->set_rules($model->rules());
      
      
          if ($validation->run()) {
            $model->updatefooter();
            $this->session->set_flashdata('message', 'Username Atau Password Salah');
            redirect(site_url('Admin/footer/tampilfooter/'.$id));
          }
          
           $data["z"] = $model->tampil_footer;
          //redirect(site_url('Admin/footer/tampilfooter'));
               $this->load->view("Backend/footer", $data);
            
      
        }
      



}