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
    <title>Chilli Seeds</title>
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
                <img src="images/chilliseeds.jpg" alt="Chilli(green) plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Chilli G 4 - Desi Vegetable Seeds</h3>
                    <p>⭐⭐⭐⭐ (26 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 55</h6>(Inclusive of all taxes)</p>
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
                        <li>Add 2 X quantity of seeds for 'Buy 1 Get 1' offer</li>
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
        <p>It is most important and popular vegetable. 1 packet contains approximately 35 seeds of chilli.</p>
        <p>Chilli plants make great gifts for the cook or grow your own enthusiast. The more compact varieties will thrive in a cool conservatory, sheltered patio, or even a sunny window sill and the more you crop them the more they produce.</p>
        <p>The chili pepper (also chile pepper or chilli pepper, from Nahuatl chilli) is the fruit of plants from the genus Capsicum, members of the nightshade family, Solanaceae. The term in British English and in Australia, New Zealand, India, Malaysia and other Asian countries is just chilli without "pepper".</p>
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
                    <td>chilli pepper, bell pepper, paprika, cayenne, halapenos, chitlepin, Christmas pepper,Hot pepper</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>0.5 to 1.0 metre</td>
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
                    <td>Year round</td>
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
                <li>Chilli plants should be fairly easy to care for</li>
                <li>They need to be protected from frost and will do best in a sunny spot out of any cold winds or draughts</li>
                <li>A South or East facing windowsill or sheltered patio is idealChilli plants should be kept in a small pot</li>
                <li>They really don t like being over potted and will suffer from placing in to large a pot too quickly</li>
                <li>Most of our chilli plants shouldn t need repotting in their first year, however if you are struggling to keep up with the watering or if your plants is 3 or more times the size of it s pot then you can re-pot</li>
                <li>Just choose a pot that is only 2 or 3 cm bigger in diameter and use a good general purpose compost with some drainage</li>
                <li>Chilli plants love sunshine, they originate in South America after all, the more sunlight your plant can get on fruit, the hotter the fruit will become</li>
                <li>Chilli plants are greedy feeders and will benefit from feeding in the growing season</li>
                <li>Apply in line with the manufacturers instructions every couple of weeks from July through to September</li>
            </ul>
        </p>
        <h3>Green Chilli care</h3>
        <p style="padding-bottom: 20px;">
            <ul>
                <li>Plant into small pots or preferably into Jiffy coir (coconut husk) pellets</li>
                <li>Place the seeds with a good space between them so that you do not harm the roots when you come to potting on and cover them with a fine layer of sieved compost and coir mix</li>
                <li>If you are planting into pots, fill one pot per seed type to about 2 cm below the rim, firm down the compost and soak thoroughly</li>
                <li>If you are using Jiffy pellets, soak them until they have swollen to size and put two seeds into each one, just below the surface</li>
                <li>If you are planting into pots, fill one pot per seed type to about 2 cm below the rim, firm down the compost and soak thoroughly</li>
            </ul>
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Chilli plants like sunshine, the more sunlight the fruits receive the hotter they will grow</td>
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
                    <td>Chillies grow well in a well drained, fertile soil. If planting in pots be sure to use a good organic compost that will retain moisture.</td>
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
                    <td>Apply any organic fertilizer.</td>
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
        <h3>Green Chilli Special Features</h3>
        <ul>
            <li>Vitamins: Chilli is loaded with vitamins like niacin, pyridoxine, riboflavin, and thiamine</li>
            <li>Medicinal Uses: Due to presence of Capsaicin compounds, chilli pepper is used in preparation of ointment; also used in formulation to be used in arthritic pain and sore muscles</li>
            <li>Chilli pepper pods, which are berries, are used fresh or dried</li>
            <li>Chillies are dried to preserve them for long periods of time, which may also be done by pickling</li>
            <li>Dried chillies are often ground into powders, although many Mexican dishes including variations on chilles rellenos use the entire chilli</li>
            <li>Dried whole chillies may be reconstituted before grinding to a paste</li>
            <li>Many fresh chillies such as poblano have a tough outer skin that does not break down on cooking</li>
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
                <h6>How much sunlight does a chilli g 4 need?</h6>
                <p>A chilli g 4 prefers Chilli plants like sunshine, the more sunlight the fruits receive the hotter they will grow</p>
            </li>
            <li>
                <h6>How much water does a chilli g 4 need?</h6>
                <p>A chilli g 4 prefers watering Moderately</p>
            </li>
            <li>
                <h6>What kind of soil does a chilli g 4 need?</h6>
                <p>Chillies grow well in a well drained, fertile soil. If planting in pots be sure to use a good organic compost that will retain moisture.</p>
            </li>
        </ul>
    </div>
</body>

</html>
