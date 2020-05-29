<?php
    require_once('koneksi.php');
    require_once('data.php');
    include("status.php");
    $conn = new Koneksi();
    $dat = new Data($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Webstie Profil Perpustakaan</title>
    <script type="text/javascript" src="jquery.js"></script>
	<?php
        if($status == 'Super Admin' || $status == 'Admin' ){
            ?><link rel="stylesheet" type="text/css" href="style/style.css"><?php
        }elseif ($status == 'User' || $status  == 'NULL' ) {
            ?><link rel="stylesheet" type="text/css" href="style/style_pengguna.css"><?php
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
            <?php
            if (!isset($_REQUEST['halaman'])) {
                include "main/home.php";
            }
            if (isset($_REQUEST['halaman'])) {
                switch ($_REQUEST['halaman']) {
                    case 'home':
                        include "main/home.php" ;
                    break;
                    case 'tentang':
                        include "main/tentang.php" ;
                    break;
                    case 'galeri':
                        include "main/galeri.php" ;
                    break;
                    case 'peminjaman':
                        include "main/peminjaman.php" ;
                    break;
                    case 'pinjam':
                        include "main/tambah_peminjaman.php" ;
                    break;
                    case 'kontak':
                        include "main/kontak.php" ;
                    break;
                    case 'login':
                        include "main/login.php" ;
                    break;
                    case 'profile':
                        include "main/profile.php";
                    break;
                    case 'tambah_buku':
                        include "main/tambah_buku.php";
                    break;
                }
            }

            ?>  
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>Perpustakaan Universitas Udayana</p>
        </div>
    </div>
    <script>
    function menu(){
        $.get( "home.php", function( data ) {
          $( "#isi" ).html( data );
          alert( "Load was performed." );
        });
    }
    </script>
</body>
</html>