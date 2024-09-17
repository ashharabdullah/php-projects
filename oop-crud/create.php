<?php
include "config.php";

$insertdata = new Database_con();

if (isset($_POST['submit'])) {

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $emailid = $_POST['emailid'];
    $contactno = $_POST['contactno'];
    $address = $_POST['address'];

    $sql = $insertdata->insert($fname, $lname, $emailid, $contactno, $address);
    if ($sql) {

        echo "<script>alert('Record inserted successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {

        echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form name="insertrecord" method="post">
        <label>First Name</label><br>
        <input type="text" name="firstname" class="form-control" required> <br>
        <label>Last Name</label><br>
        <input type="text" name="lastname" class="form-control" required> <br>
        <label>Email</label><br>
        <input type="email" name="emailid" class="form-control" required> <br>
        <label>Contact No</label><br>
        <input type="text" name="contactno" class="form-control" required> <br>
        <label>Address</label><br>
        <input type="text" name="address" class="form-control" required> <br>
        <br>
        <input type="submit" name="submit" value="Submit">


    </form>
</body>

</html>