<?php

class M_Banner extends CI_model
{
	private $_table = "tbl_banner";

	public $id_banner;
	public $sub_tittle;
	public $tittle_banner;
	public $deskripsi_banner;
	public $foto_banner;
	public $link_banner;


	public function rules()
	{
		return [
			[
				'field' => 'sub_tittle',
				'label' => 'sub_tittle',
				'rules' => 'required'
			]

		];
	}

	public function save()
	{
		$post = $this->input->post();
		//$this->id_banner = $post["id_banner"];
        $this->sub_tittle = $post["sub_tittle"];
        $this->tittle_banner = $post["tittle_banner"];
        $this->deskripsi_banner = $post["deskripsi_banner"];
        //$this->foto_banner = $post["foto_banner"];
		$this->link_banner = $post["link_banner"];
		$this->foto_banner = $this->do_upload();

		return $this->db->insert($this->_table, $this);
	}

	function do_upload()
	{
		// setting konfigurasi upload
		$config['upload_path'] = './assets/Gambar/foto_banner';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
		// load library upload
		$this->load->library('upload', $config);
		// upload gambar 1
		$this->upload->do_upload('foto_banner');
		$result1 = $this->upload->data('file_name');
		return $result1;
	}
	
	public function update_banner()
	{
		$post = $this->input->post();
		//$this->id_banner = $post["id_banner"];
        $this->sub_tittle = $post["sub_tittle"];
        $this->tittle_banner = $post["tittle_banner"];
        $this->deskripsi_banner = $post["deskripsi_banner"];
        //$this->foto_banner = $post["foto_banner"];
		$this->link_banner = $post["link_banner"];
		$this->foto_banner = $this->do_upload();

		return $this->db->update($this->_table, $this, array('id_banner' => $post['id_banner']));
	}

	pulic function getById($id)
	{
		$query = $this->db->get('tbl_banner');
		return $query->result_array();
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array("id_banner" => $id));
	}

	function get_no_invoice()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(id_produk,4)) AS kd_max FROM tbl_produk WHERE DATE(tanggal)=CURDATE()");
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

	public function tampil_kategori()
	{
		$query = $this->db->get('tbl_kategori');
		return $query->result_array();
	}

	

	

	

	public function getById2($id)
	{
		return $this->db->get_where($this->_table, ["id_produk" => $id])->row();
	}
	//edit produk
	

	public function tpdetailProduk($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_produk');
		//$this->db->join('tbl_foto_produk', 'tbl_foto_produk.id_produk = tbl_produk.id_produk');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
		$this->db->where('tbl_produk.id_produk', $id);
		return $this->db->get()->result();
    }
    
    public function tampil_data()
    {
     $query = $this->db->get('tbl_banner');
     return $query->result_array();
   }


}