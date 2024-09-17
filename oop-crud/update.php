<?php
include "config.php";

$updatedata = new Database_con();
$userid = $_GET['id'];

if (isset($_POST['update'])) {
    $sql = $updatedata->update(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['emailid'],
        $_POST['contactno'],
        $_POST['address'],
        $userid
    );

    echo "<script>alert('Record Updated successfully');</script>";
    echo "<script>window.location.href='index.php'</script>";
}

$sql = $updatedata->fetchonerecord($userid);
$row = mysqli_fetch_array($sql);
?>

<form name="insertrecord" method="post">
    <label>First Name</label> <br>
    <input type="text" name="firstname" value="<?php echo $row['FirstName']; ?>" class="form-control" required> <br> 
    <label>Last Name</label> <br>
    <input type="text" name="lastname" value="<?php echo $row['LastName']; ?>" class="form-control" required> <br> 
    <label>Email</label> <br>
    <input type="email" name="emailid" value="<?php echo $row['EmailId']; ?>" class="form-control" required> <br> 
    <label>Contact No</label> <br> 
    <input type="text" name="contactno" value="<?php echo $row['ContactNumber']; ?>" class="form-control" required> <br> 
    <label>Address</label> <br>
    <input type="text" name="address" value="<?php echo $row['Address']; ?>" class="form-control" required> <br>
    <br>
    <input type="submit" name="update" value="Update">
</form>