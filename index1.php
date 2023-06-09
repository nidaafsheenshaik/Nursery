<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
// echo "<h1>Welcome ". $_SESSION['USER_ID']."</h1><br><br><br>";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

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
  <style media="screen">
    a{
      color: black;
    }
    a:hover{
      color: grey;
      text-decoration: none;
    }
    .Btn:hover{
      color: black;
    }
    .carousel3{
      background-image: url(images/carousel4.jpeg);
    }
    .carousel2{
      background-image: url(images/bgimg.jpg);
      color: black;
    }
    .text1, .text2{
      position: absolute;
      text-align: center;
      margin-left: 35rem;
      margin-right: 8rem;
      margin-top: 15rem;
      color: #fff;
      font-family: 'Montserrat', sans-serif;
    }
    df-messenger{
      --df-messenger-button-titlebar-color: green;
      --df-messenger-font-color: darkgreen;
      --df-messenger-user-message: lightgreen;
      --df-messenger-bot-message: #E8EAE6;
    }
  </style>

</head>

<body>

  <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="NurseryBot"
  agent-id="325c988f-ea6f-4b4d-a1a8-3cd3b69b2030"
  language-code="en"
></df-messenger>

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

  <div id="Caurosel">
    <div id="skill-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active caurosel-bg carousel1">
          <div class="text">
            <h5 >Lets root for each other<br>
              and watch each other grow.</h5><br>
            <a href="2)FRUIT.php"><button class="Btn" type="button" name="button">Order Fruit Plants</button></a>
          </div>
        </div>
        <div class="carousel2 carousel-item caurosel-bg">
          <div class="text1">
            <h5>If you’ve never experienced the joy of accomplishing more than you can imagine, plant a garden.</h5><br>
            <a href="1)FLOWER.php"><button class="Btn" type="button" name="button">Order flower Plants</button></a>
          </div>
        </div>
        <div class="carousel-item caurosel-bg carousel3">
          <div class="text2">
            <h5>The garden is a love song, a duet between a human being and Mother Nature.</h5><br>
            <a href="3)SEEDS.php"><button class="Btn" type="button" name="button">Order Seeds</button></a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#skill-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#skill-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div id="Ratings">
    <div class="row">
      <div class="col-lg-4">
        <img class="rating-img" src="images/cash-on-delivery.png" alt="Error"><br><br>
        <h6>Cash On Delivery Available</h6>
        <p>Pay only When Product Delivered.</p>
      </div>
      <div class="col-lg-4">
        <img class="rating-img" src="images/secure.png" alt="Error"><br><br>
        <h6>Secure Shipping</h6>
        <p>Dilignent Care taken to secure plants.</p>
      </div>
      <div class="col-lg-4">
        <img class="rating-img" src="images/chatbot.png" alt="Error"><br><br>
        <h6>Bot Support</h6>
        <p>We help you grow your garden for lifetime</p>
      </div>
    </div>
  </div>

  <div id="Products">
    <h3 style="color: green;">Best Selling Plants</h3><br>
    <div class="row row1">

      <div class="card-col col-lg-3 C">
           <div class="card">
             <div class="card-body">
               <img class="deckpic" src="images/hibiscusorange.jpg" alt="Error">
               <p class="Strikeprice">₹499</p>
               <h4>₹309</h4>
               <h7><a href="4)des-hibiscusorange.php">Hibiscus(Orange) Plant</a></h7>
             </div>
           </div>
         </div>


         <div class="card-col col-lg-3 C">
           <div class="card">
             <div class="card-body">
               <img class="deckpic" src="images/pomegranate.jpg" alt="Error">
               <p class="Strikeprice">₹599</p>
               <h4>₹329</h4>
               <h7><a href="4)des-pomegranate.php"> Pomegranate Plant</a></h7>
             </div>
           </div>
         </div>


         <div class="card-col col-lg-3 C">
           <div class="card">
             <div class="card-body">
               <img class="deckpic" src="images/kalanchoe.jpg" alt="Error">
               <p class="Strikeprice">₹849</p>
               <h4>₹449</h4>
               <h7><a href="4)des-kalanchoe.php"> Kalanchoe(Red) Plant</a></h7>
             </div>
           </div>
         </div>

         <div class="card-col col-lg-3 C">
           <div class="card">
             <div class="card-body">
              <img class="deckpic" src="images/mango.jpg" alt="Error">
              <p class="Strikeprice">₹1299</p>
              <h4>₹329</h4>
              <h7><a href="4)des-mango.php"> Mango Plant</a></h7>
             </div>
           </div>
         </div>

    </div>
  </div>

  <div id="trending">
    <h3 style="color: green;">Our Products</h3><br>
    <div class="row">

      <div class="col-lg-3 col-md-6">
        <img src="http://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-combo-packs-plants-5-best-indoor-plants-pack-16968508997772.jpg?v=1601348243" alt="">
        <p>Domesticated Plants</p>
      </div>

      <div class="col-lg-3 col-md-6">
        <img src="images/trendingimg2.jpeg" alt="">
        <p>Seeds</p>
      </div>

      <div class="col-lg-3 col-md-6">
        <img src="images/trendingimg3.jpeg" alt="">
        <p>Gardening Tools</p>
      </div>

      <div class="col-lg-3 col-md-6">
        <img src="images/trendingimg4.jpeg" alt="">
        <p>Clay Acceceries</p>
      </div>

    </div>
  </div>

  <div id="GardenDecor">
    <h3 style="color: green;">Inspired from us</h3><br><br>
    <div class="row">

      <div class="col-lg-4">
        <div class="info">
          <img src="images/plant-adv1.png" alt="Error">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="info">
          <img src="images/plant-adv3.png" alt="Error">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="info">
          <img src="images/plant-adv2.png" alt="Error">
        </div>
      </div>


    </div>
    <br><br>

  </div>

   <div id="footer">
     <h4>Contact Us On</h4><br><br>
     <div class="row">
       <div class="col-lg-3 col-md-3">
         <a class="footer-link" href="#" target="_blank"> <img class="SM" src="images/facebook.png" alt="Error eocessing Image"> </a>
       </div>
       <div class="col-lg-3 col-md-3">
         <a class="footer-link" href="#" target="_blank"> <img class="SM" src="images/twitter.png" alt="Error Processing Image"> </a>
       </div>
       <div class="col-lg-3 col-md-3">
         <a class="footer-link" href="#" target="_blank"> <img class="SM" src="images/instagram.png" alt="Error Processing Image"> </a>
       </div>
       <div class="col-lg-3 col-md-3">
         <a class="footer-link" href="mailto:bhargavnadipineni@gmail.com" target="_blank"> <img class="SM" src="images/gmail.png" alt="Error Processing Image"> </a>
       </div>
     </div>
     <br>
     <p style="color: grey;">© Copyright 2021 MTK VVSDC BC</p>
   </div>

</body>

</html>
