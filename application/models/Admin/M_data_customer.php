<?php

class M_data_customer extends CI_model
{
    private $_table = "tbl_pelanggan";

    //public $id_pelanggan;
    public $nama_pelanggan;
    public $no_pelanggan;
    public $email_pelanggan;
    public $alamat_pelanggan;
    public $kode_pos;
    public $kabupaten;
    public $provinsi;
    public $username_pelanggan;
    public $password_pelanggan;
    public $tanggal_daftar;
    public $foto_pelanggan = 'default.jpg';
    public $Status;



    public function rules()
    {
        return [
            [
                'field' => 'nama_pelanggan',
                'label' => 'nama_pelanggan',
                'rules' => 'required'
            ]

        ];
    }


    public function update()
    {
        $post = $this->input->post();
        $this->nama_pelanggan = $post["nama_pelanggan"];
        $this->no_pelanggan = $post["no_pelanggan"];
        $this->email_pelanggan = $post["email_pelanggan"];
        $this->alamat_pelanggan = $post["alamat_pelanggan"];
        $this->kode_pos = $post["kode_pos"];
        $this->kabupaten = $post["kabupaten"];
        $this->provinsi = $post["provinsi"];
        $this->username_pelanggan = $post["username_pelanggan"];
        $this->password_pelanggan = $post["password_pelanggan"];
        $this->tanggal_daftar = $post["tanggal_daftar"];
        $this->foto_pelanggan = $post["foto_pelanggan"];
        $Status = $post["Status"];

        return $this->db->update($this->_table, $this, array('id_pelanggan' => $post['id_pelanggan']));
    }


    public function tampil_data()
    {
        //$query = $this->db->get('tbl_produk');
        $this->db->from('tbl_pelanggan');
        // $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_pelanggan');
        // $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
        $this->db->where('tbl_pelanggan.id_pelanggan', $id);
        return $this->db->get()->result();
        //return $this->db->get_where($this->_table, ["id_produk" => $id])->row();
    }

    public function getById2($id)
    {
        return $this->db->get_where($this->_table, ["id_pelanggan" => $id])->row();
    }


    public function tpdetailCustomer($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_pelanggan');
        //$this->db->join('tbl_foto_produk', 'tbl_foto_produk.id_produk = tbl_produk.id_produk');
        // $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
        $this->db->where('tbl_pelanggan.id_pelanggan', $id);
        return $this->db->get()->result();
    }
}