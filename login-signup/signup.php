<?php include("connection.php");

if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $checkUser = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($conn, $checkUser);

    if (mysqli_num_rows($result) > 0) {
        echo "Username or Email already exists. Enter another";
    } else {
        
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

        if (mysqli_query($conn, $sql)) {
            header("location: login.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="signup.php" method="post">
            <input type="text" name="username" placeholder="Username" required> <br> <br>
            <input type="email" name="email" placeholder="Email" required> <br> <br>
            <input type="password" name="password" placeholder="Password" required> <br> <br>
            <button type="submit" name="signup">Sign Up</button> <br> <br>
            <a href="login.php">if you already have account then login</a>
        </form>
    </div>
</body>
</html>