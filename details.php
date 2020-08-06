<?php $con=mysqli_connect("localhost","root","","inventory")or die(mysqli_error());


?>
<!DOCTYPE html>
<html>
<head>
	<title>product-database</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     <style>
    	.jumbotron{
            width: 100%;
            margin-left: 0px;
            margin-top: 0px;
            height: 300px;
        }
        h1{
            margin-top: 50px;
        }
        #left{
            float: left;
            margin-left: 20px;
            margin-top: 50px;
            
        }
        .table{
           margin-left: 100px;

        }

    </style>
</head>
<body>

	   <div class="jumbotron">
      <center><h1>All Details</h1><br>
     <a href="shop.php"><button type="submit" class="btn btn-danger" name="insert">Insert the Data</button></a>
     </center>
    </div>
<div class=" ">
 <div id="left">
   <div><h3>Sort as per your wish</h3></div> 
  <form method="POST" action="">
    <div class="radio">
            <label><input type="radio" name="co" >customer details with order details</label>
            
    </div>
    <div class="radio">
            <label><input type="radio" name="po">product details with order details</label>
           
    </div>
    <div class="radio">
            <label><input type="radio" name="qll">Products that have Quantity <br> less than quantity of lower limit </label>
            
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit">submit</button>
  </form>
</div>

    </div><br><br>
       <div class="container">
         <table class="table table-hover ">
               
                <?php


 if(isset($_POST['submit']))  {             
       if(isset($_POST['co'])){
                         
                      ?>

                         <thead class="thead-dark">
                   <tr>
                       
                       <th>First Name</th>
                       <th>Last Name</th>
                       <th>Contact</th>
                       <th>User Email</th>
                       <th>Gender</th>
                       <th>Item Name</th>
                       <th>Item Price</th>
                       <th>Item Quantity </th>
                       <th>Date</th>
                   </tr>
               </thead>
               <tbody>

             <?php


                 $res=mysqli_query($con,"SELECT customer.firstname, customer.lastname, customer.contact, customer.user_email, customer.gender, order_details.item_name, order_details.item_price, order_details.item_quantity,order_details.date FROM customer INNER JOIN order_details ON customer.user_email=order_details.user_email");
                 while($row=mysqli_fetch_array($res)) 
                 {
                    echo"<tr>";                    
                    echo"<td>"; echo $row['firstname']; echo"</td>";
                    echo"<td>"; echo $row['lastname']; echo"</td>";
                    echo"<td>"; echo $row['contact']; echo"</td>";
                    echo"<td>"; echo $row['user_email']; echo"</td>";
                    echo"<td>"; echo $row['gender']; echo"</td>";
                     echo"<td>"; echo $row['item_name']; echo"</td>";
                    echo"<td>"; echo $row['item_price']; echo"</td>";
                    echo"<td>";  echo $row['item_quantity']; echo"</td>";
                    echo"<td>";  echo $row['date']; echo"</td>";
                    echo"</td>";
                 } 
               }



               if(isset($_POST['po'])){
                         
                      ?>

                         <thead class="thead-dark">
                   <tr>
                       
                       <th>Product Image</th>
                       <th>Type</th>
                       <th>Product Name</th>
                       <th>Product Quantity</th>
                       <th>Product Price</th>
                       <th>Product Quantity Lower Limit</th>
                       <th>Quantity Purchesed</th>
                       <th>User Email</th>
                       <th>Date</th>
                   </tr>
               </thead>
               <tbody>

             <?php


                 $res=mysqli_query($con,"SELECT product.image,product.type,product.item_name,product.quantity,product.price,product.qll,order_details.item_quantity, order_details.user_email, order_details.date FROM product INNER JOIN order_details ON product.item_name=order_details.item_name");
                 while($row=mysqli_fetch_array($res)) 
                 {
                    echo"<tr>";
                     echo"<td>";?><img src="<?php echo $row['image']; ?>" class="img-fluid"> <?php echo"</td>";                    
                    echo"<td>"; echo $row['type']; echo"</td>";
                    echo"<td>"; echo $row['item_name']; echo"</td>";
                    echo"<td>"; echo $row['quantity']; echo"</td>";
                    echo"<td>"; echo $row['price']; echo"</td>";
                    echo"<td>"; echo $row['qll']; echo"</td>";
                     echo"<td>"; echo $row['item_quantity']; echo"</td>";
                    echo"<td>"; echo $row['user_email']; echo"</td>";
                    echo"<td>";  echo $row['date']; echo"</td>";
                    echo"</td>";
                 } 
               }




                if(isset($_POST['qll'])){
                         
                      ?>

                         <thead class="thead-dark">
                   <tr>
                       
                       <th style="width: 20%">Product Image</th>
                       <th>Type</th>
                       <th>Product Name</th>
                       <th>Product Quantity</th>
                       <th>Product Price</th>
                       <th>Product Quantity Lower Limit</th>
                       
                   </tr>
               </thead>
               <tbody>

             <?php


                 $res=mysqli_query($con,"SELECT product.image, product.type,product.item_name,product.quantity,product.price,product.qll  FROM product WHERE qll>=quantity");
                 while($row=mysqli_fetch_array($res)) 
                 {
                    echo"<tr>";
                     echo"<td>";?><img src="<?php echo $row['image']; ?>" class="img-fluid"> <?php echo"</td>";                    
                    echo"<td>"; echo $row['type']; echo"</td>";
                    echo"<td>"; echo $row['item_name']; echo"</td>";
                    echo"<td>"; echo $row['quantity']; echo"</td>";
                    echo"<td>"; echo $row['price']; echo"</td>";
                    echo"<td>"; echo $row['qll']; echo"</td>";
                     
                    echo"</td>";
                 } 
               }
       
               




 }                         
                    
                ?>
                    
               
               </tbody>
         </table>
    </div>



   
</body>
</html>




