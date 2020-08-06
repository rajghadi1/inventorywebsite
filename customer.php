<?php $con=mysqli_connect("localhost","root","","inventory")or die(mysqli_error());?>
<!DOCTYPE html>
<html>
<head>
	<title>customer</title>
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
      <center>
        <h1>Customer Details</h1><br>
         <a href="signup.php"><button type="submit" class="btn btn-danger" name="insert">Insert the Data</button></a>      
     </center>
   </div>

     <div class=" ">
      <div id="left">
        <div><h3>Sort as per your wish</h3></div> 
  <form method="POST" action="">
    <div class="radio">
            <label><input type="radio" name="fname_asc" >Ascending by first name</label>
            
    </div>
    <div class="radio">
            <label><input type="radio" name="fname_dsc">Decending by first name</label>
           
    </div>
     <div class="radio">
            <label><input type="radio" name="lname">order by last name</label>
           
    </div>
    <div class="radio">
            <label><input type="radio" name="email">Email</label>
            
    </div>
    <div class="radio">
            <label><input type="radio" name="contact">Contact</label>
            
    </div>
    <div class="radio">
            <label><input type="radio" name="gender">gender</label>
            
    </div>
    <button type="submit" class="btn btn-primary" name="submit">submit</button>
  </form>
      </div>
    </div><br><br>


       <div class="container">
         <table class="table table-hover ">
               <thead class="thead-dark">
                   <tr>
                       
                       <th>First Name</th>
                       <th>Last Name</th>
                       <th>Email</th>
                       <th>Contact</th>
                       <th>Gender</th>
                       <th>Edit</th>
                       <th>Delete</th>
                       
                   </tr>
               </thead>
               <tbody>
                <?php


 if(isset($_POST['submit'])){             
       if(isset($_POST['fname_asc'])){
                 $res=mysqli_query($con,"SELECT * FROM customer ORDER BY firstname ASC");
                 while($row=mysqli_fetch_array($res)) 
                 {
                    echo"<tr>";                    
                    echo"<td>"; echo $row['firstname']; echo"</td>";
                    echo"<td>"; echo $row['lastname']; echo"</td>";
                    echo"<td>"; echo $row['user_email']; echo"</td>";
                    echo"<td>"; echo $row['contact']; echo"</td>";
                    echo"<td>"; echo $row['gender']; echo"</td>";

                    echo"<td>"; ?><a href="customer-edit.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-success">Edit</button></a><?php echo"</td>";
                    echo"<td>"; ?><a href="customer-delete.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-danger">Delete</button></a><?php  echo"</td>";
                    echo"</td>";
                 } 
               }
        elseif (isset($_POST['fname_dsc'])) {
                 $res=mysqli_query($con,"SELECT * FROM customer ORDER BY firstname DESC");
                 while($row=mysqli_fetch_array($res)) 
                 {
                   echo"<tr>";                    
                    echo"<td>"; echo $row['firstname']; echo"</td>";
                    echo"<td>"; echo $row['lastname']; echo"</td>";
                    echo"<td>"; echo $row['user_email']; echo"</td>";
                    echo"<td>"; echo $row['contact']; echo"</td>";
                    echo"<td>"; echo $row['gender']; echo"</td>";

                    echo"<td>"; ?><a href="customer-edit.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-success">Edit</button></a><?php echo"</td>";
                    echo"<td>"; ?><a href="customer-delete.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-danger">Delete</button></a><?php  echo"</td>";
                    echo"</td>";
                 } 
               }
               
                 if(isset($_POST['lname'])){
                 $res=mysqli_query($con,"SELECT * FROM customer ORDER BY lastname ASC");
                 while($row=mysqli_fetch_array($res)) 
                 {
                    echo"<tr>";                    
                    echo"<td>"; echo $row['firstname']; echo"</td>";
                    echo"<td>"; echo $row['lastname']; echo"</td>";
                    echo"<td>"; echo $row['user_email']; echo"</td>";
                    echo"<td>"; echo $row['contact']; echo"</td>";
                    echo"<td>"; echo $row['gender']; echo"</td>";
                    echo"<td>"; ?><a href="customer-edit.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-success">Edit</button></a><?php echo"</td>";
                    echo"<td>"; ?><a href="customer-delete.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-danger">Delete</button></a><?php  echo"</td>";
                    echo"</td>";
                 } 
               }




    elseif(isset($_POST['email'])){
        $res=mysqli_query($con,"SELECT * FROM customer ORDER BY user_email ");
        while($row=mysqli_fetch_array($res)) 
                 {
                    echo"<tr>";                    
                    echo"<td>"; echo $row['firstname']; echo"</td>";
                    echo"<td>"; echo $row['lastname']; echo"</td>";
                    echo"<td>"; echo $row['user_email']; echo"</td>";
                    echo"<td>"; echo $row['contact']; echo"</td>";
                    echo"<td>"; echo $row['gender']; echo"</td>";
                    echo"<td>"; ?><a href="customer-edit.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-success">Edit</button></a><?php echo"</td>";
                    echo"<td>"; ?><a href="customer-delete.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-danger">Delete</button></a><?php  echo"</td>";
                    echo"</td>";
                 } 
    }
         elseif(isset($_POST['gender'])){
        $res=mysqli_query($con,"SELECT * FROM customer ORDER BY gender ");
        while($row=mysqli_fetch_array($res)) 
                 {
                    echo"<tr>";                    
                    echo"<td>"; echo $row['firstname']; echo"</td>";
                    echo"<td>"; echo $row['lastname']; echo"</td>";
                    echo"<td>"; echo $row['user_email']; echo"</td>";
                    echo"<td>"; echo $row['contact']; echo"</td>";
                    echo"<td>"; echo $row['gender']; echo"</td>";

                    echo"<td>"; ?><a href="customer-edit.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-success">Edit</button></a><?php echo"</td>";
                    echo"<td>"; ?><a href="customer-delete.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-danger">Delete</button></a><?php  echo"</td>";
                    echo"</td>";
                 } 
    }



                  elseif(isset($_POST['contact'])){
        $res=mysqli_query($con,"SELECT * FROM customer ORDER BY contact");
        while($row=mysqli_fetch_array($res)) 
                 {
                    echo"<tr>";                    
                    echo"<td>"; echo $row['firstname']; echo"</td>";
                    echo"<td>"; echo $row['lastname']; echo"</td>";
                    echo"<td>"; echo $row['user_email']; echo"</td>";
                    echo"<td>"; echo $row['contact']; echo"</td>";
                    echo"<td>"; echo $row['gender']; echo"</td>";

                    echo"<td>"; ?><a href="customer-edit.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-success">Edit</button></a><?php echo"</td>";
                    echo"<td>"; ?><a href="customer-delete.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-danger">Delete</button></a><?php  echo"</td>";
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





