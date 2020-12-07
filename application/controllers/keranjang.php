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

        $data = [
            "data_produk" => $this->M_keranjang->getById_keranjang($id),
            "data_provinsi" => $this->M_keranjang->get_provinsi(),
        ];

        $id_order = $this->uri->segment(3);
        $this->session->set_userdata('id_order', $id_order);
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

    // Method untuk Menyimpan Multi Data ke tabel order
    public function save_buat_pesanan()
    {
        //Tahap Untuk Update data di tbl_order
        $ubah_data = $this->M_keranjang->update_tbl_detail(); //untuk menupdate tabel order
        if ($ubah_data) {
            $this->_sendEmail(); // Mengirimkan Email
            $id_order = $_POST["id_order"];
            $id_produk = $_POST["id_produk"];
            $nama_produk = $_POST["nama_produk"];
            $sub_qty = $_POST["sub_qty"];
            $harga_final = $_POST["harga_final"];
            $warna = $_POST["warna"];

            $data2 = array();
            $index = 0; // Set index array awal dengan 0
            foreach ($id_produk as $data_id_produk) { // Kita buat perulangan berdasarkan id_order sampai data terakhir
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

            redirect(site_url('keranjang/pembayaran'));
        } else {
            redirect(site_url('Homepage'));
        }
    }

    // Method Untuk Menampilkan Data Provinsi
    function wilayah_provinsi()
    {
        $x['data'] = $this->M_keranjang->get_provinsi();
        $this->load->view('v_kategori', $x);
    }

    // Method Untuk Menampilkan Data Kabupaten
    function wilayah_kabupaten()
    {
        $id = $this->input->post('id');
        $data = $this->M_keranjang->get_kabupaten($id)->result();
        echo json_encode($data);
    }

    // Method Untuk Menampilkan Data Kecamatan
    function wilayah_kecamatan()
    {
        $id = $this->input->post('id');
        $data = $this->M_keranjang->get_kecamatan($id)->result();
        echo json_encode($data);
    }

    // Method Untuk Menampilkan Data Desa
    function wilayah_desa()
    {
        $id = $this->input->post('id');
        $data = $this->M_keranjang->get_desa($id)->result();
        echo json_encode($data);
    }

    // Method Untuk Menampilkan pembayaran
    public function pembayaran()
    {
        $id_order = $this->session->userdata('id_order');
        $data = [
            "data_order" => $this->M_keranjang->getById_pembayaran($id_order),
        ];

        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/pembayaran', $data);
    }

    // Method Untuk Menampilkan bukti pembayaran
    public function buktipembayaran()
    {
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/buktipembayaran');
    }


    // Method Untuk Mengirim Email
    private function _sendEmail()
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'indanahgroup@gmail.com',
            'smtp_pass' => 'indah12345',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->from('Indanahgroup@gmail.com', 'Indanah Group');
        $this->email->to($this->input->post('email_penerima'));

        $this->email->subject('Konfirmasi Pemesanan');
        //$this->email->message('click : <a href="' . base_url() . 'Lupa_Password/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">activate</a>');

        // Data Array ini untuk mengirim data ke halaman kirim email
        $data = array(
            'id_order' => $_POST["id_order"],
            'total' => $_POST["total"],
            'biaya_ongkir' => $_POST["biaya_ongkir"],
            'jasa_pengiriman' => $_POST["jasa_pengiriman"],
            'nama_penerima' => $_POST["nama_penerima"],
            'no_penerima' => $_POST["no_penerima"],
            'alamat_penerima' => $_POST["alamat_penerima"],

        );

        $body = $this->load->view('Frontend/v_konfirmasi_pemesanan', $data, true); // Untuk Menggabungkan halaman view ke body pesan

        $this->email->message($body); // Isi Pesan dari Email

        // Cek Apakah Email Berhasil dikirim apa tidak
        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}
