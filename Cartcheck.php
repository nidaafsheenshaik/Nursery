<?php
//Start the session to see if the user is authencticated user.
session_start();
//Check if the session variable for user authentication is set, if not redirect to login page.
if(!isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] != 1){
  header('location:login.php');
  exit();
//include the menu
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

    <style media="screen">
      body{
        margin: auto;
        padding: 5rem 10rem;
        background-color: #CAF7E3;
      }
      a{
        color: black;
        
      }
      a:hover{
        color: grey;
        text-decoration: none;
      }
      h1{
        letter-spacing: .5rem;
        font-weight: bolder;
        color: #064420;
        margin-bottom: 3.5rem;
      }
    </style>

</head>

<style>
    label
    {
        padding-top: 20px;
    }
    h4
    {
        padding-top: 30px;
    }
</style>

<body>
  <h1 style="text-align: center;">ADD TO CART</h1><br>
  <form method="post" action="addingtoCart.php">
    <div class="row" style="margin-bottom: 2rem;">
      <div class="col-lg-4">
        <center><h5>FRUIT-PLANTS</h5></center><br>
        <label><a href="4)des-nimboo.php">Nimboo,Lemon Plant</a></label>
        <input type="Number" class="form-control" name="1" value="0">
        <label><a href="4)des-jamun.php">Jamun Tree</a></label>
        <input type="Number" class="form-control" name="2" value="0">
        <label><a href="4)des-pomegranate.php">Pomegranate Plant</a></label>
        <input type="Number" class="form-control" name="3" value="0">
        <label><a href="4)des-papaya.php">Papaya Plant</a></label>
        <input type="Number" class="form-control" name="4" value="0">
        <label><a href="4)des-banana.php">Banana Plant</a></label>
        <input type="Number" class="form-control" name="5" value="0">
        <label><a href="4)des-kaju.php">Kaju Plant</a></label>
        <input type="Number" class="form-control" name="6" value="0">
        <label><a href="4)des-coconut.php">Coconut Plant</a></label>
        <input type="Number" class="form-control" name="7" value="0">
        <label><a href="4)des-sapota.php">Sapota Plant</a></label>
        <input type="Number" class="form-control" name="8" value="0">
        <label><a href="4)des-sweetlime.php">Sweet-lime Plant</a></label>
        <input type="Number" class="form-control" name="9" value="0">
        <label><a href="4)des-apple.php">Apple Plant</a></label>
        <input type="Number" class="form-control" name="10" value="0">
        <label><a href="4)des-whiteguava.php">White Guava Plant</a></label>
        <input type="Number" class="form-control" name="11" value="0">
        <label><a href="4)des-anjeer.php">Anjeer Plant</a></label>
        <input type="Number" class="form-control" name="12" value="0">
        <label><a href="4)des-blackgrapes.php">Black Grapes Plant</a></label>
        <input type="Number" class="form-control" name="13" value="0">
        <label><a href="4)des-strawberry.php">Strawberry Plant</a></label>
        <input type="Number" class="form-control" name="14" value="0">
        <label><a href="4)des-sitaphal.php">Sitaphal Plant</a></label>
        <input type="Number" class="form-control" name="15" value="0">
      </div>
      <div class="col-lg-4">
          <center><h5>FLOWER PLANTS</h5></center><br>
          <label><a href="4)des-desertrose.php">Desert Rose Plant</a></label>
          <input type="Number" class="form-control" name="16" value="0">
          <label><a href="4)des-alamanda.php">Peach Orange Plant</a></label>
          <input type="Number" class="form-control" name="17" value="0">
          <label><a href="4)des-hibiscusorange.php">Hibiscus(Orange) Plant</a></label>
          <input type="Number" class="form-control" name="18" value="0">
          <label><a href="4)des-canna.php">Canna Plant</a></label>
          <input type="Number" class="form-control" name="19" value="0">
          <label><a href="4)des-lxora.php">Lxora Dwarf Plant</a></label>
          <input type="Number" class="form-control" name="20" value="0">
          <label><a href="4)des-roseorange.php">Rose(Orange) Plant</a></label>
          <input type="Number" class="form-control" name="21" value="0">
          <label><a href="4)des-techomaorange.php">Techoma Plant</a></label>
          <input type="Number" class="form-control" name="22" value="0">
          <label><a href="4)des-marigold.php">Marigold Plant</a></label>
          <input type="Number" class="form-control" name="23" value="0">
          <label><a href="4)des-poinsettia.php">Poinsettia Plant</a></label>
          <input type="Number" class="form-control" name="24" value="0">
          <label><a href="4)des-lilium.php">Lilium Plant</a></label>
          <input type="Number" class="form-control" name="25" value="0">
          <label><a href="4)des-buttonrose.php">Button Rose Plant</a></label>
          <input type="Number" class="form-control" name="26" value="0">
          <label><a href="4)des-gazania.php">Gazania Plant</a></label>
          <input type="Number" class="form-control" name="27" value="0">
          <label><a href="4)des-geraniumivy.php">Geranium Ivy Plant</a></label>
          <input type="Number" class="form-control" name="28" value="0">
          <label><a href="4)des-kalanchoe.php">Kalanchoe Plant</a></label>
          <input type="Number" class="form-control" name="29" value="0">
          <label><a href="4)des-zinnia.php">Zinnia Plant</a></label>
          <input type="Number" class="form-control" name="30" value="0">
      </div>
      <div class="col-lg-4">
          <center><h5>SEEDS</h5></center><br>
        <label><a href="4)des-tomatoseeds.php">Tomato Seeds</a></label>
        <input type="Number" class="form-control" name="31" value="0">
        <label><a href="4)des-balsamroseseeds.php">Balsam Rose Seeds</a></label>
        <input type="Number" class="form-control" name="32" value="0">
        <label><a href="4)des-purpleorchidseeds.php">Purple Orchid Seeds</a></label>
        <input type="Number" class="form-control" name="33" value="0">
        <label><a href="4)des-roundbrinjalseeds.php">Brinjal(Round) Seeds</a></label>
        <input type="Number" class="form-control" name="34" value="0">
        <label><a href="4)des-gomphrena.php">Gomphrena Seeds</a></label>
        <input type="Number" class="form-control" name="35" value="0">
        <label><a href="4)des-siriseeds.php">Siris Seeds</a></label>
        <input type="Number" class="form-control" name="36" value="0">
        <label><a href="4)des-chilliseeds.php">Chilli Seeds</a></label>
        <input type="Number" class="form-control" name="37" value="0">
        <label><a href="4)des-broccoliseeds.php">Broccoli Seeds</a></label>
        <input type="Number" class="form-control" name="38" value="0">
        <label><a href="4)des-marigold.php">Marigold Seeds</a></label>
        <input type="Number" class="form-control" name="39" value="0">
        <label><a href="4)des-sunflowerseeds.php">sunflower Seeds</a></label>
        <input type="Number" class="form-control" name="40" value="0">
        <label><a href="4)des-eucalyptusseeds.php">Eucalyptus Seeds</a></label>
        <input type="Number" class="form-control" name="41" value="0">
        <label><a href="4)des-lavenderseeds.php">Lavender Seeds</a></label>
        <input type="Number" class="form-control" name="42" value="0">
        <label><a href="4)des-alyssum.php">Alyssum Seeds</a></label>
        <input type="Number" class="form-control" name="43" value="0">
        <label><a href="4)des-palmseeds.php">Palm Seeds</a></label>
        <input type="Number" class="form-control" name="44" value="0">
        <label><a href="4)des-capsicumseeds.php">Capsicum Seeds</a></label>
        <input type="Number" class="form-control" name="45" value="0">
      </div>
    </div>
    <div class="buttons">
      <br><input style="width: 20rem; margin: auto" class="btn btn-block btn-success" type="submit" name="submit" value="Buy The Products"/>
    </div>
  </form>
</body>

</html>
