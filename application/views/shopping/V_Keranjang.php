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
        <title>Keranjang</title>
</head>
<body>
        <table border="1px solid black" class="striped" style="margin:20px auto;" width="800px">
            <tr class="judul" class="row">
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah barang</th>
                <th>Sub-Total</th>
            </tr>
            <?php 
            $no = 1;
            foreach ($shopping as $sp) {?>
            <tr>
                <?php $jumlah = $this->session->userdata($sp->nama_barang) ?>
                <?php if ($jumlah != null) { 
                ?>
                    <td><?php echo $no++ ?></td>
                    <td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $sp->gambar_barang; ?>" width = "150px"></td>
                    <td><?php echo $sp->nama_barang;?></td>
                    <td><?php echo "Rp".number_format($sp->harga_barang,0,',','.');?></td>
                    <td><?php echo $jumlah; ?></td>
                    <td><?php echo "Rp".number_format(($sp->harga_barang)*$jumlah,0,',','.') ; ?></td>
                <?php } ?>
            </tr>
            <?php } ?> 
        </table>
        <center><a class="btn btn-primary" href="<?php echo base_url('C_Shopping/index'); ?>">Kembali Belanja</a></center>  
</body>
</html>