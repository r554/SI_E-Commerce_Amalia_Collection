<?php

class M_Pesanan extends CI_model
{
    private $_table = "tbl_order";

    public $id_kategori;
    public $nama_kategori;

    public function rules()
    {
        return [
            [
                'field' => 'nama_postingan',
                'label' => 'nama_postingan',
                'rules' => 'required'
            ]

        ];
    }

    public function tampil_semua()
    {
        $query = $this->db->get('tbl_order');
        return $query->result_array();
    }




    public function save()
    {
        $post = $this->input->post();
        $this->id_kategori = $post["id_kategori"];
        $this->nama_kategori = $post["nama_kategori"];


        return $this->db->insert($this->_table, $this);
    }

    public function tampil_data()
    {
        $query = $this->db->get('tbl_kategori');
        return $query->result_array();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kategori" => $id));
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kategori" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kategori = $post["id_kategori"];
        $this->nama_kategori = $post["nama_kategori"];

        return $this->db->update($this->_table, $this, array('id_kategori' => $post['id_kategori']));
    }
}
