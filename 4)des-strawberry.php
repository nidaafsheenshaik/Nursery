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
    <title>Strawberry Plant</title>
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
                <img src="images/strawberry.jpg" alt="Strawberry plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Strawberry Plant (Sweet Charlie Jharaber, Grafted) - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (443 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 349</h6>(Inclusive of all taxes)</p>
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
        <p>Strawberry (Fragaria) that is widely grown. It is cultivated worldwide for its fruit. The fruit is widely appreciated for its characteristic aroma, bright red color, juicy texture, and sweetness.</p>
        <p>Sweet Charlie strawberry plants like full sun and needs moist, well-drained soil that is rich in organic matter. Additionally, if rainfall is not adequate, supplemental watering will be required for plant health and strawberry production.</p>
        <p>Strawberry cultivars vary widely in size, color, flavor, shape, degree of fertility, the season of ripening, liability to disease and constitution of plant. Some vary in foliage, and some vary materially in the relative development of their sexual organs. In most cases, the flowers appear hermaphroditic in structure, but function as either male or female. For purposes of commercial production, plants are propagated from runners and, in general, distributed as either bare root plants or plugs.</p>
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
                    <td>Strawberry</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>18-24 inches</td>
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
                    <td>June</td>
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
        <p>Sweet Charlie strawberry plants have an atypical ripening profile that can be quite variable. Generally the variety has two weeks of early production that produces very good, high-quality strawberries. However, after the initial two weeks, size tends to drop off drastically in the early midseason.</p>
        <p style="padding-bottom: 20px;">
            <ul>
                <li>Sweet Charlie is a vigorous produce and a great choice for the home garden.They are firm, can tolerate gentle shipping over short distances, and have deep red mature strawberries.</li>
                <li>The plants have leaves that are medium to dark green, slightly cupped, and semi-glossy.</li>
                <li>In the first year, discourage plants from fruiting. If not allowed to bear fruit, they will spend their food reserves on developing healthy roots.</li>
                <li>The yields will be much greater in the second year.First and second generations produce higher yields. Try to space each plant about 10 inches apart.Moisture is very important due to shallow roots. Water adequately, about one inch per week.</li>
                <li>They need a lot of water when the runners and flowers are developing and again in the fall when the plants are mature.When the growing season is over, mow or cut the foliage down to one inch and mulch plants about 4 inches deep with straw, pine needles or other organic material.</li>
                <li>Remove mulch in early spring, after danger of frost has passed.Row covers are a good option for protecting blossoms and fruit from birds.</li>
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
                    <td>Keep soil moist throughout the growing season.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>They prefer slightly acidic soil with a pH between 5.5 and 6.8.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>15 degrees C</td>
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
        <h3>Strawberry Plant Special Features</h3>
        <p>
            <ul>
                <li>Strawberry consumption may be associated with a decreased cardiovascular disease risk and that phytochemicals present in strawberries have anti-inflammatory or anticancer properties in laboratory studies</li>
                <li>Epidemiological studies have associated strawberry consumption with lower rates of hypertension, inflammation, cancer, and death from cardiovascular diseases</li>
                <li>Certain studies have suggested that strawberry consumption may have beneficial effects in humans such as lowering blood LDL cholesterol levels, total cholesterol, reducing the oxidation of LDL cholesterol, and decreasing the spike in blood sugar after high sugar meals and the spike in blood cholesterol seen after a high-fat meal</li>
                <li>Sauces and Syrups, Dips and Salsas, Baked Goods, Jams and Jellies, Smoothies</li>
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
                <h6>Will strawberry plants produce the first year?</h6>
                <p>Yes,Strawberry will take 2-4 months to bear flower.Strawberries are usually ready for harvest 30 days after flowering. This may vary depending on the weather conditions and the variety of strawberry you are growing.</p>
            </li>
            <li>
                <h6>Are strawberry plants perennials?</h6>
                <p>Yes,Strawberry is perennial herb.</p>
            </li>
            <li>
                <h6>Should strawberry plants be covered for winter?</h6>
                <p>Yes, For commercial or large scale growers Poly tunnels can also be used to protect the strawberry fruit from frost in winter.</p>
            </li>
            <li>
                <h6>Does strawberry plants need full sun?</h6>
                <p>Yes, Strawberry plant need more than 6 hours of direct bright sunlight for proper growth and development.</p>
            </li>
            <li>
                <h6>When do strawberry plants flower?</h6>
                <p>Strawberry plant starts flowering during October-November month.</p>
            </li>
        </ul>
    </div>
</body>

</html>
