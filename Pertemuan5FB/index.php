<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome CSS Responsive Navigation Menus</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><h1>Web Master</h1></div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>-
        </div>
        <ul>
            <!-- script menu -->
            <li><a href="index.php?modul=home">Home</a></li>
            <li><a href="index.php?modul=product">Product</a></li>
            <li><a href="index.php?modul=blog">Blog</a></li>
            <li><a href="index.php?modul=contact">Contact</a></li>
            <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/teta.looo/"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
    </header>

    <!-- content -->
    <div class="main-content">
        <?php
            if(isset($_GET['modul'])){
                $pages = $_GET['modul'];
            }else{
                $pages = "home";
            }

            if(!isset($_GET['modul']) || $pages == "home"){
        ?>
        <div id="content-home">
            <h1>TITLE HOME</h1><br>
                <p>Selamat datang di website kami<br>
                kami menyediakan berbagai barang yang dijual<br>
                anda bisa membeinya di sini dengan cara online<br>
                kalau mau offline juga bisa
                </p>
        </div>

        <?php
            }
            if($pages == "product"){
        ?>
        <div id="content-product">
             <h1>PRODUCT</h1><br>
             <p>Dibawah ini adalah product kami
             </p>
            <ul>
             <li><a href="index.php?modul=produk1">Produk 1</a></li>
             <li><a href="index.php?modul=produk2">Produk 2</a></li>
             <li><a href="index.php?modul=produk3">Produk 3</a></li>
            
            </ul>
        </div>

        <?php
            }
            if($pages == "produk1"){
        ?>
    <div id="content-produk1">
            <h1>PRODUK OLAHRAGA</h1><br>
            <ul><li>bola basket</li>
            <li>net</li>
            <li>raket</li>
            </ul>
        </div>

        <?php
            }
            if($pages == "produk2"){
        ?>
    <div id="content-produk2">
            <h1>PRODUK ELEKTRONIK</h1><br>
            <ul><li>laptop</li>
            <li>handphone</li>
            <li>tablet</li>
            </ul>
        </div>

        <?php
            }
            if($pages == "produk3"){
        ?>
    <div id="content-produk3">
            <h1>PRODUK FURNITURE</h1><br>
            <ul><li>meja</li>
            <li>kursi</li>
            <li>vas bunga</li>
            </ul>
            </p>
        </div>

        <?php
            }
            if($pages == "blog"){
        ?>
        <div id="content-blog">
         <h1>TITLE BLOG</h1><br>
            <p>Selamat datang di website kami<br>
            kami menyediakan berbagai barang yang dijual<br>
            anda bisa membeinya di sini dengan cara online<br>
            kalau mau offline juga bisa
            </p>
        </div>

        <?php
            }
            if($pages == "contact"){
        ?>

        <div id="content-contact">
            <h1>TITLE CONTACT</h1><br>
            <p>Selamat datang di website kami<br>
            kami menyediakan berbagai barang yang dijual<br>
            anda bisa membeinya di sini dengan cara online<br>
            kalau mau offline juga bisa
            </p>
            <a href="index.php?modul=aboutme">Tentang Saya</a>
        </div>

        <?php
            }
            if($pages == "aboutme"){
        ?>

    <div id="content-aboutme">
            <h1>About me</h1><br>
            <p>Nama : Siti Khairita<br>
            Kelas : XI RPL 1 <br>
            Alamat : Jln. Cendana 2 No 3 <br>

            </p>
        </div>

        <?php
            } 
            ?>

</body>
</html>