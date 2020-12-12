<?php

class Lupa_Password extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library(array('form_validation', 'session'));
    }

    function index()
    {
        $this->load->view('Frontend/lupa_pass1');
    }

    public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('Frontend/lupa_pass1');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('tbl_pelanggan', ['email_pelanggan' => $email])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token); // Memasukan Data ke tabel user token

                $this->_sendEmail($token, 'verify'); // Mengirimkan Email

                $this->session->set_flashdata('message', '<div>Periksa Email Anda Untuk Melanjutkan Reset Password</div>');
                redirect('Lupa_Password/forgotPassword');
            } else {
                $this->session->set_flashdata('message', '<div>Email Tidak Terdaftar</div>');
                redirect('Lupa_Password/forgotPassword');
            }
        }
    }

    // Method Untuk Mengecek Apakah Data yang dikirim pada url sesuai dengan yang ada di database
    public function resetpassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('tbl_pelanggan', ['email_pelanggan' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $this->session->set_flashdata('message', '<div>Token Tidak Valid</div>');
                redirect('Lupa_Password/forgotPassword');
            }
        } else {
            $this->session->set_flashdata('message', '<div>Email Tidak Terdaftar</div>');
            redirect('Lupa_Password/forgotPassword');
        }
    }

    // Method Merubah pasword yang ada di database
    public function changePassword()
    {

        $this->form_validation->set_rules('password1', 'password1', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'password2', 'trim|required|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('Frontend/lupa_pass2');
        } else {
            $password = md5($this->input->post('password1'));
            $email = $this->session->userdata('reset_email');

            $this->db->set('password_pelanggan', $password);
            $this->db->where('email_pelanggan', $email);
            $this->db->update('tbl_pelanggan');

            $this->session->unset_userdata('reset_email'); // Menghaspus Session reset_email

            $this->session->set_flashdata('message', '<div>Berhasil Merubah Password. Silahkan Login</div>');
            redirect('Login0');
        }
    }

    // Method Untuk Mengirim Email
    private function _sendEmail($token, $type)
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
        $this->email->to($this->input->post('email'));


        if ($type == 'verify') {
            $this->email->subject('Reset Password');
            $this->email->message('click : <a href="' . base_url() . 'Lupa_Password/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">activate</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}
