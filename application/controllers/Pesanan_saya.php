<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_saya extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('M_footer');
        $this->load->model('M_keranjang');
        $this->load->model('Admin/M_Pengembalian_Barang');
    }

    public function index()
    {
        $show = $this->M_footer;
        if ($this->session->userdata('status') != "login0") {
            redirect(base_url("login0"));
        } else {
            $data['order'] = $this->M_user->getOrder();
            $data['footer'] = $show->tampil_footer();
            $data['jumlah_keranjang'] = $this->M_keranjang->jumlah_data_keranjang();


            $this->load->view('Frontend/template/head1');
            $this->load->view('Frontend/template/navbar3', $data);
            $this->load->view('Frontend/pesanan_saya', $data);
        }
    }

    public function detail_order($id)
    {
        $show = $this->M_footer;
        $data['ord'] = $this->M_user->getOrderByInvoice($id);
        if (!$data['ord']) {
            redirect(base_url() . 'pesanan_saya');
        }
        $data['footer'] = $show->tampil_footer();
        $data['product_order'] = $this->M_user->getProductByInvoice($id);
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/detailPesanan', $data);
    }

    public function buktibayar($id)
    {
        $show = $this->M_footer;
        $data['ord'] = $this->M_user->getOrderByInvoice($id);
        if (!$data['ord']) {
            redirect(base_url() . 'pesanan_saya');
        }
        $data['footer'] = $show->tampil_footer();
        $data['product_order'] = $this->M_user->getProductByInvoice($id);
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/buktipembayaran2', $data);
    }


    public function konfirmasibarangsampai($id)
    {
        $data = array(
            'status' => "5"
        );
        $where = array(
            'id_order' => $id
        );
        $this->M_user->update_data($where, $data, 'tbl_order');
        redirect('pesanan_saya');
    }

    public function persetujuan_refund()
    {
        $id_order = $this->uri->segment('3');
        $data['footer'] = $this->M_footer->tampil_footer();
        $data['jumlah_keranjang'] = $this->M_keranjang->jumlah_data_keranjang();
        $data['data_order'] = $this->M_Pengembalian_Barang->get_data_order($id_order);

        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3', $data);
        $this->load->view('Frontend/Persetujuan_Refund', $data);
    }

    public function form_pengembalian_produk()
    {
        $id_order = $this->uri->segment('3');
        $data['footer'] = $this->M_footer->tampil_footer();
        $data['jumlah_keranjang'] = $this->M_keranjang->jumlah_data_keranjang();
        $data['id_refund'] = $this->M_Pengembalian_Barang->id_refund();
        $data['data_order'] = $this->M_Pengembalian_Barang->get_data_order($id_order);

        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3', $data);
        $this->load->view('Frontend/Form_Pengembalian_Produk', $data);
    }

    //untuk menyimpan Data Refund
    public function simpan_pengembalian_produk()
    {
        $id_order = $this->input->post('id_order');
        $id_refund = $this->input->post('id_refund');
        if ($this->M_Pengembalian_Barang->simpan_data_refund()) {
            //$this->session->set_flashdata('success', 'Berhasil Menambah Produk');
            //$data['data_order'] = $this->M_Pengembalian_Barang->get_data_order($id_order);
            $this->db->set('status', 7);
            $this->db->where('id_order', $id_order);
            $this->db->update('tbl_order');

            redirect(site_url('Pesanan_saya/data_produk_refund/' . $id_order . '/' . $id_refund));
        }
    }

    //untuk menyimpan Data Refund
    public function data_produk_refund($id)
    {
        $data['data_order'] = $this->M_Pengembalian_Barang->get_data_order($id);
        $data['data_detail_refund'] = $this->M_Pengembalian_Barang->get_data_detail_refund($id);
        $data['footer'] = $this->M_footer->tampil_footer();
        $data['jumlah_keranjang'] = $this->M_keranjang->jumlah_data_keranjang();

        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3', $data);
        $this->load->view('Frontend/Produk_Refund', $data);
    }

    //untuk menyimpan Data Refund
    public function simpan_produk_refund()
    {
        $id_order = $this->input->post('id_order');
        $id_refund = $this->input->post('id_refund');
        if ($this->M_Pengembalian_Barang->simpan_data_produk_refund()) {
            //$this->session->set_flashdata('success', 'Berhasil Menambah Produk');
            //$data['data_order'] = $this->M_Pengembalian_Barang->get_data_order($id_order);

            redirect(site_url('Pesanan_saya/data_produk_refund/' . $id_order . '/' . $id_refund));
        }
    }

    //untuk menyimpan Data Refund
    public function hapus_produk_refund()
    {
        $id_order = $this->input->post('id_order');
        $id_refund = $this->input->post('id_refund');
        $id_detail_refund = $this->input->post('id_detail_refund');

        $hasil = $this->db->query("DELETE FROM tbl_detail_refund WHERE id_detail_refund='$id_detail_refund'");
        if ($hasil) {
            //$this->session->set_flashdata('success', 'Berhasil Menambah Produk');
            //$data['data_order'] = $this->M_Pengembalian_Barang->get_data_order($id_order);

            redirect(site_url('Pesanan_saya/data_produk_refund/' . $id_order . '/' . $id_refund));
        }
    }

    public function refund_barang()
    {
        $show = $this->M_footer;
        if ($this->session->userdata('status') != "login0") {
            redirect(base_url("login0"));
        } else {
            $data['refund'] = $this->M_user->getRefund();
            $data['footer'] = $show->tampil_footer();
            $data['jumlah_keranjang'] = $this->M_keranjang->jumlah_data_keranjang();


            $this->load->view('Frontend/template/head1');
            $this->load->view('Frontend/template/navbar3', $data);
            $this->load->view('Frontend/Refund_Barang', $data);
        }
    }

    public function kirim_resi_pelanggan()
    {
        $id_refund = $this->input->post('id_refund');
        $no_resi = $this->input->post('nomor_resi');
        $id = 9;

        $this->db->set('no_resi', $no_resi);
        $this->db->set('status_refund', $id);
        $this->db->where('id_refund', $id_refund);
        $this->db->update('tbl_refund');

        //$this->session->set_flashdata('success', 'Berhasil');
        redirect('Pesanan_saya/refund_barang');
    }

    public function konfirmasi_refund()
    {
        $id_refund = $this->input->post('id_refund');
        $id_order = $this->input->post('id_order');
        $id = 12;

        $this->db->set('status_refund', $id);
        $this->db->where('id_refund', $id_refund);
        $this->db->update('tbl_refund');

        $this->db->set('status', 5);
        $this->db->where('id_order', $id_order);
        $this->db->update('tbl_order');

        //$this->session->set_flashdata('success', 'Berhasil');
        redirect('Pesanan_saya/refund_barang');
    }
}
