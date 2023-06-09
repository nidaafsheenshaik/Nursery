<?php
//Start the session to see if the user is authenticated user.
session_start();

//Check if the user is authenticated first. Or else redirect to login page
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){

  $id = $_SESSION['USER_ID'];

if ($_POST['submit'] == 'Update Name'){
//validation flag to check that all validations are done
//Check all the required fields are filled
if(!($_POST['name']))
{
  include('customerUpdate.php');
  echo 'Enter Customer Name to Update.<br>';
}

else{
  $customer_name = $_POST['name'];
  $link = mysqli_connect('localhost', 'root', '', 'iiitdmj_nursery');
  //Check link to the mysql server
  if(!$link){
    die('Failed to connect to server');
  }
  //Create Insert query
  $query = "UPDATE customer SET customer_name = '$customer_name' WHERE customer_id = '$id' ";
  //Execute query
  $results = mysqli_query($link, $query);

  //Check if query executes successfully
    if($results == FALSE)
    echo mysql_error() . '<br>';
    else{
      include('profile.php');
      echo "Updated Successfully";
    }
}

}

// Code to be executed when 'Update' is clicked.
else if ($_POST['submit'] == 'Update Password'){
  $Password = $_POST['password'];
  $CnfPassword = $_POST['cnfpassword'];
  if(!$Password || $Password != $CnfPassword){
    include('customerUpdate.php');
    echo 'Enter Same Password in Both Fields ';
  }

  else{
    $link = mysqli_connect('localhost', 'root', '','iiitdmj_nursery');
    //Check link to the mysql server
      if(!$link){
        die('Failed to connect to server: ');
      }

      $update1 = "UPDATE customer SET customer_password = '$Password' WHERE customer_id = '$id'";
      $results1 = mysqli_query($link, $update1);

      if($results1 == FALSE)
      echo mysqli_error($link) . '<br>';
      else{
        include('profile.php');
        echo "Updated Successfully";
      }
    }
}

// Code to be executed when 'Delete' is clicked.
else if ($_POST['submit'] == 'Update Mobile Number'){
  $mobile = $_POST['mobile'];
  if(!$mobile){
    include('customerUpdate.php');
    echo 'Enter Mobile Number to Update it. ';
  }
  else{
    $link = mysqli_connect('localhost', 'root', '','iiitdmj_nursery');
    //Check link to the mysql server
      if(!$link){
        die('Failed to connect to server: ');
      }

      $update1 = "UPDATE customer SET customer_contact = '$mobile' WHERE customer_id = '$id'";
      $results1 = mysqli_query($link, $update1);

      if($results1 == FALSE)
      echo mysqli_error($link) . '<br>';
      else{
        include('profile.php');
        echo "Updated Successfully";
      }
    }
}

 else{
  $address = $_POST['address'];
  if(!$address){
    include('customerUpdate.php');
    echo 'Enter Address to Update it. ';
  }
  else{
    $link = mysqli_connect('localhost', 'root', '','iiitdmj_nursery');
    //Check link to the mysql server
      if(!$link){
        die('Failed to connect to server: ');
      }

      $update1 = "UPDATE customer SET customer_address = '$address' WHERE customer_id = '$id'";
      $results1 = mysqli_query($link, $update1);

      if($results1 == FALSE)
      echo mysqli_error($link) . '<br>';
      else{
        include('profile.php');
        echo "Updated Successfully";
      }
    }
}


}
else{
header('location:login.php');
exit();
}

?>
