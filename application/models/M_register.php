<?php 

class M_register extends CI_model
{
   
	private $_table = "tbl_pelanggan";
    public $kd_pelanggan;
    public $nama_pelanggan;
    public $no_pelanggan;
    public $email_pelanggan;
    public $alamat_pelanggan;
    public $kode_pos;
    public $kabupaten;
    public $provinsi;
    public $foto_pelanggan="default.jpg";
    public $username_pelanggan;
    public $password_pelanggan;



    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required'
            ]
        ];
    }


    public function save_register()
    {
        $post = $this->input->post();
        $this->nama_pelanggan = $post["name"];
        $this->no_pelanggan = $post["phone"];
        $this->email_pelanggan = $post["email"];
        $this->alamat_pelanggan = $post["alamat"];
        $this->username_pelanggan = $post["username"];
        $this->password_pelanggan = $post["password"];

        return $this->db->insert($this->_table, $this);
    }





}