<?php

    session_start();
      
    $mysqli = new mysqli('localhost', 'root', '', 'mahasiswa');

    $nim = $_GET['nim'];
    $mahasiswa = $mysqli->query("SELECT * FROM student WHERE nim='$nim'");
    $data = $mahasiswa->fetch_assoc();
 
    $program_studi = $mysqli->query("SELECT * FROM program_study");

    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $program_studi = $_POST['program_study'];

        $update = $mysqli->query("UPDATE student SET nama='$nama', id=$program_studi WHERE nim='$nim'");

        if($update) {
            $_SESSION['success'] = true;
            $_SESSION['message'] = 'Data Berhasil Diubah';
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
    <title>Form Edit Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class ="container">
    <h1 class="text-center">Edit mahasiswa</h1>
    <form method ="POST">
        <div class ="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?= $data['nim']?>" disabled>
        </div> 
        <div class ="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']?>">
        </div>
        <div class ="mb-3">
            <label for="program_study" class="form-label">Program Studi</label><br>
            <select class="form-select" id="program_study" name="program_study">
            <?php while ($row = $program_studi->fetch_assoc()) { ?>
                <option value="<?= $row['no'] ?>" <?= $row['no'] == $data['id'] ? 'selected' : '' ?>><?= $row['name']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mt-3">
                <button type="submit" class="btn btn-primary">Sumbit</button>
                <a href="mahasiswa.php" class="btn btn-warning">Cancel</a>
         </div>
    </form>   
</body>
</html>