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
    <title>Sapota Plant</title>
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
        <link rel="stylesheet" href="styles2.css">
</head>
<style>
    .col {
        padding-top: 120px;
    }

    .offers {
        padding-top: 20px;
        border: 3px dotted black;
    }

    .image-info {
        padding-top: 10px;
    }

    .description {
        padding-top: 70px;
    }

    .specifications {
        padding-left: 200px;
        padding-right: 200px;
        padding-top: 50px;
    }

    .care {
        padding-top: 40px;
    }

    .special-features {
        padding: 30px 200px 10px 200px;
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
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-left: 1.5rem;"> <img class = "nav-image"  src="search-icon.png" alt=""> </button>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index1.php"> <strong >HOME</strong></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong >PRODUCTS</strong>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="2)FRUIT.html">Fruit Plants</a>
                <a class="dropdown-item" href="1)FLOWER.html">Flower Plants</a>
                <a class="dropdown-item" href="3)SEEDS.html">Seeds</a>
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
              <a class="nav-link" href="getorderDetails.php"> <img class="nav-image" src="cart.png" alt="Error Loading img"> </a>
            </li>
          </ul>
        </div>
      </nav>
    </div> <br><br>
    <!-- Image and info -->
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="images/sapota.jpg" alt="Sapota plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Chikoo, Sapota, Chiku Fruit (Grafted) - Plant</h3>
                    <p>⭐⭐⭐⭐ (103 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 499</h6>(Inclusive of all taxes)</p>
                </div>
                <div class="plant-description">
                    <ul>
                        <li> Shipping Rs 79 for entire order</li>
                        <li> Dispatch in 5-8 days</li>
                        <li> Country of origin: India</li>
                    </ul>
                </div>
                <div class="offers">
                    <h4>Today's Offers :</h4>
                    <ul>
                        <li>Plant flower n growth booster on orders above ₹ 100</li>
                        <li>20% Cashback</li>
                        <li>₹ 250 Surprise Gift above ₹ 500</li>
                    </ul>
                    <p>* check details on cart page</p>
                </div>
                <div class="image-info">
                    <p>Images are for reference purposes only. Actual product may vary in shape or appearance based on
                        climate, age, height, etc. The product is replaceable but not returnable.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Plant description -->
    <div class="container description">
        <h3>Description</h3>
        <p>Manilkara zapota, commonly known as the sapodilla, is a long-lived, evergreen tree native to southern Mexico, Central America and the Caribbean.</p>
        <p>The Sapota when fully ripe is delicious and is eaten as dessert fruit. The pulp is sweet and melting. Besides food values the Sapota fruits are also used in some auverda preparations.</p>
    </div>
    <!-- Specifications table -->
    <div class="conatiner specifications">
        <h3 style="padding-bottom: 8px;">Specifications</h3>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Common Name</h6>
                    </td>
                    <td>Sapodilla</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>upto 12 m..</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Rarely flowers</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Non-flowering</td>
                </tr>
                <tr>
                    <td>
                        <h6>Difficulty Level</h6>
                    </td>
                    <td>Easy.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Planting and care -->
    <div class="container care">
        <h3>Planting and care</h3>
        <p>Plant care is not difficult but does require vigilance. The vines need to be trained early when they are young. You may use plant ties or just weave them through trellis sections. Fertilize the plant in spring just before new growth appears.Pinch off the tips of the vines in the second year to promote branching which will fill the trellis with bushy growth.</p>
        <p style="padding-bottom: 20px;">
            Plant where they will receive a minimum of 5 to 6 hours of full sun per day. Plants grown in weak sun may not die at once, but they weaken gradually. Give them plenty of organic matter when planting . </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Full sun to Partial shade.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>Medium</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Well-drained soil.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>12 to 36 degrees C</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Apply any organic fertilizer</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Sapota Special Features</h3>
        <p>Excellent ground cover for areas where invasive spread is either desirable or acceptable or where appropriate barriers have been installed. A good plant for erosion control on slopes and banks. Leave undisturbed to roam in woodland gardens.</p>
        <p>The plant is used for ornamental purpose</p>
    </div>
    <!-- Cart -->
    <!-- <div class="conatiner" style="padding-left: 450px; padding-right: 450px; padding-top: 30px; padding-bottom: 20px;">
        <button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>
        <p style="padding-left: 80px; padding-top: 10px;">*Offers and discounts will be shown in cart.</p>
    </div> -->
    <hr>
    <!-- Frequently asked questions -->
    <div class="conatiner freq">
        <ul>
            <li>
                <h6>How to care for chikoo plant?</h6>
                <p>Caring tips to grow Chiku plant 1. Sunlight- More than 6 hours of direct bright sunlight is required. 2. Soil- Soil should be well drained, fertile and nutrient rich. 3. Water- Water the plant when 1-2 inch surface soil layer feels dry to touch. 4. Fertilizer - Apply any organic fertilizer during the main growing season (June-July). </p>
            </li>
            <li>
                <h6>How to plant chikoo tree?</h6>
                <p>To plant Chiku consider the following points. 1. To grow plant in pot, choose a pot having of 7-10 inch upper diameter and drainage holes. 2. Fill the 1/3 pot with well drained soil which is rich in organic content and place the plant in the center of the pot. 3. Fill the remaining pot with same soil. 4. Keep the plant in indirect bright light location for 2-3 days and then gradually move to a location that receives more than 6 hours of direct sunlight. 5. Once the plant is overgrown in current pot, plant it in field. If you are planting purchased plant directly in ground follow below procedure. 1. Keep the plant in indirect bright light for 3-4 days and gradually move to a location receiving direct bright sunlight for more than 6 hours a day 2. Dig a pit twice the size of the bag/pot the current plant is in. 3. Fill the 1/3 of pit with soil rich in organic content, place the plant in center and fill the pit with same soil. 4. Apply water. General caring tips- Plant should get more than 6 hours of direct sunlight. Water the plant when surface soil (1-2 inch) feels dry to touch. Apply any organic fertilizer during the main growing season (June July).</p>
            </li>
            <li>
                <h6>How to grow chikoo plant in pot?</h6>
                <p>1. To grow Chiku plant in pot it should be of 7-10 inch upper diameter with drainage hole. 2. Fill the 1/3 pot with well drained soil which is rich in organic content and place the plant in the center of the pot. 3. Fill the remaining pot with same soil. 4. Keep the plant in indirect bright light location for 2-3 days and then gradually move to a location that receives more than 6 hours of direct sunlight. General caring tips- Plant should get more than 6 hours of direct sunlight. Water the plant when surface soil (1-2 inch) feels dry to touch. Apply any organic fertilizer during the main growing season (June July)</p>
            </li>
        </ul>
    </div>
</body>

</html>
