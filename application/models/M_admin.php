<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model
{
    private $_table = "tbl_admin";

    public $id_admin;
    public $nama_admin;
    public $alamat_admin;
    public $no_admin;
    public $email_admin;
    public $foto_admin = "default.jpg";
    public $username_admin;
    public $password_admin;
    public $role;

    public function get($username_admin)
    {
        $this->db->where('username_admin', $username_admin); // Untuk menambahkan Where Clause : username='$username_admin '
        $result = $this->db->get('tbl_admin')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }

    public function register()
    {
        $enc_password = md5($this->input->post('password'));
        $role = "penyewa";
        $post = $this->input->post();
        $this->NIK_pengguna = $post["NIK_pengguna"];
        $this->nama_pengguna = $post["nama_pengguna"];
        $this->alamat_pengguna = $post["alamat_pengguna"];
        $this->no_pengguna = $post["no_pengguna"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = $enc_password;
        $this->role = $role;

        return $this->db->insert($this->_table, $this);
    }

    // Check username exists
    public function check_username_exists($username)
    {
        $query = $this->db->get_where('user', array('username' => $username));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
}
