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
    <title>Canna Plant</title>
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
                <img src="images/canna.jpg" alt="Canna plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Canna (Orange Flower with Variegated Yellow Leaves ) - Plant</h3>
                    <p>⭐⭐⭐⭐ (121 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 319</h6>(Inclusive of all taxes)</p>
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
        <p>Canna lilies are low maintenance and easy to grow, and both their flowers and foliage offer long-lasting color in the garden.</p>
        <p>These perennials come in a vast variety of color and boast immense, often-veined, paddle-shaped leaves and sheathing leafstalks in shades of green or bronze.Originally from the West Indies and South America, cannas are one of the showiest summer bulbs you can grow.</p>
        <p>These lush tropical plants produce large sometimes colourful leaves, and tall flower stalks with vibrant blossoms.Depending on the variety, cannas can grow a few feet tall to more than 10 feet tall. Dwarf varieties look great in large containers combined with petunias, sweet potato vines, and other low-growing annuals.Larger varieties make a strong, elegant statement planted at the back of flower beds or grouped together in showy islands of colour.Because they tolerate moist soils, cannas can also be planted along ponds or in a wet spot in the yard.
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
                    <td>Canna lily</td>
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
                    <td>Red, orange or yellow</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Summer, Fall</td>
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
        <p>Cannas do best with a good supply of water, so water the plants during the summer if the rainfall is less than 1 inch per week. Keep a thin layer of mulch around cannas to help retain moisture as well.Stake tall varieties if needed.As flowers fade, deadhead to promote continued flowering.</p>
        <p>When growing cannas in the garden, placing them in mixed borders or group plantings will offer the most dramatic effect.</p>
        <p style="padding-bottom: 20px;">Cannas like moist conditions too, but will tolerate nearly any well-draining soil that is either neutral or slightly acidic. They appreciate bog-like conditions as well. The soil should also be rich in organic matter.</p>
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
                    <td>Once established, cannas need to be kept moist.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Well-draining soil that is either neutral or slightly acidic. Rich in organic matter.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>70 and 75F (21-23C).</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Require monthly fertilizer that is relatively higher in phosphate for continual bloom.</td>
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
        <p>Grown for their flowers and foliage offer long-lasting colour in the garden</p>
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
                <h6>How to plant Canna lily bulbs?</h6>
                <p>To plant Canna lily bulbs consider the following points 1. You can grow them in the pot or directly in the soil.Use a pot having 5 inch upper diameter and drainage holes. 2. Fill the pot with well-drained soil. Dig a hole up to 2-3 inches and Set the bulb in the hole pointy side up or the roots down. After planting backfill with soil over the hole, lightly compress the soil but do not pack it and water. 3. Maintain the moisture in soil by applying water if soil in pot (1-2 inches) feels dry to touch. 4. Keep the pot at a location receiving indirect bright light. </p>
            </li>
            <li>
                <h6>How to plant Canna bulbs in pots?</h6>
                <p>To plant Canna lily bulbs in pot consider the following points 1. Use a pot having a 5-inch upper diameter and drainage holes. 2. Fill the pot with well-drained soil. Dig a hole up to 2-3 inches and Set the bulb in the hole pointy side up or the roots down. After planting backfill with soil over the hole, lightly compress the soil but do not pack it and water. 3. Maintain the moisture in soil by applying water if soil in pot (1-2 inches) feels dry to touch. 4. Keep the pot at a location receiving indirect bright light.</p>
            </li>
            <li>
                <h6>When to plant Canna seeds?</h6>
                <p>You can plant Canna seeds in the summer season(April-July).</p>
            </li>
            <li>
                <h6>What does a Canna plant look like?</h6>
                <p>The Canna plant is a rhizomatous perennial with tropical-like foliage and large flowers that resemble that of iris. Their flowers and foliage offer long-lasting color in the garden. Flower color may be red, orange or yellow.</p>
            </li>
            <li>
                <h6>What to feed Canna plants?</h6>
                <p>You can feed any organic balanced NPK rich fertilizer to your Canna Plant once in a month.</p>
            </li>
        </ul>
    </div>
</body>

</html>
