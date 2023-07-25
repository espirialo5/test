<?php
session_start();

require  'connect.php';
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Contact = $_POST['Contact'];
$Email = $_POST['Email'];
$amenities = $_POST['TV'] .','. $_POST['Fridge'] .','. $_POST['Aircon'];
$Date = $_POST['Date'];
$room = $_POST['room'];
$_SESSION['Email'] = $Email;

$verification_code = rand(100000,999999);
$_SESSION['code'] = $verification_code;
mail($Email,'BOOKING CONFIRMATION',"HELLO THIS IS VICTORIA'S HOTEL VERIFICATION CODE IS:$verification_code",'FROM: jdsaster1@gmail.com');

$emailstat = "SELECT EXISTS (SELECT Email FROM reservation WHERE Email = '$Email');
";
$result  = mysqli_query($conn, $emailstat);

//select the email status of current email entered

$sqldate = "SELECT DATE FROM reservation;";
/*if ($result == 1){
header("Location: ../index.php?email=exists");

}

*/
//insert the infos from reserverhome
$resultdate = mysqli_query($conn,$sqldate);
$daterow = mysqli_fetch_assoc($resultdate);



$sqlverifyemail = "SELECT Verified_Email,Email FROM reservation 
WHERE Email = '$Email'
LIMIT 1;
";


$result = mysqli_query($conn, $sqlverifyemail);
$rows = mysqli_fetch_assoc($result);


while($resultdate){
    if ($daterow['DATE'] == $Date){
        header("Location:reservehome.php?datealreadytaken");
        die;
    }
    else{
        
        break;


    }

}



$sql = "INSERT INTO reservation(Name,Contact,Address,Email,Verified_Email,amenities,Room_type,verification_code,DATE)
Values('$Name','$Contact','$Address','$Email','False','$amenities','$room','$verification_code','$Date');";

mysqli_query($conn, $sql);







if ($rows['Verified_Email'] == 'False'){

    header("Location: verifyemail.php");
}
else if($rows['Verified_Email'] == 'True'){
    header("Location: ../index.php?reserve=success");

}
else{

    header("Location: verifyemail.php");

}







?>