<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Mahasiswa</title>
</head>
<body>
  <h2>Formulir Mahasiswa</h2>
  <form action="{{ route('students.store') }}" method="post">
    @csrf
    <label for="name">Nama:</label>
    <input type="text" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="gpa">GPA:</label>
    <input type="number" name="gpa" step="0.1" required><br>

    <button type="submit" name="submit">Submit</button>
  </form>

  <?php
  // Proses form jika tombol submit ditekan
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Hubungkan ke database (gantilah informasi sesuai dengan pengaturan database Anda)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nyoba_crud";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil data dari formulir
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gpa = $_POST['gpa'];

    // Simpan data ke database
    $sql = "INSERT INTO mahasiswa (name, email, gpa) VALUES ('$name', '$email', $gpa)";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
  }
  ?>
</body>
</html>
