<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

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
}
