<?php
if ($_POST['submit'] == 'Sign Up'){
//Collect POST values
$Password = $_POST['password'];
$CnfPassword = $_POST['cnfpassword'];
$name = $_POST['name'];
$id = $_POST['id'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
if(($Password == $CnfPassword)&& $id && $Password && $CnfPassword){
//Connect to mysql server
$link = mysqli_connect('localhost', 'root', '','iiitdmj_nursery');
//Check link to the mysql server
if(!$link) {
die('Failed to connect to server: ');
}
$qry1="SELECT * FROM customer WHERE customer_id = '$id' limit 1";
$result1=mysqli_query($link, $qry1);

if($result1&&mysqli_num_rows($result1) > 0){
  include('signUp.php');
  echo '<center><h4>User Id already in use 👎 !!!</h4><center>';
}
//Create query (if you have a Logins table the you can select login id and password from there)
else{
  $qry="INSERT into customer (customer_id, customer_password, customer_name, customer_contact, customer_address) values ('$id', '$Password', '$name', '$mobile', '$address')";
  //Execute query
  $result=mysqli_query($link, $qry);

  if($result){
    //session_start();
    $_SESSION['IS_AUTHENTICATED'] = 1;
    $_SESSION['USER_ID'] = $id;
    include('signUp.php');
    echo '<center><h4>You have been successfully signed Up. Go back to Login page to Login ✌️✌️</h4><center>';
  }
  else{
  //Login failed
  include('signUp.php');
  echo '<center><h4>Incorrect Username or Password 👎 !!!</h4><center>';
  exit();
  }
}

}
else if($id){
  include('signUp.php');
  if ($password) {
    echo '<center><h4>Entered Passwords Not matched 👎 !!</h4></center>';
  }
  else{
    echo '<center><h4>Enter All Details 👎 !!</h4></center>';
  }

exit();
}
else{
  include('signUp.php');
  echo '<center><h4>Enter All Details 👎 !!</h4></center>';
  exit();
}
}
else{
header("location: signUp.php");
exit();
}

?>
