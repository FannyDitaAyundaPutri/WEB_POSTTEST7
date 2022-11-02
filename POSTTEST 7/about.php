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
    
        <div class="About Me"><br>
            <h2 class="about-title">PROFIL</h3>
                <div class="foto">
                    <img src="Profil.jpg" width="250px" height="285px">
            </div>
            <div class="informasi">
                <p>Nama             : Fanny Dita Ayunda Putri</p><br>
                <p>NIM              : 2009106139</p><br>
                <p>Angkatan         : 2020</p><br>
                <p>Program Studi    : Informatika</p><br>
                <p>Hobi             : Membaca Novel</p><br>
        </div>
    </div>

            <div class="footer">
                <div class="footer-logo">@Copyright 2022 - Fanny Dita Ayunda Putri</div>
                <div class="footer-list">
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