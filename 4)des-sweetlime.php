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
    <title>Sweet Lime Plant</title>
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
                <img src="images/sweetlime.jpg" alt="Sweet Lime plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Mosambi, Sweet Lime (Grafted) - Plant</h3>
                    <p>⭐⭐⭐⭐ (131 reviews)</p>
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
        <p>
            <ul>
                <li>Sweet lime growing tree of the genus citrus also known as Sweet lemon. Sweet lime grow as perennial evergreen with vigorous thorns. It can grow in tropical, subtropical or mediterranean climate.</li>
                <li>Mosambi belongs to the Rutaceae family. The taste of mosambi is slightly tart to extremely sweet when ripe. The branches are smooth, branch irregularly and bear numerous thorns. It bears fragrant white flowers and the unripe green fruit turns to yellow on ripening.</li>
                <li>The fruits ripen only on the tree and once they are picked they do not ripen further. Hence only ripe fruits should be bought.</li>
            </ul>
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
                    <td>Indian Sweet Lime, Mausammi, sweet orange, Persian lime, sweet limetta, sweet lime, sweet lemon and Mausammi</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>up to 4-5 meters.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>White.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>late summer-fall</td>
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
                <li>Keep the plant outdoor in natural bright light.</li>
                <li>Protect the plant from direct harsh sunlight as it can cause damage to the foliage.</li>
                <li>The soil should be well drained and fertile rich in oragnic content.</li>
                <li>Water thoroughly in the summer and reduce watering in winter and rainy season.</li>
                <li>During the main growing season feed the plant with organic fertilizer once a month.</li>
                <li>Loosen the topsoil without disturbing the roots of the plant so it can uptake the nutrients and moisture easily.</li>
                <li>When a plant outgrows in current pot, re-pot with fresh potting soil and some fertilizer.</li>
                <li>Do the re-potting late evening and keep the plant in shady area for 2 to 3 days and then move the plant in its suitable climatic condition.</li>
                <li>Remove dead, infected or damaged plant parts and dispose them away from the planting area.</li>
                <li>Spray Neem, Eucalyptus or Citrus oil for any insect/pest attack, as a primary treatment.</li>
                <li>Easily grows in AC rooms but away from AC vents.</li>
                <li>Do not over-water the plant especially when pot does not have drainage holes.</li>
            </ul>
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Natural bright light.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>Poke your finger/plain small stick into the soil to check the moisture. Water when topsoil (1-2 inches) feels dry to touch. Water thoroughly in the summer and reduce watering in winter and rainy season.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Soil should be well drain and fertile, rich in organic content.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>20 to 35 degrees C</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Apply any organic fertilizer.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Mosambi Special Features</h3>
        <p>
            <ul>
                <li>Sweet lime is one of those uniquely Indian fruits that, while perhaps not that Citrus limetta fruit peel displayed antihyperglycemic properties.</li>
                <li>Sweet lime juice is a rich source of vitamin C</li>
                <li>Sweet lime Promotes Healthy Skin</li>
                <li>Sweet lime Boosts Energy</li>
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
                <h6>How to plant a Mosambi tree in a pot?</h6>
                <p>To plant Mosambi plant in pot consider the following points 1. To grow plant in pot it should be of 7-10 inch upper diameter with drainage hole and overgrown plant is transferred in to main field. 2. Sunlight- More than 6 hours of direct bright sunlight is required. 3. Soil- Soil or potting mixture should be well drained, fertile and nutrient rich. 4. Water- Water the plant when 1-2 inch surface soil layer feels dry to touch. 5. Fertilizer - Apply any organic fertilizer during the main growing season(June-July). 6. Once the plant is overgrown in current pot, plant it in field.</p>
            </li>
            <li>
                <h6>Does Mosambi plant repel mosquitoes?</h6>
                <p>Yes, Mosambi plant act as long term mosquito repellent.</p>
            </li>
            <li>
                <h6>Does the Mosambi plant need sunlight?</h6>
                <p>Mosambi plant need at least 6 hours of direct bright sunlight.</p>
            </li>
        </ul>
    </div>
</body>

</html>
