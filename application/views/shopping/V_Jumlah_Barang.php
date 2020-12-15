<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <center>
        <h3>Data barang</h3>
    </center>
    <?php foreach ($shopping as $sp) { ?>
        <form action="<?php echo base_url() . 'index.php/C_Shopping/jumlah_barang'; ?>" method="post">
            <table style="margin:20px auto;">
                <tr>
                    <td>Jumlah</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $sp->nama_barang ?>">
                        <input type="text" name="req">
                    </td>

                </tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>