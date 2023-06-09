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
    <title>Miniature Rose Plant</title>
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
                <img src="images/buttonrose.jpg" alt="Button rose" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Miniature Rose, Button Rose - Plant</h3>
                    <p>⭐⭐⭐⭐ (49 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 299</h6>(Inclusive of all taxes)</p>
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
            Button Rose is a perennial flowering shrub plant.Roses are best ornamental plants.
        </p>
        <ul>
            <li>One of the best flowering plants</li>
            <li>Provide year-round flowering.</li>
            <li>Perfect plant for outdoor garden and sunny balcony.</li>
            <li>Rose is considered as a symbol of balance.</li>
        </ul>
        <p>
            Note: The fragrance of Rose flowers depends on its variety and climatic conditions, hence this plant may or
            may not produce fragrant flowers.This product may not have the flowers when shipped, the plant will later
            bloom any colored flower.Miniature roses are miniature versions of Hybrid Tea roses.

            They have petite stems, leaves and flowers. Miniature roses are bred to stay small in size. miniature roses
            come in a variety of types and colors are extremely hardy and versatile plants. The flowers are densely
            filled with petals, much like antique roses. The symbolism of rose colors is steeped in tradition. Roses
            inspired people over thousands of years to develop a language of color. Rose flowers appear in many colors
            like red, yellow, pink, white. Rose symbolizes love, peace, affection, and beauty. Roses are widely used for
            decoration purposes.
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
                    <td>Gulab, mini rose, Rosa, Gulaaf</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>Up to 91 centimeter</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Any color</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Year-round</td>
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
       <ul>
           <li>Natural bright light is ideal for rose plant growth.</li>
           <li>Poke your finger/plain small stick into the soil to check the moisture.</li>
           <li>Apply 4 cup (Approx. 200 ml) water when the top soil (1-2 inch) in pot feels dry to touch.</li>
           <li>Do not overwater the plant.</li>
           <li>Apply water probably morning or evening time.</li>
           <li>Before the application of fertilizer loosen the topsoil without disturbing the roots of the plant so it can uptake the nutrients and moisture.</li>
           <li>Apply water immediately after application of fertilizer.</li>
           <li>Remove dead, infected or damaged plant parts and discard them away from the plants.</li>
       </ul>
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
                    <td>Apply 4 cups (Approx. 200 ml) water when the topsoil (1-2 inch) in pot feels dry to touch.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Soil should be well-drained and fertile, rich in organic content.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>20 to 30 degree Celsius</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Apply any organic fertilizer once a month.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>Year Round</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Miniature Rose Special Features</h3>
        <ul>
            <li>Beautiful attractive colorful flower</li>
            <li>Roses are best known as ornamental plants</li>
            <li>Roses are used in landscapes</li>
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
                <h6>How to grow Allamanda plant?</h6>
                <p>Allamanda plant is grown by seeds and cuttings. Consider the following points to grow a plant.Â 1.
                    Sunlight- 4-6 hours of direct bright sunlight is required.Â 2. Soil- Soil or potting mixture should
                    be well-drained, fertile and nutrient-rich. 3. Water-Water the plant when 1-2 inch surface soil
                    layer feels dry to touch.Â 4. Fertilizer - Apply any organic fertilizer during the main growing
                    Spring season(February-March). </p>
            </li>
            <li>
                <h6>How to grow Rose plant in a pot?</h6>
                <p>To grow Rose plant in a pot consider the following points 1. To grow plant in pot it should be of 7-10 inch upper diameter with drainage hole-and overgrown plant is transferred in to main field. 2. Sunlight- At least 4-6 hours of natural direct bright sunlight is required. 3. Soil- Soil or potting mixture should be well drained, fertile and nutrient rich. 4. Water- Water the plant when 1-2 inch surface soil layer feels dry to touch. 5. Fertilizer - Apply any organic fertilizer during the main growing season (Sep-Oct).</p>
            </li>
            <li>
                <h6>How often should Rose plants be watered?</h6>
                <p>1. Water the plant as per requirement by checking 1-2 inch layer of surface soil feels dry to touch then water the Rose plant. 2. Water thoroughly in the summer and reduce watering in winter and rainy season.</p>
            </li>
            <li>
                <h6>How to grow Rose plant at home?</h6>
                <p>Rose Plant is grown by cuttings and graftings. Consider the following points to grow plant. 1. Sunlight- At least 4-6 hours of direct bright sunlight is required. 2. Soil- Soil should be well drained, fertile and nutrient rich. 3. Water- Water the plant when 1-2 inch surface soil layer feels dry to touch. 4. Fertilizer - Apply any organic fertilizer during the main growing season (Sep-Oct).</p>
            </li>
            <li>
                <h6>Can a Rose plant grow indoors?</h6>
                <p>Yes, Rose plant can be grow indoor (Like Window sills etc.) with at least 4-6 hours direct bright sunlight a day.</p>
            </li>
        </ul>
    </div>
</body>

</html>
