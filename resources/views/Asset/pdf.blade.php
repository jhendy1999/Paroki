<h1>Tabel Barcode</h1>
<br>
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