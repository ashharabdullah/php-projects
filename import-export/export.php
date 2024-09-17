<?php
session_start();
include 'config.php';

if (!isset($_SESSION['data_imported']) || $_SESSION['data_imported'] !== true) {
    header('Location: index.php');
    exit();
}

$filename = 'export_' . date('Ymd') . '.csv';

$output = fopen($filename, 'w');

$result = mysqli_query($conn, "SELECT * FROM users");

$header = ['name', 'email', 'phone', 'address'];
fputcsv($output, $header);

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, $row);
}

fclose($output);

echo "File is created. <a href='$filename' download>Click here to download </a>.";
?>
