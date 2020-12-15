<!DOCTYPE html>
<html lang="en">
<head>
     <!--<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
     <title>Update Data</title>
</head>
<body>
     <h1 align="center">Update Data Mahasiswa</h1>
     <form action="<?php echo base_url('C_Mahasiswa/update'); ?>" method="post">
          <table style="margin:20px auto;">
               <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim_mahasiswa"></td>
               </tr>
               <tr>
                    <td>Nama Mahasiswa</td>
                    <td><input type="text" name="nama_mahasiswa"></td>
               </tr>
               <tr>
                    <td>Umur</td>
                    <td><input type="text" name="umur_mahasiswa"></td>
               </tr>
               <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat_mahasiswa"></td>
               </tr>
               <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan Data"></td>
               </tr>
          </table>
     </form>
</body>
</html>