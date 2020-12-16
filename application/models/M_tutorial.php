<?php 

class M_tutorial extends CI_model
{

    private $_table = "tbl_tutorial";
    public $judul_tutorial;
    public $deskripsi_tutorial;
    public $link_vidio;
    public $tgl;




    public function rules()
    {
        return [
            [
                 'field' => 'id_tutorial',
                'label' => 'id_tutorial',
                'rules' => 'required'
            ]
        ];
    }


    public function tampil_tutorial()
    {
        $this->db->from('tbl_tutorial');
       
        $query = $this->db->get();
        return $query->result();
    }

     public function tampil_edit_blog($id)
    {
        $this->db->from('tbl_tutorial');
         $this->db->where('id_tutorial',$id);
       
        $query = $this->db->get();
        return $query->result();
    }



     public function save_blog()
    {
        $post = $this->input->post();
        $this->judul_tutorial = $post["judul_tutorial"];
        $this->tgl = $post["tgl"];
        $this->link_vidio = $post["link_vidio"];
        $this->deskripsi_tutorial = $post["deskripsi_tutorial"];
        $this->gbr_tutorial = $this->do_upload_saveblog();
        
        return $this->db->insert($this->_table, $this);
    }

function do_upload_saveblog()
	{
		// setting konfigurasi upload
		$config['upload_path'] = './assets/Gambar/blog'; 
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
		// load library upload
		$this->load->library('upload', $config);
		// upload gambar 1
		$this->upload->do_upload('gbr_tutorial');
		$result1 = $this->upload->data('file_name');
		return $result1;
	}


 
   public function update_blog()
	{

		$post = $this->input->post();
        $this->judul_tutorial = $post["judul_tutorial"];
        $this->tgl = $post["tgl"];
        $this->link_vidio = $post["link_vidio"];
        $this->deskripsi_tutorial = $post["deskripsi_tutorial"];
              if (!empty($_FILES["gbr_tutorial"]["name"])) {
			$this->gbr_tutorial = $this->do_upload_blog();
		} else {
			  $this->gbr_tutorial = $post["gbr_tutorial"];
		}
		
		return $this->db->update($this->_table, $this, array('id_tutorial' => $post['id_tutorial']));
    }

 function do_upload_blog()
	{
		// setting konfigurasi upload
		$config['upload_path'] = './assets/Gambar/blog'; 
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
		// load library upload
		$this->load->library('upload', $config);
		// upload gambar 1
		$this->upload->do_upload('gbr_tutorial');
		$result1 = $this->upload->data('file_name');
		return $result1;
	}





// ForntEnd Tutorial

 public function tutorial_frontend()
    {
        $this->db->from('tbl_tutorial');
       
        $query = $this->db->get();
        return $query->result();
    }

public function detail_tutorial($id)
    {
         $this->db->from('tbl_tutorial');
         $this->db->where('id_tutorial',$id);
       
        $query = $this->db->get();
        return $query->result();
    }


}