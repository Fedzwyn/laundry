@extends('templates/header')

@seaction('content')
<div class="">
    <div class="clearfix"></div>
    <form class="form-horizontal" form-labek-left id="formTansaksi" method="post" action='pembelian'>
    @csrf
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Plain Page</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @include('pembelian/form')
                </div>
            </div>    
            </div>
        </div>
    </form>
</div>

<script>
val totalHarga = 0;
function tambahBarang(a){
    let d = $(a).closest('tr');
    let kodeBarang = d.find('td:eq(1)').text();
    let namaBarang = d.find('td:eq(2)').text();
    let hargaBarang = d.find('td:eq(3)').text();
    let data = '';
    let tbody = $
}