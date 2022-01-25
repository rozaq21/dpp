<?php 
// mengaktifkan session php
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman ke halaman login
header("location:index.php");
$sukses = "<div class='alert alert-success' role='alert'>
  Berhasil Logout!
</div>"
?>