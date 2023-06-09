<?php
if ($_POST['submit'] == 'Login as User'){
//Collect POST values
$login = $_POST['login_id'];
$Password = $_POST['Passwordno'];
if($login && $Password){
//Connect to mysql server
$link = mysqli_connect('localhost', 'root', '','iiitdmj_nursery');
//Check link to the mysql server
if(!$link) {
die('Failed to connect to server: ');
}
//Create query (if you have a Logins table the you can select login id and password from there)
$qry="SELECT * FROM customer WHERE customer_id = '$login' AND customer_password = '$Password' limit 1";
//Execute query
$result=mysqli_query($link, $qry);

if($result&&mysqli_num_rows($result) > 0){
  session_start();
  $_SESSION['IS_AUTHENTICATED'] = 1;
  $_SESSION['USER_ID'] = $login;
  header('location:index.php');
}
else{
//Login failed
include('login.php');
echo '<center><h4>Incorrect Username or Password 👎 !!!</h4><center>';
exit();
}

}
else{
include('login.php');
echo '<center><h4>Username or Password missing 👎!!</h4></center>';
exit();
}
}
elseif ($_POST['submit'] == 'Login as Admin') {
  $login = $_POST['login_id'];
  $Password = $_POST['Passwordno'];
  if($login && $Password){
  //Connect to mysql server
  $link = mysqli_connect('localhost', 'root', '','iiitdmj_nursery');
  //Check link to the mysql server
  if(!$link) {
  die('Failed to connect to server: ');
  }
  //Create query (if you have a Logins table the you can select login id and password from there)
  $qry="SELECT * FROM admin WHERE admin_id = '$login' AND admin_password = '$Password' limit 1";
  //Execute query
  $result=mysqli_query($link, $qry);

  if($result&&mysqli_num_rows($result) > 0){
    session_start();
    $_SESSION['IS_AUTHENTICATED'] = 1;
    $_SESSION['ADMIN_ID'] = $login;
    header('location:Admin.php');
  }
  else{
  //Login failed
  include('login.php');
  echo '<h4><center>You Are Not an Admin 👎 !!<h4></center>';
  exit();
  }


  }
  else{
  include('login.php');
  echo '<center><h4>Username or Password missing!!</h4></center>';
  exit();
  }
}
else{
header("location: login.php");
exit();
}

?>
