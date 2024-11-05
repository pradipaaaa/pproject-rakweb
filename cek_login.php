<?php 
    session_start();
    include 'konek.php';

    $pass = md5($_POST['password']);
    $user = mysqli_escape_string($conn,$_POST['username']);
    $password = mysqli_escape_string($conn,$pass);
    $role = mysqli_escape_string($conn,$_POST['role']);
    
    //cek username terdaftar atau tidak
    $cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user' and role = '$role'");
    $user_valid = mysqli_fetch_array($cek);
    
    // jika username terdaftar cek password terdaftar atau tidak
    if ($user_valid){
        if($password == $user_valid['password']){
            //jika password terdaftar
            
            $_SESSION['username'] = $user_valid['username'];
            $_SESSION['nama'] = $user_valid['nama'];
            $_SESSION['role'] = $user_valid['role'];
    
            if($role == 'admin'){
                header('location:home_admin.php');
            }elseif($role == 'mahasiswa'){
                header('location:home_mhs.php');
            }
            
        }else{
            //jika password tidak sesuai
            echo "<script>alert('Login Gagal,password anda tidak terdaftar'); 
            document.location='login.php'</script>";
        }
    }else{
        echo "<script>alert('Login Gagal, username anda tidak terdaftar'); 
        document.location='login.php'</script>";
    }
    
?>