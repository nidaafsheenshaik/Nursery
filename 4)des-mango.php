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
    <title>Mango Plant</title>
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
                <img src="images/mango.jpg" alt="Mango plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Mango Tree (Grown through seeds) - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (180 reviews)</p>
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
        <p>The juicy, ripe mango fruit has a rich, tropical aroma and flavour that summons thoughts of sunny climates and sultry breezes.</p>
        <p>It has the considerable shelf life of a week after it is ripe making it exportable. It is also one of the most expensive kinds of mango and is grown mainly in western India.Mango is the leading fruit crop of India and considered to be the king of fruits.</p>
        <p>The tropical fruit is called the "King of Fruits" in India. The tree has been around for more than 4000 years in India and was taken to South America by the Portuguese, other parts of South Asia by Indians and to other tropical regions by others. A mango tree needs an ideal climate to grow. It is a tropical fruit and needs a lot of suns to grow and bear fruit.</p>
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
                    <td>Mango, Aam</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>10-80 ft.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Whitish green</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Spring, Summer</td>
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
                <li>Choose the sunniest spot in your garden and dig a 12-inch deep hole.</li>
                <li>If the plant is slightly bigger, then dig a slightly deeper hole.</li>
                <li>Also, prepare the soil with fertilizers and plant feed before planting the tree.</li>
                <li>Plant the tree deep and then pack the soil.</li>
                <li>However, make sure that the soil is loosely packed to enhance water absorption.</li>
            </ul>
        </p>
        <h3>Mango Plant care</h3>
        <p style="padding-bottom: 20px;">
            Planting is usually done in the month of July-August in rainfed areas and during February-March in irrigated areas. Planting spacing should be 10 X 10 m. Dig pits of 1 m x 1 m x 1 m. Fill in with topsoil mixed with 10 kg of FYM.
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Full sunlight</td>
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
                    <td>Loamy, alluvial, well-drained, aerated and deep soils rich in organic matter with a pH range of 5.5 to 7.5</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>20 to 35 degree C</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Apply any organic fertilizer or manure.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>Spring, Summer</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Mango Tree Special Features</h3>
        <ul>
            <li>Mango delicious taste, excellent flavour and attractive fragrance, it is rich in vitamin A and C.The tree is hardy in nature and requires comparatively low maintenance costs.</li>
            <li>Mango plant can be used in the garden</li>
            <li>Mango fruit rich the vitamin A</li>
            <li>Mango fruit is utilised at all stages of its development both in its immature and mature state</li>
            <li>Raw fruits are used for making chutney, pickles and juices</li>
            <li>The ripe fruits besides being used for dessert are also utilised for preparing several products like squashes, syrups, nectars, jams and jellies</li>
            <li>The mango kernel also contains 8-10 percent good quality fat which can be used for soap and also as a substitute for cola in confectionery</li>
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
                <h6>Does Mango tree need pollinator?</h6>
                <p>Mango plant has more number of perfect flower and mango is both self and cross pollinating plant, wasp and bees naturally help for pollination in mango plant therefore there is no need of special pollinator.</p>
            </li>
            <li>
                <h6>Does Mango tree have flowers?</h6>
                <p>Yes, Mango tree has flower and mainly mango tree flowering varies from the month of November to February depending upon locality and varieties.</p>
            </li>
            <li>
                <h6>Is Mango perennial plant?</h6>
                <p>es, Mango is perennial plant it blooms in the month of November to February and fruits are ready to harvest from March to August.</p>
            </li>
            <li>
                <h6>Is Mango a medicinal plant?</h6>
                <p>No, Mango is not medicinal plant but fruit are rich in Vitamin A and other parts of plant has different religious uses. </p>
            </li>
            <li>
                <h6>Where to plant Mango tree?</h6>
                <p>To plant Mango tree consider the following points 1. Sunlight- more than 6 hours of natural direct bright sunlight 2. Soil- Soil should be well drained , fertile and rich in nutrient. 3. Water- Water the plant when 1-2 inch surface layer soil feel dry to touch 4. Fertilizer- Apply any organic fertlizer in july- october month.</p>
            </li>
        </ul>
    </div>
</body>

</html>
