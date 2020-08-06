<?php
$con=mysqli_connect("localhost","root","","inventory")or die(mysqli_error());

$id=$_GET['id'];
$firstname="";
$lastname="";
$email="";
$contact="";
$gender="";
$res=mysqli_query($con,"SELECT * FROM customer WHERE id=$id ");
while($row=mysqli_fetch_array($res))
{
   $firstname=$row['firstname'];
   $lastname=$row['lastname'];
   $email=$row['user_email'];
   $contact=$row['contact'];
   $gender=$row['gender'];
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
       <div class="row justify-content-center ">
       
       	<form action="" method="POST" enctype="multipart/form-data">
          
       	    <h1>Update Form</h1>
            <div class="form-group">
            	<label>first name</label>
            	<input type="text" placeholder="enter your name" name="firstname" id="firstname" class="form-control" value="<?php echo $firstname ?>">
            </div>
            <div class="form-group">
            	<label>lastname</label>
            	<input type="text" placeholder="enter your lastname" name="lastname" id="lastname" class="form-control" value="<?php echo $lastname ?>">
            </div>
            <div class="form-group">
            	<label>email</label>
            	<input type="email" placeholder="enter your email " name="email" id="email" class="form-control" value="<?php echo $email ?>">
            </div>
            <div class="form-group">
            	<label>Contact No</label>
            	<input type="text" placeholder="enter your contact-no " name="contact" id="contact" class="form-control" value="<?php echo $contact ?>">
            </div>
            <div class="form-group">
              <label>Gender</label>
              <input type="text" placeholder="enter your gender " name="gender" id="gender" class="form-control" value="<?php echo $gender ?>">
            </div>
            <div>
            	<button type="submit" id="update" name="update" class="btn btn-info">Update</button>            	
            </div>
       	</form>	       
       </div>
    </div>
</body>
<?php
 if(isset($_POST['update'])){
          mysqli_query($con,"UPDATE customer SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',user_email='$_POST[email]',contact='$_POST[contact]',gender='$_POST[gender]' WHERE id=$id");
           header("location:customer.php");
   }
  


?>
</html>



