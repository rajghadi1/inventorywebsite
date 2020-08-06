<?php

 session_start();  
 $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    	.jumbotron{
    		width: 90%;
    		margin-left: 80px;
    		margin-top: 50px;
    	}
        .thumbnail{
            size: 100px;
        }
        .footer{
        background-color: #000;
         color:#fff;
         font-size:14px;
         padding-top: 20px;
         padding-bottom: 60px;
    }
        
    </style>
</head>
<body>
     <?php include "navbar.php";?>

     <div class="jumbotron"><center><h1>Welcome To Our LifeStyle Store !</h1><p>We have best quality of cameras , shirts & Watches for you . No need to hunt around, we have all in one place</p></center></div>
<div class="container">
    <div class="row">

<?php
$con=mysqli_connect("localhost","root","","inventory")or die(mysqli_error());
$res=mysqli_query($con,"SELECT * FROM product ORDER BY id ASC");
$num=mysqli_num_rows($res);
if($num>0){
      while($row=mysqli_fetch_array($res)){
        ?>
       <div class="col-lg-3 col-md-3 col-sm-12">
           <form method="POST" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
               <div class="thumbnail">
                   <img src="<?php echo $row['image']; ?>" class="img-responsive">
                   <div class="caption">
                    <center>
                        <h2><?php echo $row['item_name'];?></h2><hr>
                        <h6>&#8377;<?php echo $row['price']; ?>
                        </h6> 
                        <input type="text" name="quantity" value="1" class="form-control" />
 
                        <input type="hidden" name="hidden_name" value="<?php echo $row["item_name"]; ?>" />
 
                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                          <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                         <input type="hidden" name="image" value="<?php echo $row["image"]; ?>" />
                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary" value="Add to Cart" />
                      
                    </center>
                       
                   </div>
               </div>
           </form>
       </div>
        <?php
               
      }
}
?> 
</div>
</div>


   <div class="footer">
          <center><p>Copyright @ LifeStyle Store all rights are resivered | Contact us +91 8928669402</p></center>
    </div>

 

         
 
</body>
</html>