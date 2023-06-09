<?php
if(!isset($_SESSION))
    {
        session_start();
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
      background-image:url("images/details.jpg");
      background-size: cover;
      margin: auto;
      padding-top: 5rem;
      /* -webkit-filter: blur(5px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(5px); */

    }
    .form-container {
        width: 30rem;
        margin-left: 32rem;
        margin-top: 40px;
        padding: 25px;
    }

    h3 {
        text-align: center;
        padding-bottom: 30px;
        font-weight: bold;
        letter-spacing: .7rem;
        color: green;
    }
    h5{
      font-size: 1.5rem;
      margin-top: 2rem;
    }
    .buttons {
        padding: 10px;
        font-weight: bolder;
    }

    .buttons {
        margin-top: 1rem;
        padding-bottom: 10px;
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
        <div class="form-container">
            <h3>ENTER DETAILS</h3>
            <form method="post" action="storeorderdetails.php">
                <input type="number" class="form-group form-control" name="mobile" placeholder="Phone number">
                <input type="text" class="form-group form-control" name="address" placeholder="Enter address">
                <label>Mode of Pay</label>
                <select class="form-group" name="PaymentMethods">
                    <option value="COD">Cash on Delivery</option>
                    <option value="Card">Card</option>
                </select>
                <input class="buttons btn btn-block btn-success" type="submit" name="submit" value="CONFIRM" />
            </form>
        </div>
</body>
</html>
