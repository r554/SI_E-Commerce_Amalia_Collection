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
}
