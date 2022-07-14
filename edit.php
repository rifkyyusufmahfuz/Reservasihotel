<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Data</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<form action="update.php" method="post">
<?php
include "koneksi.php";

//mengambil data variable tombol edit
$id = $_GET['kdtamu'];
$edit=mysqli_query($koneksi,"select * from tamu where nomor='$id'");
$r=mysqli_fetch_array($edit);

echo "
<form method=post action=update.php>
  <input type=hidden name=id value=$id>
<table align=center border=1 class=table-active>

  <tr class=bg-secondary>
    <th colspan=4><div align=center class=text-white>EDIT TAMU</div></th>
  </tr>

  <tr>
     <td><b>NIK KTP</b></td>
          <td><input type=text name='nik' size=60 value='$r[nik]'></td>
  </tr>

  <tr>
    <td><b>Nama Tamu</b></td>

    <td><input type=text name='nama_tamu' size=60 value='$r[nama_tamu]'></td>
  </tr>
" ?>

    <tr>
      <td><b>Jenis Kelamin</b></td>
      <td><?php if ($r['jenis_kelamin']==="Laki-Laki") : ?>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" checked /><label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" /><label for="perempuan">Perempuan</label>
            <?php else : ?>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" checked /><label for="perempuan">Perempuan</label>
            <?php endif; ?> </td>
    </tr>

<?php echo "
  <tr>
    <td><b>Usia</b></td>
    <td><input type=text name='usia' value='$r[usia]'></td>
  </tr>

  <tr>
    <td><b>Nomor Telepon</b></td>
    <td><input type=text name='no_tlp' value='$r[no_tlp]'></td>
  </tr>

  <tr>
    <td><b>Email</b></td>
    <td><input type=text name='email' value='$r[email]'></td>
  </tr>

  <tr>
    <td><b>Nomor Kamar</b></td>
    <td><input type=text name='nokamar' value='$r[nokamar]'></td>
  </tr> "?>
  <tr>
      <td>Jam Check In</td>
      <td><select size=1 name='jam_checkin'>
     
      <option value="">Pilih Jam Booking</option>
      <option <?php if ($r['jam_checkin']=='13:00 WIB'){echo "selected"; } ?> value='13:00 WIB'>13:00 WIB</option>
      <option <?php if ($r['jam_checkin']=='14:00 WIB'){echo "selected"; } ?> value='14:00 WIB'>14:00 WIB</option>
      <option <?php if ($r['jam_checkin']=='15:00 WIB'){echo "selected"; } ?> value='15:00 WIB'>15:00 WIB</option>
      </select> </td>
    </tr>

  <tr>
    <td colspan=2 align=center class=bg-secondary>
      <input type=submit value=Update class=btn-primary>
      <input type=button value=Batal onclick=self.history.back() class=btn-danger></td>
  </tr>
</table> </form>


