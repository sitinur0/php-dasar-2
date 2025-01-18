<?php

    session_start();

    $mysqli = new mysqli('localhost', 'root', '', 'mahasiswa');

    $prodi = $mysqli->query("SELECT * FROM program_study");
    if (isset($_POST['nim']) && isset($_POST['nama'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['name'];

        $insert = $mysqli->query("INSERT INTO student(nim, nama, id) VALUES ('$nim', '$nama', '$prodi')");
        if ($insert) {
            $_SESSION['success'] = true;
            $_SESSION['message'] = 'Data Telah Ditambahkan';
            header("Location: mahasiswa.php");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
    <h1 class="text-center">Tambah mahasiswa</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Program Studi</label><br>
            <select class="form-select" id="name" name="name" required>
                <option value="">Pilih Program Studi</option>
                <?php while ($row = $prodi->fetch_assoc()) { ?>
                <option value="<?= $row['no']; ?>">
                    <?= $row['name']; ?>
                </option>
            <?php } ?>
            </select>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="mahasiswa.php" class="btn btn-warning">Cancel</a>
        </div>
    </form>
</body>
</html>