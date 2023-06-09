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
    <title>Marigold Plant</title>
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
                <img src="images/marigold.jpg" alt="Marigold plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>African Marigold (Orange) - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (160 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 229</h6>(Inclusive of all taxes)</p>
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
        <p>Marigold are among the very popular flowers commonly found in India and other countries.</p>
        <p>In India marigold is one of the most commonly grown flowers and used extensively on religious and social functions in different forms.Flowers are sold in the market as loose or as garlands.</p>
        <p>In India marigold is one of the most commonly grown flowers and used extensively on religious and social functions in different forms. Flowers are sold in the market as loose or as garlands.This plant was used in ancient Greek, Roman, Arabic and Indian cultures as a medicinal herb as well as a dye for fabrics, foods and cosmetics. The leaves are edible, with the petals added to dishes as a garnish and in lieu of saffron.They can be easily cultivated, are widely adaptable to varying soils and climatic conditions and have a good flowering duration. This bushy plant with around 20 to 30 species, have a long flowering period and the colours range from orange, yellow, gold, cream to apricot. They are very much used in making garlands. Make excellent beds and pot decorations.This plant was used in ancient Greek, Roman, Arabic and Indian cultures as a medicinal herb as well as a dye for fabrics, foods and cosmetics. The leaves are edible, with the petals added to dishes as a garnish and in lieu of saffron.</p>
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
                    <td>African Marigold (Yellow),Zendu,Marigold, Genda,Zandu,Banthi Puuvu, Camanti,Chandu Hoovu,Ganda, French Marigold</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>2-3 ft.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Marigolds are available in a range of gold, maroon, yellow and orange shades.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Spring, Summer, Fall</td>
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
                <li>Germination from large, easily handled seeds is rapid, and blooms should appear within a few weeks of sowing.</li>
                <li>When you water marigolds, allow the soil to dry somewhat between watering, then water well, then repeat the process.</li>
                <li>The densely double flower heads of the African marigolds tend to rot in wet weather.</li>
                <li>Do not water marigolds from overhead.</li>
            </ul>
        </p>
        <h3>Marigold Plant care</h3>
        <p style="padding-bottom: 20px;">
            Sow them directly into the garden once the soil is warm, or start seeds indoors about a month to 6 weeks before the last spring-frost date.
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Marigolds need lots of sunshine (at least six hours of direct sunlight) and do well with year round warm to hot weather</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>Water marigolds the first 10 to 12 days after transplanting bedding plants into the garden.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Though they grow in almost any soil, marigolds thrive in moderately fertile, well-drained soil.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>Protect this plant from frosts and low temperatures.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Avoid fertilizing the plants. Marigolds thrive in poor soil and fertilizer often creates lush, rich foliage with few blooms.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>African Marigold Special Features</h3>
        <ul>
            <li>Due to its variable height and colour marigold is especially use for decoration and included in landscape plans.</li>
            <li>One of the health benefits of marigolds is that it is used in the treatment of minor burns when used in the form of ointments or a tincture</li>
            <li>Health benefits and therapeutic uses of marigold flowers as well as the leaves of the marigold include it being beneficial in minimizing the number of tumors in the case of breast cancer as well as in the prevention of the development of new cancer cells</li>
            <li>One of the medicinal uses of marigolds is that it promotes the growth of both new blood vessels as well as new skin tissue and hence it is used in the healing of wounds such as burns, scrapes as well as irritated skin</li>
            <li>The bright petals of signet marigolds add color and a spicy tang to salads and other summer dishes</li>
            <li>he flower petals are sometimes cooked with rice to impart the color (but unfortunately not the flavor) of saffron</li>
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
                <h6>How to grow marigold plant from flowers?</h6>
                <p>Separate the petals from fully matured and dried flowers and these are used as seed for growing Marigold plant. To grow plant through seed consider the following points. 1. Use a pot having 7-10 inch upper diameter and drainage holes. 2. Fill the pot with well drained soil. Sprinkle 4-6 seeds in pot and cover lightly by soil and apply water. 3. Maintain the moisture in soil by applying water if soil in pot (1-2 inch) feels dry to touch. 4. Keep the pot at a location receiving indirect bright light. Seeds will germinate within a week.</p>
            </li>
            <li>
                <h6>How to grow marigold plant?</h6>
                <p>Plant is grown by seeds and tip cuttings. Consider the following points to grow plant. 1. Sunlight- At least 4-6 hours of direct bright sunlight is required. 2. Soil- Soil should be well drained, fertile and nutrient rich. 3. Water- Water the plant when 1-2 inch surface soil layer feels dry to touch. 4. Fertilizer - Apply any organic fertilizer during the main growing season (June-July).</p>
            </li>
            <li>
                <h6>What is marigold plant good for?</h6>
                <p>Marigold is one of the popular flowering plants used for worship purposes. Apart from beauty, they are also known for their insect repellent and medicinal properties.</p>
            </li>
            <li>
                <h6>Do marigold plants grow every year?</h6>
                <p>No, they dont grow every year but they may come back the following year due to self-seeding</p>
            </li>
            <li>
                <h6>Is marigold a shrub?</h6>
                <p>Yes Marigold is a shrub</p>
            </li>
        </ul>
    </div>
</body>

</html>
