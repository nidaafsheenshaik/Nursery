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
    <title>Lilium Plant</title>
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
                <img src="images/lilium.jpg" alt="Lilium plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Lilium Hybrid ( Orange ) - Plant</h3>
                    <p>⭐⭐⭐⭐ (59 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 549</h6>(Inclusive of all taxes)</p>
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
        <p>Lilium is a genus of herbaceous flowering plants growing from bulbs, all with large prominent the garden. They vary according to the species and interspecific hybrids that they derived from, and are classified in the following broad groups.</p>
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
                    <td>Lilium Royal Sunset</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>3-4 ft.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Orange with yellow</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>June to July</td>
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
                <li>Fertilize Asiatic lilies each spring when they emerge from the ground to help them bloom.</li>
                <li>Sprinkle a balanced fertilizer, such as 10-10-10 or 5-10-10, around each plant, then water it in with 1 inch of water.</li>
                <li>You can also use bulb fertilizer.</li>
            </ul>
        </p>
        <h3>Lilium Plant care</h3>
        <p style="padding-bottom: 20px;">
            Grow Asiatic lilies in full sun so they are exposed to at least six hours of sunlight a day. For optimum health and flower production, the soil must be well-drained and rich with organic matter, such as compost. To accomplish this, amend the top 6 to 8 inches of soil with 3 to 4 inches of organic matter before planting bulbs.
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Full sun to Partial shade.</td>
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
                    <td>Well-drained soil</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>50 ° to 80 °F (10 ° to 27 °C).</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Apply any organic fertilizer</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Lilium Plant Special Features</h3>
        <ul>
            <li>An excellent, showy flower that provides color and contrast to the summer perennial border. Also may be grown in pots or containers, but plants and flowers will be somewhat smaller.</li>
            <li>The plant is used for ornamental purpose</li>
            <li>Veterinary Clinical</li>
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
                <h6>How plant lily bulbs?</h6>
                <p>To plant Lily bulbs consider the following points Soil should be well-drained, fertile and nutrient-rich with pH 5.5 to 6.5. Select an appropriate location Keep the plant outdoor where it will get more than 6 hours direct bright light. Pot size up to 7-inch upper diameter with a drainage hole. Dig a hole up to 2-3 inches and Set the bulb in the hole pointy side up or the roots down. after planting backfill with soil over the hole, lightly compress the soil but do not pack it and water. when topsoil (1-2 inches) feels dry to touch. Water thoroughly in the summer and reduce watering in winter and rainy season. Application of Fertilizer During the main growing season(July or August) feed the plant with organic fertilizer once a month. Loosen the topsoil without disturbing the roots of the plant so it can uptake the nutrients and moisture easily.</p>
            </li>
            <li>
                <h6>Do peace lily plants need sunlight?</h6>
                <p>Peace lily plant like growing indoors. They dont need direct sun, preferring bright indirect light.</p>
            </li>
            <li>
                <h6>When plant lily bulbs?</h6>
                <p>Plant lily bulbs in during the autumn, winter or early spring, depending on the type of Lily</p>
            </li>
            <li>
                <h6>Do lily plants spread?</h6>
                <p>Yes,lily will quickly spread out when lilies are planted in a location that suits them, they will multiply and come back in greater numbers each year.</p>
            </li>
            <li>
                <h6>Where to plant lily?</h6>
                <p>You can plant lily outdoor where it will get growing conditions as follows. Soil - should be well-drained, fertile and nutrient-rich. sunlight- it will get more than 6 hours direct bright light. water-when topsoil (1-2 inches) feels dry to touch. </p>
            </li>
        </ul>
    </div>
</body>

</html>
