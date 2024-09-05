<?php
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

$Nama = $_POST['Nama'];
$Nim = $_POST['Nim'];
$Kelas = $_POST['Kelas'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Komentar = $_POST['Komentar'];
$Submit = $_POST['Submit'];

$query = "INSERT INTO registrasi VALUES('$Nama' , '$Nim' , '$Kelas' , '$Gender' , '$Email' , '$Komentar' , '$Submit')";

mysqli_query($koneksi, $query);
?>
