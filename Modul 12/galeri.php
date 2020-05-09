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
	<title>Website Profil Perpustakaan</title>
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
         <table class="table">
          <thead>
            <form action="" method="POST">
              <div class="filter">
              <tr>
                <th>Filter</th>
                <td>
                  <input type="text " name="cari" class="input" placeholder="Cari">
                    <select name="pilihan" class="select">
                      <option value="">Select Filter</option>
                      <option value="judul_buku">Judul</option>
                      <option value="pengarang_buku">Pengarang</option>
                      <option value="media_cetak">Media Cetak</option>
                      <option value="tahun_cetak">Tahun Cetak</option>
                      <option value="stok">Stok</option>
                    </select>
                  <input type="submit" name="submit" id="" class="button" value="cari">
                </td>
              </tr>
              </div>
              <tr>
                
                <th>No.</th>
                <th>Judul Buku <br>
                    <input type="submit" value="ASC" name="judul" id="filter">
                    <input type="submit" value="DESC" name="judul" id="filter">
                </th>
                <th>Pengarang Buku <br>
                    <input type="submit" value="ASC" name="pengarang" id="filter">
                    <input type="submit" value="DESC" name="pengarang"id="filter">
                </th>
                <th>Media Cetak<br>
                    <input type="submit"  value="ASC" name="media_cetak"id="filter">
                    <input type="submit"  value="DESC" name="media_cetak"id="filter">
                </th>
                <th>Tahun Cetak<br>
                    <input type="submit"  value="ASC" name="tahun_cetak"id="filter">
                    <input type="submit" value="DESC" name="tahun_cetak"id="filter"></th>
                <th>Stok<br>
                    <input type="submit"  value="ASC" name="stok"id="filter">
                    <input type="submit"  value="DESC" name="stok"id="filter">
                </th>
                
            </tr>
        </form>
      </thead>
      <tbody>
        <?php
          $no = 1;
          $sort = "";
          if(empty($sort))
          {
               $tampil = $dat->tampil();
          }
          if (isset($_POST["judul"]))
          {
              $sort =  $_POST["judul"]; 
              $tampil = $dat->tampil_urutan($sort,"judul_buku");  
          }
          if (isset($_POST["pengarang"]))
          {
              $sort =  $_POST["pengarang"]; 
              $tampil = $dat->tampil_urutan($sort,"pengarang_buku"); 
          }
          if (isset($_POST["media_cetak"]))
          {
              $sort =  $_POST["media_cetak"]; 
              $tampil = $dat->tampil_urutan($sort,"media_cetak"); 
          }
          if (isset($_POST["tahun_cetak"]))
          {
              $sort =  $_POST["tahun_cetak"]; 
              $tampil = $dat->tampil_urutan($sort,"tahun_cetak");   
          }
          if (isset($_POST["stok"]))
          {
              $sort =  $_POST["stok"]; 
              $tampil = $dat->tampil_urutan($sort,"stok");    
          }
          if(isset($_POST['submit']))
          {
              $cari = $_POST['cari'];
              $column =  $_POST['pilihan'];
              if($cari!="" AND $column!="")
              {
                  $tampil = $dat->tampil_saring($cari,$column);
              }  
          }
          while($data = $tampil->fetch_object())
          {
            ?>
            <tr>
              <th><?php echo $no++ ?></th>
              <td><?php echo $data->judul_buku; ?></td>
              <td><?php echo $data->pengarang_buku; ?></td>
              <td><?php echo $data->media_cetak; ?></td>
              <td><?php echo $data->tahun_cetak; ?></td>
              <td><?php echo $data->stok; ?></td>
            </tr>
          <?php
          }
        ?>
      </tbody>
    </table>
            
        </div>
        <div id="clear"></div>
        <div id="footer">
            <p>Perpustakaan Universitas Udayana</p>
        </div>
    </div>
</body>
</html>