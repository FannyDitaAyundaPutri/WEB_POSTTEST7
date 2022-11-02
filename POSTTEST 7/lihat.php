<?php 

require 'koneksi.php';

if(isset($_POST['submit'])){
    $Nama_Pesanan = $_POST['nama_pesanan'];
    $Jumlah = $_POST['jumlah'];
    $Tanggal = $_POST['tanggal'];
    $Status = $_POST['status'];
    $Aksi = $_POST['aksi'];

    $kirim = mysqli_query($db, "INSERT INTO pesanan (nama_pesanan,jumlah,tanggal,status,aksi) VALUES ('$Nama_Pesanan','$Jumlah','$Tanggal','$Status','$Aksi')");

    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:pesanan.php");
    }else {
        echo "gagal mengirim";
    }
}