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
    <title>Kaju Plant</title>
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
                <img src="images/kaju.jpg" alt="Kaju plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Kaju Tree - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (157 reviews)</p>
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
        <p>Cashew trees are attractive trees with large leaves and pretty, pink flowers. Now grow your own cashew tree at your home.
        </p>
        <ul>
            <li>The cashew is an attractive, erect,evergreen tree.</li>
            <li>Delicious and nutritious fruit and nuts.</li>
            <li>Perfect plant for outdoor garden.</li>
        </ul>
        <p>Anacardium occidentale is evergreen tree and grow up to 6 to 12 m tall. The leaves are spirally arranged, leathery textured, elliptic to obovate. The flowers are produced in a panicle or corymb up to 26 cm long, each flower small, pale green at first then turning reddish, with five slender, acute petals.</p>
        <p>Actually, the drupe develops first on the tree, and then the peduncle expands into the pseudofruit. Within the true fruit is a single seed, the cashew nut. Although a nut in the culinary sense, in the botanical sense the fruit of the cashew is a seed.</p>
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
                    <td>Cashew, kaju</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>6 to 12 meter</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Pale green to reddish</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>November to April</td>
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
                <li>Apply water preferably in morning or evening.</li>
                <li>Loosen the topsoil without disturbing the roots of the plant so it can uptake the nutrients and moisture easily.</li>
                <li>During the main growing season feed the plant with organic fertilizer once a month (June-Aug).</li>
                <li>Apply water immediately after application of fertilizer.</li>
                <li>When a plant outgrows in current pot, re-pot with fresh potting soil and some fertilizer.</li>
                <li>Do the re-potting late evening and keep the plant in shady area for 2 to 3 days and then move the plant in its suitable growing condition.</li>
                <li>Remove dead, infected or damaged plant parts and dispose them away from the planting area.</li>
                <li>Spray Neem, Eucalyptus or Citrus oil for any insect/pest attack, as a primary treatment.</li>
                <li>Avoid applying water on flowers and leaves it may cause fungus infection.</li>
            </ul>
        </p>
        <h3>Kaju Plant care</h3>
        <p style="padding-bottom: 20px;">
            <ul>
                <li>Keep the plant in Natural indirect bright Light.</li>
                <li>Poke your finger/plain small stick into the soil to check the moisture.</li>
                <li>Apply 4 cup (Approx. 200 ml ) water when top soil (1-2 inches) in pot feels dry to touch.</li>
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
                    <td>20 to 35 degree Celsius</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Apply any organic fertilizer once a month (June-Aug).</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Kaju Plant Special Features</h3>
        <ul>
            <li>he cashew apple looks very attractive with its red cheeks. It s high in Vitamin C, refreshing, very juicy, but a bit acidic. And it leaves a furry feeling in your mouth.</li>
            <li>Flowers are showy</li>
            <li>Nutritious,Fruits and seeds are edible</li>
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
                <h6>How to plant kaju tree?</h6>
                <p>To plant Kaju tree consider the following points 1. To grow Kaju plant in pot, choose a pot having of 7-10 inch upper diameter and drainage holes. 2. Fill the 1/3 pot with well drained soil rich in organic content and place the plant in the center of the pot. 3. Fill the remaining pot with same soil. 4. Keep the plant in indirect bright light location for 2-3 days and then gradually move to a location that receives more than 6 hours of direct sunlight. 5. Once the plant is overgrown in current pot, plant it in field. If you are planting purchased plant directly in ground follow below procedure. 1. Keep the plant in indirect bright light for 3-4 days and gradually move to a location receiving direct sunlight for more than 6 hours a day. 2. Dig a pit twice the size of the bag/pot the current plant is in. 3. Fill the 1/3 of pit with soil rich in organic content, place the plant in center and fill the pit with same soil. 4. Apply water. General caring tips- Plant should get more than 6 hours of sunlight a day. Water the plant when surface soil (1-2 inch) feels dry to touch. Apply any organic fertilizer during the main growing season (May-June).</p>
            </li>
            <li>
                <h6>How to grow kaju plant from seed?</h6>
                <p>To grow kaju plant from seed consider the following points 1. To grow from seed, you need the entire raw seed not just the nut and soak them for 24 hours in warm water. 2. To sow seeds make a hole about 1/2 inch, place seeds in it, and cover with soil. 3. Water- Water the plant when 1-2 inch surface layer soil feels dry to touch. Do not over water the plant 4. Sunlight - Plant grow outdoor require more than 6 hours of natural direct bright sunlight. 5. Germination- seeds will start germinate within 30-40 days. 6. Fertilizer - Apply any organic fertilizer during the main growing season feed the plant with organic fertilizer once a month. Loosen the topsoil without disturbing the roots of the plant so it can uptake the nutrients and moisture easily.</p>
            </li>
            <li>
                <h6>How to grow kaju tree?</h6>
                <p>Kaju can be grow by various methods e.g Seed, Grafting, Soft wood grafting.Consider the following points to grow plant. 1. Sunlight- More than 6 hours of direct bright sunlight is required. 2. Soil- Soil or potting mixture should be well drained, fertile and nutrient rich. 3. Water- Water the plant when 1-2 inch surface soil layer feels dry to touch. 4. Fertilizer - Apply any organic fertilizer during the main growing season(May-June).</p>
            </li>
        </ul>
    </div>
</body>

</html>
