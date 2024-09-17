<?php
include 'config.php';

$deletedata = new Database_con();

if (isset($_GET['id'])) {
    $rid = $_GET['id'];
    $sql = $deletedata->delete($rid);

    if ($sql) {
        echo "<script>alert('Record deleted successfully');</script>";
    } else {
        echo "<script>alert('Failed to delete record. Please try again');</script>";
    }

    echo "<script>window.location.href='index.php'</script>";
}
?>


