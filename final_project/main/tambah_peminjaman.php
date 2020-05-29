<br><h3>Tambah Pinjaman Buku</h3><br>
<form id="tambah_pinjam" method="POST">
    <table>
        <tr>
            <td>Buku</td>
            <td>
                <?php
                $tampil = $dat->tampil_databuku();
                echo "<select name='id_buku' id='id_buku'>";
                while ($data = $tampil->fetch_object()) {
                    echo "<option value=".$data->id_buku.">".$data->judul_buku."</option>";
                }
                    echo "</select>";
                ?>
            </td>
        </tr>
        <tr>
            <td>Tanggal Pinjam</td>
            <td>
                <input type="date" name="tgl_pinjam" id="tgl_pinjam" required=""/>
            </td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td>
                <input type="date" name="tgl_kembali" id="tgl_kembali" required=""/>
            </td>
        </tr>
        
        <input hidden type="text" name="status" id="status" value="proses" required=""/>
        
        <tr>
            <td>ID User</td>
            <td>
                <input readonly type="text" name="id_user" id="id_user" value="<?php echo $id;?>" required="" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" id="simpan" value="Simpan" />
                <a href="index.php?halaman=peminjaman"><button type="button" id="cancelButton">Batal</button></a>
            </td>
        </tr>
    </table>
</form><br><br><br>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#simpan").click(function(){
            var data = $('#tambah_pinjam').serialize();
            $.ajax({
                type: 'POST',
                url: "proses/tambah_pinjam.php",
                data: data,
                success: function() {
                    console.log(response);
                }
            });
        });
    });
    </script>