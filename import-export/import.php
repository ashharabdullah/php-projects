<?php
session_start();
include 'config.php';

if (isset($_FILES['csvFile'])) {
    $file = $_FILES['csvFile']['tmp_name'];

    if (($handle = fopen($file, 'r'))) {

        mysqli_query($conn, "TRUNCATE TABLE users");

        fgetcsv($handle);

        while (($row = fgetcsv($handle))) {
            $name = $row[0];
            $email = $row[1];
            $phone = $row[2];
            $address = $row[3];

            $sql = "INSERT INTO users (name, email, phone, address) 
                    VALUES ('$name', '$email', '$phone', '$address')";

            mysqli_query($conn, $sql);
        }

        fclose($handle);

        $result = mysqli_query($conn, "SELECT * FROM users");
        $_SESSION['users'] = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $_SESSION['data_imported'] = true;
    }
}

mysqli_close($conn);
header('Location: index.php');
exit();
