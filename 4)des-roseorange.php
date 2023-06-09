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
    <title>Rose orange</title>
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
                <img src="images/roseorange.jpg" alt="Rose(orange) plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Rose (Lotus,orange) - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (150 reviews)</p>
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
        <p>The rose is a perennial flowering plant.The flowers of the rose grow in many different colors, from the well-known red rose to yellow roses and sometimes white or purple roses, peach, orange.</p>
        <p>The fragrance of Rose flowers depends on its variety and climatic conditions, hence this plant may or may not produce fragrant flowers.The flowers are densely filled with petals, much like antique roses. English roses are a good choice for cutting gardens.</p>
        <p>Some varieties climb if left unpruned and can be trained along a fence or arbour.The symbolism of rose colours is steeped in tradition. Roses inspired people over thousands of years to develop a language of colour.</p>
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
                    <td>Damask Rose, gulab</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>1-6 ft.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Lotus orange</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Annual</td>
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
                <li>Roses, especially the repeat flowering varieties, need a generous supply of nutrients regularly through the growing season.</li>
                <li>Slow release or organic fertilizers applied to the ground are the most effective; however foliar feeds are also valuable for a quick effect and to help keep the leaves healthy.</li>
                <li>Mulching with organic matter (a very wide range is available) is a very important part of rose growing, helping to conserve water, keeping the ground cool and feeding the micro organisms and worms in the soil.</li>
                <li>It should preferably be well rotted and, if it starts to disappear during the season, be reapplied.</li>
                <li>The best way to keep your plants free from pests and diseases is to choose disease resistant varieties and to grow them as well as possible.</li>
                <li>Early spring is the best time to prune. If it is still winter, your overeager cuts may lead to frost damage.</li>
                <li>Pruning is pretty straightforward: Remove all non-negotiable growth, thin the plants, and then shape them.</li>
                <li>Experts advise cutting 1/4 inch above a bud eye so the bud eye does not dry out.</li>
            </ul>
        </p>
        <p style="padding-bottom: 20px;">
            <p>When you bring rose plant and cannot plant it immediately, leave the plant in the box and lightly sprinkle the roots every day. Do not let the roots to dry out. Plant the rose plant as soon as possible. If cannot plant it immediately to the desired location, plant it in a container.Dig a planting hole according to the roots, the rose plant has.</p>
            <p>If it is 2 yrs, then dig a planting hole at least 6 inches deeper, so the roots of the plant can be accommodated without crowding or bending. Mix some fertilizer (cow manure or organic compost) with the soil in the planting hole, plant the rose plant carefully, spread its root and fill with soil. Firm the soil tightly around the plant.
                If the rose plant is not so old and has fewer roots then dig a lesser deeper planting hole.</p>
            <p>Cut a stem from a rose plant. Mix fertilizer with some soil, add little water to this mixture and make a firmly tight lump at one end of the stem.</p>
            <p>Dig a planting hole (index finger deep) place the stem with lump side down, fill with soil. Firm the soil tightly. Keep the soil moist continuously for 2-3 weeks.</p>
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
                    <td>Keep soil moist throughout the growing season.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Rose is grown in well-drained soil with a sunlight. Clay or loamy soil is ideal.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>10 degrees C and above</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>
                        <ul>
                            <li>During active growth and blooming stage, rose plants need more fertilizing. The plant need frequently feeding and generously.</li>
                            <li>Cow manure is best preffered as fertilizer for the rose plants, but other organic fertilizers like compost are also used. Rose plants requires 2-3 times feeding during the season.</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Rose(Orange) Special Features</h3>
        <p>
            <ul>
                <li>Roses are best known as ornamental plants grown for their flowers in the garden and sometimes indoors</li>
                <li>They have been also used for commercial perfumery and commercial cut flower crops</li>
                <li>Some are used as landscape plants, for hedging</li>
                <li>The majority of ornamental roses are hybrids that were bred for their flowers</li>
                <li>A few species of roses are grown for attractive or scented foliage</li>
                <li>Some species have been used for stomach problems, and are being investigated for controlling cancer growth</li>
                <li>The fruits of many species have significant levels of vitamins and have been used as a food supplement</li>
                <li>Some species have been used for stomach problems, and are being investigated for controlling cancer growth</li>
                <li>Rose hips are occasionally made into jam, jelly, marmalade, and soup or are brewed for tea, primarily for their high vitamin C content</li>
                <li>Rose petals or flower buds are sometimes used to flavor ordinary tea or combined with other herbs to make herbal teas</li>
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
                <h6>How to grow Rose plant in a pot?</h6>
                <p>To grow Rose plant in a pot consider the following points 1. To grow plant in pot it should be of 7-10 inch upper diameter with drainage hole-and overgrown plant is transferred in to main field. 2. Sunlight- At least 4-6 hours of natural direct bright sunlight is required. 3. Soil- Soil or potting mixture should be well drained, fertile and nutrient rich. 4. Water- Water the plant when 1-2 inch surface soil layer feels dry to touch. 5. Fertilizer - Apply any organic fertilizer during the main growing season (Sep-Oct). </p>
            </li>
            <li>
                <h6>How often should Rose plants be watered?</h6>
                <p>1. Water the plant as per requirement by checking 1-2 inch layer of surface soil feels dry to touch then water the Rose plant. 2. Water thoroughly in the summer and reduce watering in winter and rainy season.</p>
            </li>
            <li>
                <h6>How long do Rose plants last?</h6>
                <p>Rose plants are perennial plants and with proper care and management can survive more than 5 years.</p>
            </li>
            <li>
                <h6>Are Rose plants poisonous for animals?</h6>
                <p>No, Rose plants are not poisonous but eating of Rose with thorns by animal may cause damage to them.</p>
            </li>
            <li>
                <h6>Can Rose plant grow without sunlight?</h6>
                <p>No, Rose plant require at least 4-6 hours of direct bright sunlight a day.</p>
            </li>
        </ul>
    </div>
</body>

</html>
