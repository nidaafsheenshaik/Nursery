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
  .button :hover{
    background-color: "black";
  }

  .name-plant {
    color: black;
    font-family: 'Patrick Hand', cursive;
    font-family: 'Poiret One', cursive;
    font-weight: bold;
    font-size: larger;
  }
  .buy{
    margin-bottom: 5rem;
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
            <img class="card-img-top" src="images/desertrose.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-desertrose.php" class="name-plant">Desert Rose Plant</a></h5>
              <p class="card-text rate">₹ 729</p>
              <p class="card-text">Adeniums are appreciated for their colorful flowers, but also for their thick caudices.</p>
              <p class="rating">⭐⭐⭐⭐</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/alamandatiger.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-alamanda.php" class="name-plant">Peach Orange Plant</a></h5>
              <p class="card-text rate">₹ 399</p>
              <p class="card-text">The Allamanda is one of the groups of semi-climbing, upright growing plants</p>
              <p class="rating">⭐⭐⭐⭐⭐</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/hibiscusorange.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-hibiscusorange.php" class="name-plant">Hibiscus(Orange) Plant</a></h5>
              <p class="card-text rate">₹ 305</p>
              <p class="card-text">Hibiscus are one of the best attractive flowering plants.</p>
              <p class="rating">⭐⭐⭐⭐⭐</p>
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
            <img class="card-img-top" src="images/canna.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-canna.php" class="name-plant">Canna Plant</a></h5>
              <p class="card-text rate">₹ 319</p>
              <p class="card-text">Canna lilies have long flower stalks and offer long-lasting color in the garden.</p>
              <p class="rating">⭐⭐⭐⭐</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/ixora.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-lxora.php" class="name-plant">Lxora Dwarf Plant</a></h5>
              <p class="card-text rate">₹ 399</p>
              <p class="card-text">The plants possess leathery leaves,and produce large clusters of tiny flowers</p>
              <p class="rating">⭐⭐⭐⭐</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/roseorange.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-roseorange.php" class="name-plant">Rose(Orange) Plant</a></h5>
              <p class="card-text rate">₹ 309</p>
              <p class="card-text">Orange roses are the perfect way to lift spirits and send a general wish for well-being.</p>
              <p class="rating">⭐⭐⭐⭐⭐</p>
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
            <img class="card-img-top" src="images/tecomaorange.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-techomaorange.php" class="name-plant">Techoma plant</a></h5>
              <p class="card-text rate">₹ 309</p>
              <p class="card-text">Growing Tecoma is an easy way to add a tropical flair to garden with amazing flowers.</p>
              <p class="rating">⭐⭐⭐⭐</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/marigold.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-marigold.php" class="name-plant">Marigold plant</a></h5>
              <p class="card-text rate">₹ 229</p>
              <p class="card-text">Marigold are among the very popular flowers commonly found in India.</p>
              <p class="rating">⭐⭐⭐⭐⭐</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/poinsettia.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-poinsettia.php" class="name-plant">Poinsettia Plant</a></h5>
              <p class="card-text rate">₹ 599</p>
              <p class="card-text">The poinsettia is commercially important plant species of spurge family.</p>
              <p class="rating">⭐⭐⭐⭐</p>
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
            <img class="card-img-top" src="images/lilium.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-lilium.php" class="name-plant">Lilium Plant</a></h5>
              <p class="card-text rate">₹ 549</p>
              <p class="card-text">Lilium is a genus of herbaceous flowering plants growing from bulbs.</p>
              <p class="rating">⭐⭐⭐⭐</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/buttonrose.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-buttonrose.php" class="name-plant">Button Rose Plant</a></h5>
              <p class="card-text rate">₹ 299</p>
              <p class="card-text">The rose is perennial flowering plant which grow in many different colors,</p>
              <p class="rating">⭐⭐⭐⭐</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/gazania.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-gazania.php" class="name-plant">Gazania Plant</a></h5>
              <p class="card-text rate">₹ 399</p>
              <p class="card-text">Gazania are easy to grow plants which give amazing orange flowers</p>
              <p class="rating">⭐⭐⭐⭐</p>
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
            <img class="card-img-top" src="images/geraniumivy.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-geraniumivy.php" class="name-plant">Geranium Ivy Plant</a></h5>
              <p class="card-text rate">₹ 399</p>
              <p class="card-text">Geranium is a colorful summer bloomer with ivy-like foliage</p>
              <p class="rating">⭐⭐⭐⭐</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/kalanchoe.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-kalanchoe.php" class="name-plant">Kalanchoe Plant</a></h5>
              <p class="card-text rate">₹ 449</p>
              <p class="card-text">Kalanchoe plants are thick leaved succulents that are often seen in florist shops.</p>
              <p class="rating">⭐⭐⭐⭐</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/zinnia.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="4)des-zinnia.php" class="name-plant">Zinnia Plant</a></h5>
              <p class="card-text rate">₹ 205</p>
              <p class="card-text">Zinnias have bright, solitary, daisy-like flower heads on a single, erect stem. </p>
              <p class="rating">⭐⭐⭐⭐⭐</p>
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
