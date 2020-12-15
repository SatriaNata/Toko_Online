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
</head>
<body>
     <!-- <h1 align="center">Mahasiswa</h1> -->
     <!-- <center><input type="search" name="cari" placeholder="Cari Nama Orang..">
     <button><a href="<?php echo base_url('C_Mahasiswa/search');?>">search</a></button></center> -->

     <?php echo form_open('C_Mahasiswa/search')?>

     <center><input type="text" name="keyword" class="form-control" placeholder="Cari Nama Orang..">
     <button class="btn btn-outline-secondary btn-sm" type="submit" >Cari</button></center>
     <?php echo form_close()?>
     <table border="1px solid black" class="striped" style="margin:20px auto;" width="800px">
          <tr class="judul">
               <th>No.</th>
               <th>NIM</th>
               <th>Nama Mahasiswa</th>
               <th>Umur</th>
               <th>Alamat</th>
               <th>Aksi</th>
          </tr>

          <?php 
          foreach ($mahasiswa as $mhs) :?>
          <tr>
               <td><?php echo ++$start ?></td>
               <td><?php echo $mhs['nim'] ?></td>
               <td><?php echo $mhs['nama'] ?></td>
               <td><?php echo $mhs['umur']?></td>
               <td><?php echo $mhs['alamat'] ?></td>
               <td align="center"><a class="btn btn-dark" href="<?php echo base_url('C_Mahasiswa/detail/'.$mhs['id']);?>">Detail</a>
               <!-- <button><a href="<?php echo base_url('C_Mahasiswa/update/'.$mhs['id']); ?>">Update</a></button></td> -->
               <!-- <button><a href="<?php echo base_url('C_Mahasiswa/edit'); ?>">Update</a></button></td> -->
               <!-- <td><?php echo anchor('V_Mahasiswa/detail/'.$mhs['id']);?> <button>detail</button></td> -->
          </tr>
          <?php endforeach; ?>          
     </table>
     <?= $this->pagination->create_links();?>
     <center><a class="btn btn-primary" href="<?php echo base_url('C_Mahasiswa/insert'); ?>">+ Tambah Mahasiswa</a></center>
     <!-- <button type="button" class="btn btn-info"><a href="<?= site_url('C_Template/index') ?>">Home</a></button> -->
</body>
</html>