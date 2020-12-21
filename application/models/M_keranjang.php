<?php

class M_keranjang extends CI_model
{
    private $_table = "tbl_keranjang";


    public $id_order;
    public $id_pelanggan;
    public $grand_qty;
    public $grand_total;

    public $total;
    public $jasa_pengiriman;
    public $biaya_pengiriman;
    public $jenis_layanan;
    public $nama_penerima;
    public $no_penerima;
    public $email_penerima;
    public $alamat_penerima;
    public $kode_pos;
    public $provinsi_penerima;
    public $kabupaten_penerima;
    public $kecamatan_penerima;
    public $kelurahan_penerima;
    public $status;



    public function rules()
    {
        return [
            [
                'field' => 'id_pelanggan',
                'label' => 'id_pelanggan',
                'rules' => 'required'
            ]

        ];
    }



    // Function Untuk Menampilkan Data Keranjang Berdasarkan User Login
    public function getById_keranjang($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_keranjang');
        $this->db->join('tbl_produk', 'tbl_produk.id_produk = tbl_keranjang.id_produk');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id_pelanggan = tbl_keranjang.id_pelanggan');
        $this->db->where('tbl_keranjang.id_pelanggan', $id);
        return $this->db->get()->result();
    }

    // Function Untuk Menghitung Jumlah Data Keranjang Berdasarkan User Login
    function jumlah_data_keranjang()
    {
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('tbl_keranjang');
        $this->db->where('tbl_keranjang.id_pelanggan', $id);
        return $this->db->get()->num_rows();
    }

    // Function Untuk Menyimpan Data Ke Tabel Order
    public function save_order()
    {
        $post = $this->input->post();
        $this->id_order = $post["id_order"];
        $this->id_pelanggan = $post["id_pelanggan"];
        $this->grand_qty = $post["grand_qty"];
        $this->grand_total = $post["grand_total"];


        return $this->db->insert('tbl_order', $this);
    }

    // Function Untuk Membuat Auto Incremen id Order
    function id_order()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_order,4)) AS kd_max FROM tbl_order WHERE DATE(tanggal_order)=CURDATE()");
        $kd = "";
        $i = "INV";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return $i . date('dmy') . $kd;
    }

    // Function Untuk Menghapus Data Produk Dari Keranjang
    public function delete_produk($id)
    {
        return $this->db->delete('tbl_keranjang', array("id_keranjang" => $id));
    }


    // Function Untuk Menyimpan Data Ke Tabel Order
    public function save_order_detail()
    {
        $post = $this->input->post();
        $this->id_order = $post["id_order"];
        $this->id_produk = $post["id_produk"];
        $this->nama_produk = $post["nama_produk"];
        $this->sub_qty = $post["sub_qty"];
        $this->harga_final = $post["harga_final"];
        $this->warna = $post["harga_final"];


        return $this->db->insert('tbl_detail_order', $this);
    }

    // Function Untuk Menyimpan Multi Data Ke Tabel Order 
    public function save_batch($data2)
    {
        return $this->db->insert_batch('tbl_detail_order', $data2);
    }

    public function update_tbl_detail()
    {
        $post = $this->input->post();
        $this->id_order = $post["id_order"];
        $this->id_pelanggan = $post["id_pelanggan"];
        $this->grand_qty = $post["grand_qty"];
        $this->total = $post["total"];
        $this->grand_total = $post["grand_total"];
        $this->jasa_pengiriman = $post["jasa_pengiriman"];
        $this->jenis_layanan = $post["jenis_layanan"];
        $this->biaya_pengiriman = $post["biaya_ongkir"];
        $this->nama_penerima = $post["nama_penerima"];
        $this->no_penerima = $post["no_penerima"];
        $this->email_penerima = $post["email_penerima"];
        $this->alamat_penerima = $post["alamat_penerima"];
        $this->kode_pos = $post["kode_pos"];
        $this->provinsi_penerima = $post["provinsi_penerima"];
        $this->kabupaten_penerima = $post["kabupaten_penerima"];
        $this->kecamatan_penerima = $post["kecamatan_penerima"];
        $this->kelurahan_penerima = $post["kelurahan_penerima"];
        $this->status = $post["status"];

        return $this->db->update('tbl_order', $this, array('id_order' => $post['id_order']));
    }

    public function delete_keranjang($id)
    {
        $this->db->where('id_pelanggan', $id);
        $this->db->delete('tbl_keranjang');
    }

    // Function Untuk Menampilkan Data Provinsi
    function get_provinsi()
    {
        $hasil = $this->db->query("SELECT * FROM wilayah_provinsi");
        return $hasil;
    }

    // Function Untuk Menampilkan Data Kabupaten
    function get_kabupaten($id)
    {
        $query = $this->db->get_where('wilayah_kabupaten', array('provinsi_id' => $id));
        return $query;
    }

    // Function Untuk Menampilkan Data Kecamatan
    function get_kecamatan($id)
    {
        // $hasil = $this->db->query("SELECT * FROM wilayah_kecamatan WHERE kabupaten_id='$id'");
        // return $hasil->result();
        $query = $this->db->get_where('wilayah_kecamatan', array('kabupaten_id' => $id));
        return $query;
    }

    // Function Untuk Menampilkan Data Desa
    function get_desa($id)
    {
        // $hasil = $this->db->query("SELECT * FROM wilayah_desa WHERE kecamatan_id='$id'");
        // return $hasil->result();
        $query = $this->db->get_where('wilayah_desa', array('kecamatan_id' => $id));
        return $query;
    }

    // Function Untuk Menampilkan Data Keranjang Berdasarkan User Login
    public function getById_pembayaran($id_order)
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->where('id_order', $id_order);
        return $this->db->get()->result();
    }

    // Method Untuk Menambahkan Ke Keranajang
    public function tambah_keranjang()
    {

        $id_pelanggan = $this->input->post('id_pelanggan');
        $id_produk = $this->input->post('id_produk');
        $warna = $this->input->post('warna');
        $id_attribut = $this->input->post('attribut');

        if ($this->input->post('jumlah1')) {
            $jumlah = $this->input->post('jumlah1');
        } else {
            $jumlah = $this->input->post('jumlah2');
        }

        $berat = $this->input->post('berat_produk');

        $data = array(
            'id_pelanggan' => $id_pelanggan,
            'id_produk' => $id_produk,
            'warna' => $warna,
            'jumlah' => $jumlah,
            'berat' => $berat,
            'id_attribut' => $id_attribut,
        );


        return $this->db->insert($this->_table, $data);
    }



















    public function tampil_kategori()
    {
        $query = $this->db->get('tbl_kategori');
        return $query->result_array();
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
        $this->db->where('tbl_produk.id_produk', $id);
        return $this->db->get()->result();
        //return $this->db->get_where($this->_table, ["id_produk" => $id])->row();
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
        $this->jumlah_produk = $post["jumlah_produk"];
        $this->warna = $post["warna"];
        $this->harga = $post["harga"];
        $this->deskripsi = $post["deskripsi"];
        $this->email_penerima = $post["email_penerima"];
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
}
