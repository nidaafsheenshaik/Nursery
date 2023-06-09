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
          <img class="card-img-top" src="images/nimboo.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-nimboo.php" class="name-plant">Nimboo,Lemon plant</a></h5>
            <p class="card-text rate">₹ 399</p>
            <p class="card-text">Growing Lemon plant is an easy way to add a tropical flair to your garden.</p>
            <p class="rating">⭐⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/jamun.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-jamun.php" class="name-plant">Jamun Tree</a></h5>
            <p class="card-text rate">₹ 299</p>
            <p class="card-text">The Jamun is evergreen, fruit plant, having smooth leaves and fragrant flowers</p>
            <p class="rating">⭐⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/pomegranate.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-pomegranate.php" class="name-plant">Pomegranate Plant</a></h5>
            <p class="card-text rate">₹ 329</p>
            <p class="card-text">Pomegranate (Annar) is an eye-catching, extremely long-lived plant.</p>
            <p class="rating">⭐⭐⭐⭐⭐</p>
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
          <img class="card-img-top" src="images/papaya.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-papaya.php" class="name-plant">Papaya, Papita </a></h5>
            <p class="card-text rate">₹ 329</p>
            <p class="card-text">Papaya papita is a fruit-bearing tree native to Mexico and South America.</p>
            <p class="rating">⭐⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/banana.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-banana.php" class="name-plant">Banana Plant</a></h5>
            <p class="card-text rate">₹ 399</p>
            <p class="card-text">Growing Banana plant is an easy way to add a tropical flair to your garden. s</p>
            <p class="rating">⭐⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/kaju.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-kaju.php" class="name-plant">Kaju Plant</a></h5>
            <p class="card-text rate">₹ 399</p>
            <p class="card-text">Cashew trees are attractive trees with large leaves and pretty, pink flowers</p>
            <p class="rating">⭐⭐⭐⭐⭐</p>
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
          <img class="card-img-top" src="images/coconut.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-coconut.php" class="name-plant">Coconut plant</a></h5>
            <p class="card-text rate">₹ 549</p>
            <p class="card-text">Coconuts are exotic, edible fruits produced in coconut trees. </p>
            <p class="rating">⭐⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/sapota.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-sapota.php" class="name-plant">Sapota plant</a></h5>
            <p class="card-text rate">₹ 499</p>
            <p class="card-text">The sapota plant is an evergreen tree native to southern Mexico.</p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/sweetlime.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-sweetlime.php" class="name-plant">Sweet-lime Plant</a></h5>
            <p class="card-text rate">₹ 499</p>
            <p class="card-text">Sweet lime grow as perennial evergreen with vigorous thorns.</p>
            <p class="rating">⭐⭐⭐⭐</p>
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
          <img class="card-img-top" src="images/apple.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-apple.php" class="name-plant">Apple plant</a></h5>
            <p class="card-text rate">₹ 289</p>
            <p class="card-text">The apple tree is deciduous and known for its sweet,pomaceous fruit,apple.</p>
            <p class="rating">⭐⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/whiteguava.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-whiteguava.php" class="name-plant">White Guava Plant</a></h5>
            <p class="card-text rate">₹ 399</p>
            <p class="card-text">White guava is a large shrub which grows on the average of 10 feet in height.</p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/anjeer.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-anjeer.php" class="name-plant">Anjeer Plant</a></h5>
            <p class="card-text rate">₹ 399</p>
            <p class="card-text">Anjeer is one of the best attractive and nutritional fruit plants.</p>
            <p class="rating">⭐⭐⭐⭐⭐</p>
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
          <img class="card-img-top" src="images/blackgrapes.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-blackgrapes.php" class="name-plant">Black grapes plant</a></h5>
            <p class="card-text rate">₹ 499</p>
            <p class="card-text">A grape is a fruiting berry of the deciduous woody vines of the botanical genus Vitis.</p>
            <p class="rating">⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/strawberry.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-strawberry.php" class="name-plant">Strawberry Plant</a></h5>
            <p class="card-text rate">₹ 349</p>
            <p class="card-text">Strawberry is widely appreciated for its aroma, and sweetness.</p>
            <p class="rating">⭐⭐⭐⭐⭐</p>
            <!-- <a href="#" class="btn btn-primary btn-block">Add to cart</a> -->
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/sitaphal.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><a href="4)des-sitaphal.php" class="name-plant">Sitaphal Plant</a></h5>
            <p class="card-text rate">₹ 499</p>
            <p class="card-text">Pomegranate (Annar) is an eye-catching, extremely long-lived plant.</p>
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
