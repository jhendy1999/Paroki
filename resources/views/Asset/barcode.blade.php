<h1>Tabel Barcode</h1>
<br>
<a href="{{action('asset_controller@cetak_pdf')}}" class="btn">Download PDF</a>
<table class="table table-hover">
<tr>
                    <th>Kode Asset</th>
                    <th>Nama Asset</th>
                    <th>Barcode</th>
                </tr>
                @foreach($asset as $asset)
                <tr>
                    <td>{{$asset->kode_asset}}</td>
                    <td>{{$asset->nama}}</td>
                    <td><img src="data:image/png;base64,{{DNS2D::getBarcodePNG($asset->kode_asset, 'QRCODE')}}"style="width: 100px;"/></td>   
                </tr>
                @endforeach
</table>
<form action="/asset/create" method="POST">
    {{csrf_field()}}
    <div class="form-group">
      <label for="exampleInputEmail1">Kode Asset</label>
      <input name="kode_asset"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input name="nama"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jenis</label>
        <input name="jenis"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">merk</label>
        <input name="merk"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Tipe</label>
        <input name="tipe"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">warna</label>
        <input name="warna"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">no_indentifikasi</label>
        <input name="no_identifikasi"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">jenis_bahan</label>
        <input name="jenis_bahan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">asal </label>
        <input name="asal"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">tahun_peroleh </label>
        <input name="tahun_perolehan"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">ukuran</label>
        <input name="ukuran"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">satuan</label>
        <input name="satuan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">kondisi</label>
        <input name="kondisi"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">jumlah_barang</label>
        <input name="jumlah_barang"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">harga_satuan</label>
        <input name="harga_satuan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">lokasi</label>
        <input name="lokasi"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">foto</label>
        <input name="foto"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">keterangan</label>
        <input name="keterangan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nim mahasiswa">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
                            