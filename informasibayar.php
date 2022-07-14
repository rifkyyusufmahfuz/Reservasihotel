<!DOCTYPE HTML>
<html> <title>Form Booking Hotel</title>
<head>
  <title>Informasi Pembayaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <?php
    //MENYIMPAN DATA TAMU DAN DATA RESERVASI KE DATABASE //
    include "koneksi.php";

    $a=$_POST['nik'];
    $b=$_POST['nama'];
    $c=$_POST['jeniskelamin'];
    $d=$_POST['usia'];
    $e=$_POST['hp'];
    $f=$_POST['email'];
    $g=$_POST['nokamar'];
    $h=$_POST['waktu'];
    $i=$_POST['tgl1'];
    $j=$_POST['tgl2'];
    $k=$_POST['tipe'];
    $l=$_POST['fasilitas'];

    $hasil=mysqli_query($koneksi, "INSERT INTO tamu VALUES ('','$a','$b','$c','$d','$e','$f','$g','$h')");  
     

// SWTICH CASE UNTUK MENENTUKAN TARIF HARGA ROOM SATU HARI//
    switch ($k) {  
      case 'Standard':
      $harga1 = 300000;   
      break;

      case 'Deluxe':
      $harga1 = 500000;   
      break;

      case 'Double Room':
      $harga1 = 750000;
      break;

      case 'Family Room':
      $harga1 = 1500000;
      break;

      default:
      die ("Tipe room tidak valid , silahkan lengkapi data kembali !");
      break; }



//PERCABANGAN KONDISI UNTUK MENENTUKAN TARIF FASILITAS
      if ($l == 'Full Service') 
          {
        $harga2 = 350000;
        $listfasilitas = ['Wifi 150mbps', 'Room Service 24jam', 'Makan Malam', 'Sarapan', 'Parkir Gratis','Laundry','Coffee & Cemilan', 'Saluran TV Premium'];}

        else if ($l == 'Half Service')
          {
          $harga2 = 150000;
          $listfasilitas = ['Wifi 20mbps', 'Room Service hingga pukul 20:00 ', 'Sarapan', 'Parkir Gratis'];}

          else 
            { echo"Fasilitas pilihan tidak valid , silahkan lengkapi data kembali !";
          
          goto end;}


//MENENTUKAN JUMLAH HARI
$start_date = new DateTime($i);
$end_date = new DateTime($j);
$interval = $start_date->diff($end_date);

//RUMUS UNTUK MENGHITUNG TOTAL SEWA DAN PAJAK
$totalroom = ($harga1 * "$interval->days" );
$pajak = ($totalroom * 0.10);
$total = ($totalroom + $harga2 + $pajak);
$kodebooking=(32+$e);
?>

  <div class="container">
    <div class="table-responsive-sm">
<table class="table table-hover" align="center" border="1">
  <tr>
    <td class="bg-primary text-white" height="50" colspan="8" align="center">INFORMASI PEMBAYARAN</td>
  </tr>
  
  <tr class="table-dark text-dark">
    <td height="50" colspan="2" align="center">DATA TAMU</td>

    <td height="50" colspan="2" align="center">DATA RESERVASI</td>

    <td height="50" colspan="2" align="center">DATA PEMBAYARAN</td>

    <td width="18%" height="50" colspan="2" align="center">FASILITAS</td>
  </tr>

  <tr>
    <td><b>NIK KTP</b></td>
    <td><?php echo "$a"; ?> </td>

    <td><b>Jam Checkin</b></td>
    <td><?php echo "$h";?></td>

    <td><b>Tarif Room</b></td>
    <td><?php echo "Rp ". number_format($harga1, 0, ".", ".").",00<br>";?></td>

    <td rowspan="6" colspan="2"> 
    <?php for ($m = 0; $m < count($listfasilitas); $m++) //Perulangan For untuk menampilkan fasilitas yang didapatkan
    {		echo "- $listfasilitas[$m] <br>"; } ?>
    </td>
  </tr>
  
  <tr>
    <td><b>Nama Tamu</b></td>
    <td><?php echo "$b";?></td>

    <td><b>Tanggal Check In</b></td>
    <td><?php echo "$i";?></td>

    <td><b>Lama Sewa</b></td>
    <td><?php echo "$interval->days Hari ";?></td>
  </tr>

  <tr>
    <td><b>Jenis Kelamin</b></td>
    <td><?php echo "$c";?></td>

    <td width="18%"><b>Tanggal Check Out</b></td>
    <td><?php echo "$j";?></td>

    <td><b>Pajak PB1 (10%)</b></td>
    <td><?php echo "Rp ". number_format($pajak, 0, ".", ".").",00";?></td>
  </tr>

  <tr>
    <td><b>Nomor Telepon</b></td>
    <td><?php echo "$e";?></td>

    <td><b>Tipe Room</b></td>
    <td><?php echo "$k";?></td>

    <td><b>Tarif Fasilitas</b></td>
    <td><?php echo "Rp ". number_format($harga2, 0, ".", ".").",00";?></td>
  </tr>

  <tr>
    <td><b>Usia</b></td>
    <td><?php echo "$d";?></td>

    <td><b>Fasilitas</b></td>
    <td><?php echo "$l";?></td>

    <td rowspan="2"><b>Total Harga</b></td>
    <td rowspan="2"><?php echo "Rp ". number_format($total, 0, ".", ".").",00<br>"; ?></td>
  </tr>

  <tr>
    <td><b>E-mail</b></td>
    <td><?php echo "$f";?></td>

    <td><b>Nomor Kamar</b></td>
    <td><?php echo "$g";?></td>
  </tr>

  <tr class="table-dark text-dark">
    <td colspan="6" rowspan="2" align="center" height="30">
      <br>
         <b>Kode Booking</b>
         <p class="text-danger"><b><?php echo "$kodebooking";?></b></p>
    </td>
<td colspan="2" align="center">
  <br>
  <input type="submit" value="BUKU TAMU" onclick="document.location='bukutamu.php'" class="btn btn-success"><br><br>

</td>
    
  </tr>

</table>


<?php
$hasil2=mysqli_query($koneksi, "INSERT INTO datapembayaran (kode_booking, tgl_checkin, tgl_checkout, tipe_room, tarif_room, fasilitas, tarif_fasilitas, pajak, total_bayar) VALUES ('$kodebooking','$i','$j','$k','$harga1','$l','$harga2','$pajak','$total')"); 
?>

</form>
</body>
</html>
<?php end: ?>