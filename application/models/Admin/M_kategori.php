<?php

class M_Kategori extends CI_model
{
	private $_table = "tbl_kategori";

	//public $id_kategori;
	public $nama_kategori;
	public $gambar_kategori;

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

    public function tampil_kategori()
	{
		$query = $this->db->get('tbl_kategori');
		return $query->result_array();
	}

    public function get_tampil_detail_kategori($id)
    {
        //$this->db->select('*');
        $this->db->from('tbl_kategori');
        $this->db->join('tbl_jenis', 'tbl_jenis.id_kategori = tbl_kategori.id_kategori');
        $this->db->where('tbl_kategori.id_kategori', $id);

        $query = $this->db->get();
        return $query->result();
    }

	public function save_kategori_jenis()
	{
		$post = $this->input->post();
        $this->id_kategori = $post["id_kategori"];
        $this->nama_jenis = $post["nama_jenis"];
		return $this->db->insert($this->_table, $this);
	}

	public function save_kategori()
	{
		$post = $this->input->post();
		$this->nama_kategori = $post["nama_kategori"];
		$this->gambar_kategori = $this->do_upload_kategori();
		return $this->db->insert($this->_table, $this);
	}

	function do_upload_kategori()
	{
		// setting konfigurasi upload
		$config['upload_path'] = './assets/Frontend/images';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
		// load library upload
		$this->load->library('upload', $config);
		// upload gambar 1
		$this->upload->do_upload('gambar_kategori');
		$result1 = $this->upload->data('file_name');
		return $result1;
	}
	
	public function update_kategori()
	{
		$post = $this->input->post();
        $this->nama_kategori = $post["nama_kategori"];
        $this->gambar_kategori = $post["gambar_kategori"];
		
		//$this->foto_banner = $this->do_upload();
		if (!empty($_FILES["gambar_kategori"]["name"])) {
			$this->gambar_kategori = $this->do_upload_kategori();
		} else {
			  $this->gambar_kategori = $post["gambar_kategori"];
		}

		return $this->db->update($this->_table, $this, array('id_kategori' => $post['id_kategori']));
	}

	public function getById($id)
	{
		//$query = $this->db->get('tbl_banner');
		//return $query->result();
		return $this->db->get_where($this->_table, ['id_kategori' => $id])->result();
	}

	public function tampil_data()
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
    
    

}