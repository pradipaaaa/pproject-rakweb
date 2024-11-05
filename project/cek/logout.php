<?php 
session_start();
include 'konek.php';

unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama']);
unset($_SESSION['role']);

session_destroy();
echo "<script>alert('anda telah logout!');document.location='login.php'</script>"
?>