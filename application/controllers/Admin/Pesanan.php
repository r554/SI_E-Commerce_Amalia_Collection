<?php

class Pesanan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/M_Pesanan');
        $this->load->library('form_validation');
    }


    public function tampil_semua_pesanan()
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->tampil_semua(),
        ];
        $this->load->view("Backend/Semua_Pesanan", $data);
    }

    public function tampil_semua_pesanan_manajer()
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->tampil_semua(),
        ];
        $this->load->view("Backend/Semua_Pesanan_Manajer", $data);
    }


    public function tampil_detail_pemesanan($id)
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->get_tampil_detail($id),
        ];
        $this->load->view("Backend/Semua_Pesanan_Detail", $data);
    }

    // Method Bagian Verifikasi Pembayaran =====================================================================================================
    public function tampil_semua_verifikasi_pembayaran()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_verifikasi" => $model->get_tampil_semua_verifikasi_pembayaran(),
        ];
        $this->load->view("Backend/Semua_Pesanan_Diproses", $data);
    }

    public function tampil_detail_verifikasi_pembayaran($id)
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->get_tampil_detail_verifikasi_pembayaran($id),
            "bukti_pembayaran" => $show->get_bukti_pembayaran($id),
        ];

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die;

        $this->load->view("Backend/Semua_Detail_Verifikasi_Pembayaran", $data);
    }

    public function terima_pembayaran($id = null)
    {
        // Method Untuk Mengurangi Stock / Update stok
        $id_attribut = $this->input->post('id_attribut[]');
        $pengurangan_stock = $this->input->post('pengurangan_stock[]');

        $i = 1;
        foreach ($id_attribut as $data_id_attribut) {
            $where = [
                'id_attribut' => $data_id_attribut
            ];

            $data = ['qty' => $pengurangan_stock[$i]];
            $this->M_Pesanan->update_stock('tbl_attribut', $data, $where);
            $i++;
        }

        // Method Untuk Merubah Status Order
        $id_order = $id;
        $id_status = '3';

        $this->db->set('status', $id_status);
        $this->db->where('id_order', $id_order);
        $this->db->update('tbl_order');
        $this->_sendWAA();

        redirect(site_url('Admin/Pesanan/tampil_semua_perlu_dikirim'));
    }

    public function tolak_pembayaran($id = null)
    {

        $status = '6';

        $this->db->set('status', $status);
        $this->db->where('id_order', $id);
        $this->db->update('tbl_order');

        $this->_sendWAAA();
        redirect(site_url('Admin/Pesanan/tampil_semua_pesanan_dibatalkan'));
    }


    // Method Bagian Perlu Dikirim =====================================================================================================
    public function tampil_semua_perlu_dikirim()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_perlu_dikirim" => $model->get_tampil_semua_perlu_dikirim(),
        ];

        $this->load->view("Backend/semua_pesanan_perlu_dikirim", $data);
    }

    public function tampil_detail_perlu_dikirim($id)
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->get_tampil_detail_perlu_dikirim($id),
        ];

        $this->load->view("Backend/Semua_Detail_Perlu_Dikirim", $data);
    }

    public function tampil_invoice_perlu_dikirim($id)
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->get_tampil_detail_perlu_dikirim($id),
        ];

        $this->load->view("Backend/printInvoice", $data);
    }

    public function simpan_resi()
    {

        $id_order = $this->input->post('id_order');
        $nomor_resi = $this->input->post('nomor_resi');

        $status = '4';

        $this->db->set('nomor_resi', $nomor_resi);
        $this->db->set('status', $status);
        $this->db->where('id_order', $id_order);
        $this->db->update('tbl_order');
        $this->_sendWA();

        redirect(site_url('Admin/Pesanan/tampil_semua_pesanan_dikirim'));
    }


    private function _sendWA()
    {
        $no_penerima =  $_POST["no_penerima"]; //Menangkap Inputan Dari Form
        // cek apakah no hp mengandung karakter + dan 0-9
        if (!preg_match('/[^+0-9]/', trim($no_penerima))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($no_penerima), 0, 2) == '62') {
                $hp = trim($no_penerima);

                $nomor_resi = $_POST["nomor_resi"];
                $jasa_pengiriman = $_POST["jasa_pengiriman"];
                $curl = curl_init();
                $sender = "6281333992731"; // nomor Server 
                $dest = $hp; // nomor tujuan, pake kode negara 
                $isiPesan = "Terimakasih Sudah berbelanja Di Amalia Collection. <br>Pesanan Anda sudah kami kirim, Berikut Nomor Resi Pengiriman Anda : *" . $nomor_resi . "*<br>dengan Menggunakan Jasa Pengiriman *" . $jasa_pengiriman . "* <br>Anda Dapat Melacak Pengiriman Dari Situs Resmi Jasa Pengiriman";

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
                //echo $response;
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr(trim($no_penerima), 0, 1) == '0') {
                $hp = '62' . substr(trim($no_penerima), 1);

                $nomor_resi = $_POST["nomor_resi"];
                $jasa_pengiriman = $_POST["jasa_pengiriman"];
                $curl = curl_init();
                $sender = "6281333992731"; // nomor Server 
                $dest = $hp; // nomor tujuan, pake kode negara 
                $isiPesan = "Terimakasih Sudah berbelanja Di Amalia Collection. <br>Pesanan Anda sudah kami kirim, Berikut Nomor Resi Pengiriman Anda : *" . $nomor_resi . "*<br>dengan Menggunakan Jasa Pengiriman *" . $jasa_pengiriman . "* <br>Anda Dapat Melacak Pengiriman Dari Situs Resmi Jasa Pengiriman";

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
                //echo $response;

            }
        }
    }

    // Kirim Notif Terima Pembayaran
    private function _sendWAA()
    {
        $no_penerima =  $this->uri->segment(5); //Menangkap Inputan Dari Form
        //$no_penerima =  '082232354230'; //Menangkap Inputan Dari Form
        // cek apakah no hp mengandung karakter + dan 0-9
        if (!preg_match('/[^+0-9]/', trim($no_penerima))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($no_penerima), 0, 2) == '62') {
                $hp = trim($no_penerima);

                $curl = curl_init();
                $sender = "6281333992731"; // nomor Server 
                $dest = $hp; // nomor tujuan, pake kode negara 
                $isiPesan = "Terimakasih Sudah berbelanja Di Amalia Collection. <br> Pembayaran Anda Sudah Kami Verifikasi.Pesanan Anda Sedang Kami Proses, Kami Akan Mengirimkan Nomor Resi Dalam 1 x 24 Jam";

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
                //echo $response;
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr(trim($no_penerima), 0, 1) == '0') {
                $hp = '62' . substr(trim($no_penerima), 1);

                $curl = curl_init();
                $sender = "6281333992731"; // nomor Server 
                $dest = $hp; // nomor tujuan, pake kode negara 
                $isiPesan = "Terimakasih Sudah berbelanja Di Amalia Collection. <br> Pembayaran Anda Sudah Kami Verifikasi.Pesanan Anda Sedang Kami Proses, Kami Akan Mengirimkan Nomor Resi Dalam 1 x 24 Jam";

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
                //echo $response;

            }
        }
    }

    // Kirm Notif Tolak Pembayaran
    private function _sendWAAA()
    {
        $no_penerima =  $this->uri->segment(5); //Menangkap Inputan Dari Form
        //$no_penerima =  '082232354230'; //Menangkap Inputan Dari Form
        // cek apakah no hp mengandung karakter + dan 0-9
        if (!preg_match('/[^+0-9]/', trim($no_penerima))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($no_penerima), 0, 2) == '62') {
                $hp = trim($no_penerima);

                $curl = curl_init();
                $sender = "6281333992731"; // nomor Server 
                $dest = $hp; // nomor tujuan, pake kode negara 
                $isiPesan = "Mohon maaf pembayaran yang anda lakukan Tidak Berhasil di Verifikasi. Mungkin terjadi kesalahan pada saat melakukan pembayaran/pengiriman bukti pembayaran. Mohon segera melakukan konfirmasi ulang pada nomer ini *081333992731* ";

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
                //echo $response;
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr(trim($no_penerima), 0, 1) == '0') {
                $hp = '62' . substr(trim($no_penerima), 1);

                $curl = curl_init();
                $sender = "6281333992731"; // nomor Server 
                $dest = $hp; // nomor tujuan, pake kode negara 
                $isiPesan = "Mohon maaf pembayaran yang anda lakukan Tidak Berhasil di Verifikasi. Mungkin terjadi kesalahan pada saat melakukan pembayaran/pengiriman bukti pembayaran. Mohon segera melakukan konfirmasi ulang pada nomer ini *081333992731* ";

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
                //echo $response;

            }
        }
    }


    // Method Pesanan Dikirim =====================================================================================================
    public function tampil_semua_pesanan_dikirim()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_dikirim" => $model->get_tampil_semua_pesanan_dikirim(),
        ];
        $this->load->view("Backend/Semua_Pesanan_Dikirim", $data);
    }

    public function tampil_detail_semua_pesanan_dikirim($id)
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->get_tampil_detail_pesanan_dikirim($id),
        ];

        $this->load->view("Backend/Semua_Detail_Pesanan_Dikirim", $data);
    }


    // Method Pesanan Selesai =====================================================================================================
    public function tampil_semua_pesanan_selesai()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_selesai" => $model->get_tampil_semua_pesanan_selesai(),
        ];
        $this->load->view("Backend/Semua_Pesanan_Selesai", $data);
    }

    public function tampil_detail_pesanan_selesai($id)
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->get_tampil_detail_pesanan_selesai($id),
        ];

        $this->load->view("Backend/Semua_Detail_Pesanan_Selesai", $data);
    }

    // Method Pesanan Dibatalkan =====================================================================================================
    public function tampil_semua_pesanan_dibatalkan()
    {
        $model = $this->M_Pesanan;
        $data = [
            "pesanan_dibatalkan" => $model->get_tampil_semua_pesanan_dibatalkan(),
        ];
        $this->load->view("Backend/Semua_Pesanan_Dibatalkan", $data);
    }

    public function tampil_detail_pesanan_dibatalkan($id)
    {
        $show = $this->M_Pesanan;
        $data = [
            "pesanan" => $show->get_tampil_detail_pesanan_dibatalkan($id),
        ];

        $this->load->view("Backend/Semua_Detail_Pesanan_Dibatalkan", $data);
    }













































    public function tampil()
    {
        $show = $this->MP;

        $data = [
            "user" => $show->tampil_data()
        ];

        $this->load->view("hello", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->MP->delete($id)) {
            redirect(site_url('crud/tampil'));
        }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('welcome');

        $model = $this->MP;
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());


        if ($validation->run()) {
            $model->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('crud/tampil'));
        }

        $data["data"] = $model->getById($id);

        $this->load->view("hello_edit", $data);
    }
}