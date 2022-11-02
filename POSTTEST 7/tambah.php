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
        <h3>Tambah Menu</h3>
        <form action="lihat.php" method="post">
            
            <label for="">Nama Pesanan</label><br>
            <input type="text" name="nama_pesanan" class="form-text"><br>
            
            <label for="">Jumlah</label><br>
            <input type="number" name="jumlah" class="form-text"><br>
            
            <label for="">Tanggal</label><br>
            <input type="text" name="tanggal" class="form-text"><br>
            
            <label for="">Status</label><br>
            <input type="text" name="status" class="form-text"><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>
</body>
</html>