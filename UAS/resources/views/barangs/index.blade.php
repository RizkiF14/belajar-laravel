<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangs CRUD</title>
</head>

<body>
    <h1>List Barang</h1>
    <a href="{{ route('input') }}">Tambah Barang Baru</a>
    <table border="1">
        <thead>
            <tr>
                <th>No Barang</th>
                <th>Nama Barang</th>
                <th>Varian</th>
                <th>Tanggal Kadaluarsa</th>
                <th>Tanggal Produksi</th>
                <th>Harga Beli</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->no_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->varian }}</td>
                    <td>{{ $barang->tanggal_kadaluarsa }}</td>
                    <td>{{ $barang->tanggal_produksi }}</td>
                    <td>{{ $barang->harga_beli }}</td>
                    <td>
                        <!-- Tombol untuk mengedit barang -->
                        <a href="{{ route('barangs.edit', $barang->id) }}">Edit</a>

                        <!-- Form untuk menghapus barang -->
                        <form action="{{ route('barangs.destroy', $barang->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
