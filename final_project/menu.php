<ul>
	<?php
	
		if($status == 'NULL'){
   	?>
	    <li><a href="index.php?halaman=home">Home</a></li>
	    <li><a href="index.php?halaman=tentang">Tentang</a></li>
	    <li><a href="index.php?halaman=galeri">Galeri Buku</a></li>
	    <li><a href="index.php?halaman=kontak">Kontak</a></li>
	    <li><a href="login.php">Login</a></li>
   	<?php
  	}elseif($status == 'Super Admin'){
   	?> 
	    <li><a href="index.php?halaman=home">Home</a></li>
	    <li><a href="index.php?halaman=tentang">Tentang</a></li>
	    <li><a href="index.php?halaman=galeri">Galeri Buku</a></li>
	    <li><a href="index.php?halaman=kontak">Kontak</a></li>
	    <li><a href="proses/logout.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')">Logout</a></li>
	    <li style="float: right;"><a href="index.php?halaman=profile"><?php echo $user." (".$status.")";?></a></li>
   	<?php
  	}elseif($status == 'Admin'){
   	?> 
	    <li><a href="index.php?halaman=home">Home</a></li>
	    <li><a href="index.php?halaman=tentang">Tentang</a></li>
	    <li><a href="index.php?halaman=galeri">Galeri Buku</a></li>
		<li><a href="index.php?halaman=tambah_buku">Tambah Buku</a></li>
		<li><a href="index.php?halaman=peminjaman">Peminjaman Buku</a></li>
	    <li><a href="index.php?halaman=kontak">Kontak</a></li>
	    <li><a href="proses/logout.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')">Logout</a></li>
	    <li style="float: right;"><a href="index.php?halaman=profile"><?php echo $user." (".$status.")";?></a></li>
   	<?php
	}elseif ($status == 'User') {
   	?>
	    <li><a href="index.php?halaman=home">Home</a></li>
	    <li><a href="index.php?halaman=tentang">Tentang</a></li>
	    <li><a href="index.php?halaman=galeri">Galeri Buku</a></li>
		<li><a href="index.php?halaman=peminjaman">Peminjaman Buku</a></li>
	    <li><a href="index.php?halaman=kontak">Kontak</a></li>
	    <li><a href="proses/logout.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')">Logout</a></li>
	    <li style="float: right;"><a href="index.php?halaman=profile"><?php echo $user." (".$status.")";?></a></li>
   	<?php
  	}
	?>
</ul>