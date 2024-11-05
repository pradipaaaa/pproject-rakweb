<?php
session_start();
include 'konek.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $row['role'];
            header("Location: dashboard.php");
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Username not found";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Sistem Aktivitas Dan Prestasi Mahasiswa</title>
  <style>
    body {
      font-family: sans-serif;
      background-image: url("image.jpg");
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .logo {
      width: 150px;
      height: 150px;
      margin-bottom: 20px;
      align-items: center;
    }

    .button {
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin: 5px;
    }

    .button:hover {
      background-color: #0056b3;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-control:focus {
      outline: none;
      border-color: #007bff;
    }

    .checkbox-container {
      display: flex;
    }

    .checkbox {
      margin-right: 10px;
    }

    .recaptcha {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="# " alt="Logo" class="logo">
    <h2>Sistem Aktivitas Dan Prestasi Mahasiswa</h2>
    <form action="cek_login.php" method="POST">
      <div class="form-group">
        <label for="role">Role</label>
        <select id="role" name="role" class="form-control">
          <option value="mahasiswa">Mahasiswa</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <div class="form-group " style="align-items:flex-end">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" required>
      </div>
      <div class="checkbox-container">
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember me</label>
      </div>
      <button type="submit" class="button">Login</button>
    </form>
    <div class="recaptcha">
      <a href="#" class="text-decoration-none">Forgot password?</a>
    </div>
  </div>
</body>
</html>
