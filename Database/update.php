<?php
require  'connect.php';

$email = $_REQUEST['email'];

if (isset($_GET['email'])) {
	$email = $_GET['email'];
	$query = "SELECT * from reservation WHERE Email = '$email'";
	$result = mysqli_query($conn, $query) or die ( mysqli_error());
	$queryResult = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
<style>




}
.head{
    height: 100%;
    width: 100%;
    background-image: url('images/header.jpg');
    background-position: center;
    background-size: cover;
    position: relative;
   


  
    
}



.headexe{

    
background-position: center;
position: relative;



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
.headexe h3{
color: white;
text-align: center;
font-weight: 200;
margin: 10px 0;
}


input[type=text] {
  width: 100%;
  box-sizing: border-box;
  border: none;
  background-color: white;
  color: black;
}
fieldset {
  background-color: #eeeeee;
  width: 97%;
  opacity: 80%;
}

legend {
  background-color: #E79D6C;
  color: black;
  padding: 5px 10px;
}

input {
  margin: 0px;

  

 
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
	</style>
</head>
<body>

  
<div class="head" background = "images/header.jpg">
		<!----- footer ----->

  
 
  <section class="cta">
  <h1>VICTORIA'S HOTEL<h1>
   ADMIN <br>
  
  status of room booking
  <br>
  
  <a href = 'show_data.html' class="reserve">CANCEL UPDATE</a>
  <a href = '../index.php' class="reserve">LOG OUT</a>
  </section>
 
<div id="wrap">
	 <div class="cont_ord">
	 	<?php if ($queryResult > 0) {
	 	 while($row = mysqli_fetch_assoc($result)){
	 		 ?>
	    <div class='field_container'>
          <form method="post">
          <div class='cont_details'>
          <fieldset>
				<legend>Reservation Details</legend>
				<label for="birthday">Email</label>
				<input type="text" name="email" value="<?php echo $row['Email']; ?>" readonly>
				<br>
				<label for="name">Name</label>
				<input type="text" name="name" value="<?php echo $row['Name']; ?>">
				<br>
				 <label for="address">Address</label>
				<input type="text" name="address" value="<?php echo $row['Address']; ?>">
				<br>
				 <label for="contact">Contact</label>
				<input type="text" name="contact" value="<?php echo $row['Contact']; ?>">
				<br>
				 <label for="password">Date</label>
				<input type="text" name="date" required="required" value="<?php echo $row['DATE']; ?>">
				<br>
        <label for="amenities">Amenities</label>
        <input type="text" name="amenities" required="required" value="<?php echo $row['amenities']; ?>">
				<br>
        <label for="roomtype">Room Type</label>
        <input type="text" name="roomtype" required="required" value="<?php echo $row['Room_type']; ?>">
				<br>
				<br>
				<input type="submit" name="btn_update" value="update"/>
          </fieldset>	
		 </div>
	     </form>
		</div>
		<?php break; } }?>
	</div>
	</div>
</body>
</html>

<?php }

if(isset($_POST['btn_update'])){
	$name =$_REQUEST['name'];
	$address =$_REQUEST['address'];
	$contact =$_REQUEST['contact'];
	$date =$_REQUEST['date'];
  $amenities =$_REQUEST['amenities'];
  $roomtype =$_REQUEST['roomtype'];
	$sql = "UPDATE reservation SET Name = '$name', Address = '$address', Contact = '$contact', DATE = '$date' , amenities ='$amenities', room_type = '$roomtype' WHERE Email = '$email' ";
	mysqli_query($conn, $sql);
	header("Location: show_data.php");
	}
 ?>






