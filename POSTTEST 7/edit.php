<?php 
    require 'koneksi.php';

    if(isset($_GET['id'])){
        $ID = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM pesanan WHERE ID = '$ID' ");
        $baris = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama_pesanan = $_POST['nama_pesanan'];
        $jumlah = $_POST['jumlah'];
        $tanggal = $_POST['tanggal'];
        $status = $_POST['status'];
        $aksi = $_POST['aksi'];

        $update = mysqli_query($db, "UPDATE pesanan SET nama_pesanan='$nama_pesanan', jumlah='$jumlah', tanggal='$tanggal', status='$status', aksi='$aksi' WHERE ID='$ID'");

        if($update){
            header("Location:pesanan.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTEST 5</title>
    <link rel="stylesheet" href="pesanan.css">
</head>
<body>
    <header>
        <h2>Data Pemesanan</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit menu</h3>
        <form action="" method="post">
            
            <label for="">Nama Pesanan</label><br>
            <input type="text" name="nama_pesanan" class="form-text" value=<?=$baris['nama_pesanan'];?>><br>
            
            <label for="">Jumlah</label><br>
            <input type="text" name="jumlah" class="form-text" value=<?=$baris['jumlah'];?>><br>
            
            <label for="">Tanggal</label><br>
            <input type="text" name="tanggal" class="form-text" value=<?=$baris['tanggal'];?>><br>

            <label for="">Status</label><br>
            <input type="text" name="status" value=<?=$baris['status'];?>><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>