<?php
session_start();
session_unset();
session_destroy();
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
      background-image: url("nurseryimg.jpg");
      background-size: cover;
      /* color: grey; */
    }
    .form-container {
      margin: auto;
      margin-top: 3rem;
      padding: 3rem 9.75rem;
      width: 50%;
      background-color: #CFDAC8;
      border-radius: 10px;
    }

    h4 {
      text-align: center;
      padding-bottom: 30px;
      letter-spacing: 0.2rem;
      font-weight: bold;
    }

    button {
        padding: 20px;
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
            <h4>WELCOME TO IIITDMJ NURSERY</h4>
            <form method="post" action="signupCheck.php">
              <div class="form-group">
                  <input type="text" class="form-control" name="id" placeholder="Enter USER_ID">
              </div>
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
                    <input class="btn btn-block btn-primary" type="submit" name="submit" value="Sign Up" />
                </div>
            </form>
            <form class="" action="login.php" method="post">
              <small class="form-text text-muted">Already have an account? Then Log-in</small>
              <div class="buttons">
                  <input class="btn btn-block btn-danger" type="submit" name="submit" value="Log In" />
              </div>
            </form>
        </div>
    </div>
</body>

</html>
