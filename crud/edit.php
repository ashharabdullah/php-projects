<?php include "config.php";

$user_id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $area = $_POST["area"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $postalcode = $_POST["postalcode"];
    $type = $_POST["type"];
    $gender = $_POST["gender"];

    $sql = "UPDATE users SET name = '{$name}', email = '{$email}', phone = '{$phone}', address = '{$address}', area = '{$area}', city = '{$city}', country = '{$country}', postalcode = '{$postalcode}', type = '{$type}', gender = '{$gender}' WHERE id = {$user_id}";

    if ($connection->query($sql) === TRUE) {

        header("Location: welcome.php");
        exit();
    } else {
        echo "Error updating record: " . $connection->error;
    }
}

$sql = "SELECT * FROM users WHERE id = {$user_id}";
$result = $connection->query($sql);

while ($row = $result->fetch_assoc()) {
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
        <div class="container my-5">
            <h2>edit user</h2>

            <form method="POST">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" required value="<?php echo $row['name']; ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" required value="<?php echo $row['email']; ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Phone no</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="phone" required value="<?php echo $row['phone']; ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="address" required value="<?php echo $row['address']; ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Area</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="area" required value="<?php echo $row['area']; ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">City</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="city" required value="<?php echo $row['city']; ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Country</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="country" required value="<?php echo $row['country']; ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Postal Code</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="postalcode" required value="<?php echo $row['postalcode']; ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Type</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="type" required value="<?php echo $row['type']; ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="gender" required value="<?php echo $row['gender']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-danger" href="welcome.php">Cancel</a>
                    </div>
                </div>
            </form>
        <?php } ?>

        </div>
    </body>

    </html>