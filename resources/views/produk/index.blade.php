@extends('layouts.app')
@section('content')
<section class="section">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Invoices</h4>
          <div class="card-header-action">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambahProduk">
              Tambah Produk
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive table-invoice">
            <table class="table table-striped">
              <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Tindakan</th>
              </tr>
              @php
                $count = 1;
              @endphp
              @foreach($produk as $item)
                <tr>
                  <td>{{ $count++ }}</td>
                  <td class="font-weight-600">{{ $item->nama_produk }}</td>
                  <td>
                    <button class="btn btn-success btn-edit-produk" data-id="{{ $item->id }}" data-namaproduk="{{ $item->nama_produk }}" data-url="{{ route('produk.update', $item->id) }}">Edit</button>
                    <button class="btn btn-danger btn-delete-produk" data-id="{{ $item->id }}" data-url="{{ route('produk.destroy', $item->id) }}">Hapus</button>
                  </td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Modal --}}
@include('produk.modal-create')
@include('produk.modal-update')
@include('produk.modal-delete')

{{-- Script --}}
@push('script')
  <script>
    $('.btn-edit-produk').on('click', function() {
      let id = $(this).data('id');
      let url = $(this).data('url');
      let namaProduk = $(this).data('namaproduk');
      $('#modalEditProduk form').attr('action', url);
      $('#modalEditProduk form input[name="nama_produk"]').val(namaProduk)
      $('#modalEditProduk').modal('toggle')
    })
    $('.btn-delete-produk').on('click', function() {
      let id = $(this).data('id');
     , let url = $(this).data('url');
      $('#modalDeleteProduk form').attr('action', url);
      $('#modalDeleteProduk').modal('toggle')
    })
  </script>
@endpush
@endsection