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
    <title>Broccoli Seeds</title>
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
                <img src="images/broccoliseeds.jpg" alt="Broccoli Seeds" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Broccoli Green - Organic Vegetable Seeds
                    </h3>
                    <p>⭐⭐⭐⭐ (24 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 149</h6>(Inclusive of all taxes)</p>
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
        <p>If you are already thinking about what you want to grow in your garden this season, start out right with organic seeds. Enjoy your Kitchen Gardening with chemical-free Broccoli - Organic Vegetable.</p>
        <p>eeds. 1 packet contains 30 Broccoli seeds.</p>
        <p>Broccoli is an edible green plant in the cabbage family Brassicaceae whose large flowering head and stalk are eaten as a vegetable. Broccoli is classified in the Italica cultivar group of the species Brassica oleracea.</p>
        <p>Broccoli has large flower heads, usually dark green in color arranged in a tree-like structure branching out from a thick stalk which is usually light green. The mass of flower heads is surrounded by leaves. Broccoli resembles cauliflower which is a different cultivar group of the same Brassica species.</p>
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
                    <td>Broccoli raab, Broccoli.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>Up to 76.2 centimeters.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Difficulty Level</h6>
                    </td>
                    <td>Medium</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Planting and care -->
    <div class="container care">
        <h3>Planting and care</h3>
        <p>
            <ul>
                <li>Keep the seedlings container in bright Sunlight</li>
                <li>Protect the Broccoli Green seedlings from direct harsh sunlight</li>
                <li>The soil should be well drained and nutrient rich for Broccoli Green seedlings</li>
                <li>Water the seedlings when the topsoil (1-2 inch) in pot feels dry to touch</li>
                <li>Poke your finger/plain small stick into the soil to check the moisture</li>
                <li>Do not overwater the seedlings</li>
                <li>Water thoroughly in the summer and reduce watering in winter and rainy season</li>
                <li>During the main growing season feed the Broccoli Green seedlings with organic fertilizer once a month</li>
                <li>Loosen the topsoil without disturbing the roots of the seedlings so it can uptake the nutrients and moisture easily</li>
                <li>Remove dead, infected or damaged seedlings from container</li>
                <li>Do not overwater the seedlings especially when container does not have drainage holes</li>
            </ul>
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Bright sunlight.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>
                        <ul>
                            <li>Water the seedlings when the topsoil (1-2 inch) in the container feels dry to touch.</li>
                            <li>Poke your finger/plain small stick into the soil to check the moisture.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Well draining and Nutrient-rich with a pH between 6.0 and 7.0</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>18 to 23-degree celsius.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                     <td>Apply any organic fertilizer.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>Broccoli grown from seed will come to harvest in 100 to 150 days. Grown from transplants Broccoli will come to harvest in 55 to 80 days. Time Broccoli planting so harvest happens in a cool time of the year. Temperatures in the 26 °+C will cause buds to open. If you live where there are a short spring and long summer, it is better to plant broccoli in late summer for a fall harvest.To know when broccoli is ready to pick, run your finger over the green central flower head, if it feels tight you can delay picking, but once the buds start to loosen start the harvest. Broccoli florets can be cut 1 to 2 weeks before they mature.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Broccoli Plant Special Features</h3>
        <p>
            <ul>
                <li>Broccoli shares cancer-fighting and immune-boosting properties</li>
                <li>Like many whole foods, Broccoli is packed with soluble fiber that draws cholesterol out of your body</li>
                <li>Broccoli even has significant amounts of omega 3 fatty acids, which are well known as anti-inflammatory</li>
                <li>Broccoli contains high levels of both calcium and vitamin K, both of which are important for bone health and prevention of osteoporosis</li>
                <li>Broccoli is a good carb and is high in fiber, which aids in digestion, prevents constipation, maintains low blood sugar, and curbs overeating</li>
                <li>It tastes best when eaten in a cooked form in salads, soups and side dishes with meat and chicken</li>
                <li>Baked broccoli is one of the popular broccoli dishes cooked with cheese</li>
                <li>Broccoli dishes are cooked in everyday meals as well as in parties</li>
                <li>Everyday Broccoli dishes are usually cooked while boiling, stir-frying and steaming the vegetable</li>
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
                <h6>How tall do broccoli green grow?</h6>
                <p>On average broccoli green grows Up to 76.2 centimeters.</p>
            </li>
            <li>
                <h6>How should I fertilize my broccoli green ?</h6>
                 <p>Apply any organic fertilizer.</p>
            </li>
            <li>
                <h6>What kind of soil does a broccoli green need?</h6>
                <p>Well draining and Nutrient-rich with a pH between 6.0 and 7.0</p>
            </li>
            <li>
                <h6>How much sunlight does a broccoli green need?</h6>
                <p>A broccoli green prefers Bright sunlight.</p>
            </li>
        </ul>
    </div>
</body>

</html>
