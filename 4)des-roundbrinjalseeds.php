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
    <title>Brinjal seeds</title>
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
                <img src="images/roundbrinjalseeds.jpg" alt="Brinjal plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3> Brinjal Purple Round - Desi Vegetable Seeds</h3>
                    <p>⭐⭐⭐⭐ (27 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 55</h6>(Inclusive of all taxes)</p>
                </div>
                <div class="plant-description">
                    <ul>
                       <li>Shipping Rs 79 for entire order</li>
                       <li>Dispatch in 5-8 days</li>
                       <li>Country of origin: India</li>
                    </ul>
                </div>
                <div class="offers">
                    <h4>Today's Offers :</h4>
                    <ul>
                        <li> Add 2 X quantity of seeds for 'Buy 1 Get 1' offer</li>
                        <li>₹ 54 Off this product, code: FREESEED55</li>
                        <li>Plant flower n growth booster on orders above ₹ 100</li>
                        <li>₹ 250 Surprise Gift above ₹ 500</li>
                        <li>20% Cashback</li>
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
        <p>1 packet contains - 50 seeds of brinjal.</p>
        <p>The brinjal (eggplant or baingan or aubergine) is called the King of Vegetables by some cultures. It is one of the most versatile vegetables around, loved by many people across the world.</p>
        <p>Different varieties are available everywhere and each variety is unique in its own way, with a distinctive flavor and many essential minerals.Eggplant or Brinjal, is a very low calorie vegetable and has healthy nutrition profile; good news for weight watchers! The veggie is popularly known as aubergine in the western world.</p>
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
                    <td>Brinjal, Eggplant</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>1-3 ft.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Purple, White</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Year round</td>
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
        <p>
            <ul>
                <li>Care should be taken not to plant the brinjals in a shady portion of the garden</li>
                <li>The plants ought to have sufficient sunlight</li>
                <li>From time to time, any weeds which might grow in the plants bed must be removed</li>
                <li>The plants should be sprayed with the pesticides or insecticides if any disease is noticed</li>
                <li>Stake plants over 24 inches tall</li>
                <li>Water well and apply a balanced fertilizer every two weeks during the growing season</li>
                <li>For bigger fruits, restrict to five or six per plant</li>
                <li>Start plants indoors 2 months before the soil warms up or buy nursery transplants just before planting</li>
                <li>Place 3 to 4 inch tall seedlings 24 to 30 inches apart in well-prepared beds</li>
            </ul>
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Full sun.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>soil constantly moist but not soggy</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Sandy, Soil pH: Slightly Acidic to Neutral</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>15 to 30 degrees C</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Eggplant is a heavy feeder, so when first planting in a plant container, FYM is mixed it.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>throughout the year</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Round Brinjal Special Features</h3>
        <p>
            <ul>
                <li>The brinjal or eggplant has a lot of vitamins and nutrients</li>
                <li>It contains vitamins like B1 and B6</li>
                <li>It also contains a good amount of potassium, copper, magnesium, manganese, phosphorus, niacin, and folic acid</li>
                <li>This high nutritive value of the brinjal makes it one of the most important vegetables</li>
                <li>Helps keeping diabetes in control: The eggplants are a very rich source of fibre and low soluble carbohydrates</li>
                <li>Thus they are highly beneficial for regulation of blood sugar levels and also to control the absorption of glucose</li>
                <li>Helpful to the heart: The cholesterol levels are brought down to a great extent by the eggplant</li>
                <li>It also helps stabilize the level of blood pressure</li>
                <li>This ensures that there is no retention of fluids which prevents coronary heart diseases</li>
                <li>Helpful to the brain: Eggplant contains Phytonutrients which keep the cell membranes protected from any kind of damage and facilitates the message transfer from one part to another, thus preserving the memory function</li>
                <li>The content of nasunin that is present in eggplant helps remove excess iron from the body</li>
                <li>Healthy skin and hair: The skin is well hydrated owing to the high water content an eggplant has.</li>
                <li>Anti bacterial properties: The eggplant has good amounts of vitamin C which make it an effective anti-viral and anti- bacterial source</li>
            </ul>
        </p>
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
                <h6>How tall do brinjal purple round grow?</h6>
                <p>On average brinjal purple round grows 1 to 3 feet</p>
            </li>
            <li>
                <h6>What kind of soil does a brinjal purple round need?</h6>
                <p>Sandy, Soil pH: Slightly Acidic to Neutral</p>
            </li>
        </ul>
    </div>
</body>

</html>
