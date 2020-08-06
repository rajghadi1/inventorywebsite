<?php
$con=mysqli_connect("localhost","root","","inventory")or die(mysqli_error());
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM product WHERE id=$id");

 ?>
               
                <script>
                    location.href ='pdatabase.php';
                    window.alert("Database Deleted");
     
               </script>

         <?php
?>