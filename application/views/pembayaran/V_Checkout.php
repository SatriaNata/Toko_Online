<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Daftar Mahasiswa</title>
     <style>
     .striped tr:nth-child(odd){
               background-color: #00FFFF;
          }
     .striped tr:nth-child(even){
               background-color: #F0FFFF;
          }
     .striped .judul{
          background-color: #ADD8E6 !important;
          
     }
     </style>
     <title>Daftar Barang</title>
</head>
<body>
<?php echo form_open('C_Berita/search')?>
<center><input type="text" name="keyword" class="form-control" placeholder="Cari Berita..">
     <button class="btn btn-outline-secondary btn-sm" type="submit" >Cari</button></center>
     <?php echo form_close()?>
     <!-- <form action="<?php echo base_url('C_Berita/insert'); ?>" method="post"> -->
          <table border="1px solid black" class="striped" style="margin:20px auto;" width="800px">
               <tr class="judul">
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <!-- <th>Jumlah barang</th> -->
                    <th>Aksi</th>
               </tr>
               <?php 
               $no = 1;
               foreach ($shopping as $sp) :?>
               <tr>
                    <td><?php echo $no++ ?></td>
                    <td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $sp['gambar_barang'] ?>" width = "150px"></td>
                    <td><?php echo $sp['nama_barang'] ?></td>
                    <td><?php echo "Rp".number_format($sp['harga_barang'],0,',','.')?></td>
                    <td><?php echo $sp['stok_barang'] ?></td>
                    <!-- <td align="center"> <?php echo anchor('C_Shopping/Masukan_Keranjang/'.$sp['id']); ?></td>  -->
                    <!-- <td><?php echo anchor('C_Shopping/Masukan_Keranjang/'.$sp['id'],'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>');?></td>  -->
                    <td>
                    <button type=" button" class="btn btn-light"><?php echo anchor('C_Shopping/data_barang/' . $sp['id'], 'Masukan Keranjang'); ?></button>
                    </td>
               </tr>
               <?php endforeach; ?>          
          </table>
     
</body>
</html>