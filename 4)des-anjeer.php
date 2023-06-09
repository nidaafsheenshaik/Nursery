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
    <title>Anjeer Plant</title>
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
                <img src="images/anjeer.jpg" alt="Anjeer plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Fig Tree, Anjeer Fruit, Common Fig Fruit - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (264 reviews)</p>
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
        <p>
            Growing Anjeer plant is an easy way to add a tropical flair to your garden. When you know that its important
            and how to care for Anjeer plants, you will be rewarded with many years of lovely fruit.
            What it makes special :
        <ul>
            <li>One of the best attractive and nutritional fruit plants.</li>
            <li>Good source of calcium.</li>
            <li>Low maintenance plant.</li>
            <li>Perfect plant for outdoor garden.</li>
        </ul>
        This product does not have the flowers and fruits at the time of shipping. Afterward, the plant will bloom and
        produce fruits.Anjeer is a beautiful small deciduous tree with an interesting spreading habit from Moraceae
        family. The breadth is often wider than the height of 4-9 meter.

        The bark is a smooth, silvery gray. The leaves of the tree are the identifying feature, they are about 4 inches
        long and have 3 or 5 lobes.The species name carica means having papaya-like leaves. The fruit, which is called
        anjeer, may be top-shaped, or pear-shaped, 1 to 4 in long, and varies in color from yellowish-green to coppery,
        bronze, or dark-purple.Well loved for their sweet, mild flavor fruit and multiple uses and fig are great source
        of calcium.In Missouri, plants may be grown in sheltered locations outdoors with root mulch or in containers
        that are overwintered indoors. Planting is usually done in the month of January-February month.
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
                    <td>Anjeer, Common Fig</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>Up to 9 meter</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Yellowish-green to coppery.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>February-May</td>
                </tr>
                <tr>
                    <td>
                        <h6>Difficulty Level</h6>
                    </td>
                    <td>Easy.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Plant Height</h6>
                    </td>
                    <td>13 inch (33 cm)</td>
                </tr>
                <tr>
                    <td>
                        <h6>Plant Spread</h6>
                    </td>
                    <td>7 inch (18 cm)</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Planting and care -->
    <div class="container ">
        <h3>Planting and care</h3>
        <p>
        <h6>Sunlight</h6>
        <ul>
            <li>Morning sunlight of more than 6 hours a day is ideal for flowering and fruit development.</li>
        </ul>
        </p>
        <p>
        <h6>Soil</h6>
        <ul>
            <li>The soil should be well drained, fertile and rich in organic content for growing Anjeer fruit plant.
            </li>
        </ul>
        </p>
        <p>
        <h6>Watering</h6>
        <ul>
            <li>Poke your finger/plain small stick into the soil to check the moisture.</li>
            <li>Apply 4 cup (approx.200ml) of water when the top soil (1-2 inch) in the pot feels dry to touch.</li>
            <li>As a rule of thumb, water the plants thoroughly in summer and reduce watering in winter and rainy
                season.</li>
            <li>Do not overwater the plant.</li>
        </ul>
        </p>
        <p>
        <h6>Application of Fertilizer</h6>
        <ul>
            <li>Before application of fertilizer loosen the topsoil without disturbing the roots of the plant so, it can
                uptake the nutrients and moisture easily.</li>
            <li>Apply organic fertilizer once a month during the main growing season (December-February)</li>
            <li>Apply water immediately after application of fertilizer.</li>
        </ul>
        </p>
    </div>
    <!-- Specifications -->
    <div  class="conatiner specifications">
        <table class="table table-bordered special-features">
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
                    <td>Apply 4 cup(approx.200ml) of water when the top soil (1-2 inch) in the pot feels dry to touch
                    </td>
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
                    <td>30-45 Degree Celsius</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Apply organic fertilizer once a month during main growing season (December-February)</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>June</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Anjeer Special Features</h3>
        <p>
        <ul>
            <li>Fig plant can be used in the garden for an ornamental purpose</li>
            <li>Fruits are edible</li>
            <li>Fig fruit is used as laxative to relieve constipation and its leaves are used for diabetes, high
                cholesterol and other skin conditions</li>
            <li>Some time milky sap(latex) from the tree used to treat skin tumors and wart</li>
        </ul>
        </p>
    </div>
    <!-- Cart -->
    <!-- <div class="conatiner" style="padding-left: 450px; padding-right: 450px; padding-top: 30px; padding-bottom: 20px;">
        <a href="getorderDetails.php"><button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button></a>
        <p style="padding-left: 80px; padding-top: 10px;">*Offers and discounts will be shown in cart.</p>
    </div> -->
    <hr>
    <!-- Frequently asked questions -->
    <div class="conatiner freq">
        <ul>
            <li>
                <h6>How to grow anjeer plant at home?</h6>
                <p>Anjeer is mainly propagated by hardwood stem cuttings, air layering, budding and grafting. Consider
                    the following points to grow plant. 1. Sunlight- More than 6 hours of direct bright sunlight is
                    required. 2. Soil- Soil or potting mixture should be well drained, fertile and nutrient rich. 3.
                    Water- Water the plant when 1-2 inch surface soil layer feels dry to touch. 4. Fertilizer - Apply
                    any organic fertilizer during the main growing season(June-July)</p>
            </li>
            <li>
                <h6>How to plant anjeer tree?</h6>
                <p>To plant Anjeer tree consider the following points 1. To grow plant in pot, choose a pot having of
                    7-10 inch upper diameter and drainage holes. 2. Fill the 1/3 pot with well drained soil rich in
                    organic content and place the plant in the center of the pot. 3. Fill the remaining pot with same
                    soil. 4. Keep the plant in indirect bright light location for 2-3 days and then gradually move to a
                    location that receives more than 6 hours of direct sunlight. 5. Once the plant is overgrown in
                    current pot, plant it in field. If you are planting purchased plant directly in ground follow below
                    procedure. 1. Keep the plant in indirect bright light for 3-4 days and gradually move to a location
                    receiving direct sunlight for more than 6 hours a day. 2. Dig a pit twice the size of the bag/pot
                    the current plant is in. 3. Fill the 1/3 of pit with soil rich in organic content, place the plant
                    in center and fill the pit with same soil. 4. Apply water. General caring tips- Plant should get
                    more than 6 hours of sunlight a day. Water the plant when surface soil (1-2 inch) feels dry to
                    touch. Apply any organic fertilizer during the main growing season (June-July).

                </p>
            </li>
        </ul>
    </div>

</body>

</html>
