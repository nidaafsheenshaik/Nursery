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
    <title>Badam Plant</title>
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
                <img src="badam.jpg" alt="Badam plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Badam Tree, Indian Almond Tree, Terminalia catappa - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (104 reviews)</p>
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
        <p>Terminalia catappa also known as Sea almond or Indian almond which is perennial evergreen or dry deciduous, edible fruit and nut.

            The Indian Almond Tree (Terminalia catappa) also called Sea Almond or Tropical Almond belongs to the untrue mangroves and is very well known because of its leaves for the use in aquariums. It grows upright and forms a symmetrical crown with horizontal branches distinctively arranged in tiers.

            As the tree ages, the crown will become increasingly flattened and eventually take on a vase shape.</p>
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
                    <td>Badam, Indian Almond</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>30-40 feet.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>White to pale green</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>February to may</td>
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
        <ul>
            <li>Dig out an area for the tree that is about 3 or 4 times the diameter of the container or rootball and the same depth as the container or rootball.</li>
            <li>Use a pitchfork or shovel to scarify the sides of the hole.</li>
            <li>If container-grown, lay the tree on its side and remove the container. Loosen the roots around the edges without breaking up the root ball too much.</li>
            <li>Position tree in center of hole so that the best side faces forward. You are ready to begin filling in with soil.</li>
            <li>If planting a balled and burlaped tree, position it in hole so that the best side faces forward.</li>
            <li>Untie or remove nails from burlap at top of ball and pull burlap back, so it does not stick out of hole when soil is replaced.</li>
            <li>Create a water ring around the outer edge of the hole.</li>
            <li>Not only will this conseve water, but will direct moisture to perimeter roots, encouraging outer growth.</li>
            <li>Studies show that mulched trees grow faster than those unmulched, so add a 3 inch layer of pinestraw, compost, or pulverized bark over backfilled area.</li>
            <li>Remove any damaged limbs.</li>
        </ul>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Full sun.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>Water regularly; do not overwater</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Sandy, well-drained soil</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>Hardly up to 4 degree C</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Young plants need extra phosphorus to encourage good root development. Look for a fertilizer that has phosphorus.Trees need to be fertilized every few years.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Badam Tree Special Features</h3>
        <ul>
            <li>The Almond tree provides deep shade and has become a beloved ornamental tree in tropical gardens, parks and along streets</li>
            <li>Leaf extract exhibited potent anti-diabetic effects and suppress bone weight loss in ovariectomized mice</li>
            <li>Ethanol leaf extracts displayed analgesic and anti-inflammatory activities</li>
            <li>Oil extracted from the dried nuts is edible and used in cooking in parts of South America</li>
            <li>Indian almond leaves contain several different flavonoids, including kaempferol and quercetin</li>
            <li>It is astringent and bitter</li>
            <li>It is also rich in various tannins</li>
            <li>The fruit and seed are edible</li>
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
                <h6>When to plant almond trees?</h6>
                <p>Almond trees planting should be done in December â€“ January.</p>
            </li>
            <li>
                <h6>How to grow almond plant at home?</h6>
                <p>Almond Plant is grown by tongue grafting and budding. Consider the following points to grow plant. 1. Sunlight- More than 6 hours of direct bright sunlight is required. 2. Soil- Soil or potting mixture should be well drained, fertile and nutrient rich. 3. Water- Water the plant when 1-2 inch surface soil layer feels dry to touch. 4. Fertilizer - Apply any organic fertilizer during the main growing season(Dec-Jan).</p>
            </li>
            <li>
                <h6>Can you plant an almond tree in a pot?</h6>
                <p>1. To grow Almond tree in pot, choose a pot having of 7-10 inch upper diameter and drainage holes. 2. Fill the 1/3 pot with well drained soil rich in organic content and place the plant in the center of the pot. 3. Fill the remaining pot with same soil. 4. Keep the plant in indirect bright light location for 2-3 days and then gradually move to a location that receives more than 6 hours of direct sunlight. 5. Once the plant is overgrown in current pot, plant it in field.</p>
            </li>
            <li>
                <h6>Where to plant almond tree?</h6>
                <p>You can plant a Almond tree preferably outdoors, in pot or in ground at a spot receiving below growing conditions for the plant - 1. Direct bright sunlight for more than 6 hours a day preferably in morning. 2. Soil should be nutrient rich and well drained. 3. Apply Water when soil (1-2 inch) feels dry to touch.</p>
            </li>
            <li>
                <h6>When to prune almond plant?</h6>
                <p>Best season to prune Almond tree is summer(April-May).</p>
            </li>
        </ul>
    </div>
</body>

</html>
