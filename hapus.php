<?php
include 'koneksi.php';

mysqli_query($koneksi, "delete from tamu where nomor='$_GET[kdhapus]'");
?>

<script>document.location='bukutamu.php'</script>