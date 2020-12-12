const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        title: 'Berhasil',
        text: 'Produk Ditambahkan Ke keranjang',
        icon: 'success',
        confirmButtonText: 'Ok'
    });
}