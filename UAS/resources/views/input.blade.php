<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Barang</title>
</head>

<body>
    <h2>Formulir Barang</h2>
    <form action="{{ route('barangs.store') }}" method="post">
        @csrf
        <label for="no_barang">No Barang:</label>
        <input type="text" name="no_barang" required><br>

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" required><br>

        <label for="varian">Varian:</label>
        <input type="text" name="varian" required><br>

        <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa:</label>
        <input type="date" name="tanggal_kadaluarsa" required><br>

        <label for="tanggal_produksi">Tanggal Produksi:</label>
        <input type="date" name="tanggal_produksi" required><br>

        <label for="harga_beli">Harga Beli:</label>
        <input type="number" name="harga_beli" step="0.01" required><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>
