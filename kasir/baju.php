<?php
include 'koneksi.php';
$dbtokobaju = new database;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>
    <link rel="stylesheet" type="text/css" href="../kasir/style.css">
</head>
<body>
    <div class="all">
    <div class="head">
        <h1>MENU BAJU</h1>
    </div>

    <div class="nav">
        <ul>
            <li><a href="home.php">Home</a></li> 
            <li><a href="baju.php">Menu Baju</a></li>
            <li><a href="pembeli.php">Data Pembeli</a></li>
            <li><a href="transaksi.php">Data Transaksi</a></li>
        </ul>
    </div>
    <center>
        <div class="box">
            <h2 style="text-align: center; margin-bottom: 20px;">MENU BAJU</h2>
            <a href="tambahlapangan.php" style="text-align: center; margin-top: 30px; margin-bottom: 25px">Tambah Baju</a>
            <table border="1" cellspacing="0" cellpadding="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;">
            <tr>
                <th>No</th>
                <th>Nama Baju</th>
                <th>Merek</th>
                <th>Harga Baju</th>
            </tr>
            <?php
            $no=1;
            foreach($dbtokobaju->tampilbaju() as $x ) {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $x['nama_baju'];?></td>
                <td><?php echo $x['pembuat'];?></td>
                <td><?php echo $x['harga'];?></td>
            </tr>
            <?php
            }?>
            
            </table>
    </center>
        </div>
</body>
</html>