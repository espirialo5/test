<html>

<head>
<title></title>

<style>
.main{

border: 3px dashed ;
width:100%;
height:100%;
display: flex;

}
.info{

    align-items: flex-start;
    border: 3px dashed ;
}
.active{
    
border: 5px outset red;
width: 50%;
height:5%;
align-items: flex-start;
}
.reserve{
    
border: 5px outset red;
width: 50%;
height:5%;
align-items: flex-end;

}


.whole{
border: 3px dashed green;
width:100%;
height:100%;
display: flex;


}


</style>


</head>

<body>

<div class="main">

<div class="info">
ROOM ID:<br>
<iframe src="sample.txt"   width = "200" height = "40"></iframe><br>
NAME:<br>
<iframe src="sample.txt"   width = "200" height = "30" ></iframe><br>
ACCOMODATION:<br>
<iframe src="sample.txt"   width = "200" height = "30" ></iframe><br>
IN:<br>
<iframe src="sample.txt"   width = "200" height = "30" ></iframe><br>
OUT:<br>
<iframe src="sample.txt"   width = "200" height = "30" ></iframe><br>


</div>

<div class="whole">


<!--Active-->
<div class="active">
    <p align="center">ACTIVE</p>
    <div class="activelist">
<p align="center">ROOM 101</p> 
</div>
</div>

<!-- RESERVED-->
<div class = "reserve">
<p align="center">RESERVED</p> 
</div>



</div>





</div>




</body>



    </html>