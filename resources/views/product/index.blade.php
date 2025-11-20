@extends('layouts.app')
@section('title','Manajemen Produk')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
  <h3 class="fw-bold">Manajemen Produk</h3>

  <button class="btn btn-primary" id="btnAddProduct" data-bs-toggle="modal" data-bs-target="#productModal">
    + Tambah Produk
  </button>
</div>

<table id="productTable" class="table table-striped table-bordered">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Stock</th>
      <th>Created At</th>
      <!-- <th>Aksi</th> -->
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>1</td>
      <td>Laptop</td>
      <td>Rp. 20.xxx.xxx</td>
      <td>3</td>
      <td>{{ now() }}</td>
      <td>
        <!-- <button class="btn btn-sm btn-warning btn-edit">Edit</button>
        <button class="btn btn-sm btn-danger btn-delete">Hapus</button> -->
      </td>
    </tr>
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="productModal">
  <div class="modal-dialog">
    <form id="productForm" class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Tambah Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" id="productName" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Price</label>
          <input type="number" class="form-control" id="productPrice" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Stock</label>
          <input type="number" class="form-control" id="productStock" required>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

    </form>
  </div>
</div>

@endsection
