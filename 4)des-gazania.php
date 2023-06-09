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
    <title>Gazania Plant</title>
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
                <img src="images/gazania.jpg" alt="Gazania plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Gazania (Orange) - Plant</h3>
                    <p>⭐⭐⭐⭐ (98 reviews)</p>
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
        <p>If you are looking for a showy annual bloom in the sunny garden or the container, something you can just plant and forget about, try growing Gazanias.</p>
        <p>Care of Gazania flowers is limited and often non-existent if you have neither the time nor the inclination to care for them. Botanically called Gazania rigens, treasure flowers is a more common name. The plant is often referred to as the African daisy.</p>
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
                    <td>African daisy</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>6 to 18 inches</td>
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
                    <td>Summer through Fall</td>
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
                <li>Gazania plants are easy to grow. They do well in hot, dry weather. They even tolerate salt!!</li>
                <li>Gazania prefers good to average, sandy soil.The soil needs to be well drained.</li>
                <li>Established plants do best in dry soil conditions. Water plants only during long, extended droughts.</li>
                <li>Fertilize plants every 4-5 weeks, with a general purpose fertilizer.</li>
                <li>Bring indoors in the fall, before the first frost, and grow gazania as a houseplant.</li>
            </ul>
        </p>
        <h3>Gazania Plant care</h3>
        <p style="padding-bottom: 20px;">
            Get the cuttings started in 4-inch pots, in a good quality potting soil. Plant rooted cuttings in spring at 24 to 30 inches apart. Keep watered until plants are established, then water every two weeks throughout summer. Overhead irrigation is acceptable when watering Gazanias.
        </p>
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
                    <td>15 C and above</td>
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
        <h3>Gazania Special Features</h3>
        <ul>
            <li>The plant is used for ornamental purpose</li>
            <li>Mass in beds and borders. Containers. With its trailing stems, this species is particularly useful in hanging baskets.</li>
            <li>Its generally keep indoor in living room and in terrace area</li>
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
                <h6>How to plant Gazania flower seeds?</h6>
                <p>To plant Gazania flower seeds consider the following points You can plant Gazania flower seeds in the pot as well as in-ground. To plant Gazania flower seeds consider the following points 1. Use a pot having 7-inch upper diameter and drainage holes. 2. Fill the pot with well-drained soil. Spread the seeds over the soil, cover the seeds with soil and apply water. 3. Maintain the moisture in soil by applying water if soil in pot (1-2 inches) feels dry to touch. 4. Keep the pot at a location receiving indirect bright light. Seeds will germinate within a week.</p>
            </li>
            <li>
                <h6>How to grow Gazania plant?</h6>
                <p>Gazania plant is grown by seeds and cuttings. Consider the following points to grow a plant.Â  1. Sunlight- 4-6 hours of natural direct bright sunlight is required.Â  2. Soil- Soil or potting mixture should be well-drained, fertile and nutrient-rich. 3. Water-Water the plant when 1-2 inch surface soil layer feels dry to touch.Â  4. Fertilizer - Apply any organic fertilizer during the main growing summer season(May-June).</p>
            </li>
            <li>
                <h6>What does a Gazania plant look like?</h6>
                <p>A clumping mound of grass-like foliage produces Gazania treasure flowers.Many flowers feature solids and horizontal or vertical variegation on petals, sometimes with splashes of white and bright pink.</p>
            </li>
            <li>
                <h6>Where to plant Gazania?</h6>
                <p>You can plant Gazania outdoor where they will get 4-6 hrs of direct bright light.</p>
            </li>
            <li>
                <h6>How to propagate Gazania plants?</h6>
                <p>You can propagate Gazania plants through seeds and cuttings.</p>
            </li>
        </ul>
    </div>
</body>

</html>
