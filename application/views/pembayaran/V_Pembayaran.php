<!DOCTYPE html>
<html>
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
     <h3>Formulir Pembelian Barang</h3>
     <form action="<?PHP echo base_url('C_Customer/data_pengirim') ?>" method="post" >
     <table id="form">
          <tr>		
               <td><label>Nama</label></td>
               <td> <input type="text" class="form-control" name="pembeli" required="required" placeholder="masukkan nama anda" /></td>
          </tr>
          <tr>
               <td><label>Alamat</label></td>
               <td> <input type="text" class="form-control" name="alamat" required="required" placeholder="masukkan alamat anda" /></td>
          </tr>
          <tr>
               <td><label>Kode pos</label></td>
               <td> <input list="kodepos" class="form-control" name="kodepos" required="required" placeholder="masukkan kodepos anda">
                         <datalist id="kodepos"> 
                         <option value="40287"> Cipagalo
                         <option value="40288"> Bojongsoang
                         <option value="40375"> Baleendah
                         <option value="40288"> Sayati
                         </datalist>
               </td>
          </tr>
          <tr>
               <td><label>Nomor hp</label></td>
               <td> <input type="text" class="form-control" name="hp" required="required" placeholder="masukkan nomor hp anda" /></td>
          </tr>
          <tr>
               <td></td>
               <td><input type="submit" class="btn btn-primary" value="Simpan"></td>
          </tr>
     </table>
	</form>
</body>

</html>
