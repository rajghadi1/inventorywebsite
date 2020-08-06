<!DOCTYPE html>
<html>
<head>
    <title>sign-up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body{
         font-family:sans-serif;
         }

.form{
    background:url('image/back1.jfif');
    background-size: cover;  
    width:100%;
    height: 1000px;
    position: relative;
    overflow:hidden;
    margin:0;
  padding:0;

}
.signupbox{
top: 60%;
left:80%;
width: 350px;
position: absolute;
background-color:white;
transform: translate(-50%,-50%);
}

.signupbox h2{
    padding: 0 30px;
}

.signupbox h5{
    padding: 0 30px;
    color:#808080; 
    
}
.textbox1{
    padding-bottom: 20px;
    color: black;
    padding: 8px 6px;
    margin: 8px 6px;
    border-top:5px;
    border-top-color: #1E90FF;
    width: 100%;
    overflow: hidden;
}




.textbox1 input{
    border: none;
    background-color: #F0F8FF;
    color:  #808080;
    padding:8px;
    margin:0 10px;
    width: 120px;
    font-size: 15px;

}
.textbox{
    
    padding-bottom: 20px;
    color: black;
    padding: 8px 6px;
    margin: 8px 6px;
    border: none;
    width: 100%;
    overflow: hidden;

}
.option{
     
    color:#808080;
    padding-top: 8px;
    padding-right: 100px;
    padding-left: 8px;
    font-size: 15px;
    border: none;
    background-color: #F0F8FF;
    
   margin-left: 22px;
  
   

    border: none;
    width: 70%;

}



.textbox input{
    border: none;
    background-color: #F0F8FF;
    color:  #808080;
    padding:8px;
    margin:0 10px;
    width: 300px;
    font-size: 15px;

}
#ragister{
    color: white;
    width: 100px;
    padding: 10 0 20px 20px;
    margin-left: 20px;

}
.button input{
    background-color: #1E90FF;
    color: white;
    padding: 8px 20px;
    font-size: 15px;
    border: none;

}
.column1{
    float: left;
    width: 50%;
    
}


.column2{
    float: right;
    width: 50%;
}
.terms{
    text-decoration: none;
    color: #1E90FF;
}
.extra{
    color: white;
}
.footer{
    background-color: #000;
    margin-top: 0px;
    color:#fff;
    font-size:14px;
    padding-top: 20px;
    padding-bottom: 10px;
}



        
    </style>


        

</head>
<body>
      

 <div class="form">
 <?php include "navbar.php";?>     
 <form method="post" action="signup.php">   
   <div class="signupbox">

  <div>
    <h2>Sign-Up</h2>
    <h5>Please fill this form to create an account</h5>
    <hr class="my-4">
  </div>
    <div class="textbox1">
             <div class="column1"><input type="text" required="" value="" name="firstname" placeholder="First name"></div>
             <div class="column2"><input type="text" required="" value="" name="lastname" placeholder="Last name"></div>
    <br>
    </div>
    <div class="textbox">
    <input type="number" required="" value=""  name="contact" placeholder="Mobile-No"><br>
    </div>
    <div class="textbox">
    <input type="email" required="" value=""  name="email" placeholder="Email"><br>
    </div>
    <div class="textbox">
    <input type="password" required="true" value=""  name="password" placeholder="Password" ><br>
    </div>
    <div class="option">
              <p>Please select your gender:</p>
              <input type="radio" id="male" name="gender" value="male">
              <label for="male">Male</label><br>
               <input type="radio" id="female" name="gender" value="female">
              <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other">
               <label for="other">Other</label>
    </div>
    
    <h5><input type="checkbox" required="" value=""  name="terms"> I accept the <a class="terms">Terms of use </a> & <a class="terms">Privacy Policy</a></h5><br>
    
    <div class="button">
    <input type="submit"  value="Sign Up" name="ragister" id="ragister">
    </div>

    <div class="extra"> <h5>already have an account? <a class="terms" href="login.php">Login here</a></h5></div>
    </div>

  </form>
</div>

<div class="footer">
          <center><p>Copyright @ LifeStyle Store all rights are resivered | Contact us +91 8928669402</p></center>
</div>

      
        
</body>
</html>

<?php

$con=mysqli_connect("localhost","root","","inventory")or die(mysqli_error());
if (isset($_POST['ragister'])){


mysqli_query($con,"INSERT INTO customer(firstname,lastname,contact,user_email,password,gender) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[contact]','$_POST[email]','$_POST[password]','$_POST[gender]') ") or die(mysqli_error());
  
 ?><script>
     location.href = 'login.php';
     window.alert("you are successfully signed-up");
     
</script>

   
  <?php

}



?>