<?php

    $tampil = $dat->edit_profile($id);
    $df = $tampil->fetch_object();
    

?>
            <form method="POST" id="formEdit"><br><br>
            <table>
                <tr>
                    <td>Id User</td>
                    <td>
                        <input readonly type="text" name="id_user" id="id_user" required="" value="<?php echo $df->id_user;?>" />
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" name="nama" id="nama" required="" value="<?php echo $df->nama;?>" />
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat" id="alamat" required="" value="<?php echo $df->alamat;?>" />
                    </td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td>
                        <input type="text" name="no_tlp" id="no_tlp" required="" value="<?php echo $df->no_tlp;?>" />
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" id="username" required="" value="<?php echo $df->username;?>" />
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="text" name="password" id="password" required="" value="<?php echo $df->password;?>" />
                    </td>
                </tr>

                <tr>
                    <td>Id Akses</td>
                    <td>
                        <input readonly type="text" name="id_akses" id="id_akses" required="" value="<?php echo $df->id_akses;?>" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="simpan" id="simpan" value="Simpan" />
                        <a href="index.php"><button type="button" id="cancelButton">Batal</button></a>
                    </td>
                </tr>
            </table>
        </form>
        <br>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#simpan").click(function(){
            var data = $('#formEdit').serialize();
            $.ajax({
                type: 'POST',
                url: "proses/edit_profile.php",
                data: data,
                success: function() {
                    console.log(response);
                }
            });
        });
    });
    </script>