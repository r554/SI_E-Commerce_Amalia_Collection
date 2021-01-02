 <!-- Glide JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
 <!-- Script -->
 <script src="<?php echo base_url() ?>assets/Frontend/js/index.js"></script>
 <script src="<?php echo base_url() ?>assets/Frontend/js/product.js"></script>
 <script src="<?php echo base_url() ?>assets/Frontend/js/slider.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
     integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
 </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
     integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
 </script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
     integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
 </script>

 <script>
document.getElementById("menu_images").onchange = function() {
    var reader = new FileReader();
    if (this.files[0].size > 122028385) {
        alert("Ukuran gambar melebihi 120 MB");
        $("#menu_image").attr("src", "blank");
        $("#menu_image").hide();
        $('#menu_images').wrap('<form>').closest('form').get(0).reset();
        $('#menu_images').unwrap();
        return false;
    }
    if (this.files[0].type.indexOf("video") == -1) {
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