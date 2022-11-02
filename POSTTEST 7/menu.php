<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTEST 5</title>
    <link rel="stylesheet" href="style.css">
    <link rel="https://fonts.googleapis.com/css?family-great+vibes" href="stylesheet" type="text/cs">
    <link rel="https://fonts.googleapis.com/css?family-great-raleway" href="stylesheet">
</head>
<body>
    <div class="nav">
        <nav>
            <img src="Logo Coffee.png" class="logo" width="160px" height="130px">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="about.php">ABOUT ME</a></li>
                <li><a href="pesanan.php">PESANAN</a></li>
            </ul>
            <input type="checkbox" onclick="ubahMode()">
        </nav>
    </div> 
    
        <div class="Menu"><br>
            <h2 class="menu-title">MENU</h2>
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <div class="card border-dark">
                                <img src="Black Coffee.png" width="255px" height="250px" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title font-weight-bold">Black Coffee</h5>
                                <label class="card-text harga">Rp. 20.000</label><br>
                                </div>
                            </div>
                         </div>
                         

                         <div class="row mt-3">
                            <div class="col-md-3">
                                <div class="card border-dark">
                                    <img src="Cappuccino.png" width="255px" height="250px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Cappuccino</h5>
                                    <label class="card-text harga">Rp. 35.000</label><br>
                                    </div>
                                </div>
                             </div>


                             <div class="row mt-3">
                                <div class="col-md-3">
                                    <div class="card border-dark">
                                        <img src="Chocolate.png" width="255px" height="250px" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title font-weight-bold">Chocolate</h5>
                                        <label class="card-text harga">Rp. 22.000</label><br>
                                        </div>
                                    </div>
                                 </div>

                                 
                                 <div class="row mt-3">
                                    <div class="col-md-3">
                                        <div class="card border-dark">
                                            <img src="Latte.png" width="255px" height="250px" class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title font-weight-bold">Latte</h5>
                                            <label class="card-text harga">Rp. 22.000</label><br>
                                            </div>
                                        </div>
                                     </div>
                            
        <script>
            function ubahMode(){
                const ubah = document.body;
                ubah.classList.toggle("dark");
            }
        </script>

</body>
</html>