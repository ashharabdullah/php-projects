<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?php
            $fetchdata = new Database_con();
            $sql = $fetchdata->fetchdata();
            while ($row = mysqli_fetch_array($sql)) {
            ?>
                <tr>
                    <td><?php echo ($row['FirstName']); ?></td>
                    <td><?php echo ($row['LastName']); ?></td>
                    <td><?php echo ($row['EmailId']); ?></td>
                    <td><?php echo ($row['ContactNumber']); ?></td>
                    <td><?php echo ($row['Address']); ?></td>
                    <td><a href="update.php?id=<?php echo ($row['id']); ?>">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo ($row['id']); ?>">Delete</a></td>

                </tr>

            <?php
            } ?>
        </tbody>
    </table>
</body>

</html>