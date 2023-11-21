<h2>Detail Barang:</h2>
<p>Kode Barang: {{ $barang->kode_barang }}</p>
<p>Nama Barang: {{ $barang->nama_barang }}</p>
<p>Jenis Varian: {{ $barang->jenis_varian }}</p>
<p>Qty: {{ $barang->qty }}</p>
<p>Harga Jual: {{ $barang->harga_jual }}</p>

<h2>Total Harga: {{ $totalHarga }}</h2>
<h2>Potongan Harga: {{ $diskon * 100 }}%</h2>
<h2>Harga Setelah Diskon: {{ $hargaSetelahDiskon }}</h2>
