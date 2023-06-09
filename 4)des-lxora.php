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
    <title>Ixora Plant</title>
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
                <img src="images/ixora.jpg" alt="Lxora dwarf plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Ixora dwarf (Orange) - Plant</h3>
                    <p>⭐⭐⭐⭐ (67 reviews)</p>
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
        <p>Bright orange flowers grow in clusters on a rounded compact shrub. Tropical plant with glossy, vivid green foliage.</p>
        <p>Lxora is a genus of flowering plants in the Rubiaceae family. It consists of tropical evergreen trees and shrubs and holds around 500 species. Though native to the tropical and subtropical areas throughout the world, its center of diversity is in Tropical Asia.It is commonly known as West Indian Jasmine.</p>
        <p>The plants possess leathery leaves, ranging from 3 to 6 inches in length, and produce large clusters of tiny flowers in the summer. Members of Ixora prefer acidic soil, and are suitable choices for bonsai.</p>
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
                    <td>Jungle Geranium, Flame of the Woods, Jungle Flame, West Indian jasmine. rangan, kheme, ponna, chann tanea, techi, pan, santan, jarum-jarum.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>Spread at least 3 to 4 inches</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Flower Colour</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>summer season</td>
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
            <ul>
                <li>Water Ixora as needed to keep the soil evenly moist, but not muddy. Although the plant prefers moist soil, it may rot in excessively soggy soil. Water the shrub sparingly during the winter months.</li>
                <li>Feed Ixora in early spring, using an acidic fertilizer formulated for Ixora, azalea and gardenias, which has a ratio such as 4-8-8, along with minor elements that are beneficial. Repeat in midsummer and autumn. Acidic fertilizer is especially important if the foliage takes on a yellowish cast, indicating a magnesium deficiency caused by improper soil pH.</li>
                <li>Apply the fertilizer according to label specifications, then water deeply.In spring, remove the mulch along with the top crust of soil. Replace the removed mulch and soil with fresh mulch.Prune Ixora after blooming slows in late autumn or anytime the shrub looks untidy. Prune each shoot down to just one bud or prune the shrub as needed to create the size and shape desired.</li>
                <li>Protect Ixora from aphids and scales. Aphids are tiny, green insects that congregate at joints of the leaves and stems or the undersides of the leaves. Scales are hard-shelled insects that give the foliage a waxy appearance. Regular application of an insecticidal soap spray or neem oil usually helps to control both pests.</li>
            </ul>
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Bright light, but avoid direct sunlight in summer.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>Lxora likes to be watered, but you shouldnt do it excessively. Keep soil continuously moist, but reduce watering in the winter. Very high humidity is preferred.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>The most important thing to remember when planting Ixora is that it must be planted in acidic soil because alkaline soil can result in yellow foliage. These acid-loving plants thrive in rich, moist, peat-based soil.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>Above 60F is preferred even in winter. Avoid cold drafts if temperature drops lower</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Feed in spring with slow-release pellets or weekly during growing season with liquid fertilizer.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Ixora Dwarf Special Features</h3>
        <p>
            <ul>
                <li>Ixora flowers are commonly used in Hindu worship, as well as in ayurveda and Indian folk medicine</li>
                <li>The Ixora plant contains important phytochemicals that are known to have antioxidative, antibacterial, gastroprotective, hepatoprotective, antidiarrhoeal, antinociceptive, antimutagenic, antineoplastic and chemopreventive effects</li>
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
                <h6>Does Ixora bloom all summer??</h6>
                <p>Yes, Ixora bloom throughout the summer(April-May).</p>
            </li>
            <li>
                <h6>How often should Ixora be watered?</h6>
                <p>1. Water it when 1-2 inch upper layer of the soil feels dry to touch. 2. Water thoroughly in the summer and reduce watering in winter and rainy season.</p>
            </li>
            <li>
                <h6>Does Ixora attract hummingbirds?</h6>
                <p>Yes, Ixora attract hummingbirds</p>
            </li>
            <li>
                <h6>When does Ixora flower?</h6>
                <p>Ixora flowers in Summer season (April-May).</p>
            </li>
        </ul>
    </div>
</body>

</html>
