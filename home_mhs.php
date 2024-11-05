<?php 
include 'konek.php';
session_start();

if(empty($_SESSION['username']) or empty($_SESSION['role'])) {
    echo "<script>alert('untuk mengakses halaman ini anda diharuskan login terlebih dahulu'); 
            document.location='login.php'</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>
</head>
<body>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Lab Komputer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/datatables@1.10.24/media/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            background: #343a40;
        }
        .nav-link {
            color: #fff;
        }
        .nav-link:hover {
            background: #495057;
        }
        .main-content {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar px-0">
            <div class="position-sticky">
                <div class="py-4 px-3 mb-4 bg-dark">
                    <h5 class="text-white">Lab Management</h5>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="labs.php">Laboratorium</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bookings.php">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inventory.php">Inventaris</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="schedules.php">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">Pengguna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logs.php">Log Aktivitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
        </div>

</body>
</html>
</body>
</html>