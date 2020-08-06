<?php


// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
 


?>
          <script>
     location.href = 'login.php';
     window.alert("you are successfully loged-out");
     
</script>


