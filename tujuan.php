<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim     = $_POST['nim'];
    $nama    = $_POST['nama'];
    $email   = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat  = $_POST['alamat'];
} else {
    header("Location: index.php"); // kalau akses langsung
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section class="page-section" id="services">
  <div class="container-fluid px-4 px-lg-5">
    <h2 class="text-center mt-0">Data Mahasiswa</h2>
    <hr class="divider" />

    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover w-100">
        <thead class="table-primary text-center">
          <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No. Telp</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= htmlspecialchars($nim) ?></td>
            <td><?= htmlspecialchars($nama) ?></td>
            <td><?= htmlspecialchars($email) ?></td>
            <td><?= htmlspecialchars($telepon) ?></td>
            <td><?= htmlspecialchars($alamat) ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
</body>
</html>
