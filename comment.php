<?php
session_start();
require "Database\connect.php";
    //remove warnings and display only the fatal errors
    error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['submit'])){
    $name= $_SESSION['name'];
    $comment= $_SESSION['comment'];
    

    $sql= "INSERT INTO feedback(Name,comment)
    Values('$name','$comment')
    ;";
    
    mysqli_query($conn,$sql);
}


?>
<html>

<head>

<title>Feedback</title>
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
<br>
<section class="cta">
<h1>Leave us a comment</h1>
<form action = 'comment.php' method="POST">
<input type = "text" name = "name"  placeholder='Name' style="width:350px"><br><br>
   <input type = "text" name="comment"  style="width:350px; height:150px;" ><br>
   <br>
   <button type = "submit" name="submit">Submit</button>
</form>
</section>
</div>
</body>
   




</html>    
<?php 



?> 