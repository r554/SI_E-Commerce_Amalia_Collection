<?php
defined('BASEPATH') or exit('No direct script access allowed');

class keranjang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_keranjang');
        $this->load->library('form_validation');
    }

    // Method untuk menampilkan keranjang berdasarkan Login
    public function tampil_semua_keranjang($id = null)
    {
        if (!isset($id)) {
            redirect(site_url('Login0'));
        } else {
            $data = [
                "data_produk" => $this->M_keranjang->getById_keranjang($id),
                "id_order" => $this->M_keranjang->id_order(),
            ];

            $this->load->view('Frontend/template/head1');
            $this->load->view('Frontend/template/navbar3');
            $this->load->view('Frontend/keranjang', $data);
        }
    }

    // Method untuk menyimpan ke tabel order
    public function save_order($id)
    {
        $model = $this->M_keranjang;

        if ($model->save_order()) {
            redirect(site_url('keranjang/tampil_buat_pesanan/' . $id));
        }
    }

    // Method untuk menampilkan detail pemesanan berdasarkan Login
    public function tampil_buat_pesanan()
    {
        $id = $this->session->userdata('id');
        $data['data_produk'] = $this->M_keranjang->getById_keranjang($id);
        // var_dump($data);
        // die;
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/buat_pesanan', $data);
    }

    // Method untuk menghapus data dari keranjang berdasarkan Login
    public function delete_produk_keranjang($id = null)
    {
        if (!isset($id)) show_404();
        $id_pengguna = $this->session->userdata('id');
        if ($this->M_keranjang->delete_produk($id)) {
            redirect(site_url('keranjang/tampil_semua_keranjang/' . $id_pengguna));
        }
    }

    public function save_buat_pesanan()
    {
        //Tahap Untuk Update data di tbl_order
        $ubah_data = $this->M_keranjang->update_tbl_detail(); //untuk menupdate tabel order
        if ($ubah_data) {
            $id_order = $_POST["id_order"];
            $id_produk = $_POST["id_produk"];
            $nama_produk = $_POST["nama_produk"];
            $sub_qty = $_POST["sub_qty"];
            $harga_final = $_POST["harga_final"];
            $warna = $_POST["warna"];

            $data2 = array();
            $index = 0; // Set index array awal dengan 0
            foreach ($id_produk as $data_id_produk) { // Kita buat perulangan berdasarkan nim sampai data terakhir
                array_push($data2, array(
                    'id_order' => $id_order,
                    'id_produk' => $data_id_produk,
                    'nama_produk' => $nama_produk[$index],
                    'sub_qty' => $sub_qty[$index],
                    'harga_final' => $harga_final[$index],
                    'warna' => $warna[$index],
                ));
                $index++;
            }

            $sql = $this->M_keranjang->save_batch($data2);

            //Tahap Untuk Menghapus data di keranjang
            $id = $_POST['id_pelanggan']; // Ambil data id_pelanggan yang dikirim oleh view melalui form submit
            $this->M_keranjang->delete_keranjang($id); // Panggil fungsi delete dari model
        } else {
            redirect(site_url('Homepage'));
        }
    }





















    public function tampil()
    {
        $show = $this->M_data_produk;
        $data = [
            "produk" => $show->tampil_data(),
            "invoice" => $show->get_no_invoice(),
        ];

        $this->load->view("Backend/data_produk", $data);
    }

    public function tampil_detail($id)
    {

        $data['detailProduk'] = $this->M_data_produk->tpdetailProduk($id);
        $this->load->view('Backend/detail_produk', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->M_data_produk->delete($id)) {
            redirect(site_url('data_produk/tampil'));
        }
    }

    public function tambah_produk()
    {
        $product = $this->M_data_produk;
        $data = [
            "invoice" => $product->get_no_invoice(),
            "kategori" => $this->M_data_produk->tampil_kategori(),
        ];

        $this->load->view("Backend/data_produk_tambah", $data);
    }

    public function edit($id = null)
    {

        $model = $this->M_data_produk;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());


        if ($validation->run()) {
            $model->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('data_produk/tampil'));
        }

        $data["edit"] = $model->getById($id);
        // var_dump($data);
        // die;
        $this->load->view("Backend/edit_produk", $data);
    }
}
