<?php

    session_start();

    $mysqli = new mysqli('localhost', 'root', '', 'mahasiswa');

    $nim = $_GET['nim'];
    $delete = $mysqli->query("DELETE FROM student WHERE nim='$nim'");

    if($delete) {
        $_SESSION['success'] = true;
        $_SESSION['message'] = 'Data Berhasil Dihapus';
        header("Location: mahasiswa.php");
        exit();
    }
?>