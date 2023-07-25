
<?php
require  'connect.php';

//show all the data that is stored in the database
$sql = "SELECT * FROM reservation;";

$result = mysqli_query($conn, $sql);

$check = mysqli_num_rows($result);
?>
<html>

<head>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #2CACE6;
}

table, th, td {
border: 2px #2b2b2b solid;
color: #2b2b2b;
}

table {
background-color:  #dddddd;
}

----- footer ----- 
.footer{
    width: 100%;
    text-align: center;
    padding: 30px 0;
}

.reserve{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}
.reserve:hovert{
    border: 1px solid #f44336;
    background: #f44336;
    transition: 1s;
}
.cta{

width: 100%;
background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(images/header.jpg);
background-position: center;
background-size: cover;
border-radius: 10px;
text-align: center;
padding: 5px 0;
}
.cta h1{
color: #fff;
margin-bottom: 40px;
padding: 0;
}



</style>


</head>
<body>
<!----- footer ----->
<div class="headexe" >
  
 
<section class="cta">
<h1>VICTORIA'S HOTEL<h1>
 ADMIN <br>

status of room booking
<br>

<a href = 'delete.html' class="reserve">CANCEL RESERVATION</a>
<a href = '../index.php' class="reserve">LOG OUT</a>
</section>
</div>



</p>
</div>
  

<?php
if($check == 0){

echo"RESERVATION EMPTY";
echo "<br>";
}
else{
echo"<table>
<tr>
<th>Name</th>
<th>Address</th>
<th>Contact</th>
<th>Date</th>
<th>VerifyEmail</th>
<th>Email</th>
<th>Amenities</th>
<th>Room Type</th>
<th>Action</th>

</tr>






";
while($row = mysqli_fetch_assoc($result)){

echo "<tr>
<td>".$row['Name']."</td>
"; 


echo "
<td>".$row['Address']."</td>

"; 

echo "
<td>".$row['Contact']."</td>

"; 
echo "
<td>".$row['DATE']."</td>

"; 

echo "
<td>".$row['Verified_Email']."</td>

"; 
echo "
<td>".$row['Email']."</td>

";
echo "
<td>".$row['amenities']."</td>

";
echo "
<td>".$row['Room_type']."</td>

";
$email = $row['Email'];
echo "
<td><a href='update.php?email=$email'>Update</a></td>

</tr>"; 

}


echo"</table>";
}

?>


</body>


</html>