<!DOCTYPE html>
<html lang="en">
<head>
  <title>navbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LifeStyle Store</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="dbms.php"><span class="glyphicon glyphicon-tasks"></span>  DataBase Management</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>  sign-up</a></li>
      <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>  Cart


                         <?php

                        if (isset($_SESSION['shopping_cart'])){
                            $count = count($_SESSION['shopping_cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>






      </a></li>    
      
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Log-Out</a></li>

    </ul>
   
  </div>
</nav>

</body>
</html>




