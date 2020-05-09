<ul>
    <li><a href="index.php">Beranda</a></li>
    <li><a href="tentang.php">Tentang Kami</a></li>
    <li><a href="galeri.php">Galeri</a></li>
    <li><a href="kontak.php">Kontak Kami</a></li>
	<li><a href="logout.php" onclick="return confirm('Yakin Keluar?')">Logout</a></li>
	<li style="float: right;"><a href="#"><?php echo $user."(".$status.")";?></a></li>
</ul>