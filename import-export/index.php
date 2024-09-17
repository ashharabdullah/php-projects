<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <br>
    <br>

    <form action="import.php" method="post" enctype="multipart/form-data">
        <label for="csvFile">Import File</label>
        <input type="file" name="csvFile" accept=".csv" required>
        <button type="submit">Import</button>
    </form>
    <br>

    <form action="export.php" method="post">
        <button type="submit">Export File</button>
    </form>

    <br>
    <?php
    if (isset($_SESSION['users'])) {
        echo '<h2> File Data</h2>';
        echo '<table border="1">';
        echo '<thead>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        </tr></thead>';
        echo '<tbody>';

        foreach ($_SESSION['users'] as $row) {
            echo '<tr>';
            foreach ($row as $cell) {
                echo '<td>' . ($cell) . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody></table>';

        unset($_SESSION['users']);
    }
    ?>
</body>

</html>