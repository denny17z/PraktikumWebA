<?php
    require_once('koneksi.php');
    require_once('data.php');
    $conn = new Koneksi();
    $dat = new Data($conn);
?>
<!DOCTYPE html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>1708561013</title>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
      <div class="isi">
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
                <th>Judul Buku <br><input type="submit" class="button" value="ASC" name="judul"><input type="submit" class="button" value="DESC" name="judul"></th>
                <th>Pengarang Buku <br><input type="submit" class="button" value="ASC" name="pengarang"><input type="submit" class="button" value="DESC" name="pengarang"></th>
                <th>Media Cetak<br><input type="submit" class="button" value="ASC" name="media_cetak"><input type="submit" class="button" value="DESC" name="media_cetak"></th>
                <th>Tahun Cetak<br><input type="submit" class="button" value="ASC" name="tahun_cetak"><input type="submit" class="button" value="DESC" name="tahun_cetak"></th>
                <th>Stok<br><input type="submit" class="button" value="ASC" name="stok"><input type="submit" class="button" value="DESC" name="stok"></th>
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
  </body>
</html>