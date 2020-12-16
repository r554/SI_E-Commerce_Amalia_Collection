<?php
defined('BASEPATH') or exit('No direct script access allowed');

class blog extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->model('M_blog');
     $this->load->model('M_tutorial');
    $this->load->library('form_validation');
	}



public function tampil_tentangkami()
    {
      $show = $this->M_blog;
      $data = 
      ["kirana" => $show->tampil_text_tentangkami(),            
      ];
      $this->load->view('Backend/tentangkami',$data);
   }


public function tampil_tentangkami_frontend()
  {
    $show = $this->M_blog;
    $data = 
    ["indah" => $show->tampil_text_tentangkami(),            
    ];
     $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/tentang_kami',$data);
   }




   public function edit_tentangkami($id = null)
   {
     $model = $this->M_blog;
     $validation = $this->form_validation;
     $validation->set_rules($model->rules());
 
 
     if ($validation->run()) {
       $model->update_tentangkami();
       $this->session->set_flashdata('message', 'Username Atau Password Salah');
       redirect(site_url('blog/tampil_tentangkami/'.$id));
     }
    
        $data["kirana"] = $model->tampil_text_tentangkami;
        //redirect(site_url('Admin/footer/tampilfooter'));
         $this->load->view("Backend/tentangkami/", $data);
       }

    

public function tampil_blog()
    {
        $show = $this->M_tutorial;
        $data = 
        ["data" => $show->tampil_tutorial(),            
      ];
     
       $this->load->view('Backend/blog',$data);
   }

      
   
   public function tambah_blog()
    {
      //   $show = $this->M_blog;
      //   $data = 
      //   ["kirana" => $show->tampil_text_tentangkami(),            
      // ];
       $this->load->view('Backend/tambah_blog');
   }
      

   public function tampil_edit_blog($id)
    {
        $show = $this->M_tutorial;
        $data = 
        ["semongko" => $show->tampil_edit_blog($id),            
      ];
       $this->load->view('Backend/edit_blog',$data);
   }
     
public function save_blog()
	{
		$model = $this->M_tutorial;

		if ($model->save_blog()) {
			redirect(site_url('blog/tampil_blog'));
		}
  }  
  
        
 
public function edit_blog($id = null)
   {
     $model = $this->M_tutorial;
     $validation = $this->form_validation;
     $validation->set_rules($model->rules());
 
 
     if ($validation->run()) {
       $model->update_blog();
       $this->session->set_flashdata('message', 'Username Atau Password Salah');
       redirect(site_url('blog/tampil_blog/'.$id));
     }
    
        $data["pisang"] = $model->tampil_tutorial;
        //redirect(site_url('Admin/footer/tampilfooter'));
         $this->load->view("Backend/edit_blog/", $data);
    }
 
 
	
  public function delete_blog($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_blog->delete_blog($id)) {
        $this->session->set_flashdata('message', 'Blog Berhasil Dihapus');
			redirect(site_url('blog/tampil_blog/'.$id));
		}
	}

// Bagian FrontEnd Tutorial

public function tampil_tutorial()
  {
    $show = $this->M_tutorial;
    $data = 
    ["haris" => $show->tutorial_frontend(),            
    ];
     $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/halaman_tutorial',$data);
   }
  
public function tampil_detail_tutorial($id)
  {
    $show = $this->M_tutorial;
    $data = 
    ["ferdi" => $show->detail_tutorial($id),            
    ];
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/detail_tutorial',$data);
   }


   
}