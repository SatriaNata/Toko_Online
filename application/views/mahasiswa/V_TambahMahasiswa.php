<!DOCTYPE html>
<html lang="en">
<head>

     <!--<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
     <title>Tambah Data</title>
</head>
<body>
     <h1 align="center">Tambah Data Mahasiswa</h1>
     <form action="<?php echo base_url('C_Mahasiswa/save'); ?>" method="post">
          <!-- <div>
               <label for=""></label>
               <input class="form-control" type="text" name="nim_mahasiswa">
          </div> -->
          <table style="margin:20px auto;">
               <tr>
                    <td class="py-2">NIM</td>
                    <td class="py-2"><input class="form-control" type="text" name="nim_mahasiswa"></td>
                    
               </tr>
               <tr>
                    <td class="py-2">Nama Mahasiswa</td>
                    <td class="py-2"><input class="form-control" type="text" name="nama_mahasiswa"></td>
               </tr>
               <tr>
                    <td class="py-2">Umur</td>
                    <td class="py-2"><input class="form-control" type="text" name="umur_mahasiswa"></td>
               </tr>
               <tr>
                    <td class="py-2">Alamat</td>
                    <td class="py-2"><input class="form-control" type="text" name="alamat_mahasiswa"></td>
               </tr>
               <tr>
                    <!-- <td class="py-2"></td> -->
                    <td class="py-2"><input class="btn btn-primary" type="submit" value="Simpan Data"></td>
               </tr>
          </table>
     </form>
</body>
</html>