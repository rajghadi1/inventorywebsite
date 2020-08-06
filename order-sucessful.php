<?php
$con=mysqli_connect("localhost","root","","inventory")or die(mysqli_error());


session_start();
echo $_SESSION['user'];


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


?>



<!DOCTYPE html>
<html>
<head>
	<title>order sucessful</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container">
       
       	<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table">
				<form method="" action="">
				<table class="table table-bordered">
					<tr>
						<th width="20%">Item Image</th>
						<th width="20%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="15%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td> <img src="<?php echo $values['item_image']; ?>" class="img-responsive"></td>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><button  class="btn btn-success"><span class="glyphicon glyphicon-ok-circle"></span>  ordered</button></td>

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
                        $order_id=$values['item_id'];

					}
					?>
		
					
				</table>
				<center><input  class="btn btn-success" value=" order is successfully placed" style="width:30%"></center><br><br>
				<center><a href="shop.php"><input  class="btn btn-warning" value="Continue Shopping" style="width:30%"></a></center><br><br>
				

			</form>
			</div>
       </div>
</body>
</html>












