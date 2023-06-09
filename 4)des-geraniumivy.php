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
    <title>Geranium ivy</title>
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
                <img src="images/geraniumivy.jpg" alt="Geranium ivy" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Geranium Ivy, Geranium Creeper (Orange) - Plant</h3>
                    <p>⭐⭐⭐⭐ (60 reviews)</p>
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
        <p>Geranium (Pelargonium peltatum) is a colorful summer bloomer with ivy-like foliage and cascading blooms that
            make the plant perfectly suited for window boxes and hanging containers. Geranium works well in mixed
            baskets with other colorful annuals.</p>
        <p>Geranium includes at least 75 different types, including a range of flower and foliage colors and variegation
            and a variety of sizes. No matter what Geranium you choose, it s bound to have attractive foliage and
            eye-catching blooms.Geraniums bloom in a burst of deep reds, scarlet, pinks, white, purple or salmon with
            flowers lasting throughout the gardening season. Geraniums are used in beautiful flower beds or in
            containers, planter boxes, or hanging baskets on porches, patios or balconies.Geraniums are hardy in USDA
            zones 9-11.Zonal geraniums are not heavy feeders, but since they are usually grown in containers, a light
            feeding with your favorite fertilizer, every 2-4 weeks, will keep them vigorous.Stressing them slightly by
            watering only after the soil has dried out completely for a day or two seems to encouraging more profuse
            blooming. Just dont leave them dry for so long they start dropping leaves and declining.</p>
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
                    <td>zonal geranium,garden geranium, malva or malvon,Pelargonium hortorum,</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>Size will vary with variety. There are some dwarf geraniums that will never get more than 5 - 6
                        inches tall and newer varieties being bred for height and spread. In general, most are between 5
                        - 24 inches (12 - 60 cm) H x 12 - 15 inches (30 - 38 cm) W.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Orange</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Zonal geraniums start blooming in mid-spring and will repeat bloom until frost. Deadheading the
                        entire flower stalk after the flower fades will encourage more blooms.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Difficulty Level</h6>
                    </td>
                    <td>Medium.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Planting and care -->
    <div class="container care">
        <h3>Planting and care</h3>
        <p style="padding-bottom: 20px;">
        <ul>
            <li>Cut back your geraniums by about two-thirds if and when the weather drops below 45 F.</li>
            <li>Move the pots indoors to a sunny, south-facing window that gets at least four hours a day of direct sun.
            </li>
            <li>Stop fertilizing and limit water to once a week, keeping the plants on the dry side, while they are in
                the house.</li>
            <li>Begin to add fertilizer to the plant water again when you see new growth in late winter or early spring.
            </li>
            <li>Pruning: If your plants are long stemmed or with leaves only at the tips, and the shape of your plant is
                off then they should be pruned.</li>
        </ul>
        </p>
        <h3>Geranium Ivy care</h3>
        <p>ou can start zonal geraniums from seed, cuttings or transplants. Taking cuttings was the traditional method
            of propagating geraniums and maintaining favorite varieties. If you choose to take cuttings, make sure you
            only use healthy, vigorous plants.</p>
        <p>Geranium can easily be started from seed, although the seed is usually for F1 hybrids. Seed geraniums are
            bred to be disease resistant and to bloom well in the heat of summer.Start seeds 8 - 10 weeks before your
            last frost date. They can take up to 2 weeks to germinate and should be kept warm, 70 and 75F (21 to 24C),
            and moist in the process. Scarifying the seed before planting will help aid germination.</p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Full sun to Partial Shade. They will bloom best in full sun.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>Many geraniums are killed because of improper watering. Establish a wet-saturated to moist-dry
                        watering cycle. The plant needs to be thoroughly watered so the soil is wet all the way to the
                        center of the root ball. Check the plant s need for watering by looking at the soil; better yet,
                        scratch the soil surface with your finger or use a moisture meter. If the soil is barely moist
                        or dry below the surface layer, the plant needs watering. Anything wetter than barely moist
                        should probably wait. I say probably because so much depends on the weather. If we are in the
                        midst of a heat wave, or if the plant will be exposed to dry winds, it may need watering more
                        often to maintain it through the day. Container plants should be watered in the morning hours if
                        possible.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Work organic compost into high-quality container potting soil that contains ingredients such as
                        peat moss, vermiculite and perlite. Use this compost/soil mixture to fill pots for your
                        geraniums. Good drainage is essential to geraniums so choose containers with adequate drainage
                        holes. If your geraniums are already in pots, spread organic compost lightly on the soil surface
                        and work in, taking care not to dig up the plant s roots.
                        Zonal geraniums are not terribly fussy about soil pH, but prefer a slightly acid soil of about
                        5.8 to 6.5</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>The best temperature range would be from 60-70 degrees.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>As plants receive sunlight for growing, the demand for water and fertilizer is established. The more sunlight received, the more water and fertilizer needed. The demand for water and fertilizer will decrease with less sunlight and overcast weather. (Fertilizing should start when the plant begins its active growth in the spring). Fertilize lightly or not at all in cold weather months.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Geranium Ivy Special Features</h3>
        <ul>
            <li>These are used for ornamental purpose for their beautiful colors</li>
            <li>The oil of the Geranium makes a good astringent and can be diluted with water and used topically to help clean the face or in abath</li>
            <li>It also has great antiseptic properties and is said to help restore the balance to dry or oily skin and hair</li>
            <li>You can also make a tea with the leaves and flowers or an oil infusion</li>
            <li>The geranium is considered to be safe for most people (those with an autoimmune disease and those who are pregnant should avoid it) and can be used as an herb in cooking as well</li>
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
                <h6>Where is geranium found?</h6>
                <p>Geranium is found throughout the temperate regions of the world and the mountains of the tropics.</p>
            </li>
            <li>
                <h6>Will Geraniums grow indoors?</h6>
                <p>Yes, Geraniums can grow indoor where they will receive at least 4-6 hours of sun.</p>
            </li>
            <li>
                <h6>Does Geranium oil kill viruses?</h6>
                <p>Yes, Published research suggests that the Geranium oil can kill some Viruses and bacteria</p>
            </li>
            <li>
                <h6>Do Geraniums bloom all year?</h6>
                <p>No Geraniums doesnt bloom all year, Geraniums bloom in early summer (April-June) and autumn (September-November) season</p>
            </li>
            <li>
                <h6>Why would Geranium leaves turn red?</h6>
                <p>Red Geranium leaves signal the plant is stressed in some way. This may be because the plant is receiving too much water or too much sunshine, or has been planted outdoors too early or in mineral-deficient soil.</p>
            </li>
        </ul>
    </div>
</body>

</html>
