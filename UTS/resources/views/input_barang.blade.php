<form action="/process_barang" method="post">
    @csrf
    <label for="kode_barang">Kode Barang:</label>
    <input type="text" name="kode_barang" required>

    <label for="nama_barang">Nama Barang:</label>
    <input type="text" name="nama_barang" required>

    <label for="jenis_varian">Jenis Varian:</label>
    <input type="text" name="jenis_varian" required>

    <label for="qty">Qty:</label>
    <input type="number" name="qty" required>

    <label for="harga_jual">Harga Jual:</label>
    <input type="number" name="harga_jual" required>

    <button type="submit">Proses</button>
</form>
