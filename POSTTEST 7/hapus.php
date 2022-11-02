<?php 

require 'koneksi.php';

if(isset($_GET['id'])){
    $ID = $_GET['id'];
    $hapus = mysqli_query($db, "DELETE FROM pesanan WHERE ID='$ID'");

    if($hapus){
        header("Location:pesanan.php");
    }
}