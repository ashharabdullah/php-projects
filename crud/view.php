<?php include "config.php";

$user_id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>document</title>
</head>

<body>
    <div class="container my-4">
        <h2>View user</h2>
        <a class="btn btn-secondary" href="welcome.php">Back to list users</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Area</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Zip Code</th>
                    <th>Type</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php
              
                $sql = "SELECT * FROM users WHERE id = {$user_id}";
                $result = $connection->query($sql);

                while ($row = $result->fetch_assoc()) {

                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['area']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                        <td><?php echo $row['postalcode']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>       
    </div>
</body>

</html>