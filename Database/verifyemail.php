<?php

require_once 'connect.php';
//create a session to pass the needed info to this page from reserve.php
session_start();
$email = $_SESSION['Email'];
$code = $_SESSION['code'];

?>


<html>







<head>

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
<h1>CHECK YOUR EMAIL FOR YOUR VERIFICATION CODE</h1>

<form action = 'verifyemail.php' method = 'POST'> 
<H3>Please Enter Code</H3>
<input type = 'text' name = 'code' placeholder = 'Verification Code'>
<button type = 'submit' name = 'submit'>Confirm</button>
</form>

  

</section>
</div>



</p>
</div>




<?php
//remove warnings and display only the fatal errors
error_reporting(E_ERROR | E_PARSE);

//checking if the  verificaion code is correct
if($code == $_POST['code']){

$sql2 = "UPDATE reservation
SET Verified_Email = 'True' 
WHERE Email = '$email';"
;
mysqli_query($conn,$sql2);
header('Location: ../index.php?reserve=success');

}


?>
<form>


</form>


</body>


</html>