<?php
require "Database\connect.php";

?>
<html>

<head>

<title>Admin Login</title>
<style>

.head{
      height: 98.5%;
    width: 100%;
    background-image: url('images/header.jpg');
    background-position: auto;
    background-size: cover;
    position: relative;
   
   
   
     }
    
     .cta{
    margin: 100px auto;
    width: 80%;
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));
    background-position: relative;
    background-size: cover;
    border-radius: 1opx;
    text-align: center;
    padding: 100px 0;
}
.cta h1{
    color: #fff;
    margin-bottom: 40px;
    padding: 0;
}
H3{
    color: white;
}

</style>
</head>
<body>

<div class="head" background = "images/header.jpg">
<br><br>
<section class="cta">
<h1>Please Type In Your Username and Password</h1>
<form action = "adminlogin.php" method="POST">
   <input type = "text" name = "username" placeholder="username" ><br>
  <input type= "password" name = "password" placeholder="password"><br>
   <button type = "submit" name="submit">Log In</button>
</form>
</section>
</div>
</body>
    </html>



    <?php 
//remove warnings and display only the fatal errors
error_reporting(E_ERROR | E_PARSE);
$sql = "SELECT * FROM login;";


$password = $_POST['password'];
$user = $_POST['username'];

$hashed = password_hash('admin1234', PASSWORD_BCRYPT);

$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));

if (password_verify($password,$row['password']) && $row['username'] == $user){
    
header("Location: database/show_data.php");
}

else{
    if(isset($_POST['submit'])){
    header("Location: adminlogin.php?password=error");
    }
}

 ?>