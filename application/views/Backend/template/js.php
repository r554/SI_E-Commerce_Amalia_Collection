<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/Admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>assets/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>assets/Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
</script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/Admin/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url() ?>assets/Admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url() ?>assets/Admin/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/Admin//jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url() ?>assets/Admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>assets/Admin/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/Admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/Admin/dist/js/pages/dashboard2.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url() ?>assets/Admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-responsive/js/dataTables.responsive.min.js">
</script>
<script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
</script>
<script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/Admin/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/Admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/Admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url() ?>assets/Admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<!-- js gambar -->
<script>
document.getElementById("menu_images").onchange = function() {
    var reader = new FileReader();
    if (this.files[0].size > 2028385) {
        alert("Ukuran gambar melebihi 2 MB");
        $("#menu_image").attr("src", "blank");
        $("#menu_image").hide();
        $('#menu_images').wrap('<form>').closest('form').get(0).reset();
        $('#menu_images').unwrap();
        return false;
    }
    if (this.files[0].type.indexOf("image") == -1) {
        alert("File yang dipilih bukan gambar");
        $("#menu_image").attr("src", "blank");
        $("#menu_image").hide();
        $('#menu_images').wrap('<form>').closest('form').get(0).reset();
        $('#menu_images').unwrap();
        return false;
    }
    reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("menu_image").src = e.target.result;
        $("#menu_image").show();
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
</script>