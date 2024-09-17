<?php include "config.php";

 $user_id = $_GET ['id'];

 $sql = "DELETE FROM users WHERE id={$user_id}";
 $result = $connection->query($sql);

 header("Location: welcome.php");

?>

