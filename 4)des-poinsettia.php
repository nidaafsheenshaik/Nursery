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
    <title>Poinsettia flower plant</title>
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
                <img src="images/poinsettia.jpg" alt="Poinsettia plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Poinsettia, Christmas Flower (Pink) - Plant</h3>
                    <p>⭐⭐⭐⭐ (80 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 599</h6>(Inclusive of all taxes)</p>
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
        <p>The poinsettia is a commercially important plant species of the diverse spurge family.</p>
        <p>The poinsettia is a commercially important plant species of the diverse spurge family. The species is indigenous to Mexico. It is particularly well known for its red and green foliage and is widely used in Christmas floral displays.</p>
        <p>The species is a tall, rangy shrub that grows to a height of 10 ft. It has large, dark green, oval leaves that are "toothed" on the sides and pointed at the tips. They emerge from smooth green erect stems. Flowers are borne at the stem tips in winter. The actual flowers are quite small (they are the yellow structures at the center of the brilliantly colored bracts) The bracts are actually modified leaves - in the species there usually are 8 to 10 bracts that are 4-7 in long.</p>
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
                    <td>Poinsettia</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>3-10 ft.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Yellow flowers with pink bracts</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Seasonal bloomer</td>
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
                <li>You may use plant ties or just weave them through trellis sections.</li>
                <li>Fertilize the plant in spring just before new growth appears.</li>
                <li>Pinch off the tips of the vines in the second year to promote branching which will fill the trellis with bushy growth.</li>
                <li>The vining plant is prone to spider mites, which can be combated with horticultural oil or neem oil.</li>
            </ul>
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Partial shade.</td>
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
                    <td>10 degrees C</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Apply any organic fertilizer.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Poinsettia Special Features</h3>
        <p>
            <ul>
                <li>Grown primarily as a pot plant, poinsettias are a big industry representing about 85% of potted plant Christmas season sales. The USA exports poinsettia plants about 90% of the world.</li>
                <li>The plant is used for ornamental purpose</li>
                <li>Its generally kep indoor in living room and in terrac area</li>
            </ul>
        </p>
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
                <h6>How to maintain Poinsettia plants?</h6>
                <p>Light: Poinsettias need a indirect bright light. Waterless (about once a week) when the top layer of the soil (1-2 inch) feels dry to touch ,after the blooms and leaves drop or shrivel. The plant needs this rest period after its blooming season. Cut back the stems to half their size in March or April. When new growth begins to appear, its safe to resume a more normal watering and feeding schedule. Use regular houseplant food, and follow the manufacturers instructions. Move the plant outdoors when the outside nighttime temperatures rise above 55 degrees Fahrenheit. Provide light but avoid placing it in direct sunlight. Plant the poinsettia in the ground, or leave it in the pot if you wish. Repotting may be necessary at the end of summer after the plant has grown. If the poinsettia is planted in the ground, you can expect a shrub-like plant during the summer. Pinch back new growth in June, July or August to promote a bushier plant.</p>
            </li>
            <li>
                <h6>Where to keep Poinsettia plants?</h6>
                <p>Keep your plant at such a location where it will get a natural bright indirect light each day.</p>
            </li>
            <li>
                <h6>When to plant Poinsettia seeds?</h6>
                <p>You can plant Poinsettia seeds in the winter season.</p>
            </li>
            <li>
                <h6>Do Poinsettia plants need a lot of water?</h6>
                <p>No Poinsettia doesnt need a lot of water. water when the upper layer of the soil (1-2 inches) feels dry to touch. Check the moisture in the soil before watering it, Poke your finger into the soil, if dry then apply water. Do not overwater the plant. This plant doesnot like to sit in waterlogged soil, so drainage is important to prevent rot.</p>
            </li>
            <li>
                <h6>When to plant Poinsettia from cuttings?</h6>
                <p>Propagate Poinsettia cuttings in summer after the plant begins to produce new shoots at the base.</p>
            </li>
        </ul>
    </div>
</body>

</html>
