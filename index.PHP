<!DOCTYPE html>
<html>
<head>
  
 <title>Home page</title>
  <link rel="stylesheet" href="style.css">
   <style>
     .head{
      height: 100%;
    width: 100%;
    background-image: url('images/header.jpg');
    background-position: center;
    background-size: cover;
    position: relative;
   
   
   
     }
    
     .cta{
    margin: 100px auto;
    width: 80%;
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(images/header.jpg);
    background-position: center;
    background-size: cover;
    border-radius: 10px;
    text-align: center;
    padding: 100px 0;
}
.ctaadmin{
  align:left;
    margin: 100px auto;
    width: 9%;
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));
    background-position: center;
    background-size: cover;
    border-radius: 10px;
    text-align: center;
   
}
.cta h1{
    color: #fff;
    margin-bottom: 40px;
    padding: 0;
}

.campus{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
}
.campus-col{
    flex-basis: 20%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}
.campus-col img{
    width: 100%;
    display: block;
}
.layer{
    background: transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: 0.5s;
}
.layer:hover{
    background: rgba(226,0,0,0.7);
}
.layer h3{
    width: 100%;
    font-weight: 500;
    color: rgb(255, 255, 255)255, 255, 255);
    font-size: 26px;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.5s;
}
.layer:hover h3{
    bottom: 49%;
    opacity: 1;

}
.pic{
    width: 80%;
    margin: auto;
    text-align: center;
    
}
.pic-col{
    flex-basis: 32%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}
.pic-col img{
    width: 100%;
    height: 100%;
    display: block;
}
.facilities{
  text-align: center;
}
.facilities p{
  text-align: center;
}
.facilities h3{
  text-align: center;
}
.facilities-col{
    flex-basis: 31%;
    border-radius: 10px;
    margin-bottom: 5%;
    text-align: left;
}
.facilities-col img{
    width: 100%;
    border-radius: 10px;
}
.testimonials{
  text-align: center;
}
.testimonials p{
  text-align: center;
}
/*----- course -----*/

.course{
    width: 80%;
    
    text-align: center;
    padding: 100px;
}
.row{
    margin-top: 5%;
    display: flex;
    margin: 10px;
    justify-content: space-between;
    padding: 100px;
}
.course-col{
    flex-basis: 31%;
    background: #FFB4AF;
    border-radius: 50px;
    padding: 20px 12px;
    box-sizing: border-box;
    transition: 0.5s;
    margin: 10px;

    
}
h3{
    text-align: center;
    font-weight: 600;
    margin: 10px 0;
}
.course-col:hover{
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
}

     </style>
  </head>
  <body >

<div class="head" background = "images/header.jpg">
  
    <a href="index.php"></a>
    <div class="nav-links">
   


      <ul>
        <li><a href="index.php" class="hero-btn">HOME</a></li>
        <li><a href="#footerr" class="hero-btn">ABOUT</a></li>
        <li><a href="#branch" class="hero-btn">BRANCH</a></li>
        <li><a href="" class="hero-btn">ROOMS</a></li>
</ul>
<section class="cta">
  <h1>VICTORIA'S HOTEL<br>You are safe here in the Grand Dame</h1>
  <a href="Database/reservehome.php" class="hero-btn">BOOK NOW!</a>

</section>
</div>



</p>
</div>



<!----- Rooms ----->

<section class= "course">
  <h1>Rooms we offer</h1>
  <p>Experience the comfort
Safety and comfort are key factors in leisure stays these days. <br>
We assure you of medical-grade stringent sanitation procedures in preparing our rooms for guests so you can stay with us with peace of mind.</p>

  <div class="row">
    <div class="course-col">
      <h3>Superior Single Room</h3>
      <p>A room assigned to one person. <br>May have one or more beds.
The room size or area of Single Rooms are generally between 37 m² to 45 m².</p>
    </div>
    <div class="course-col">
      <h3>Superior Double Room</h3>
      <p>A room with two twin beds. 
        <br>May be occupied by one or more people.
The room size or area of Twin Rooms are generally between 32 m² to 40 m².</p>
    </div>
    <div class="course-col">
      <h3>Executive Room</h3>
      <p>A room that can accommodate three persons and has been fitted with three twin beds, <br>one double bed and one twin bed or two double beds.
The room size or area of Triple Rooms are generally between 45 m² to 65 m².</p>
    </div>
    <div class="course-col">
      <h3>Junior Suite</h3>
      <p>This executive double room has air conditioning, minibar and soundproofing.</p>
    </div>
</div>

</section>
<!----- campus ----->























<section class="pic">
<h1>ACTUAL PICTURES OF ROOMS</h1>
  <div class="row">
    <div class="pic-col">
  <img src="images/single.jpg">
      <div class="layer">
       <a href= "singleroom.php"> <h3>SUPERIOR SINGLE ROOM</h3></a>
      </div>
    </div>
    <div class="pic-col">
      <img src="images/twin1.jpg">
      <div class="layer">
        <a href="doubleroom.php"><h3>SUPERIOR DOUBLE ROOM</h3></a>
      </div>
    </div>

    </div>
  </div>
</section>

<section class="pic">
<div class="row">
<div class="pic-col">
      <img src="images/triple1.jpg">
      <div class="layer">
        <a href="executiveroom.php"><h3>EXECUTIVE ROOM</h3></a>
      </div>
</div>
      <div class="pic-col">
      <img src="images/junior.jpg">
      <div class="layer">
        <a href="juniorsuite.php"><h3>JUNIOR SUITE</h3></a>
        </div>
      </div>
</section>

<!----- BRANCH -----> 

<section id="branch" class="facilities">
 
  <h1 >Our Branches</h1>
  <p>The country divided into three main areas: Luzon (the largest, northernmost island, which includes Manila); <br>a group of islands called the Visayas (including the major island Cebu); <br>and Mindanao, the second-largest island in the Philippines, found at the southern ...which includes Davao</p>

  <div class="row">
    <div class="facilities-col">
  <img src="images/header.jpg">
      <h3>Manila</h3>
      <p>“The Victoria's Hotel is one of the most important landmarks in Manila. It presents a great story for the Philippines.”

</p>
    </div>
    <div class="facilities-col">
      <img src="images/davao1.jpg">
      <h3>Cebu</h3>
      <p>Our new Victoria's Hotel finally touch down the cebuanos.now you can feel that you are in luxury hotel in manila</p>
    </div>
    <div class="facilities-col">
      <img src="images/visayas.jpg">
      <h3>Davao</h3>
      <p>A great way to keep away from stress is to relax in our hotel at Davao which can give you a calm places to enjoy,</p>
    </div>
  </div>
</section>

<!----- comments -----> 
<section class="testimonials">
  <h1>Feedback of some guest</h1>
  <p>Thank you for staying in Victoria's hotel. We hope that you are satisfied</p>

  <div class="row">
    <div class="testimonial-col">
      <img src="images/mhar.jpg">
      <div>
        <p>I'm so inloved in victoria's hotel it feels like i'm on luxury hotel in newyork city.</p>
        <h3>Mhar Medina</h3>
      </div>
    </div>
    <div class="testimonial-col">
      <img src="images/grace.jpg">
      <div>
        <p>Definitely I will reccommend all tourist to stay at Victoria's hotel they are welcoming to the guest and even if its luxury you also feel the filipino ambiance because of the staff</p>
        <h3>Grace Galica</h3>
      </div>
    </div>
  </div>
</section>

<!--- Call to Action ---> 

<section class="cta">
  <h1>What are you waiting for<br>relax and book now!</h1>
  <a href="database/reservehome.php" class="hero-btn">BOOK NOW!</a>

</section>

<!----- footer ----->
<section id="footerr" class="footer">
  <b>About Us</b>
  <p>JHONDARLL ESPIRITU - BACKEND - LAGUNA UNIVERSITY 09090127219 SAN BENITO, VICTORIA , LAGUNA<BR>
 JEZELLE ENDRINAL - FRONTEND - LAGUNA UNIVERSITY 09121918222 SAN BENITO, VICTORIA , LAGUNA<BR>
 HAYDEE CAMUNIAS - FRONTEND - LAGUNA UNIVERSITY 09185633879 SAN FRANCISCO, VICTORIA , LAGUNA<BR>
 RHEANNALAINE - FRONTEND - LAGUNA UNIVERSITY 099999999 MAGDALENA , LAGUNA<BR>
 JUDY ANNE MEDINA - TESTER - LAGUNA UNIVERSITY 099999999 PILA , LAGUNA<BR>
 GRACE CALICA- TESTER - LAGUNA UNIVERSITY 099999999 SAN BENITO, VICTORIA , LAGUNA<BR>
</p>

</section>

<section class="ctaadmin">
  
  <a href="adminlogin.php" class="hero-btn">ADMIN</a>

</section>





</body>



    </html>