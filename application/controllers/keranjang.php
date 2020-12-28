<?php
defined('BASEPATH') or exit('No direct script access allowed');

class keranjang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_keranjang');
        $this->load->library('form_validation');
        $this->load->model('M_footer');
    }

    // Method untuk menampilkan keranjang berdasarkan Login
    public function tampil_semua_keranjang()
    {
        $show = $this->M_footer;
        $id = $this->session->userdata('id'); // Menangkap ID yang dikirim dari session
        if (!isset($id)) {
            redirect(site_url('Login0'));
        } else {
            $data = [
                "data_produk" => $this->M_keranjang->getById_keranjang($id),
                "id_order" => $this->M_keranjang->id_order(),
                "footer" => $show->tampil_footer(),
                "jumlah_keranjang" => $this->M_keranjang->jumlah_data_keranjang(),
            ];

            $this->load->view('Frontend/template/head1');
            $this->load->view('Frontend/template/navbar3', $data);
            $this->load->view('Frontend/keranjang', $data);
        }
    }

    // Method Tambah Keranjang
    public function save_keranjang()
    {
        if ($this->session->userdata('status') != "login0") {
            redirect(base_url("login0"));
        }

        $model = $this->M_keranjang;
        $id_produk = $this->input->post('id_produk');

        if ($model->tambah_keranjang()) {
            $this->session->set_flashdata('success', 'success');
            redirect(site_url('Homepage/detail_product/' . $id_produk));
        }
    }

    // Method Tambah Keranjang klik beli
    public function save_keranjang_beli()
    {
        if ($this->session->userdata('status') != "login0") {
            redirect(base_url("login0"));
        }

        $model = $this->M_keranjang;

        if ($model->tambah_keranjang()) {
            redirect(site_url('keranjang/tampil_semua_keranjang'));
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
        $show = $this->M_footer;
        $id = $this->session->userdata('id');

        $data = [
            "data_produk" => $this->M_keranjang->getById_keranjang($id),
            "data_provinsi" => $this->M_keranjang->get_provinsi(),
            "footer" => $show->tampil_footer(),
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
            $this->session->set_flashdata('success', 'success');
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
            $this->_sendWA(); // Mengirim Pesan Via WA
            $id_order = $_POST["id_order"];
            $id_produk = $_POST["id_produk"];
            $nama_produk = $_POST["nama_produk"];
            $sub_qty = $_POST["sub_qty"];
            $harga_final = $_POST["harga_final"];
            $warna = $_POST["warna"];
            $id_attribut = $_POST["id_attribut"];

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
                    'id_attribut' => $id_attribut[$index],
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
        $show = $this->M_footer;
        $id_order = $this->session->userdata('id_order');
        $data = [
            "footer" => $show->tampil_footer(),
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
            'smtp_user' => 'amaliacollection87@gmail.com',
            'smtp_pass' => 'indah12345',
            'smtp_port' => '465',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->from('amaliacollection87@gmail.com', 'Amalia Collection');
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

    private function _sendWA()
    {
        $no_penerima =  $_POST["no_penerima"]; //Menangkap Inputan Dari Form
        // cek apakah no hp mengandung karakter + dan 0-9
        if (!preg_match('/[^+0-9]/', trim($no_penerima))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($no_penerima), 0, 2) == '62') {
                $hp = trim($no_penerima);

                $curl = curl_init();
                $sender = "6281333992731"; // nomor Server 
                $dest = $hp; // nomor tujuan, pake kode negara 
                $isiPesan = "Terimakasih sudah membeli produk kami. Saat ini kami sedang menunggu pembayaran dari anda sebelum kami memprosesnya. Sebagai informasi, berikut *detail pesananmu*. <br> <br> No Invoice : " . $_POST["id_order"] . " <br> Total Pesanan : Rp " . str_replace(",", ".", number_format($_POST["total"])) . " <br>Ongkos Kirim : Rp " . str_replace(",", ".", number_format($_POST["biaya_ongkir"])) . " <br> Kurir Pengiriman : " . $_POST["jasa_pengiriman"] . "<br> <br> *Detail Pengiriman* <br> Penerima : " . $_POST["nama_penerima"] . " <br> No HP : " . $_POST["no_penerima"] . "<br> Alamat : " . $_POST["alamat_penerima"] . " <br> <br> Segera lakukan pembayaran agar pesananmu segera diproses <br> *Transfer pembayaran ke rekening berikut:* <br> *BANK BRI* - 0372-04-876907-67-6 <br> a/n Amalia <br> *BANK BCA* - 731 026 0977 <br> a/n Amalia <br> <br> Informasi cara pembayaran dan status pesananmu langsung di menu: PESANANKU <br> <br> *Pesan Ini Dikirim Otomatis Oleh Sistem Mohon Untuk Tidak Membalas Pesan Ini*"; // isi pesan ente

                curl_setopt_array($curl, array(

                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_URL => "https://whapi.io/api/send",
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "{\r\n  \"app\": {\r\n    \"id\": \"$sender\",\r\n    \"time\": \"1605326773\",\r\n    \"data\": {\r\n      \"recipient\": {\r\n        \"id\": \"$dest\"\r\n      },\r\n      \"message\": [\r\n        {\r\n          \"time\": \"1605326773\",\r\n          \"type\": \"text\",\r\n          \"value\": \"$isiPesan\"\r\n        }\r\n      ]\r\n    }\r\n  }\r\n}",
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: text/plain",
                        "Cookie: __cfduid=d424776e2d5021b158f1e64c99f2d7fce1604293254; ci_session=3b712ap59vc924a9o15j5rti70gif6k0"
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);
                echo $response;
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr(trim($no_penerima), 0, 1) == '0') {
                $hp = '62' . substr(trim($no_penerima), 1);

                $curl = curl_init();
                $sender = "6281333992731"; // nomor Server 
                $dest = $hp; // nomor tujuan, pake kode negara 
                $isiPesan = "Terimakasih sudah membeli produk kami. Saat ini kami sedang menunggu pembayaran dari anda sebelum kami memprosesnya. Sebagai informasi, berikut *detail pesananmu*. <br> <br> No Invoice : " . $_POST["id_order"] . " <br> Total Pesanan : Rp " . str_replace(",", ".", number_format($_POST["total"])) . " <br>Ongkos Kirim : Rp " . str_replace(",", ".", number_format($_POST["biaya_ongkir"])) . " <br> Kurir Pengiriman : " . $_POST["jasa_pengiriman"] . "<br> <br> *Detail Pengiriman* <br> Penerima : " . $_POST["nama_penerima"] . " <br> No HP : " . $_POST["no_penerima"] . "<br> Alamat : " . $_POST["alamat_penerima"] . " <br> <br> Segera lakukan pembayaran agar pesananmu segera diproses <br> *Transfer pembayaran ke rekening berikut:* <br> *BANK BRI* - 0372-04-876907-67-6 <br> a/n Amalia <br> *BANK BCA* - 731 026 0977 <br> a/n Amalia <br> <br> Informasi cara pembayaran dan status pesananmu langsung di menu: PESANANKU <br> <br> *Pesan Ini Dikirim Otomatis Oleh Sistem Mohon Untuk Tidak Membalas Pesan Ini*"; // isi pesan ente

                curl_setopt_array($curl, array(

                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_URL => "https://whapi.io/api/send",
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "{\r\n  \"app\": {\r\n    \"id\": \"$sender\",\r\n    \"time\": \"1605326773\",\r\n    \"data\": {\r\n      \"recipient\": {\r\n        \"id\": \"$dest\"\r\n      },\r\n      \"message\": [\r\n        {\r\n          \"time\": \"1605326773\",\r\n          \"type\": \"text\",\r\n          \"value\": \"$isiPesan\"\r\n        }\r\n      ]\r\n    }\r\n  }\r\n}",
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: text/plain",
                        "Cookie: __cfduid=d424776e2d5021b158f1e64c99f2d7fce1604293254; ci_session=3b712ap59vc924a9o15j5rti70gif6k0"
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);
                echo $response;
            }
        }
    }
}