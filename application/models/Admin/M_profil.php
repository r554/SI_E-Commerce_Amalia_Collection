<?php 

class M_profil extends CI_model
{
	private $_table = "tbl_admin";

	public $id_admin;
  public $nama_admin;
  public $alamat_admin;
  public $no_admin;
  public $email_admin;
  public $foto_admin;
  public $username_admin;
  public $password_admin;
  //public $role;

  public function rules()
  {
    return [
      [
        'field' => 'username_admin',
        'label' => 'username_admin',
        'rules' => 'required'
      ]

    ];
  }

  public function save()
  {
    $post = $this->input->post();
    $this->id_kategori = $post["id_kategori"];
    $this->nama_kategori = $post["nama_kategori"];


    return $this->db->insert($this->_table, $this);
  }

  public function tampil_data()
  {
   $query = $this->db->get('tbl_admin');
   return $query->result_array();
 }

 public function delete($id)
 {
  return $this->db->delete($this->_table, array("id_kategori" => $id));
}

public function getById($id)
{
  return $this->db->get_where($this->_table, ["id_admin" => $id])->row();
}

public function update()
{
  $post = $this->input->post();
  $this->id_admin = $post["id_admin"];
  $this->nama_admin = $post["nama_admin"];
  $this->alamat_admin = $post["alamat_admin"];
  $this->no_admin = $post["no_admin"];
  $this->email_admin = $post["email_admin"];
  //$this->foto_admin = $post["foto_admin"];
  $this->foto_admin = $this->do_upload();
  $this->username_admin = $post["username_admin"];
  // $this->password_admin = $post["password_admin"];
  $this->password_admin = md5($post["password_admin"]);
  //$this->role = $post["role"];
 

  return $this->db->update($this->_table, $this, array('id_admin' => $post['id_admin']));
}

function do_upload()
	{
        // setting konfigurasi upload
		$config['upload_path'] = './assets/Gambar/foto_profil';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name']            = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        // load library upload
		$this->load->library('upload', $config);
        // upload gambar
		$this->upload->do_upload('foto_admin');
		$result1 = $this->upload->data('file_name');
		return $result1;
	}

}

?>