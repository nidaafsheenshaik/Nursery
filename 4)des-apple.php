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
    <title>Apple Plant</title>
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
                <img src="images/apple.jpg" alt="Apple plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Apple, Seb - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (57 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 289</h6>(Inclusive of all taxes)</p>
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
        <p>The apple tree (Malus pumila, commonly and erroneously called Malus domestica) is a deciduous tree in the
            rose family best known for its sweet, pomaceous fruit, the apple.

            The apple tree is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple.
            It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus.

            It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus. The
            tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today. Apples have
            been grown for thousands of years in Asia and Europe, and were brought to North America by European
            colonists. Apples have religious and mythological significance in many cultures, including Norse, Greek and
            European Christian traditions.</p>
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
                    <td>apple,seb,(Malus pumila, commonly and erroneously called Malus domestica,</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>Minimum 10 feet.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>The 3 to 4 cm (1.2 to 1.6 in) flowers are white with a pink tinge that gradually fades, five
                        petaled, with an inflorescence consisting of a cyme with 4 to 6 flowers. The central flower of
                        the inflorescence is called the king bloom, it opens first, and can develop a larger fruit</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Non-flowering</td>
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
        <p>Use a balanced fertilizer every three months until the tree begins to bear fruit, and apply nitrogen annually
            once the tree is mature. Typically dormant during the winter, custard apple trees do not require regular
            watering.
            They do, however, need watering twice a month starting in early spring, when they are actively growing. Use
            a water timer or drip irrigation system to supply custard apple trees with a sufficient amount of water.</p>
        <p style="padding-bottom: 20px;">
            Use a water timer or drip irrigation system to supply custard apple trees with a sufficient amount of water.
            Overwatering the tree can lead to root rot, while under watering it can cause the leaves to fall and the
            fruit to burn in direct sunlight. Custard apple trees are sensitive to frost.
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Partial shade to full shade</td>
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
                    <td>well-drained soil</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>below 5 C</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertizlizer</h6>
                    </td>
                    <td>Apply any organic fertilizer
                    </td>
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
        <h3>Apple Plant Special Features</h3>
        <p>Apple Court is a pinnately crested form that basically has the same gray/green/silver fronds as var. pictum, but differs by having distinctively crested pinnae on the fronds.</p>
        <ul>
            <li>Apples are an important ingredient in many desserts, such as apple pie, apple crumble, apple crisp and apple cake</li>
            <li>They are often eaten baked or stewed, and they can also be dried and eaten or reconstituted (soaked in water, alcohol or some other liquid) for later use</li>
            <li>When cooked, some apple cultivars easily form a puree known as apple sauce</li>
            <li>Apples are also made into apple butter and apple jelly</li>
            <li>They are also used (cooked) in meat dishes</li>
            <li>Apple leaves (Annona reticulata) medicinal herbs are well used in Jamaica for a number of ailments</li>
        </ul>
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
                <h6>How to plant apple tree from seed?</h6>
                <p>To plant Apple tree seed consider the following points 1. Take a Pot up to 7-10 inch with drainage hole 2. Seeds of apple are dormant, which require stratification treatment (moist chilling) to break dormancy.Seeds are stratified for 60-70 days in alternate layers of moist sand at 4-6 degree Celsius during December to February. The stratified seeds are sown during March. To sow seeds make a hole about 1/2 inch, place seeds in it, and cover with soil. 3. Water- Water the plant when 1-2 inch surface layer soil feels dry to touch. Do not over water the plant 4. Sunlight - Plant grow outdoor require more than 6 hours of direct bright sunlight. 5. Germination- seeds will start germinate within 30 -40 days. 6. Fertilizer - Apply any organic fertilizer during the main growing season feed the plant with organic fertilizer once a month. Loosen the topsoil without disturbing the roots of the plant so it can uptake the nutrients and moisture easily.</p>
            </li>
            <li>
                <h6>How to prune Allamanda plant?</h6>
                <p>Prune your plant in the month of December-January, These shrubs grow quite quickly and without proper
                    pruning, Allamanda rapidly become overgrown and look bulky. Cut out all damaged, dead or dying
                    branches. Prune out any stems that rub against or cross another stem. Prune Allamanda shrubs about
                    once a month throughout the growing season to keep them looking tidy. Prune lightly, however,
                    because a hard pruning can result in few new flowers and very dense foliage.</p>
            </li>
            <li>
                <h6>How do apple plants reproduce?</h6>
                <p>Apple is propagated by asexual methods like grafting and budding on root stocks</p>
            </li>
            <li>
                <h6>Where to plant apple tree in garden?</h6>
                <p>To grow Apple tree in the garden consider the following points.The apple is a typical temperate fruit and is generally grown in the temperate regions of the world. 1. Sunlight- At least 6 hours of direct bright sunlight is required. 2. Soil- Soil should be well drained, fertile and nutrient rich and free from stones with pH between 6.0 to 6.5. 3. Water- Water the plant when 1-2 inch surface soil layer feels dry to touch.</p>
            </li>
            <li>
                <h6>Should apple trees be planted in pairs?</h6>
                <p>In apple, most of the varieties are self unfruitful, therefore at the time of planting pollinizer varieties should be planted in the garden. There are also some self pollinating hybrid varieties are available e.g Golden Delicious</p>
            </li>
        </ul>
    </div>
</body>

</html>
