<?php include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $area = $_POST["area"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $postalcode = $_POST["postalcode"];
    $type = $_POST["type"];
    $gender = $_POST["gender"];


    $sql = "INSERT INTO users (name, email, password, phone, address, area, city, country, postalcode, type, gender)  VALUES ('$name', '$email', '$hashed_password', '$phone', '$address', '$area', '$city', '$country', '$postalcode', '$type', '$gender')";
    $result = $connection->query($sql);

    header("location: welcome.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>create user</title>
</head>

<body>
    <div class="container my-4">
        <h2>Create user</h2>
        <form method="POST">
            <div class="row mb-3">

                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" required>
                </div>
            </div>

            <div class="row mb-3">

                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" required>
                </div>
            </div>

            <div class="row mb-3">

                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password" required>
                </div>
            </div>
            <div class="row mb-3">

                <label class="col-sm-3 col-form-label">Phone no</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" required>
                </div>
            </div>

            <div class="row mb-3">

                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" required>
                </div>
            </div>
            <div class="row mb-3">

                <label class="col-sm-3 col-form-label">Area</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="area" required>
                </div>
            </div>
            <div class="row mb-3">

                <label class="col-sm-3 col-form-label">City</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="city" required>
                </div>
            </div>
            <div class="row mb-3">

                <label class="col-sm-3 col-form-label">Country</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="country" required>
                </div>
            </div>
            <div class="row mb-3">

                <label class="col-sm-3 col-form-label">Postal code</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="postalcode" required>
                </div>
            </div>
            <div class="row mb-3">

                <label class="col-sm-3 col-form-label"> Select Type</label>
                <div class="col-sm-3">

                    <select class="form-select" id="type" name="type">
                        <option>Teacher</option>
                        <option>Student</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">

                <label class="col-sm-3 col-form-label"> Select Gender</label>
                <div class="col-sm-3">

                    <select class="form-select" id="gender" name="gender">
                        <option>Male</option>
                        <option>Female</option>

                    </select>
                </div>
            </div>
            <div class="row mb-3">

                <div class="row mb-3">

                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-danger" href="welcome.php">Cancel</a>
                    </div>
                </div>

        </form>

    </div>

</body>

</html>