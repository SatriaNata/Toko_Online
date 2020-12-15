<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1 align="center">Detail Mahasiswa</h1>
     <table border="1px solid black" style="margin:20px auto;" width="300">
          <tr align="center">
               <th>NIM</th>
               <td><?php echo $detail->nim?></td>
          </tr>
          <tr align="center">
               <th>Nama</th>
               <td><?php echo $detail->nama?></td>
          </tr>
          <tr align="center">
               <th>Umur</th>
               <td><?php echo $detail->umur?></td>
          </tr>
          <tr align="center">
               <th>Alamat</th>
               <td><?php echo $detail->alamat?></td>
          </tr>
     </table>
     <center><form action="<?php echo base_url('C_Template/mahasiswa'); ?>" method="post"><button>Kembali</button></form></center>
</body>
</html>