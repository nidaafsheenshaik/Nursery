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
    <title>Allamanda Tiger</title>
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
    <!-- Image and info -->
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="images/alamandatiger.jpg" alt="Allamanda plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Allamanda Tiger (Peach Orange) - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (93 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 329</h6>(Inclusive of all taxes)</p>
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
        <p>Plants of the genus are evergreen trees,shrubs, or vines.[citation needed] They contain a white latex. The
            leaves are opposite or arranged in whorls of up to 5. The blades are generally oval and smooth-edged, and
            some are leathery or lightly hairy. The inflorescence is a compound cyme. The flower has five lobed sepals
            and a bell- or funnel-shaped corolla of five petals, yellow in most species. The fruit is a schizocarp
            containing two to four seeds.</p>
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
                    <td>golden trumpet, common trumpet vine, yellow allamanda,</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>4-6 ft.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Peach Orange</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Spring, Summer, Fall, Winter</td>
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
        <p>Allamanda grows very rapidly and needs pruning due to its bushy nature. Also pruning increases air
            circulation in plant required for good growth.</p>
        <p style="padding-bottom: 20px;">
            Allamanda is a bushy nature plant, the large sized container is preferable as the plant gets heavy with the
            time. You may need to repot it every year. Regardless of size, make sure container has drainage holes at the
            bottom to ensure smooth drainage of water. Put stone or brick pieces on the holes.</p>
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
                    <td>Soil pH 7.6 to 7.8 (mildly alkaline).</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>25 to 35 degrees C</td>
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
                    <td>Flowers are harvested throughout the year.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Allamanda Tiger Special Features</h3>
        <p>Allamanda woody vine grows vigorously in full sun or semi shade, even in poor soil. The plant climbs grows
            rapidly, making it good for use over pergolas or on structures with some horizontal support.It is used for
            an ornamental purpose</p>
    </div>
    <!-- Cart -->
    <div class="conatiner" style="padding-left: 450px; padding-right: 450px; padding-top: 30px; padding-bottom: 20px;">
        <button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>
        <p style="padding-left: 80px; padding-top: 10px;">*Offers and discounts will be shown in cart.</p>
    </div>
    <hr>
    <!-- Frequently asked questions -->
    <div class="conatiner freq">
        <ul>
            <li>
                <h6>How to grow Allamanda plant?</h6>
                <p>Allamanda plant is grown by seeds and cuttings. Consider the following points to grow a plant.Â 1.
                    Sunlight- 4-6 hours of direct bright sunlight is required.Â 2. Soil- Soil or potting mixture should
                    be well-drained, fertile and nutrient-rich. 3. Water-Water the plant when 1-2 inch surface soil
                    layer feels dry to touch.Â 4. Fertilizer - Apply any organic fertilizer during the main growing
                    Spring season(February-March). </p>
            </li>
            <li>
                <h6>How to prune Allamanda plant?</h6>
                <p>Prune your plant in the month of December-January, These shrubs grow quite quickly and without proper
                    pruning, Allamanda rapidly become overgrown and look bulky. Cut out all damaged, dead or dying
                    branches. Prune out any stems that rub against or cross another stem. Prune Allamanda shrubs about
                    once a month throughout the growing season to keep them looking tidy. Prune lightly, however,
                    because a hard pruning can result in few new flowers and very dense foliage.</p>
            </li>
            <li>
                <h6>Is Allamanda plant poisonous?</h6>
                <p>Yes, Allamanda plant is poisonous if digested.</p>
            </li>
            <li>
                <h6>Are Allamanda plants perennial?</h6>
                <p>Yes, all Allamanda plants are perennial.</p>
            </li>
            <li>
                <h6>How to plant Allamanda seeds?</h6>
                <p>You can plant Allamanda seeds in the pot as well as in-ground.To plant Allamanda seed consider the
                    following points 1. Use a pot having 7 inch upper diameter and drainage holes. 2. Fill the pot with
                    well-drained soil. To sow seeds make a hole about 1 inch in soil, place seeds in it, cover with soil
                    and apply water. 3. Maintain the moisture in soil by applying water if soil in pot (1-2 inch) feels
                    dry to touch. 4. Keep the pot at a location receiving indirect bright light. Seeds will germinate
                    within a week. </p>
            </li>
        </ul>
    </div>
</body>

</html>
