         <table style="border-radius: 3px; border-style: solid; background-color: yellowgreen;">
          <thead>
            <form action="" method="POST">
              <div class="filter">
              <tr>
                <th>Filter</th>
                <td>
                  <input type="text " name="cari" class="input" placeholder="Cari">
                    <select name="pilihan" class="select">
                      <option value="">Select Filter</option>
                      <option value="id_buku">ID Buku</option>
                      <option value="judul_buku">Judul Buku</option>
                      <option value="isbn">ISBN</option>
                      <option value="kategori">Kategori</option>
                      <option value="nama_mc">Media Cetak</option>
                      <option value="stok_buku">Stok</option>
                    </select>
                  <input type="submit" name="submit" id="" class="button" value="Cari">
                </td>
              </tr>
              </div>
              <tr style="background-color: #f1f1f1;">
                <th>ID Buku<br>
                    <input type="submit" value="ASC" name="id_buku" id="filter">
                    <input type="submit" value="DESC" name="id_buku"id="filter">
                </th>
                <th>Judul Buku<br>
                    <input type="submit" value="ASC" name="judul_buku" id="filter">
                    <input type="submit" value="DESC" name="judul_buku" id="filter">
                </th>
                <th>ISBN<br>
                    <input type="submit" value="ASC" name="isbn" id="filter">
                    <input type="submit" value="DESC" name="isbn"id="filter">
                </th>
                <th>Kategori<br>
                    <input type="submit" value="ASC" name="kategori" id="filter">
                    <input type="submit" value="DESC" name="kategori"id="filter">
                </th>
                <th>Media Cetak<br>
                    <input type="submit"  value="ASC" name="nama_mc"id="filter">
                    <input type="submit"  value="DESC" name="nama_mc"id="filter">
                </th>
                <th>Stok<br>
                    <input type="submit"  value="ASC" name="stok_buku"id="filter">
                    <input type="submit" value="DESC" name="stok_buku"id="filter"></th>
                <th>Detail<br></th>
            </tr>
        </form>
      </thead>
      <tbody style="background-color: #f1f1f1;">
        <?php
          if(empty($sort))
          {
               $tampil = $dat->tampil();
          }
          if (isset($_POST["id_buku"]))
          {
              $sort =  $_POST["id_buku"]; 
              $tampil = $dat->tampil_urutan($sort,"id_buku"); 
          }
          if (isset($_POST["judul_buku"]))
          {
              $sort =  $_POST["judul_buku"]; 
              $tampil = $dat->tampil_urutan($sort,"judul_buku");  
          }
          if (isset($_POST["isbn"]))
          {
              $sort =  $_POST["isbn"]; 
              $tampil = $dat->tampil_urutan($sort,"isbn"); 
          }
          if (isset($_POST["kategori"]))
          {
              $sort =  $_POST["kategori"]; 
              $tampil = $dat->tampil_urutan($sort,"kategori"); 
          }
          if (isset($_POST["nama_mc"]))
          {
              $sort =  $_POST["nama_mc"]; 
              $tampil = $dat->tampil_urutan($sort,"nama_mc"); 
          }
          if (isset($_POST["stok_buku"]))
          {
              $sort =  $_POST["stok_buku"]; 
              $tampil = $dat->tampil_urutan($sort,"stok_buku");    
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
              <td style="text-align: center;"><?php echo $data->id_buku; ?></td>
              <td><?php echo $data->judul_buku; ?></td>
              <td><?php echo $data->isbn; ?></td>
              <td><?php echo $data->kategori; ?></td>
              <td><?php echo $data->nama_mc; ?></td>
              <td style="text-align: center;"><?php echo $data->stok_buku; ?></td>
              <td class="tbl_galeri" style="text-align: center;">
              <a id="popup" href="<?php echo $data->id_buku?>">Lihat</a>
                <div class="popup" data-id="<?php echo $data->id_buku ?>">
                  <?php
                    $id=$data->id_buku;
                    $t_detail = $dat->detail_buku($id);
                  ?>    
                  <div class="window">
                    <a href="#" class="close-button" title="Close" style="color: white">X</a>
                    <br>
                    <div class="isi_des">
                      <center>
                        <h3 class="jdl_detail">Detail Buku</h3><br>
                        <table class="tb_detail" border="0">
                          <?php
                            while($d_detail = $t_detail->fetch_object())
                            {
                              ?>
                              <tr>
                                <td>ID Buku</td>
                                <td>:</td>
                                <td><?php echo $d_detail->id; ?></td>
                              </tr>
                              <tr>
                                <td>No ISBN</td>
                                <td>:</td>
                                <td><?php echo $d_detail->isbn; ?></td>
                              </tr>
                              <tr>
                                <td>Judul Buku</td>
                                <td>:</td>
                                <td><?php echo $d_detail->judul_buku; ?></td>
                              </tr>
                              <tr>
                                <td>Tahun Buku</td>
                                <td>:</td>
                                <td><?php echo $d_detail->tahun_buku; ?></td>
                              </tr>
                              <tr>
                                <td>Kategori</td>
                                <td>:</td>
                                <td><?php echo $d_detail->kategori; ?></td>
                              </tr>
                              <tr>
                                <td>ID Rak</td>
                                <td>:</td>
                                <td><?php echo $d_detail->id_rak; ?></td>
                              </tr>
                              <tr>
                                <td>Nama Rak</td>
                                <td>:</td>
                                <td><?php echo $d_detail->nama_rak; ?></td>
                              </tr>
                              <tr>
                                <td>Media Cetak</td>
                                <td>:</td>
                                <td><?php echo $d_detail->nama_mc; ?></td>
                              </tr>
                              <tr>
                                <td>Stok Buku</td>
                                <td>:</td>
                                <td><?php echo $d_detail->stok_buku; ?></td>
                              </tr>
                            </table>
                          </center>
                        <?php
                        }
                      ?>
                    </div>
                  </div>   
                </div>
              </td>
            </tr>
          <?php
          }
        ?>
      </tbody>
    </table>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
        $('a#popup').click(function(){
          var id = $(this).attr('href');
          $('.popup[data-id="'+id+'"').css({'visibility' : 'visible'});
          return false;
        })

        $('.close-button').click(function(){
          $('.popup').css({'visibility' : 'hidden'});
        })
     });
  </script>