<?php
//Start the session to see if the user is authencticated user.
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
//Check if the session variable for user authentication is set, if not redirect to login page.
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
//include the menu
//echo "<h1>Welcome ". $_SESSION['USER_ID']."</h1>";
require('index1.php');
exit();
}
else{
header('location:login.php');
exit();
}
?>
