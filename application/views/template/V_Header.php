<!DOCTYPE html>
<html>
<head>
     <!-- Load file CSS Bootstrap offline -->
<link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css">
<script src="<?php echo base_url()?>/assets/bootstrap/js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
     <h1>Halaman HTML dengan bootstrap offline</h1>
     <p>Halaman ini responsive untuk semua jenis perangkat</p> 
</div>
<style>
     .form-control{
     -webkit-border-radius: 50px;
     -moz-border-radius: 50px;
     border-radius: 50px;
     }
     </style>
<center>
<table border="1px solid black" style="margin:20px auto;" width="800px">
     <h1 align="center">Header Mahasiswa</h1>
     <!-- <th> -->
     <button type="button" class="btn btn-primary">Primary</button>
     <a href="<?php echo base_url('C_Mahasiswa/utama'); ?>">Home</a> |
     <a href="<?php echo base_url('C_Mahasiswa/index'); ?>">Mahasiswa</a>|
     <a href="<?php echo base_url('C_Mahasiswa/berita'); ?>">Berita</a>
     <!-- </th> -->
     <!-- $this->load->view($view); -->
     <!-- $this->load->view('mahasiswa/V_Mahasiswa'); -->
</table>
</center>