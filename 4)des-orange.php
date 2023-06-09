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
    <title>Orange Plant</title>
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
              <a class="nav-link" href="getorderDetails.php"> <img class="nav-image" src="images/cart.png" alt="Error Loading img"> </a>
            </li>
          </ul>
        </div>
      </nav>
    </div> <br><br>
    <!-- Image and info -->
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="Orange fruit.jpg" alt="Orange plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Orange Fruit, Santra ( Grafted ) - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (236 reviews)</p>
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
                        <li>Rs 309 Jasmine Mogra Plant Free</li>
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
        <p>Orange trees are widely grown in tropical and subtropical climates for their sweet fruit. The fruit of the orange tree can be eaten fresh, or processed for its juice or fragrant peel.</p>
        <p>Citrus trees grown as ornamental container plants may take up to five years to produce fruit. Container-grown ornamental orange trees are usually the dwarf varieties which grow to a height of 4 to 10 feet. Limited root space has the effect of stunting tree growth even if it is a standard variety.</p>
        <p>Citrus trees are damaged at frost temperature but can be grown in wintertime indoors.</p>
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
                    <td>Sweet orange</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>4-10 ft.</td>
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
        <p style="padding-bottom: 20px;">
            Care and maintenance of the tree to keep it pest free will bring the rewards of fruit which ripens in the winter. They need pruning each year to maintain attractive shape. Cut all deadwood and crossing branches. Prune ornamental citrus to open the crown foliage to let in light and air.
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Provide direct sunlight for at least several hours daily. Move the plants outdoors for a few hours daily in the spring, increasing the time outdoors until the tree can stay outdoors for the summer. Bring the tree indoors in the fall.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>Water the tree as needed to keep the soil moist but not wet. Allow the top inch of soil to dry out before watering.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>A mixture of 1 part each potting soil, organic compost and per-lite or vermiculite.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>Capable of withstanding temperatures as low as 20 degrees Fahrenheit, but prefers warmer temperatures of at least 55 to 70 degrees Fahrenheit.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Feed the plant with liquid fertilizer in growing season and cut it down to once a month in
                        winter.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>Fertilize your calamondin orange with a citrus formula or a slow-release formula specifically for acid loving plants during the growing season. Dilute the fertilizer to half the recommended strength during the winter months.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Orange Special Features</h3>
        <ul>
            <li>There is no hurry to pick calamondins</li>
            <li>They re long-lasting, so you can enjoy them for months on the tree</li>
        </ul>
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
                <h6>How to plant orange tree in ground?</h6>
                <p>If you are planting purchased plants directly in ground follow the below procedure. 1. Keep the plant in indirect bright light for 3-4 days and gradually move to a location receiving direct sunlight for more than 6 hours a day. 2. Dig a pit twice the size of the bag/pot the current plant is in. 3. Fill the 1/3 of the pit with soil rich in organic content, place the plant in the center, and fill the pit with the same soil. 4. Apply water General caring tips Plant should get more than 6 hours of sunlight a day. Water the plant when surface soil (1-2 inches) feels dry to touch. Apply any organic fertilizer during the main growing season(April-June).</p>
            </li>
            <li>
                <h6>Is the orange star plant a perennial?</h6>
                <p>Yes, the orange star plant is perennial.</p>
            </li>
            <li>
                <h6>Where to plant orange tree?</h6>
                <p>Plant orange tree outdoor where it will get enough amount of direct bright sunlight more than 6 hrs a day.</p>
            </li>
            <li>
                <h6>Can I plant orange tree in a pot?</h6>
                <p>Yes, you can plant an orange tree in a pot (7-10 inches).</p>
            </li>
            <li>
                <h6>How to plant orange seeds at home?</h6>
                <p>Through seeds consider the following points Soak the seeds overnight in water and To grow plant 1.To grow plant in pot, choose a pot having of 7-10 inch upper diameter and drainage holes. 2.Fill the 1/3 pot with well drained soil rich in organic content and place the plant in the center of the pot. 3. Fill the remaining pot with same soil. 4. Keep the plant in indirect bright light location for 2-3 days and then gradually move to a location that receives more than 6 hours of direct sunlight. 5. Once the plant is overgrown in current pot, plant it in field.</p>
            </li>
        </ul>
    </div>
</body>

</html>
