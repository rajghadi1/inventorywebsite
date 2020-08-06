<?php
$con=mysqli_connect("localhost","root","","inventory")or die(mysqli_error());


session_start();
$_SESSION['user'];


if(isset($_POST['add_to_cart'])){
   if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_image'		=>	$_POST["image"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
				
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_image'		=>	$_POST["image"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
			
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
   

}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>
      <div class="container">
       	<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<form method="POST" action="cart.php">
				<table class="table table-bordered">
					<tr>
						<th width="20%">Item Image</th>
						<th width="20%">Item Name</th>
						<th width="15%">Quantity</th>
						<th width="20%">Price</th>
						<th width="10%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td> <img src="<?php echo $values['item_image']; ?>" class="img-fluid"></td>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>" class="btn btn-danger">Remove</a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
		
					
				</table>
				<center><input type="submit" class="btn btn-success" name="order" value="place order" style="width:30%"></center>
			</form>
			</div>
       </div>
</body>
</html>





<?php



 if(isset($_POST['order'])){
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}


 	if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
             $item_id=$values["item_id"];
 	         $item_name= $values["item_name"];
 	         $item_price= $values["item_price"];
 	         $item_quantity= $values["item_quantity"];
 	         $user=$_SESSION['user'];
 	         $date=date('Y-m-d');
 	         $order=mysqli_query($con,"INSERT INTO order_details (item_name, item_price, item_quantity, user_email, date ) VALUES ('$item_name','$item_price','$item_quantity','$user','$date')") or die(mysqli_error($con));
 	         $sql =mysqli_query($con, "UPDATE product SET quantity = quantity - $item_quantity 
             WHERE id = $item_id ")or die(mysqli_error($con));
 	        

                  ?>
                   <script>
                          location.href = 'order-sucessful.php';
                          window.alert("order is placed, Thanks for shopping!!");
                         header("order-sucessful.php");

                   </script>
                  
     

                   

           <?php




         }
     }



 }

?>



