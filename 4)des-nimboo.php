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
    <title>Nimboo Plant</title>
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
                <img src="images/nimboo.jpg" alt="Nimboo plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Nimboo, Lemon Tree - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (504 reviews)</p>
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
        <p>Growing Lemon plant is an easy way to add a tropical flair to your garden. When you know its unique health benefits, and how to care for Lemon plants, you will be rewarded with many years of lovely fruit.</p>
        <ul>
            <li>One of the best attractive fruiting plant.</li>
            <li>Low maintenance plant.</li>
            <li>Perfect plant for pot, outdoor and with lots of health benefits etc.</li>
        </ul>
        <p>This product does not have fruit at the time of shipping. After 2-3 year, the plant will bloom and set the fruit.The lemon, Citrus limon, is a species of small evergreen tree in the flowering plant family Rutaceae, Its fruits are round in shape.</p>
        <p>In India, in terms of area under cultivation, citrus is the third largest fruit industry after Banana and Mango. Citrus require minimal pruning by trimming overcrowded branches, with the tallest branch cut back to encourage bushy growth. Throughout summer, pinching back tips of the most vigorous growth assures more abundant canopy development.Lemons are one of the healthiest fruits out there with wide-ranging health benefits. They are full of essential vitamins and minerals and have extensive use in the culinary world. Lemon nutrition is very low-calorific but rich in vitamins, essential oils and antioxidant.</p>
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
                    <td>Nimboo, Limboo, lime</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>2-4 meter</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>White</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>February-March and June-July</td>
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
                <li>Morning sunlight of more than 6 hours a day is ideal for flowering and fruit development.
                    Soil</li>
                <li>The soil should be well drained, fertile and rich in organic content for growing Nimboo plant.</li>
                <li>Water the plants thoroughly in summer and reduce watering in winter and rainy season.</li>
                <li>Water should be applied preferably in the morning or evening.</li>
                <li>Do not overwater the plant.</li>
                <li>Before application of fertilizer loosen the topsoil without disturbing the roots of the plant so, it can uptake the nutrients and moisture easily.</li>
                <li>Apply organic fertilizer once a month during the main growing season (December-February)</li>
                <li>Apply water immediately after application of fertilizer.</li>
                <li>Remove dead, infected or damaged plant parts and discard them away from the plants.</li>
                <li>For any insect attack or disease, you can use Neem oil, Eucalyptus oil or Citrus oil spray for primary treatment.</li>
            </ul>
        </p>
        <h3>Nimboo Plant care</h3>
        <p style="padding-bottom: 20px;">
            <ul>
                <li>Poke your finger/plain small stick into the soil to check the moisture.</li>
                <li>Apply 4 cup (approx.200ml) of water when the top soil (1-2 inch) in the pot feels dry to touch.</li>
                <li>Keep the plant in indirect bright light.</li>
                <li>Do not re-pot for min. 2 weeks after receiving it.</li>
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
                    <td>Well drained, fertile and rich in organic content</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>13-37 Degree Celsius</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Apply organic fertilizer once a month during the main growing season (December-February)</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>2-3 month after blooms</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Lemon Plant Special Features</h3>
        <ul>
            <li>Used as screening and hedge purpose in landscaping</li>
            <li>There is a belief in Ayurvedic medicine that a cup of hot water with lemon juice in it every morning tonifies and purifies the liver</li>
            <li>The oval fruit is famous is used widely for its juice</li>
            <li>The whole lemon is used to make marmalade, lemon curd and lemon liqueur</li>
            <li>The pulp and rind are also used, primarily in cooking and baking</li>
            <li>Lemon juice is acidic in nature and makes it a cheap, readily available acid for use in educational science experiments</li>
            <li>Lemon juice, rind, and zest are used in a wide variety of food and drink</li>
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
                <h6>How to plant a lemon tree in a pot?</h6>
                <p>To plant Lemon tree in pot consider the following points 1. To grow plant in pot it should be of 7-10 inch upper diameter with drainage hole and overgrown plant is transferred in to main field. 2. Sunlight- More than 6 hours of direct bright sunlight is required. 3. Soil- Soil or potting mixture should be well drained, fertile and nutrient rich. 4. Water- Water the plant when 1-2 inch surface soil layer feels dry to touch. 5. Fertilizer - Apply any organic fertilizer during the main growing season(June-July). 6. Once the plant is overgrown in current pot, plant it in field.</p>
            </li>
            <li>
                <h6>Does lemon grass plant repel mosquitoes?</h6>
                <p>Yes, Lemon grass act as long term mosquito repellent.</p>
            </li>
            <li>
                <h6>Do lemon plants have thorns?</h6>
                <p>Yes, True lemon tree have sharp thorns.</p>
            </li>
            <li>
                <h6>Can lemon plants survive winter?</h6>
                <p>Yes, Lemon plants survive in winter, too cold affects the flowering of the plant Only.Optimum temperature range is 25-30 degree Celsius.</p>
            </li>
        </ul>
    </div>
</body>

</html>
