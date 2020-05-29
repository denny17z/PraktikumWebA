<?php
  if ($status=='Admin') {
    $tampil = $dat->tampil_allpeminjaman();
  }elseif ($status=='User') {
    $tampil = $dat->tampil_peminjaman($id);
  }
?>
<br><h3>Data Peminjaman</h3><br>
<?php
  if ($status=='User') {
    ?>
    <a href="index.php?halaman=pinjam"><label style="background: #4540fe; color: white;padding: 8px;">Tambah Peminjaman Buku</label></a><br><br>
    <?php
  }
  ?>
  <table border="1">
  <tr>
    <th>No.</th>
    <th>ID Peminjaman</th>
    <th>Nama Buku</th>
    <th>Tanggal Pinjam</th>
    <th>Tangal Kembali</th>
    <?php
      if ($status=='Admin') {
    ?><th>Nama Peminjam</th><?php
      }
    ?>
    <th>Status</th>
    <th>Pilihan</th>
  
  </tr>
  <?php
    $no = 1;
    while($data = $tampil->fetch_object())
  {
  ?>
   <tr>
    <th><?php echo $no++ ?></th>
    <td><?php echo $data->id_peminjaman ?></td>
    <td><?php echo $data->judul_buku; ?></td>
    <td><?php echo $data->tgl_pinjam; ?></td>
    <td><?php echo $data->tgl_kembali; ?></td>
    <?php
     if ($status=='Admin') {
      ?><td><?php echo $data->nama; ?></td><?php
     }
    ?>
    <td><?php echo $data->status; ?></td>
    <?php
     if ($status=='Admin') {
      ?>
      <td>
       <button 
       <?php if ($data->status!='proses') {
        echo "disabled='disabled'";
       }?> class="setuju" name="terima" data-class="<?php echo $data->id_buku?>" data-id="<?php echo $data->id_peminjaman?>" >Terima</button> ||
       <button 
       <?php if ($data->status!='proses') {
        echo "disabled='disabled'";
       }?>
       class="tolak" name="tolak" data-id="<?php echo $data->id_peminjaman?>">Tolak</button>
      </td><?php
     }
     if ($status=='User') {
      ?>
      <td>
       <button 
       <?php if ($data->status!='proses') {
        echo "disabled='disabled'";
       }?> class="tolak" name="tolak" data-class="<?php echo $data->id_buku?>" data-id="<?php echo $data->id_peminjaman?>" >Batal</button>
      </td><?php
     }
    ?>
   </tr>
   <?php
  }
  ?>
  
 </table>
<script type="text/javascript">
   $(document).on('click','.setuju',function(){
        var id = $(this).attr('data-id');
        var id_buku = $(this).attr('data-class');
        $.ajax({
          method: "POST",
          url: "proses/edit_pinjam.php",
          data: { id_peminjaman:id, id_buku:id_buku , type:"update_pinjam"},
          
        });
      });
   $(document).on('click','.tolak',function(){
        var id = $(this).attr('data-id');
        $.ajax({
          method: "POST",
          url: "proses/edit_pinjam.php",
          data: { id_peminjaman:id , type:"update_tolak"},
          
        });
      });
</script>