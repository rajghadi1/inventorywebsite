<?php
session_start();
$_SESSION['user'];
 $con=mysqli_connect('localhost','root','','inventory') or die(mysqli_error($con));  

if(!isset($_SESSION["sess_user"]) || $_SESSION["sess_user"] !== true){
    header("location:login.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>welcome page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    
.bg{
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: url('image/intro-bg_1.jpg') no-repeat;
  background-size: cover;  
  width:100%;
  height: 800px;
  position: relative;
  overflow:hidden;
  background-color: rgba(0, 0, 0, 0.7);
 
}  
.jumbotron{

 margin-top: 200px;
 
}
.row{
  margin-top: 50px;
}
.footer{
  background-color: #000;
    color:#fff;
    font-size:14px;
    padding-top: 20px;
    padding-bottom: 10px;
}
#anchor{
  text-decoration: none;
  color:white;
}
        


   </style>
</head>
<body>
     
   <div class="bg">  
   	   <?php include "navbar.php";?>
      <div class="container">
      <div class="jumbotron">
          <center>
              <div><h1>We Sell Lifestyle</h1></div>
              <div><h4>Flat 40% Off on all Premium Brands</h4></div>
               <hr class="my-4">
              <div>
                <a id="anchor" href="shop.php"><button  class="btn btn-danger" >Shop Now</button></a>
              </div>
           </center>
      </div>
      </div>
   </div>
   <div class="container">
     <div class="row">

        <div class="col-sm-4">
          <div class="thumbnail">
                 <img src="camera.jpg">
                 <div class="caption"><center><h1>Cameras</h1><p>Choose among the best available in the world</p></center></div>
             </div>
      </div>
         
          <div class="col-sm-4">
           <div class="thumbnail">
                 <img src="shirt.jpg">
                 <div class="caption"><center><h1>Shirts</h1><p>Our Exquisite Collection of the shirts</p></center></div>
             </div>
          </div>  
          
          <div class="col-sm-4">
             <div class="thumbnail">
              <img src="watch.jpg">
              <div class="caption"><center><h1>Watches</h1><p>Original Watches from the best brands</p></center></div>>
             </div>
        </div>

      </div>
    </div>


    <div class="footer">
          <center><p>Copyright @ LifeStyle Store all rights are resivered | Contact us +91 8928669402</p></center>
    </div>

</body>
</html>


