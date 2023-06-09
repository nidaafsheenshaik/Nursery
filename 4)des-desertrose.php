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
    <title>Rose (black)</title>
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
                <img src="images/desertrose.jpg" alt="Desert Rose plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Adenium Plant, Desert Rose (Black) - Plant</h3>
                    <p>⭐⭐⭐⭐ (60 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 799</h6>(Inclusive of all taxes)</p>
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
        <p>Adenium is grown as a houseplant in temperate regions. Numerous hybrids have been developed. Adeniums are appreciated for their colorful flowers, but also for their unusual, thick caudices. They can be grown for many years in a pot and are commonly used for bonsai.</p>
        <p>Taking care and growing adenium obesum, a succulent plant more commonly known as Desert Rose, is not challenging, and the plant will reward you with its unusual shape, beautiful deep red to pure white flowers and its tolerance of occasional neglect.</p>
        <p>Desert Rose plants found at the garden shop are usually grown from seed and similar to the true species found in nature. With the right conditions, adenium obesum can be a fast growing and stunning houseplant.</p>
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
                    <td>Desert rose</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>Their foliage is generally oval-shaped and varies in size (2 to 7 inches). The size generally depends on the maturity of the plant and its location</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Pink</td>
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
        <p style="padding-bottom: 20px;">Daily watering is essential only during hot summer days. As the flower grows in warm climates, where the temperature always remains above 50F even at night, remember to water it regularly even throughout winter months. This will allow the soil to dry out between watering.Temperature is another thing you should pay attention to. In case you live in a subtropical climate, you can place the plant indoors until cold weather passes. Adenium can also be grown outdoors in areas where the temperature never goes below 40. The desert rose can survive 40 degrees with little damage, but when the temperature is below 30, the plant dies.In winter the plant can freeze, even if it is placed in a greenhouse. There are a few tips on how to care for adenium in winter. Many people treat it like a cactus. Caring for adenium, water it only on warm sunny days and move it to the house, when there is a risk of frost.</p>
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
                    <td>Water them 2 to 3 times a week.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>The plant needs a good quality, coarse potting mix of 65% perlite, 5% rock, 5% sand and 20% top soil with coir or a small percentage of peat. Do not add fertilizer until the plant has been in the pot for 2 to 3 months. Planting adeniums, desert rose plants, in the ground is a bit different than in pots.Make sure you put 3 inches of rock in the bottom of the hole for drainage and then use the soil as described. Remember using regular potting mixes and top soils will cause root rot!</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>Not more than 95 degrees F.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Established adeniums do not need much care. In fact, many people never fertilize their adeniums and they grow great. Do not fertilize when flowering because it may cause the flower to drop. Dormancy. These plants require special care, especially after entering dormant periods. It is advised to move containers to dry and frost-free locations and water the plants once per month. When the spring comes, increase the amount of water, because the plant starts entering another cycle.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Desert Rose Special Features</h3>
        <p>Can be kept indoor in AC. The more sunlight plant get, the more flowers it blooms. The plant is very hardy, it need little care.Its generally keep indoor in living room and in terrace area</p>
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
                <h6>How to make Adenium bloom?</h6>
                <p>Proper pruning can affect the amount of flowers in the next blooming cycle. once a limb is done with its blooms, cut it down 2-3 above the fork which is connected to and apply fertilizers with high phosphorous and potassium content to encourage to the formation of buds and large flowers. during flowering, reduce the amount of water given to the plant, so that the flowers can last longer.</p>
            </li>
            <li>
                <h6>What fertilizer can be used for Adeniums?</h6>
                <p>Organic nitrogen and phosphorous rich fertilizers during the growing summer season (March-June).</p>
            </li>
            <li>
                <h6>Is Adenium a cactus?</h6>
                <p>No, Adeniums are succulents and not cactus.</p>
            </li>
            <li>
                <h6>When does the Adenium flower?</h6>
                <p>Adenium flowers during the summer season(March-June).</p>
            </li>
            <li>
                <h6>Are Adeniums poisonous?</h6>
                <p>Yes, All plant parts of the Adenium plant are toxic, especially when they ingest by the pets.</p>
            </li>
            <li>
                <h6>Why Adenium leaves turn yellow?</h6>
                <p>Leaves of Adenium plant turns yellow may be due to insufficient light, less or overwatering, cold temperature and disease infestation.</p>
            </li>
        </ul>
    </div>
</body>

</html>
