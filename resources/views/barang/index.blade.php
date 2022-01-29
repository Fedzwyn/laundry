@extends('layouts.app')
@section('content')
<section class="section">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Invoices</h4>
          <div class="card-header-action">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambahbarang">
              Tambah Barang
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive table-invoice">
            <table class="table table-striped">
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Tindakan</th>
              </tr>
              @php
                $count = 1;
              @endphp
              @foreach($barang as $item)
                <tr>
                  <td>{{ $count++ }}</td>
                  <td class="font-weight-600">{{ $item->nama_barang }}</td>
                  <td>
                    <button class="btn btn-success btn-edit-barang" data-id="{{ $item->id }}" data-namabarang="{{ $item->nama_barang }}" data-url="{{ route('barang.update', $item->id) }}">Edit</button>
                    <button class="btn btn-danger btn-delete-barang" data-id="{{ $item->id }}" data-url="{{ route('barang.destroy', $item->id) }}">Hapus</button>
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
@include('barang.modal-create')
@include('barang.modal-update')
@include('barang.modal-delete')

{{-- Script --}}
@push('script')
  <script>
    $('.btn-edit-barang').on('click', function() {
      let id = $(this).data('id');
      let url = $(this).data('url');
      let namabarang = $(this).data('namabarang');
      $('#modalEditBarang form').attr('action', url);
      $('#modalEditBarang form input[name="nama_barang"]').val(namaBarang)
      $('#modalEditBarang').modal('toggle')
    })
    $('.btn-delete-barang').on('click', function() {
      let id = $(this).data('id');
      let url = $(this).data('url');
      $('#modalDeleteBarang form').attr('action', url);
      $('#modalDeleteBarang').modal('toggle')
    })
  </script>
@endpush
@endsection