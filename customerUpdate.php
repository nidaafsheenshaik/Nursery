<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if(!isset($_SESSION['IS_AUTHENTICATED']) || $_SESSION['IS_AUTHENTICATED'] != 1){
  header('location:login.php');
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IIITDMJ NURSERY</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body{
      background-color: #DDFFBC;
    }
    .form-container {
        margin: 0px 540px;
        margin-top: 40px;
        padding: 25px;
    }

    h4 {
        text-align: center;
        padding-bottom: 30px;
    }

    button {
        padding: 20px;
    }
    .btn{
      background-color: green;
      color: #fff;
    }
    .btn:hover{
      background-color: lightgreen;
      color: black;
    }
    .buttons {
        padding-bottom: 20px;
    }

    .fonts {
        text-align: center;
        padding-bottom: 30px;
    }

    small {
        padding-bottom: 20px;
    }

    .row {
        padding-left: 100px;
        padding-bottom: 20px;
    }
    hr
    {
        border-top: 3px solid grey;
        font-size: large;
    }
    a
    {
        color: white;
    }
</style>

<body>

    <div class="conatiner">
        <div class="form-container">
            <h4>Update Your Details</h4>
            <form method="post" action="customerDetailsUpdate.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="mobile" placeholder="Phone number">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="cnfpassword" placeholder="Confirm Password">
                </div>
                <div class="buttons">
                    <input class="btn btn-block" type="submit" name="submit" value="Update Name" />
                </div>
                <div class="buttons">
                    <input class="btn btn-block" type="submit" name="submit" value="Update Password" />
                </div>
                <div class="buttons">
                    <input class="btn btn-block" type="submit" name="submit" value="Update Mobile Number" />
                </div>
                <div class="buttons">
                    <input class="btn btn-block" type="submit" name="submit" value="Update Address" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>
