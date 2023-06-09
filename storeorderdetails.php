<?php
  session_start();
  if(!isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] != 1){
    header('location:login.php');
    exit();
  //include the menu
  }
  if(!$_POST['mobile']||!$_POST['address']){
    include('getorderDetails.php');
    echo "<h5>Enter All Details</h5>";
    exit();
  }
  $_SESSION['mobileNum'] = $_POST['mobile'];
  $_SESSION['Address'] = $_POST['address'];
  $_SESSION['Method'] = $_POST['PaymentMethods'];
  header('location:Cartcheck.php');

?>
