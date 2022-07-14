<!DOCTYPE HTML>
<html >
  <head>
  <title>Input Tamu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
  <body>
    <form method="POST" action="informasibayar.php" >
        <script>
          function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

              return false;
            return true;
          }
        </script>

<div class="container">
    <h2 align="center">Reservasi OceanHotel</h2>
    <p align="center">Input Reservasi Tamu OceanHotel</p>

<table align="center" border="1" class="table table-hover">
        <tr>
            <td class="bg-secondary text-white" height="50" colspan="2" align="center">INPUT TAMU</td>
            
            <td class="bg-secondary text-white" height="50" colspan="2" align="center">INPUT RESERVASI</td>
        </tr>

        <tr>
            <td><b>NIK KTP</b></td>
            <td><input class="form-control" type="text"  maxlength="16" name="nik" onkeypress="return hanyaAngka(event)"/></td>
           
            <td><b>Jam Checkin</b></td>
              <td><select class="form-control" name="waktu" >
          <option value="">--Pilih Jam Booking--</option>
          <option value="13:00 WIB">13:00 WIB</option>
          <option value="14:00 WIB">14:00 WIB</option>
          <option value="15:00 WIB">15:00 WIB</option>
          </select> </td>
        </tr>

 <tr>
            <td><b>Nama Tamu</b></td>
              <td><input class="form-control" name="nama" type="text" maxlength="35"/></td>
           
            <td><b>Tanggal Check In</b></td>
                        <td><input class="form-control" type="date" name="tgl1" min="<?= date('Y-m-d'); ?>"></td>
        </tr>

        <tr>
           <td><b>Jenis Kelamin</b></td>
                <td><input type="radio" name="jeniskelamin" value="Laki-Laki" id="laki-laki"/>
                  <label for="laki-laki">Laki-Laki</label> <br>
                  <input type="radio" name="jeniskelamin" value="Perempuan" id="perempuan" />
                  <label for="perempuan">Perempuan</label></td>
           
            <td><b>Tanggal Check Out</b></td>
                         <td><input class="form-control" type="date" name="tgl2" min="<?= date('Y-m-d'); ?>"></td>
        </tr>

        <tr>
            <td><b>Nomor Telepon</b></td>
                  <td><input class="form-control" type="text" name="hp" maxlength="13" onkeypress="return hanyaAngka(event)"></td>
           
            <td><b>Tipe Room</b></td>
                            <td><select class="form-control" name="tipe" >
                              <option value="">--Pilih Tipe Room--</option>
                              <option value="Standard">Standard</option>
                              <option value="Deluxe">Deluxe</option>
                              <option value="Double Room">Double Room</option>
                              <option value="Family Room">Family Room</option>
                            </select></td>
        </tr>


        <tr>
            <td><b>Usia</b></td>
                  <td><input class="form-control" type="text" name="usia" maxlength="13" onkeypress="return hanyaAngka(event)"></td>
           
            <td><b>Fasilitas</b></td>
                            <td><input type="radio" name="fasilitas" value="Full Service" id="1"/>
                              <label for="1">Full Service</label><br>
                              <input type="radio" name="fasilitas" value="Half Service" id="2"/>
                              <label for="2">Half Service</label>
                            </td>
        </tr>

         <tr>
            <td><b>E-mail</b></td>
              <td><input class="form-control" name="email" type="text"  maxlength="35"/></td>
           
            <td><b>Nomor Kamar</b></td>
              <td><input class="form-control" name="nokamar" type="text" size="5" maxlength="5"/></td>
        </tr>

        <tr>
            <td class="bg-secondary text-white" colspan="4" rowspan="2" align="center" height="30">
               <input class="btn btn-primary" type="submit" name="proses" value="Proses" onclick="return confirm('Pastikan data yang Anda masukkan sudah benar!')"> &nbsp;
               <input class="btn btn-danger" type="reset" value="Batal" class="btn btn-danger btn-sm" onclick=self.history.back()>
            </td>
        </tr>

      </table>
    </form>
    </body>
      </html>
    