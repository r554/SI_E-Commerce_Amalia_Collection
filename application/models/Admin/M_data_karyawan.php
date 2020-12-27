<?php

class M_data_karyawan extends CI_model
{
    private $_table = "tbl_admin";

    //public $id_admin;
    public $nama_admin;
    public $alamat_admin;
    public $no_admin;
    public $email_admin;
    public $username_admin;
    public $password_admin;
    public $foto_admin = 'default.PNG';
    public $role = '2';


    public function rules()
    {
        return [
            [
                'field' => 'email_admin',
                'label' => 'email_admin',
                'rules' => 'valid_email'
            ]

        ];
    }

    public function save()
    {
        $post = $this->input->post();
        //$this->id_admin = $post["id_admin"];
        $this->nama_admin = $post["nama_admin"];
        $this->alamat_admin = $post["alamat_admin"];
        $this->no_admin = $post["no_admin"];
        $this->email_admin = $post["email_admin"];
        $this->username_admin = $post["username_admin"];
        $this->password_admin = md5($post["password_admin"]);
        $this->foto_admin;
        $this->role;


        return $this->db->insert($this->_table, $this);
    }
    //untuk auto increment
    function get_no_invoice()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_produk,4)) AS kd_max FROM tbl_produk WHERE DATE(tanggal)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy') . $kd;
    }

    public function tampil_kategori()
    {
        $query = $this->db->get('tbl_kategori');
        // 	return $query->result_array();
    }

    function do_upload()
    {
        // setting konfigurasi upload
        $config['upload_path'] = './assets/Gambar/foto_profil';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('foto_admin');
        $result1 = $this->upload->data('file_name');
        return $result1;
    }

    public function tampil_data()
    {
        //$query = $this->db->get('tbl_produk');
        $this->db->from('tbl_admin');
        // $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_admin" => $id));
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        // $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
        $this->db->where('tbl_admin.id_admin', $id);
        return $this->db->get()->result();
        //return $this->db->get_where($this->_table, ["id_produk" => $id])->row();
    }

    public function getById2($id)
    {
        return $this->db->get_where($this->_table, ["id_admin" => $id])->row();
    }
    //edit produk
    public function update()
    {
        $post = $this->input->post();
        $this->id_admin = $post["id_admin"];
        $this->nama_admin = $post["nama_admin"];
        $this->alamat_admin = $post["alamat_admin"];
        $this->no_admin = $post["no_admin"];
        $this->email_admin = $post["email_admin"];
        $this->username_admin = $post["username_admin"];
        $this->password_admin = $post["password_admin"];
        $this->foto_admin = $post["foto_admin"];
        if (!empty($_FILES["foto_admin"]["name"])) {
            $this->foto_admin = $this->do_upload();
        } else {
            $this->foto_admin = $post["foto_admin"];
        }

        return $this->db->update($this->_table, $this, array('id_admin' => $post['id_admin']));
    }

    public function tpdetailKaryawan($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        //$this->db->join('tbl_foto_produk', 'tbl_foto_produk.id_produk = tbl_produk.id_produk');
        // $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_produk.id_kategori');
        $this->db->where('tbl_admin.id_admin', $id);
        return $this->db->get()->result();
    }
}