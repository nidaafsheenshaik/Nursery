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
    <title>Hibiscus Plant</title>
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
                <img src="images/hibiscusorange.jpg" alt="Hibiscus plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Hibiscus, Gudhal Flower (Orange) - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (87 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 309</h6>(Inclusive of all taxes)</p>
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
        <p>Hibiscus are delightful shrubs with dark green leaves. Giving a hibiscus meant that the giver was acknowledging the receivers delicate beauty.</p>
        <ul>
            <li>One of the best attractive flowering plants.</li>
            <li>Low maintenance plant.</li>
            <li>Perfect plant for outdoor garden.</li>
            <li>Symbolize the fleeting and beauty of fame or personal glory.</li>
        </ul>
        <p>This product does not have the flowers at the time of shipping. Afterward, the plant will bloom and it could be of an orange-colored flower. Hibiscus is a genus of flowering plants in the mallow family, Malvaceae.</p>
        <p>It is quite large, containing several hundred species that are native to warm-temperate, subtropical and tropical regions throughout the world. Hibiscus are deciduous annual and perennial herbaceous plants with dark green alternate, ovate leaves. The flowers are large, conspicuous, trumpet-shaped, with five or more petals orange color.Hibiscus plants are tropical beauties that will bring an exotic look to your garden. They are durable plants that can grow to be up to 4.5 meters in height, The flowers are attractive to butterflies and hummingbirds.</p>
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
                    <td>China rose, Hawaiian hibiscus, rose mallow</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>Up to 4.5 meters.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Orange color.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Throughout the year.</td>
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
                <li>At least five to six hours of sunlight a day is ideal for flowering and plant grow well in direct bright light .</li>
                <li>The soil should be well drained and rich in organic content for growing Hibiscus plant.</li>
                <li>Do not overwater the plant.</li>
                <li>Water the plant when the top soil (1-2 inch) in pot feels dry to touch.</li>
                <li>Water thoroughly in the summer and reduce watering in winter and rainy season.</li>
                <li>During the main growing season (August-December) feed the plant with organic fertilizer once a month.</li>
                <li>Loosen the topsoil without disturbing the roots of the plant so it can uptake the nutrients and moisture easily.</li>
                <li>Remove dead, infected or damaged plant parts and discard them away from the plants.</li>
                <li>For any insect attack or disease, you can use Neem oil, Eucalyptus oil or Citrus oil spray for primary treatment.</li>
            </ul>
        </p>
        <h3>Hibiscus Plant care</h3>
        <p style="padding-bottom: 20px;">
            <ul>
                <li>Check the moisture in the soil before watering it.</li>
                <li>Poke your finger into the soil, if dry then apply water.</li>
                <li>Keep the plant in direct bright light.</li>
                <li>Do not re-pot for min. 2 weeks after receiving it.</li>
            </ul>
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Natural bright light/indirect bright light.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>Poke your finger/plain small stick into the soil to check the moisture. Water when topsoil (1-2 inches) feels dry to touch. Water thoroughly in the summer and reduce watering in winter and rainy season.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Soil should be well drain and fertile, rich in organic content.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>16 to 32 Degrees Celsius.</td>
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
        <h3>Hibiscus Special Features</h3>
        <ul>
            <li>They are commonly successfully used as landscape shrubs in the warmer parts</li>
            <li>The chemicals in the hibiscus flower help in the growth of hair</li>
            <li>It reduces dandruff and makes the hair black</li>
            <li>The natural oil in this flower acts as a good conditionerThis flower can be used as a natural dye for hairThe oil in this flower can be applied to the skin of patients who are suffering from cellulite which makes the skin to glowThe ash obtained by burning the flower and leaves of this flower can be applied to eyebrows which glazes them blackThis flower can be used as shoe polish by rubbing it on the shoe</li>
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
                <h6>How to grow Hibiscus plant in pot?</h6>
                <p>To grow plant in pot, choose a pot having of 7inch upper diameter and drainage holes. Put a few inches of soil in the new pot. Water your plant thoroughly a day or two before you plan to pot. Turn your plant sideways, hold it gently by the stems, and tap the bottom of its current container until the plant slides out. Place the plant in new pot. You need to put soil into the pot around the rootball. Dont overfill the pot - the soil line should be about 1 inch below the top of the pot. Water the plant.</p>
            </li>
            <li>
                <h6>Can Hibiscus be planted in a pot?</h6>
                <p>Yes, To grow Hibiscus plant in pot, choose a pot having of 7-inch upper diameter and drainage holes</p>
            </li>
            <li>
                <h6>Can a Hibiscus plant be grown indoors?</h6>
                <p>Yes you can grow Hibiscus in indoor at Sunny window and balcony where they will get 4-6 hrs of sunlight</p>
            </li>
            <li>
                <h6>Is Hibiscus plant poisonous to dogs?</h6>
                <p>No, Hibiscus plant is not poisonous to dog.</p>
            </li>
            <li>
                <h6>How to plant Hibiscus tree?</h6>
                <p>1. To plant Hibiscus tree in pot, choose a pot having of 7-inch upper diameter and drainage holes. 2. Fill the 1/3 pot with well-drained soil rich in organic content and place the plant in the center of the pot. 3. Fill the remaining pot with same soil. 4. Keep the plant in indirect bright light location for 2-3 days and then gradually move to a location that receives 4-6 hours of direct sunlight. 5. Once the plant is overgrown in current pot, plant it in field. If you are planting purchased plant directly in ground follow below procedure. 1. Keep the plant in indirect bright light for 3-4 days and gradually move to a location receiving direct sunlight for more than 6 hours a day. 2. Dig a pit twice the size of the bag/pot the current plant is in. 3. Fill the 1/3 of pit with soil rich in organic content, place the plant in center and fill the pit with same soil. 4. Apply water General caring tips Plant should get 4-6 hours of sunlight a day. Water the plant when surface soil (1-2 inch) feels dry to touch. Apply any organic fertilizer during the main growing season Spring (February-March) and Summer (April-June).</p>
            </li>
        </ul>
    </div>
</body>

</html>
