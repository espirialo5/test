<?php
require  'connect.php';
$Name = $_POST['Name'];


$sql = "DELETE FROM reservation Where Name = '$Name';"; 

mysqli_query($conn, $sql);

header("Location: show_data.php?delete=success");

?>