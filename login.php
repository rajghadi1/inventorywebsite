<?php
session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title>Log-in</title>
	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="style.css">
   <style>
body{
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: url('image/back3.jpg') no-repeat;
  background-size: cover;
  color: white;

}
.login-box{
  width:280px;
  position:absolute;
  top: 50%;
  left:80%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid white;
  margin-top: 50px;
  padding: 13 0 ;

}
.textbox{
  color: white;
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 2px solid white;
  }
  .textbox span{
    width:26px;
    float: left;
    text-align:center;

}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin:0 10px;


}
::placeholder {
  color: white;
  opacity: 1; /* Firefox */
}

::-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: white;
}
.btn{
  width: 100%;
  background: #558cfe;
  border: 2px solid white;
  color:white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  

}
a{
  color: white;
  text-decoration: none;

}
a h4{
  margin-left: 35px;
  color: white;
}

   </style>   
 
</head>
 
<body>
	<?php include "navbar.php";?>
	<div class="form">
   
      <form method="post" action="login.php">
      <div class="login-box">
        <h1>Login</h1>
              <div class="textbox">
                <span class="glyphicon glyphicon-user"></span> 
                <input type="text" placeholder="email" name="email" value="">
              </div>

              <div class="textbox">
                <span class="glyphicon glyphicon-lock"></span>
                <input type="password" placeholder="password" name="password" value="">
              </div>
              <input class="btn" type="submit" name="login" value="login">
              <div>
                <a href="signup.php"><h4>new user ? sign-up here</h4></a>
              </div>

      </div>


     </form>
 </div>

    </body>
</html>
<?php

$con=mysqli_connect('localhost','root','','inventory') or die(mysqli_error($con));  



if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

if(isset($_POST["login"])){  
  
if(!empty($_POST['email']) && !empty($_POST['password'])) {  
    $email=$_POST['email'];  
    $password=$_POST['password'];  
   
    $query=mysqli_query($con,"SELECT * FROM customer WHERE user_email='$email' AND password='$password' ");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['user_email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($email == $dbusername && $password == $dbpassword)  
    {  
    session_start();  
    $_SESSION['user']=$email;  
    $_SESSION['sess_user']=true;
    


                ?>
   
 <script>
     location.href = 'index.php';
     window.alert("you are successfully loged-in");
     
</script>
     


              <?php

    }  
    } else {  


              ?>
           <div class="alert alert-danger alert-dismissible fade in">
             <strong>Invalid Email-id Or Password</strong>
           </div>

              <?php

    }  
  
} else { 



      ?> 
   <div class="alert alert-info alert-dismissible fade in">
  <strong>All Fields are Required</strong>
</div>

     <?php

}  
}  


?>