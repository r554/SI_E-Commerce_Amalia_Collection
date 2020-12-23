<?php
$order = $this->db->get_where('tbl_order', ['id_pelanggan' => $this->session->userdata('id'), 'status !=' => 5]);
// $order = $this->db->get_where('tbl_order', ['id_pelanggan' => $this->session->userdata('id'), 'status !=' => 6]);
// $order = $this->db->get_where('tbl_order', ['id_pelanggan' => $this->session->userdata('id'), 'status !=' => 2]);
// $order = $this->db->get_where('tbl_order', ['id_pelanggan' => $this->session->userdata('id'), 'status !=' => 1]);
?>

<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
    <?php if($order->num_rows() > 0){ ?>
    <a href="<?php echo base_url("pesanan_saya") ?>" class="list-group-item list-group-item-action">Transaksi <span class="badge badge-info">!</span></a>
    <?php }else{ ?>
    <a href="<?php echo base_url("pesanan_saya") ?>" class="list-group-item list-group-item-action">Transaksi</a>
    <?php } ?>
    <a href="<?php echo base_url("riwayat_pesanan") ?>" class="list-group-item list-group-item-action">Riwayat
        Transaksi</a>
    <a href="<?php echo base_url("profile") ?>" class="list-group-item list-group-item-action">Edit Profil</a>
    <a href="<?php echo base_url("profile/ubah_password") ?>" class="list-group-item list-group-item-action">Ubah
        Password</a>
    <a href="<?php echo base_url("login0/logout") ?>" class="list-group-item list-group-item-action">Keluar</a>
</div>