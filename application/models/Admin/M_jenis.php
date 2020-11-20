<?php

class M_jenis extends CI_model
{
	private $_table = "tbl_jenis";

    ///public $id_jenis;
    public $id_kategori;
	public $nama_jenis;

	public function rules()
	{
		return [
			[
				'field' => 'id_kategori',
				'label' => 'id_kategori',
				'rules' => 'required'
			]

		];
	}

	public function save_kategori_jenis()
	{
		$post = $this->input->post();
        $this->id_kategori = $post["id_kategori"];
        $this->nama_jenis = $post["nama_jenis"];
		return $this->db->insert($this->_table, $this);
	}
    
	public function delete($id)
	{
		return $this->db->delete($this->_table, array("id_jenis" => $id));
	}
	
}
?>