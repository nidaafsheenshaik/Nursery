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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Poiret+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles2.css">
</head>
<style>
  div {
    padding: 8px;
  }
  a:hover{
    color: green;
    text-decoration: none;
  }
  img {
    width: 50px;
    height: 180px;
  }

  .card-body {
    text-align: center;
  }

  .rate {
    color: orangered;
    font-size: 20px;
    padding-bottom: 0px;
  }

  .rating {
    font-size: smaller;
    padding-top: 0px;
  }

  .card-text {
    font-family: 'Roboto', sans-serif;
    font-weight: bolder;
    font-size: large;
  }

  .card {
    border-radius: 10px;
  }

  .name-plant {
    color: black;
    font-family: 'Patrick Hand', cursive;
    font-family: 'Poiret One', cursive;
    font-weight: bold;
    font-size: larger;
  }
</style>

<body>
  <div class="Main">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index1.php" style="font-size: 1.5rem;"><strong style="margin-left: 5%; letter-spacing : 3px;">IIITDMJ NURSERY</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index1.php"> <strong >HOME</strong></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <strong >PRODUCTS</strong>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="2)FRUIT.php">Fruit Plants</a>
              <a class="dropdown-item" href="1)FLOWER.php">Flower Plants</a>
              <a class="dropdown-item" href="3)SEEDS.php">Seeds</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer"> <strong >CONTACT US</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php"> <strong >PROFILE</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"> <strong >LOGOUT</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="getorderDetails.php"> <img class="nav-image" src="images/cart.png" alt="Error Loading img"> </a>
          </li>
        </ul>
      </div>
    </nav>
  </div> <br><br>
  <!-- Row 1 -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/tomatoseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-tomatoseeds.php" class="name-plant">Tomato Seeds</a></h5>
            <p class="card-text rate">₹ 55</p>
            <p class="card-text">A packet contains 30 seeds of tomato,which can be cultivated in pot.</p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/balsamroseseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-balsamroseseeds.php" class="name-plant">Balsam Rose Seeds</a></h5>
            <p class="card-text rate">₹ 145</p>
            <p class="card-text">Balsam flower resembles with mini roses with thickly spaced petals.</p>
            <p class="rating">⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/purpleorchidseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-purpleorchidseeds.php" class="name-plant">Purple Orchid Seeds</a></h5>
            <p class="card-text rate">₹ 805</p>
            <p class="card-text">Purple orchid trees are known for their maximum germination.</p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Row 2 -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/roundbrinjalseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-roundbrinjalseeds.php" class="name-plant">Brinjal(Round) Seeds</a></h5>
            <p class="card-text rate">₹ 55</p>
            <p class="card-text">Brinjal is a low-calorie vegetable with good nutrition profile.</p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/gomphrena.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-gomphrena.php" class="name-plant">Gomphrena Seeds</a></h5>
            <p class="card-text rate">₹ 55</p>
            <p class="card-text">Gomphrena produces globular flowerheads that brighten the garden.</p>
            <p class="rating">⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/sirisseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-siriseeds.php" class="name-plant">Siris Seeds</a></h5>
            <p class="card-text rate">₹ 945</p>
            <p class="card-text">A packet contains 100 seeds, with alomost 100% germination</p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Row 3 -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/chilliseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-chilliseeds.php" class="name-plant">Chilli Seeds</a></h5>
            <p class="card-text rate">₹ 55</p>
            <p class="card-text">Chilli plants make great gifts for the cook or grow your own enthusiast.</p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/broccoliseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-broccoliseeds.php" class="name-plant">Broccoli Seeds</a></h5>
            <p class="card-text rate">₹ 149</p>
            <p class="card-text"> A member of the cabbage family, broccoli is rich in vitamins.</p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/marigoldseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-marigold.php" class="name-plant">Marigold Seeds</a></h5>
            <p class="card-text rate">₹ 229</p>
            <p class="card-text">Marigold is among the very popular flowers commonly found in India.</p>
            <p class="rating">⭐⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Row 4 -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/sunflowerseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-sunflowerseeds.php" class="name-plant">Sunflower Seeds</a></h5>
            <p class="card-text rate">₹ 145</p>
            <p class="card-text">Sunflowers say summer like no other plant.Sunflower packet contains 35 seeds.</p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/eucalyptusseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-eucalyptusseeds.php" class="name-plant">Eucalyptus Seeds</a></h5>
            <p class="card-text rate">₹ 89</p>
            <p class="card-text">Eucalypts have special flowers and fruitsthat no other trees have.</p>
            <p class="rating">⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/lavenderseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-lavenderseeds.php" class="name-plant">Lavender Seeds</a></h5>
            <p class="card-text rate">₹ 145</p>
            <p class="card-text">Lavender has the special sweet fragrance. 1 packet contains 50 seeds.</p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Row 5 -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/Alyssumseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-alyssum.php" class="name-plant">Alyssum Seeds</a></h5>
            <p class="card-text rate">₹ 145</p>
            <p class="card-text">This fragrant plant is valued for its dainty foliage and tiny white flowers. </p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/palmseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-palmseeds.php" class="name-plant">Palm seeds</a></h5>
            <p class="card-text rate">₹ 805</p>
            <p class="card-text">Vitamin inside the peach palm fruit is working as an immune system booster.</p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/capsicumseeds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-capsicumseeds.php" class="name-plant">Capsicum Seeds</a></h5>
            <p class="card-text rate">₹ 55</p>
            <p class="card-text">A packet conatins approximately 35 seeds of capsicum(green).</p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <form class="buy" action="getorderDetails.php" method="post">
    <input style="width: 20rem; margin: 0 auto 2rem;" class="btn btn-primary btn-block" type="Submit" name="" value="Buy">
  </form>

</body>

</html>
