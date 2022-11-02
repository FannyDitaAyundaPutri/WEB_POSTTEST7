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

    <div class="header">
        <h2>Welcome To Coffee Shop</h2>
        <p>Take Coffee With You To Complate Your Day</p>
        <a href="menu.html">Find Your Taste</a>
    </div>

    <div class="contents">
        <h3 class="contents-title"></h3>
    <div class="contents-item">
        <img src="Gambar Coffee.jpg" width="275px" height="400px">
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