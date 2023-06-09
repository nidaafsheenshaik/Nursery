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
    <title>Tomato Seeds</title>
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
                <img src="images/tomatoseeds.jpg" alt="Tomato plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Tomato Ped - Desi Vegetable Seeds</h3>
                    <p>⭐⭐⭐⭐ (26 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 55</h6>(Inclusive of all taxes)</p>
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
                        <li>₹ 54 Off this product, code: FREESEED55</li>
                        <li>Plant flower n growth booster on orders above ₹ 100</li>
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
        <p>Tomato easily cultivate in pot.</p>
        <p>1 packet contains approximately 35 seeds.</p>
        <p>The most popular garden vegetable crop, tomatoes come in a wide range of sizes, shapes and colors. Choose determinate varieties for early harvest or cool conditions. Compact varieties are also good choices for containers and planting in flower beds.Tomatoes are an incredibly versatile food.</p>
        <p>They are often considered as a vegetable, though ideally they are a citrus fruit. They are a rich source of Vitamin C and help in increasing your immunity. Not just this, tomatoes also provide several other vitamins, magnesium, phosphorus and copper, all of which are necessary for good health.The best part is that they can be eaten either raw, in salads, sandwiches or in vegetables.</p>
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
                    <td>Tomato, Botanical name: Solanum lycopersicum</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>determinate 3 to 4 ft, indeterminate 7 to 15</td>
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
                    <td>Year round</td>
                </tr>
                <tr>
                    <td>
                        <h6>Difficulty Level</h6>
                    </td>
                    <td>Easy to grow</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Planting and care -->
    <div class="container care">
        <h3>Planting and care</h3>
        <p style="padding-bottom: 20px;">
            <ul>
                <li>Water generously for the first few days</li>
                <li>Water well throughout growing season, about 2 inches per week during the summer</li>
                <li>To help tomatoes through periods of drought, find some flat rocks and place one next to each plant</li>
                <li>The rocks pull up water from under the ground and keep it from evaporating into the atmosphere</li>
                <li>Fertilize two weeks prior to first picking and again two weeks after first picking</li>
                <li>If using stakes, prune plants by pinching off suckers so that only a couple stems are growing per stake</li>
                <li>Practice crop rotation from year to year to prevent diseases that may have over wintered</li>
                <li>Tomatoes should not be planted outdoors until day and night temperatures are about 55 degrees</li>
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
                    <td>Tomato plants need at least an inch of water per week; so water them well, especially during dry spells.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>
                        <ul>
                            <li>Choose well drained, deep and loamy soil.</li>
                            <li>Plan on providing fertile, organically enriched soil with a pH between 6.2 and 6.8 for best flavour.</li>
                            <li>Blossom-end rot is due to calcium deficiency. Lime the tomato soil at the rate of 5 pounds per 100 square feet.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>Germination 60 to 85 FFor Growth 70 to 75 F</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Fertilizer formulas such as 5-10-10 are good.Bone meal or ground rock phosphate are also good.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>Throughout the year</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Tomato ped Special Features</h3>
        <p>
            <ul>
                <li>Tomatoes confer protection against high cholesterol, strokes, and heart disease</li>
                <li>Tomatoes basically have an anti-ageing affect on our body as they contain antioxidant lycopene which is easily absorbed by our body thereby leaving you with a healthy skin and hair</li>
                <li>Since tomatoes are a rich source of antioxidants such as vitamin C and Vitamin A, these vitamins help in preventing DNA damage from free radicals</li>
                <li>The vitamin K and calcium present in tomatoes help in building strong bones</li>
                <li>Due to the presence of Lycopene, they are a natural source of fighting against several cancers, including prostate, cervical, stomach, colon, rectal, prostate and ovarian cancer</li>
                <li>Tomatoes help in keeping blood sugar in balance</li>
                <li>Consuming tomatoes can improve your vision</li>
                <li>Ease a headache by drinking tomato juice blended with fresh basil</li>
                <li>Many standard cultivars are adapted for a variety of uses, including slicing, canning, and salads</li>
                <li>The large, meaty fruits of beefsteak tomatoes are especially popular for slicing</li>
            </ul>
        </p>
    </div>
    <!-- Cart -->
    <!-- <div class="conatiner" style="padding-left: 450px; padding-right: 450px; padding-top: 30px; padding-bottom: 20px;">
        <button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>
        <p style="padding-left: 80px; padding-top: 10px;">*Offers and discounts will be shown in cart.</p>
    </div>
    <hr> -->
    <!-- Frequently asked questions -->
    <div class="conatiner freq">
        <ul>
            <li>
                <h6>What kind of soil does a tomato ped need?</h6>
                <p>
                    <ul>
                        <li>Choose well drained, deep and loamy soil.</li>
                        <li>Plan on providing fertile, organically enriched soil with a pH between 6.2 and 6.8 for best flavour.</li>
                        <li>Blossom-end rot is due to calcium deficiency. Lime the tomato soil at the rate of 5 pounds per 100 square feet.</li>
                    </ul>
                </p>
            </li>
            <li>
                <h6>What temperature does a tomato ped like?</h6>
                <p>Germination 60 to 85 F For Growth 70 to 75 F</p>
            </li>
            <li>
                <h6>How much water does a tomato ped need?</h6>
                <p>A tomato ped prefers watering Tomato plants need at least an inch of water per week; so water them well, especially during dry spells.</p>
            </li>
            <li>
                <h6>How much sunlight does a tomato ped need?</h6>
                <p>A tomato ped prefers Full sun, Partial sun</p>
            </li>
            <li>
                <h6>How tall do tomato ped grow?</h6>
                <p>On average tomato ped grows determinate 3 to 4 ft, indeterminate 7 to 15</p>
            </li>
        </ul>
    </div>
</body>

</html>
