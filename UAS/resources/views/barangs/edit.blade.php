<form method="POST" action="{{ route('barangs.update', $barang->id) }}">
    @csrf
    @method('PUT')
    <label for="no_barang">No Barang:</label>
    <input type="text" id="no_barang" name="no_barang" value="{{ $barang->no_barang }}" required>
    <label for="nama_barang">Nama Barang:</label>
    <input type="text" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" required>
    <label for="varian">Varian:</label>
    <input type="text" id="varian" name="varian" value="{{ $barang->varian }}" required>
    <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa:</label>
    <input type="date" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" value="{{ $barang->tanggal_kadaluarsa }}"
        required>
    <label for="tanggal_produksi">Tanggal Produksi:</label>
    <input type="date" id="tanggal_produksi" name="tanggal_produksi" value="{{ $barang->tanggal_produksi }}"
        required>
    <label for="harga_beli">Harga Beli:</label>
    <input type="number" id="harga_beli" name="harga_beli" value="{{ $barang->harga_beli }}" required>
    <button type="submit">Update</button>
</form>
