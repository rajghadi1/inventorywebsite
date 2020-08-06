<?php
$con=mysqli_connect("localhost","root","","inventory")or die(mysqli_error());

$id=$_GET['id'];
$name="";
$price="";
$quantity="";
$user="";
$date="";
$res=mysqli_query($con,"SELECT * FROM order_details WHERE id=$id ");
while($row=mysqli_fetch_array($res))
{
   $name=$row['item_name'];
   $price=$row['item_price'];
   $quantity=$row['item_quantity'];
   $user=$row['user_email'];
   $date=$row['date'];
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>product</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <style>
    	.jumbotron{
    		width: 90%;
    		margin-left: 80px;
    		margin-top: 50px;
    	}
      body{
        background:#000000  ;


      }


    </style>
</head>
<body>

 <div class="container">
       <div class="row justify-content-center">


       <div class="jumbotron"><center><h1>Update the Ordered Data</h1></center></div>

       <form action="" method="POST" enctype="multipart/form-data" style="margin-bottom: 15px ; width:500px">

       	<div  class="form-group">
       	
       	<input type="text" placeholder="Enter product Name" name="name" class="form-control" style="border:none;
          border-bottom: 3px solid #00FF7F;background:none;padding-bottom: 15px;font-size: 25px"  value="<?php echo $name ?>"><br>
       </div>

       	<div class="form-group">
       
       	<input type="text" placeholder="Enter product price" name="price" class="form-control" style="border:none;
          border-bottom: 3px solid #00FF7F;background:none;padding-bottom: 15px;font-size: 25px"  value="<?php echo $price ?>"><br>
       </div>
       

       	<div class="form-group">
       		
       	<input type="text" placeholder="Enter product quantity" name="quantity" class="form-control" style="border:none;
          border-bottom: 3px solid #00FF7F; background:none;padding-bottom: 15px;font-size: 25px"  value="<?php echo $quantity ?>"><br>
       </div>

       <div class="form-group">
       
       	<input type="text" placeholder="Enter product user" name="user" class="form-control" style="border:none;
          border-bottom: 3px solid #00FF7F;background:none;padding-bottom: 15px;font-size: 25px"   value="<?php echo $user ?>"><br>
       </div>

       <div class="form-group">
       	
       	<input type="text" placeholder="Enter product date" name="date" class="form-control" style="border:none;
          border-bottom: 3px solid #00FF7F;background:none;padding-bottom: 15px;font-size: 25px"   value="<?php echo $date ?>"><br>
       </div>

       

       <div>
            	<button type="submit" id="insert" name="update" class="btn btn-success">Update</button>
       </div>
       </form>
     </div>
  </div>     
</body>
</html>


<?php
 if(isset($_POST['update'])){
          mysqli_query($con,"UPDATE order_details SET item_name='$_POST[name]',item_price='$_POST[price]',item_quantity='$_POST[quantity]',user_email='$_POST[user]',date='$_POST[date]' WHERE id=$id") or die(mysqli_error($con));
           
         ?>
               
                <script>
                    location.href ='order-details.php';
                    window.alert("Database updated");
     
               </script>

         <?php
           

   }
  


?>



