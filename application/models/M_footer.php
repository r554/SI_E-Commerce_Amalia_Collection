<?php 

class M_footer extends CI_model
{

    private $_table = "tbl_footer";
    public $id_footer;
    public $Alamat;
    public $email;
    public $no_telepon;
    public $fax;
    public $link_map;
    public $tentang_kami;
    public $privasikebijakan;
    public $berlangganan;
    public $twiter;
    public $facebok;
    public $youtube;
    public $instagram;

 

    public function rules()
    {
        return [
            [
                'field' => 'id_footer',
                'label' => 'id_footer',
                'rules' => 'required'
            ]
        ];
    }


   


    public function tampil_footer()
    {
        $this->db->from('tbl_footer');
       
        $query = $this->db->get();
        return $query->result();
    }

    public function updatefooter()
	{

		$post = $this->input->post();
		$this->id_footer = $post["id_footer"];
		$this->Alamat = $post["Alamat"];
		$this->email = $post["email"];
		$this->no_telepon = $post["no_telepon"];
		$this->fax = $post["fax"];
		$this->link_map = $post["link_map"];
        $this->twiter = $post["twiter"];
        $this->youtube = $post["youtube"];
        $this->instagram = $post["instagram"];
$this->facebok = $post["facebok"];


		return $this->db->update($this->_table, $this, array('id_footer' => $post['id_footer']));
	}



}