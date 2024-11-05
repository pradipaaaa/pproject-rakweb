<?php
session_start();
include 'konek.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Book Lab</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Book Lab</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label>Lab</label>
                <select name="id_lab" class="form-control" required>
                    <?php
                    $sql = "SELECT * FROM labs";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['id_lab'] . "'>" . $row['nama_lab'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Waktu Mulai</label>
                <input type="time" name="waktu_mulai" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Waktu Selesai</label>
                <input type="time" name="waktu_selesai" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Keperluan</label>
                <textarea name="keperluan" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Book</button>
        </form>
    </div>
</body>