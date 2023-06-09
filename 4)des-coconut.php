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
    <title>Coconut Plant</title>
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
                <img src="images/coconut.jpg" alt="Coconut plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Nariyal, Coconut Tree (Green, Grown Through Seeds) - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (116 reviews)</p>
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
        <p>Growing a coconut palm tree is easy and fun.</p>
        <p>A coconut tree is an exceptional plant which is at home in tropical countries. With its pinnate leaves the coconut palm is beautiful to look at.</p>
        <p>If you have access to a fresh coconut, you might think that it would be fun to grow a coconut plant, and you would be right. Growing a coconut palm tree is easy and fun. Below you will find the steps for planting coconuts and growing coconut palms from them.Coconuts are exotic, edible fruits produced in coconut trees. The coconut tree is a kind of palm tree with a single, straight trunk and it has got lots of uses and great importance since prehistoric times. It is one of those trees where you can find uses for all the parts including the fruits, wood and leaves. In many places in South India, coconut trees are widely cultivated and they are grown in homes as well as farms for profit as well as for home use.Easily grown in average, medium moisture, well-drained soils in full sun. Prefers fertile, slightly alkaline, loose, somewhat gritty loams with good drainage. Add lime to acidic soils to adjust the soil pH. Best grown with regular and consistent moisture during the growing season.</p>
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
                    <td>nariyal,coconut,daap,kopra</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>Upto 30 m</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>white flower seen inside coconut when broken(its seen rarely)</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>May to june.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Difficulty Level</h6>
                    </td>
                    <td>Easy to grow.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Planting and care -->
    <div class="container care">
        <h3>Planting and care</h3>
        <p>To start to grow a coconut plant, begin with a fresh coconut that still has the husk on it. When you shake it, it still should sound like it has water in it. Soak it in water for two to three days. After the coconut has soaked, place it in a container filled with well-draining potting soil.</p>
        <p style="padding-bottom: 20px;">
            <ul>
                <li>First, water the coconut tree frequently. As long as the soil drains well, you really cant water it too often.</li>
                <li>If you decide to repot your coconut tree, remember to add sand or vermiculite to the new soil to keep the water draining well.</li>
                <li>Second, growing coconut palms are heavy feeders that require regular, complete fertilizer.</li>
                <li>Look for a fertilizer that provides both the basic nutrients plus trace nutrients like boron, manganese and magnesium.</li>
                <li>Third, coconut palms are very cold sensitive.</li>
                <li>If you live in an area that gets cold, your coconut plant will need to come inside for the winter.</li>
                <li>Provide supplemental light and keep it away from drafts.</li>
                <li>In the summer, grow it outdoors and make sure you place it in a very sunny and warm spot.</li>
            </ul>
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
                    <td>From May to September, the palm should be abundantly watered ,however without drowning the plant. From October, the amount of water can be slightly reduced.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Well-drained soil. The soil should be sandy-loamy and alkaline which is the beach/cayes environment.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>21 C and above</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Starting in spring, the coconut palm should be fertilized with liquid fertilizer.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Coconut Special Features</h3>
        <ul>
            <li>As most of us already know, the most common uses come from the edible fruits known as coconuts</li>
            <li>Coconuts can be eaten either raw or cooked and they are rich in vitamins, minerals and powerful antioxidants</li>
            <li>The white flesh of the fruit need to be separated from the outer hard shell and you may use a coconut scraper to grate the fruit or use a coconut meat removal knife to separate the flesh, after opening the shell
            </li>
            <li>The freshly grated coconuts can be easily added to your recipes or you can store it in refrigerator for few days</li>
            <li>It is usually used to thicken soups and stews and you can also use it as a substitute for milk</li>
            <li>Coconut water is different from the coconut milk</li>
            <li>When you break the hard shell of coconut to open it, the fruit has a mildly sweet water inside which is known for its extreme health benefits</li>
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
                <h6>How to plant coconut tree?</h6>
                <p>To plant Coconut tree consider the following points. 1. To grow plant in pot, choose a pot having of 7-10 inch upper diameter and drainage holes. 2. Fill the 1/3 pot with well drained soil rich in organic content and place the plant in the center of the pot. 3. Fill the remaining pot with same soil. 4. Keep the plant in indirect bright light location for 2-3 days and then gradually move to a location that receives more than 6 hours of direct sunlight. 5. Once the plant is overgrown in current pot, plant it in field. If you are planting purchased plant directly in ground follow below procedure. 1. Keep the plant in indirect bright light for 3-4 days and gradually move to a location receiving direct sunlight for more than 6 hours a day. 2. Dig a pit twice the size of the bag/pot the current plant is in. 3. Fill the 1/3 of pit with soil rich in organic content, place the plant in center and fill the pit with same soil. 4. Apply water. General caring tips- Plant should get more than 6 hours of sunlight a day. Water the plant when surface soil (1-2 inch) feels dry to touch. Apply any organic fertilizer during the main growing season (June-July).</p>
            </li>
            <li>
                <h6>Does coconut oil help plants grow?</h6>
                <p>No, Coconut oil dont help to grow plant.</p>
            </li>
            <li>
                <h6>Is coconut a plantation crop?</h6>
                <p>Yes, Coconut is plantation crop.</p>
            </li>
            <li>
                <h6>When to plant coconut tree?</h6>
                <p>June-July is best time to plant coconut tree.</p>
            </li>
        </ul>
    </div>
</body>

</html>
