<?php

class M_register extends CI_model
{

    private $_table = "tbl_pelanggan";

    public $id_pelanggan;
    public $nama_pelanggan;
    public $no_pelanggan;
    public $email_pelanggan;
    public $alamat_pelanggan;
    public $kode_pos_pelanggan;
    public $kabupaten;
    public $provinsi;
    public $foto_pelanggan = "default.jpg";
    public $username_pelanggan;
    public $password_pelanggan;



    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ]
        ];
    }


    public function save_register()
    {
        $post = $this->input->post();
        $this->id_pelanggan = $post["id_pelanggan"];
        $this->username_pelanggan = $post["username"];
        $this->email_pelanggan = $post["email"];
        $this->password_pelanggan = md5($post["password"]);

        return $this->db->insert($this->_table, $this);
    }

    function get_no_invoice()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_pelanggan,4)) AS kd_max FROM tbl_pelanggan WHERE DATE(tanggal_daftar)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy') . $kd;
    }
}