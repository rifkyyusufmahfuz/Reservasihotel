<?php
include 'koneksi.php';
//Mengambil data dari edit.php

$id = $_POST['id'];
$nik = $_POST['nik'];
$nama_tamu = $_POST['nama_tamu'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$usia = $_POST['usia'];
$no_tlp = $_POST['no_tlp'];
$email = $_POST['email'];
$nokamar = $_POST['nokamar'];
$jam_checkin = $_POST['jam_checkin'];


// Melakukan proses Update Table Tamu
mysqli_query($koneksi,"UPDATE tamu SET nik='$nik', nama_tamu='$nama_tamu', jenis_kelamin='$jenis_kelamin', usia='$usia', no_tlp='$no_tlp', email='$email', nokamar='$nokamar', jam_checkin='$jam_checkin' WHERE nomor='$id'");

?>

<!-- Kembali ke halaman Tampil -->
<script>document.location='bukutamu.php'</script>