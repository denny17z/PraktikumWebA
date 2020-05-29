<?php
    if (!isset($_SESSION['nama_pengguna']) || !isset($_SESSION['status']) || !isset($_SESSION['id_user'])){
        $user='NULL';
        $status='NULL';
        $id='NULL';
    }else{
    	$user = $_SESSION['nama_pengguna'];
    	$status = $_SESSION['status'];
    	$id= $_SESSION['id_user'];
    }
?>