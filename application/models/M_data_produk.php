<?php

class M_data_produk extends CI_model
{
	private $_table = "tbl_produk";

	public $id_produk;
	public $id_jenis;
	public $nama_produk;
	public $harga;
	public $deskripsi;
	public $berat_produk;
	public $gambar_produk = 'default.jpg';
	public $tanggal;
	public $status_produk;
	public $status_promo;


	public function rules()
	{
		return [
			[
				'field' => 'nama_produk',
				'label' => 'nama_produk',
				'rules' => 'required'
			]

		];
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id_produk = $post["id_produk"];
		$this->id_kategori = $post["id_kategori"];
		$this->id_jenis = $post["id_jenis"];
		$this->nama_produk = $post["nama_produk"];
		$this->harga = $post["harga"];
		$this->deskripsi = $post["deskripsi"];
		$this->berat_produk = $post["berat_produk"];
		$this->gambar_produk = $this->do_upload();
		$this->status_produk = $post["status_produk"];
		$this->status_promo = $post["status_promo"];


		return $this->db->insert($this->_table, $this);
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
		$hasil = $this->db->query("SELECT * FROM tbl_kategori");
		return $hasil;
	}
	function get_jenis($id)
	{
		$query = $this->db->get_where('tbl_jenis', array('id_kategori' => $id));
		return $query;
	}

	function do_upload()
	{
		// setting konfigurasi upload
		$config['upload_path'] = './assets/Gambar/foto_produk';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
		// load library upload
		$this->load->library('upload', $config);
		// upload gambar 1
		$this->upload->do_upload('gambar_produk');
		$result1 = $this->upload->data('file_name');
		return $result1;
	}


	public function tampil_data()
	{
		//$query = $this->db->get('tbl_produk');
		$this->db->from('tbl_produk');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array("id_produk" => $id));
	}

	public function getById($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_produk');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
		$this->db->join('tbl_jenis', 'tbl_jenis.id_jenis = tbl_produk.id_jenis');
		$this->db->where('tbl_produk.id_produk', $id);
		return $this->db->get()->result();
	}

	public function getById2($id)
	{
		return $this->db->get_where($this->_table, ["id_produk" => $id])->row();
	}
	//edit produk
	public function update()
	{
		$post = $this->input->post();
		$this->id_produk = $post["id_produk"];
		$this->nama_produk = $post["nama_produk"];
		$this->harga = $post["harga"];
		$this->deskripsi = $post["deskripsi"];
		$this->berat_produk = $post["berat_produk"];
		$this->gambar_produk = $this->do_upload();


		return $this->db->update($this->_table, $this, array('id_produk' => $post['id_produk']));
	}

	public function tpdetailProduk($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_produk');
		//$this->db->join('tbl_foto_produk', 'tbl_foto_produk.id_produk = tbl_produk.id_produk');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
		$this->db->where('tbl_produk.id_produk', $id);
		return $this->db->get()->result();
	}
	public function getProductById($id)
	{
		$this->db->select("*,tbl_produk.id_produk AS produkId");
		$this->db->from("tbl_produk");
		$this->db->join("tbl_attribut", "tbl_produk.id_produk=tbl_attribut.id_produk");
		//$this->db->order_by("tbl_produk.id_produk", "desc");
		$this->db->where('tbl_produk.id_produk', $id);
		return $this->db->get()->row_array();
	}
	public function getImgProductById($id)
	{
		$product = $this->db->get_where('tbl_produk', ['id_produk' => $id])->row_array();
		return $this->db->get_where('tbl_produk', ['gambar_produk' => $product['id_produk']]);
	}
}