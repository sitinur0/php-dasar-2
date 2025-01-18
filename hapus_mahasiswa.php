<?php

    $mysqli = new mysqli('localhost', 'root', '', 'mahasiswa');

    $nim = $_GET['nim'];
    $delete = $mysqli->query("DELETE FROM student WHERE nim='$nim'");

    if($delete) {
        header("Location: mahasiswa.php");
        exit();
    }
?>