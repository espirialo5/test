
<html>
    <head>
<style>

.amenities{

border-style: solid;

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
margin: 100px auto;
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
  width: 80%;
  box-sizing: border-box;
  border: none;
  background-color: white;
  color: black;
}
fieldset {
  background-color: #eeeeee;
  width: 70%;
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
div.a {
  position: relative;
  left: auto;
  width: 100%;
  height:700;
  
}

div.b {
  position: absolute;
  left: 0px;
  width: 500px;
  height: 1000px;
  
} 

div.c {
  position: absolute;
  left: 500px;
  width: 1000px;
  height: 70px;
 
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
    <title>Booking</title>
</head>
<body>



<div class="head" background = "images/header.jpg">



<
 

</section>




</p>

<div class="a">;
<div class="b"><img src="images/single.jpg" alt="Cinque Terre" width="500" height="440">
</div>
  <div class="c">
      <form action = "reserve.php" method = "POST">
 <fieldset>
  <legend><b>Personal Info:</b></legend>
Name    <input type = "text" name = "Name" required><br><br>
Address <input type = "text" name = "Address" required><br><br>
Phone #  <input type = "text" name = "Contact" required><br><br>
Email   <input type = "text" name = "Email" placeholder="example@hotmail.com" required><br>
<br>
  <label for="Date">DATE</label>
  <input type="date" name="Date" placeholder="YYYY/MM/DD" required>
  <?php
  /*
  $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
  
  
  echo "<select id='Day' name='Day'>";
    for($x = 1 ; $x <= 31; $x++){
      echo "
      <option value='Day'> $x </option>";
    }
   echo'
  </select>
  <select id="Month" name="Month">';
    for($x = 0 ; $x < 12 ; $x++){
      echo "<option value='Month'>$month[$x]</option>}";
    }
  echo '
  </select>
  <select id="Year" name="Year">';
  for($x = 1999; $x < 2030 ; $x++){
    echo "<option value='Year'>$x</option>";
  }
 

  echo '</select>'
  ;
  */
  ?>

 </fieldset>
 <fieldset style="float: left; width: 335px; background-color: white;">
<legend><b>Additional Features</b></legend>
<input type="checkbox" name="TV" value = "Cable TV">
<label for="Cable TV"> Cable TV</label><br>
<input type="checkbox" name="Fridge" value = "Fridge">
<label for="Fridge">Fridge</label><br>
<input type="checkbox"  name="Aircon" value = "Aircon">
<label for="Aircon"> Aircon</label><br><br>
</fieldset>

<fieldset style="float: left; width: 335px; background-color: white;">
<legend><b>Room Type</b></legend>

<input type="radio" name="room" value="single">
<label for="Single"> Single </label><br>
<input type="radio" name="room" value ="twin" >
<label for="Twin">Twin</label><br>
<input type="radio"  name="room" value ="triple">
<label for="Tripple"> Tripple</label><br>
<input type="radio"  name="room" checked value = "JuniorSuite"> 
<label for="juniorsuit">Junior Suite</label><br><br>

</fieldset>

<br><br><br><br><br><br><br><br>
&nbsp

<button type="submit" name="submit"  class="reserve">RESERVE<button>
<!--  
<a href = 'delete.html' class="reserve"> REMOVE DATA </a><br>
<a href = 'show_data.php' class="reserve">SEE RESERVATION </a><br>
<a href = '../index.php' class="reserve">HOME PAGE</a>
-->
</form>

</div>
</div>
















</div>

<!----- footer ----->
<div class="headexe" >
  
 
<section class="cta">
<h1>VICTORIA'S HOTEL<h1>
<h3>Victoria, Laguna <br>

+63 912 1918 222<br>

www.victoria's-hotel.com.ph</h3>
<a href="Database/reservehome.php" class="hero-btn">BOOK NOW!</a>

</section>
</div>



</p>
</div>



</body>

</html>