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
    <div class="container-fluid">
        <table border="1px solid black" class="striped" style="margin:20px auto;" width="800px">
            <tr class="judul" class="row">
                <th>No.</th>
                <!-- <th>Gambar</th> -->
                <th>Nama Barang</th>
                <th>Berat Barang</th>
                <th>Harga</th>
                <th>Jumlah barang</th>
                <th>Sub-Total</th>
            </tr>
            <?php 
            $no = 1;
            $subtotal_berat = 0;
            $total_berat = 0;
            foreach ($this->cart->contents() as $sp) : $subtotal_berat = ($sp['berat'])*$sp['qty']?> 
            <tr>
                <!--<?php $jumlah = $this->session->userdata($sp->nama_barang) ?>-->
                    <td><?php echo $no++ ?></td>
                    <!-- <td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $sp['gambar'] ?>" width = "150px"></td> -->
                    <td><?php echo $sp['name'];?></td>
                    <td><?php echo $subtotal_berat."gram";?></td>
                    <!-- <td><?php echo $sp->nama_barang;?></td> -->
                    <td><?php echo "Rp".number_format($sp['price'],0,',','.');?></td>
                    <td><?php echo $sp['qty']; ?></td>
                    <td><?php echo "Rp".number_format($sp['subtotal'],0,',','.') ; ?></td>
            </tr>
            <?php endforeach; ?> 
            <tr>
                <?php foreach ($this->cart->contents() as $item) :
                    $total_berat = $total_berat + $item['berat']*$item['qty'];
                    endforeach ?>
                <?php   $berat_ongkir = 0;
                    $berat_ongkir = $total_berat;
                    if($berat_ongkir == 0.3){
                        $berat_ongkir = 1;
                    }   
                    if(fmod($berat_ongkir, 1) > 0.3){
                        $berat_ongkir = ceil($berat_ongkir);
                    }
                    else{
                        $berat_ongkir = floor($berat_ongkir);
                    } ?> 
                <td colspan="2">Total berat :</td>
                <td><?php echo ($total_berat/1000)." kg"; ?></td>
                <td colspan="2">Total Harga:</td>
                <td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
            </tr>
        </table>
        <div align="middle">
            <a href="<?php echo base_url('C_Cart/clearCart') ?>"><div class="btn btn-sm btn-danger">Clear Cart</div></a>
            <a href="<?php echo base_url('C_Penjualan/data_pembeli/'.$berat_ongkir) ?>"><div class="btn btn-sm btn-success">Checkout</div></a>
        </div>
    </div>

        <!-- <center><a class="btn btn-primary" href="<?php echo base_url('C_Customer/pembayaran'); ?>">Check Out</a></center>
        <center><a class="btn btn-primary" href="<?php echo base_url('C_Shopping/index'); ?>">Kembali Belanja</a></center>   -->
</body>
</html>