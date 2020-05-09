<?php
    include("koneksi.php");
    include("status.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Webstie Profil Perpustakaan</title>
	<?php
        if($_SESSION['status'] == 'admin'){
            ?><link rel="stylesheet" type="text/css" href="style.css"><?php
        }elseif ($_SESSION['status'] == 'pengguna') {
            ?><link rel="stylesheet" type="text/css" href="style_pengguna.css"><?php
        }
    ?>
</head>
<body>
	<div id="bagian">
        <div id="top">
            <img src="gambar/index.jpeg" alt="">
            <p><b>Perpustakaan <br>Universitas Udayana</b></p>
        </div>
        <div id="sidebar">
            <img src="gambar/unud.png" alt="">
            <div class="populer">
                <p>Artikel Populer</p>
            </div>
                <ul>
                    <li><a href="#">Buku Membuat Website</a></li>
                    <li><a href="#">Penggunaan CSS</a></li>
                    <li><a href="#">Penggunaan Javacript</a></li>
                </ul>
        </div>
        <div id="menu">
            <?php
                include('menu.php');
            ?>
        </div>
        <div id="isi">
            <h1>Selamat Datang</h1>
            <p>Universitas Udayana, disingkat UNUD, adalah perguruan tinggi negeri di Bali, Indonesia, yang berdiri pada 29 September 1962. Rektor Universitas Udayana dari tahun 2017-2022 adalah Prof. Dr. dr. Anak Agung Raka Sudewi, Sp.S.</p>
            <h1>Galeri</h1>
            <div class = "galeri">
                <img src="gambar/wisuda.jpg" alt="">
                <p><a href="#">Cari Tahu Lebih Lanjut >></a></p>
            </div>
            <div class = "galeri">
                <img src="gambar/ws.jpeg" alt="">
                <p><a href="#">Cari Tahu Lebih Lanjut >></a></p>
            </div>
            <div class = "galeri">
                <img src="gambar/rs.png" alt="">
                <p><a href="#">Cari Tahu Lebih Lanjut >></a></p>
            </div>
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>Perpustakaan Universitas Udayana</p>
        </div>
    </div>
</body>
</html>