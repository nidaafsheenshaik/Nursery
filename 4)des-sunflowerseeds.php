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
    <title>Sunflower seeds</title>
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
                <img src="images/sunflowerseeds.jpg" alt="Sunflower seeds" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Sunflower Minature - Flower Seeds</h3>
                    <p>⭐⭐⭐⭐ (145 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 145</h6>(Inclusive of all taxes)</p>
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
                        <li>Add 2 X quantity of seeds for 'Buy 1 Get 1' offer</li>
                        <li>₹ 144 Off this product, code: FREESEED145</li>
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
        <p>Sunflowers say summer like no other plant.Sunflower packet contains 50 seeds</p>
        <p>Sunflowers are annuals with showy, daisylike flower-heads that are usually 2-4 inches across and bright yellow (though occasionally red). Tall and course, the plants have creeping or tuberous roots and large, bristly leaves. Today, varieties have even been developed for small spaces and containers.</p>
        <p>Most sunflowers are remarkably tough and easy to grow as long as the soil is not waterlogged. Most are heat- and drought-tolerant. They make excellent cut flowers and many are attractive to bees and birds.Smaller plants with big-time flower power. Striking compact, low-growing sunflower fills vase after beautiful vase with luminous, long-stemmed, brown-eyed, golden flowers. </p>
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
                    <td>sunflower,Helianthus(Botanical Name)</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>
                        <ul>
                            <li>Height: 20-30 inches</li>
                            <li>Spread: 18-24 inches</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Yellow</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Summer</td>
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
                <li>Water plants deeply but infrequently to encourage deep rooting</li>
                <li>Feed plants only sparingly; over-fertilization can cause stems to break in the fall</li>
                <li>Tall species and cultivars require support</li>
                <li>Bamboo stakes are a good choice for any plant that has a strong, single stem and needs support for a short period of time</li>
                <li>Sunflowers grow best in locations with direct sun (6 to 8 hours per day); they prefer long, hot summers to flower well</li>
            </ul>
        </p>
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
                    <td>Regularly</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Find a well-drained location, and prepare your soil by digging an area of about 2-3 feet in circumference to a depth of about 2 feet.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>soil temperature :55 to 60 degrees F</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Make sure you have potassium and phosphorus in the soil.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>
                        <ul>
                            <li>You can begin to enjoy the bright sunflower blossoms several months after you planted seeds, but you will have to wait another month or so before you can eat sunflower seeds.</li>
                            <li>Although the exact timetable varies among cultivars, harvest time usually rolls round toward the end of summer.</li>
                            <li>For cut flowers, remove 1 foot or more of stem with the flower and plunge it into hot water immediately to draw out air.</li>
                            <li>For edible seeds, you must harvest the flowers after the leaves shrivel but before the seasonal rains.</li>
                            <li>The flower heads with 1 to 2 feet of stalk must spend another month hung in a dry, well-aired spot before you extract the seeds.</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Sunflower Special Features</h3>
        <p>
            <ul>
                <li>The flowers can be used to make an all natural dye</li>
                <li>The stalks are used to make paper and clothes</li>
                <li>They can be eaten raw, cooked, roasted or dried</li>
                <li>They are a popular, nutritious snack containing a good source of protein, vitamins A, B, and E, calcium, nitrogen and iron</li>
                <li>The edible sunflower seeds can be eaten raw, cooked, roasted, or dried and ground for use in bread or cakes, as a snack</li>
                <li>The seeds and the roasted seed shells have been used as a coffee substitute</li>
                <li>Oil can be extracted and used for cooking and soap making</li>
                <li>Yellow dyes have been made from the flowers, and black dyes from the seeds</li>
                <li>The residue oil cake has been used as cattle and poultry feed, and high quality silage can be made from the whole plant</li>
                <li>The buoyant pith of the stalk has been used in the making of life preservers</li>
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
                <h6>What kind of soil does a sunflower minature need?</h6>
                <p>Find a well-drained location, and prepare your soil by digging an area of about 2-3 feet in circumference to a depth of about 2 feet.</p>
            </li>
            <li>
                <h6>What temperature does a sunflower minature like?</h6>
                <p>Soil temperature :55 to 60 degrees F</p>
            </li>
            <li>
                <h6>How should I fertilize my sunflower minature ?</h6>
                <p>Make sure you have potassium and phosphorus in the soil.</p>
            </li>
            <li>
                <h6>How much sunlight does a sunflower minature need?</h6>
                <p>A sunflower minature prefers Full Sun, Part Sun</p>
            </li>
        </ul>
    </div>
</body>

</html>
