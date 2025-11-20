$(document).ready(function () {

    $('#productTable').DataTable();

    $('#btnAddProduct').click(function () {
        $('#productForm')[0].reset();
    });

    $('#productForm').on('submit', function (e) {
        e.preventDefault();

        alert("Produk berhasil disimpan!");

        $('#productModal').modal('hide');
    });
});
