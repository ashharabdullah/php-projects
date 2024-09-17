<?php include "config.php";

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
        <h2>List of users</h2>
        <a class="btn btn-success" href="create.php">Add new user</a>
    
        <br>
        <table class="table">
            <thead>
                <tr>

                    <th>Name</th>
                    <th>Email</th>
                    <!-- <th>Phone</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM users";
                $result = $connection->query($sql);

                while ($row = $result->fetch_assoc()) {

                ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <!-- <td></*?php echo $row['phone']; */?></td> -->
                        <td>
                            <a class='btn btn-secondary btn-sm' href='view.php?id= <?php echo $row['id']; ?>'> View </a>
                            <a class='btn btn-primary btn-sm' href='edit.php?id= <?php echo $row['id']; ?>'> Edit </a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id= <?php echo $row['id']; ?>'> Delte </a>

                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</body>

</html>