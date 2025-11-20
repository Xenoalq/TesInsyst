$(document).ready(function () {

    // Init datatable
    $('#productTable').DataTable();

    // Reset modal saat klik tambah
    $('#btnAddProduct').click(function () {
        $('#productForm')[0].reset();
    });

    // Submit form
    $('#productForm').on('submit', function (e) {
        e.preventDefault();

        alert("Produk berhasil disimpan!");

        $('#productModal').modal('hide');
    });
});
