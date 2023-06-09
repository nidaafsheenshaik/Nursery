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
    <title>Guava Plant</title>
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
                <img src="guava.jpg" alt="Guava plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Guava Tree, Amrud, Psidium guajava (Sardar L49, Grown through seeds) - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (164 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 309</h6>(Inclusive of all taxes)</p>
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
        <p>The plants are attractive and produce deliciously rich, sweet fruits that are excellent fresh or in desserts.</p>
        <ul>
            <li>Fruits are available throughout the year.</li>
            <li>Gives an assured crop even with very little care.</li>
        </ul>
        <p>Guava botanically known as Psidium guajava, is an evergreen shrub or small tree in the family Myrtaceae grown for its edible fruits. It is the fourth most important fruit in area and production after mango, banana and citrus.</p>
        <p>Being hardy, it gives an assured crop even with little care, and is good for rainfed areas also. Successful Guava cultivation is grown under tropical and sub-tropical climate. In areas with distinct winter season, the yield tends to increase and quality improves.</p>
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
                    <td>Yellow guava, Apple of tropics</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>Up to 10 meter</td>
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
                    <td>Throughout the year</td>
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
                <li>More than 6 hours of sunlight a day is ideal for plant to grow well and natural direct bright light for the rest of the day.</li>
                <li>The soil should be well drained and fertile, rich in organic content for growing plant.</li>
                <li>Poke your finger/plain small stick into the soil to check the moisture.</li>
                <li>Apply 4 cup (Approx. 200 ml) water when top soil (1-2 inches) in pot feels dry to touch.</li>
                <li>Do not over-water the plant.</li>
                <li>Loosen the topsoil without disturbing the roots of the plant so it can uptake the nutrients and moisture easily.</li>
                <li>During the main growing season feed the plant with organic fertilizer once a month (Oct-Jan).</li>
                <li>Apply water immediately after application of fertilizer.</li>
                <li>Remove dead, infected or damaged plant parts and dispose them away from the planting area.</li>
                <li>Spray Neem, Eucalyptus or Citrus oil for any insect/pest attack, as a primary treatment.</li>
            </ul>
        </p>
        <h3>Guava Plant care</h3>
        <p style="padding-bottom: 20px;">
            <ul>
                <li>Keep the plant in Natural indirect bright Light.</li>
                <li>Poke your finger/plain small stick into the soil to check the moisture.</li>
                <li>Apply 4 cup (Approx. 200 ml) water when top soil (1-2 inches) in pot feels dry to touch.</li>
                <li>Do not re-pot for min. 2 weeks after receiving it.</li>
            </ul>
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>More than 6 hours of sunlight and natural direct bright light for the rest of the day.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>Apply 4 cup (Approx. 200 ml) water when top soil (1-2 inches) in pot feels dry to touch</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Soil should be well drain and fertile, rich in organic content</td>
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
                    <td>Apply any organic fertilizer once a month (Oct-Jan)</td>
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
        <h3>Guava Plant Special Features</h3>
        <ul>
            <li>The plant has been used to treatment of various diseases like diarrhea, diabetes, cough, high cholesterol</li>
            <li>It also has been used for leukorrhea and yeast infections</li>
            <li>Eaten fresh, but can also be used for jellies, jams, ice cream, sauces, cakes, tarts, drinks and chutney</li>
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
                <h6>Where to plant guava tree?</h6>
                <p>You can plant a Guava tree preferably outdoors, in pot or in ground at a spot receiving below growing conditions for the plant. 1. Direct bright sunlight for more than 6 hours a day. 2. Soil should be nutrient rich and well drained. 3. Apply Water when soil (1-2 inch) feels dry to touch. 4. Once the plant is overgrown in current pot, plant it in field.</p>
            </li>
            <li>
                <h6>Is guava leaf a medicinal plant?</h6>
                <p>Various parts of Guava plant like leaf,fruit are used as medicine. People use guava leaf for stomach and intestinal conditions, pain, diabetes, and wound healing. Note- Please consults your health advisor before application or consuming of plants or plant parts.</p>
            </li>
            <li>
                <h6>Can guava grow in cold weather?</h6>
                <p>Guavas actually thrive well humid and dry climates. Plants survive in winter but not at chilling and frost condition. Protect the plant by placing any plastic barrier during winter. Optimum temperature is 22-30 degree Celsius.</p>
            </li>
            <li>
                <h6>How much sun do guava plants need?</h6>
                <p>Guava plants need more than 6 hours of direct bright sunlight a day.</p>
            </li>
            <li>
                <h6>How to grow guava plant?</h6>
                <p>Guava plant is grown by layering and grafting. Consider the following points to grow plant. 1. Sunlight- More than 6 hours of direct bright sunlight is required. 2. Soil- Soil should be well drained, fertile and nutrient rich. 3. Water- Water the plant when 1-2 inch surface soil layer feels dry to touch. 4. Fertilizer - Apply any organic fertilizer during the main growing season (June-July)</p>
            </li>
        </ul>
    </div>
</body>

</html>
