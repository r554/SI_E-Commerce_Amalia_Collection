<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_footer');
        $this->load->model('M_keranjang');
    }

    public function index()
    {
        $this->load->view('Frontend/landing_page');
    }

    public function home()
    {
        $this->load->view('Backend/Dashboard');
    }

    public function profil()
    {
        $this->load->view('Backend/profil');
    }

    public function ubahpw()
    {
        $this->load->view('Backend/ubahpw');
    }

    public function banner()
    {
        $this->load->view('Backend/banner');
    }

    public function tambah_banner()
    {
        $this->load->view('Backend/tambah_banner');
    }

    public function edit_banner()
    {
        $this->load->view('Backend/edit_banner');
    }

    public function contoh()
    {
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/contoh');
    }

    public function pembayaran()
    {
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/pembayaran');
    }
    public function buktipembayaran()
    {
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/buktipembayaran');
    }

    public function privasikebijakan()
    {
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/privasi_kebijakan');
    }

    public function blog()
    {
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3');
        $this->load->view('Frontend/blog');
    }

    public function syarat_penggunaan()
    {
        $show = $this->M_footer;
        $data['jumlah_keranjang'] = $this->M_keranjang->jumlah_data_keranjang();
        $data['footer'] = $show->tampil_footer();
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3', $data);
        $this->load->view('Frontend/syarat_penggunaan', $data);
    }

    public function ketentuan_pengembalian()
    {
        $show = $this->M_footer;
        $data['jumlah_keranjang'] = $this->M_keranjang->jumlah_data_keranjang();
        $data['footer'] = $show->tampil_footer();
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3', $data);
        $this->load->view('Frontend/ketentuan_pengembalian', $data);
    }

    public function ketentuan_pengiriman()
    {
        $show = $this->M_footer;
        $data['jumlah_keranjang'] = $this->M_keranjang->jumlah_data_keranjang();
        $data['footer'] = $show->tampil_footer();
        $this->load->view('Frontend/template/head1');
        $this->load->view('Frontend/template/navbar3', $data);
        $this->load->view('Frontend/ketentuan_pengiriman', $data);
    }

    public function login()
    {
        $this->load->view('Frontend/v_login');
    }
}
