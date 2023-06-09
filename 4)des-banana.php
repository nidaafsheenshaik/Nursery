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
    <title>Banana Plant</title>
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
                <img src="images/banana.jpg" alt="Banana plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Banana - G9, Kela - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (188 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 399</h6>(Inclusive of all taxes)</p>
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
        <p>
            Growing Banana plant is an easy way to add a tropical flair to your garden. When you know that it has a unique leaf shape, edible fruits and how to care for Banana plants, you will be rewarded with many years of edible fruits.
            <ul>
                <li>One of the best garden fruit plants.</li>
                <li>Low maintenance plant.</li>
                <li>It is devoutly religious plant.</li>
            </ul>
            This product does not have the flowers and fruits at the time of shipping. After, 9-10 months, the plant will bloom and have beautiful fruits.
        </p>
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
                    <td>Japanese banana, Kela</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>2-4 meter.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Green, yellow, red, purple or brown when ripe</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Seasonal bloomer</td>
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
                <li>Morning sunlight of more than 6 hours a day is ideal for flower and fruit development.</li>
                <li>The soil should be well drained, fertile and rich in organic content for growing Banana plant.</li>
                <li>Poke your finger/plain small stick into the soil to check the moisture.</li>
                <li>Apply 4 cup (approx.200ml) of water when the top soil (1-2 inch) in the pot feels dry to touch.</li>
                <li>Do not overwater the plant.</li>
                <li>As a rule of thumb, water the plants thoroughly in summer and reduce watering in winter and rainy season.</li>
                <li>Water should be applied preferably in the morning or evening.</li>
                <li>Before application of fertilizer loosen the topsoil without disturbing the roots of the plant so, it can uptake the nutrients and moisture easily.</li>
                <li>Apply organic fertilizer once a month.</li>
                <li>Remove dead, infected or damaged plant parts and discard them away from the plants.</li>
                <li>For any insect attack or disease, you can use Neem oil, Eucalyptus oil or Citrus oil spray for primary treatment.</li>
            </ul>
        </p>
        <p>
            <h6>Initial care for 1-2 weeks after receiving plant at your location:</h6>
            <ul style="padding-bottom: 20px;">
                <li>Poke your finger/plain small stick into the soil to check the moisture.</li>
                <li>Apply 4 cup (approx.200ml) of water when the top soil (1-2 inch) in the pot feels dry to touch.</li>
                <li>Keep the plant in indirect bright light.</li>
            </ul>
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Natural bright light with morning sunlight(more than 6 hours)</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>Apply 4 cup(approx.200ml) of water when the top soil (1-2 inch) in the pot feels dry to touch</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Well-drained, fertile and nutrient rich soil.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>20-27 Degree Celsius.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Apply organic fertilizer once a month</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>Approximately 90 days from blooming period.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Banana Plant Special Features</h3>
        <ul>
            <li>It add beauty to your garden, pot plants, bedding plants, many landscaping uses</li>
            <li>All parts of the banana have medicinal value</li>
            <li>For example, flowers can be cooked and eaten by diabetics or used for bronchitis, dysentery and ulcers</li>
            <li>The young leaves can be used as a poultice for skin irritations</li>
            <li>Banana cultivated primarily for food and secondarily for the production of fibre used in the textile industry</li>
            <li>Bananas are tropical fruits that are easily obtainable in most parts of the world, packed with flavor, loaded with nutritional value</li>
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
                <h6>How to grow Banana plant?</h6>
                <p>The banana plant grows from a bulb or rhizome, from these rhizomes emerges a trunk which is actually leaves wrapped around each other. New leaves grow up from the center of the trunk. A flowering stalk also emerges from the center of the trunk on which fruits will develop in around 9 months. Once the fruiting is done the trunk will die off. New plants called suckers emerge from the rhizome which can be separated from rhizome to grow into new plants.</p>
            </li>
            <li>
                <h6>Can banana plants be grown in pots?</h6>
                <p>Yes, One can start growing dwarf varieties of Banana plant in pots having at least 7-10 inch upper diameter and drainage holes. Re pot the plant once it outgrows in the current pot</p>
            </li>
            <li>
                <h6>Is banana plant a herb?</h6>
                <p>We call banana as tree but scientifically banana is herbaceous plant because it does not have any woody tissues in the stem. Banana belongs to Musaceae family.</p>
            </li>
            <li>
                <h6>How to plant banana tree at home?</h6>
                <p>To plant Banana plant consider the following points 1. To grow Banana plant in pot, choose a pot having of 7-10 inch upper diameter and drainage holes. 2. Fill the 1/3 pot with well drained soil rich in organic content and place the plant in the center of the pot. 3. Fill the remaining pot with same soil. 4. Keep the plant in indirect bright light location for 2-3 days and then gradually move to a location that receives more than 6 hours of direct sunlight. 5. Once the plant is overgrown in current pot, plant it in field. If you are planting purchased plant directly in ground follow below procedure. 1. Keep the plant in indirect bright light for 3-4 days and gradually move to a location receiving direct sunlight for more than 6 hours a day. 2. Dig a pit twice the size of the bag/pot the current plant is in. 3. Fill the 1/3 of pit with soil rich in organic content, place the plant in center and fill the pit with same soil. 4. Apply water. General caring tips- Plant should get more than 6 hours of sunlight a day. Water the plant when surface soil (1-2 inch) feels dry to touch. Apply any organic fertilizer during the main growing season (June-July</p>
            </li>
        </ul>
    </div>
</body>

</html>
