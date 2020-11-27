<?php
$order = $this->db->get_where('tbl_order', ['id_pelanggan' => $this->session->userdata('id'), 'status !=' => 0]);
?>

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">Dashboard</a> 
  <?php if($order->num_rows() > 0){ ?>
  <a href="#" class="list-group-item list-group-item-action">Transaksi <span class="badge badge-info"><?= $order->num_rows(); ?></span></a>
  <?php }else{ ?>
    <a href="#" class="list-group-item list-group-item-action">Transaksi</a>
  <?php } ?>
  <a href="#" class="list-group-item list-group-item-action">Riwayat Transaksi</a>
  <a href="#" class="list-group-item list-group-item-action">Edit Profil</a>
  <a href="#" class="list-group-item list-group-item-action">Ganti Kata Sandi</a>
  </div>