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
    <title>Sitaphal Plant</title>
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
                <img src="images/sitaphal.jpg" alt="Sitaphal plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Sitaphal, Annona squamosa (Grafted) - Plant</h3>
                    <p>⭐⭐⭐⭐ (42 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 499</h6>(Inclusive of all taxes)</p>
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
                        <li>Plant flower n growth booster on orders above ₹ 100</li>
                        <li>₹ 250 Surprise Gift above ₹ 500</li>
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
        <p>Enjoy fresh,fragrant and sweet creamy white flesh of Custard apple by growing Custard plant easily at your home.</p>
        <p>Custard apple is deciduous perennial fruit plant in Annonaceae family. Branches with light brown bark. Leaves are thin, simple, alternate and occur singly.Flowers are Solitary or in short lateral clusters. Fruits are aggregate and soft fruits from the numerous and loosely united pistils of a flower.</p>
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
                    <td>Sugar Apple, Custard apple, Sita Phal, Sharifa</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>10-20 ft.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Yellow-green</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Spring, Summer.</td>
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
                <li>There must be adequate moisture in the soil to encourage vegetative growth and blooms that occur on the new branches.</li>
                <li>The tree should be watered in every 2 to 4 weeks during the period of low growth and every 3 to 5 days while it is flowering and setting fruits.</li>
                <li>Sugar apple is normally fairly low maintenance and quite easy to grow, as long as a level of basic care is provided throughout the year.</li>
                <li>Growing sugar apple tree requires weed management.</li>
                <li>the sugar apple is susceptible to wind damage. Therefore, it should be planted in a location that is sheltered from the wind.</li>
                <li>Water when top soil (1-2inches) feels dry to touch.</li>
                <li>Do not re-pot for min. 2 weeks after receiving it.</li>
            </ul>
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>More than 6 hours of direct bright sunlight a day.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>
                        <ul>
                            <li>Before water poke your finger/plain small stick into the soil to check the moisture.</li>
                            <li>Water when top soil (1-2 inches) feels dry to touch.</li>
                            <li>Water thoroughly in the summer and reduce watering in winter and rainy season.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>
                        <ul>
                            <li>The soil should be well drained and fertile, rich in organic content for growing plant.</li>
                            <li>Grow well in pH range of 6.5 to 7.5</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>25 to 41 degrees C</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>During the main growing season (June-July) feed the plant with organic fertilizer.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>Summer, Spring</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Sitaphal Plant Special Features</h3>
        <p>
            <ul>
                <li>A bark decoction is used to stop diarrhoea, while the root is used in the treatment of dysentery</li>
                <li>Sugar-apple is high in energy, an excellent source of vitamin C and manganese, a good source of thiamine and vitamin B6</li>
                <li>The ripe fruits are edible</li>
                <li>The sweet fruits are used in preserves, drinks, ice cream, puddings etc</li>
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
                <h6>How to plant sitaphal seeds?</h6>
                <p>To plant Sitaphal seed consider the following points 1. Use a pot having 7-10 inch upper diameter and drainage holes. 2. Fill the pot with well drained soil. To sow seeds make a hole about 1/2 inch in soil, place seeds in it, cover with soil and apply water. 3. Maintain the moisture in soil by applying water if soil in pot (1-2 inch) feels dry to touch. 4. Keep the pot at a location receiving indirect bright light. Seeds will germinate within a week.</p>
            </li>
            <li>
                <h6>How to plant sitafal?</h6>
                <p>To plant Sitafal tree consider the following points 1. To grow Sitafal plant in pot, choose a pot having of 7-10 inch upper diameter and drainage holes. 2. Fill the 1/3 pot with well drained soil rich in organic content and place the plant in the center of the pot. 3. Fill the remaining pot with same soil. 4. Keep the plant in indirect bright light location for 2-3 days and then gradually move to a location that receives more than 6 hours of direct sunlight. 5. Once the plant is overgrown in current pot, plant it in field. If you are planting purchased plant directly in ground follow below procedure. 1. Keep the plant in indirect bright light for 3-4 days and gradually move to a location receiving direct sunlight for more than 6 hours a day. 2. Dig a pit twice the size of the bag/pot the current plant is in. 3. Fill the 1/3 of pit with soil rich in organic content, place the plant in center and fill the pit with same soil. 4. Apply water. General caring tips- Plant should get more than 6 hours of sunlight a day. Water the plant when surface soil (1-2 inch) feels dry to touch. Apply any organic fertilizer during the main growing season(June-July).</p>
            </li>
        </ul>
    </div>
</body>

</html>
