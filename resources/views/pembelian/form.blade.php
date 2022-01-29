<form class="form-horizontal form-label-left input_mask" id="formTransaksi">
    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
            <label class="control-label col-md-6 col-sm-6 col-xs-12">Tanggal Pembelian
            </label>
        </div>
        <div class="col-md-6  col-sm-12 col-xs-12">
            <input class="date-picker form-control col-md-12 col-xs-12" required="required" type="date" value="{{  date('y-m-d') }}">
        </div>
    </div>

<div class="col-md-6 col-sm-6 col-xs-12 form-group">
    <label class="control-label col-md-6 col-sm-6 col-xs-12">Distributor
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <select class="form-control col-md-12 col-xs-12" required="required">
            @@foreach ($pemasok as $item)
                <option value="{{  $->id }}">{{ $p->nama_pemasok }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="col-md-6 col-sm-6 col-xs-12 form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">&nbsp;    
    </label>
    <div class="col-md-9 col-sm-9 col-xs-12">
        <button type="button" clas="btn btn-primary" id="tambahBarangBtn" data-toggle ="modal"
        data-target="#tblBarangModal">Tambah Barang</button>
    </div>
</div>
 

<!--- bagian detail barang pembelian --->
<div>
    <h3>Barang</h3>
    <table id="tblTransaksi" class="table table-stripted table-bordered bulk_action"></table>
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead> 
        <tbody>
            <tr>
                <td colspan="6" style="text-align:center;font-style:italic ">Belum ada data</td>
            </tr>
        </tbody>   
</div>
<!--- end detail barang pembelian --->

<!--- bagian total, submit, data hidden --->
<div class="row" style="text-align: right;margin-botton:10px">
    <div class="col-md-12">
        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-6" style="text-align: right; ">
            <label class="control-label col-md-3 col-sm-6 col-xs-12">Total Harga
            </label>
        <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: right; margin-right:0;padding-right:0">
            <input class="form-control col-md-6 col-xs-12" required="required" type="text" id="totalHarga">
        </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-6 col-xs-12" style="text-align: right; margin-right:0;padding-right:0">
        <div class="col-md-12 col-sm-9 col-xs-12">
            <button type="button" class="btn btn-success">Simpan Transaksi</button>
        </div>
    </div>
</div>
        <!--- end of total and submit --->


{{-- Modal Barang --}}
<div class="modal fade" id="tblBarangModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-contetnt">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tambah Barang</h4>
        </div>
        <div class="modal-body">
            <table id='tblBarang2' class="table table-stripped tabel-compact">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $b)
                    <tr>
                        <td>{{ $i = (!isset($i)?1:++$i) }}</td>
                        <td> {{ $b->kode_barang }}</td>
                        <td> {{ $b->nama_barang }}</td>
                        <td> {{ $b->harga_jual }}</td>
                        <td><button class="pilihBarangBtn" type="button">Pilih</button></td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{--  end of Modal Barang --}}
</form>