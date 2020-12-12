<?php

class M_warna extends CI_model
{
    private $_table = "tbl_attribut";

    ///public $id_attribut;
    public $id_produk;
    public $warna;
    public $qty;

    public function rules()
    {
        return [
            [
                'field' => 'id_produk',
                'label' => 'id_produk',
                'rules' => 'required'
            ]

        ];
    }


    public function save_warna()
    {
        $post = $this->input->post();
        $this->id_produk = $post["id_produk"];
        $this->warna = $post["warna"];
        $this->qty = $post["qty"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_attribut" => $id));
    }

    public function hapus_warna($id)
    {
        return $this->db->delete($this->_table, array("id_attribut" => $id));
    }

    //berdasarkan kategori
    public function tampil_warna($id_produk)
    {
        $this->db->select('*');
        $this->db->from('tbl_attribut');
        // $this->db->join('tbl_produk', 'tbl_produk.id_produk = tbl_attribut.id_produk');
        $this->db->where('tbl_attribut.id_produk', $id_produk);
        return $this->db->get()->result();
    }
}