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
    <title>Papaya Plant</title>
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

<div class="Main">
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
                <img src="images/papaya.jpg" alt="Papaya plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Papaya, Papita ( Grown through seeds ) - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (85 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 329</h6>(Inclusive of all taxes)</p>
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
        <p>Papaya plants grow in three sexes: male, female, hermaphrodite. The male produces only pollen, never fruit. The female will produce small, inedible fruits unless pollinated. The hermaphrodite can self-pollinate since its flowers contain both male stamens and female ovaries.</p>
        <p>The papaya plant has an erect branch-less trunk 6-20 ft tall, and a palmlike head of foliage at the top. The trunk remains somewhat succulent and soft wooded, and never develops true bark. It is ringed with prominent scars from previous leaf stems and contains an acrid milky latex sap.</p>
        <p>The leaves are deeply incised and lobed, up to 24 in across and borne on 24 in petioles. The five-petal flowers are fleshy, waxy and fragrant.There are three different tree types, female plants, male plants and bisexual plants. The female and bisexual plants are the only ones that produce fruit. Depending on the tree type, this fruit is small to medium round or medium to large oblong shape. Fruit flesh is generally yellow, although some red and orange types exist as well.</p>
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
                    <td>Papaya</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>30 feet.</td>
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
        <p>The best place to plant a papaya is on the south or south-east side of a house with some protection from wind and cold weather.Spread a 3-inch layer of organic mulch around the base of the tree, leaving an 8-inch gap between the edge of the mulch and the tree trunk.</p>
        <p style="padding-bottom: 20px;">Dig a hole about twice the size of the bag in which the young tree is growing.Remove the soil from the hole and add some compost and manure. ...Take the plant out of the container. ...Do not disturb the roots.Place the tree in the centre of the hole.</p>
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
                    <td>Because of shallow roots, growing papaya trees will not tolerate wet conditions.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Well-drained soil.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>Above 55 degrees F.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Provide young plants fertilizer every 14 days using ¼ pound of complete fertilizer. Fertilize older trees with 1 to 2 pounds of fertilizer once a month.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Papaya Special Features</h3>
        <ul>
            <li>Being a good source of Vitamin A and Papain, this fruit helps in removing dead skin cells along with breaking down the inactive proteins</li>
            <li>In simple words it means, it helps you keep your skin hydrated</li>
            <li>The application of finely grounded paste of raw papaya on the face for 25 minutes helps reduce those unwanted pimples and other embarrassing blemishes on the face</li>
            <li>It is extracted from the tree and the fruit to make dietary supplements, and is also used as a major ingredient in some chewing gums</li>
            <li>Apart from Papains, papaya is also a rich source of antioxidant nutrients such as carotenes, vitamin C and flavonoids the B vitamins, folate and pantothenic acid; and the minerals, potassium and magnesium; and fibre</li>
            <li>The pulp of this fruit is also a basic component of many facial creams, and shampoos</li>
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
                <h6>How to plant Papaya seeds in pots?</h6>
                <p>To plant Papaya seeds in pots consider the following points 1. Use a pot with having a 7-10 inch upper diameter and drainage holes. 2. Fill the pot with well-drained soil. To sow seeds make a hole about 1 inch in soil, place seeds in it, cover with soil and apply water. 3. Maintain the moisture in soil by applying water if soil in a pot (1-2 inches) feels dry to touch. 4. Keep the pot at a location receiving indirect bright light. Seeds will germinate within two weeks. </p>
            </li>
            <li>
                <h6>Can you plant Papaya in a pot?</h6>
                <p>Yes, you can plant Papaya fruit in the pot(7-10 inches).</p>
            </li>
            <li>
                <h6>Can Papaya tree be grown in pots?</h6>
                <p>Yes, you can plant Papaya fruit in the pot having a 7- 10 inch upper diameter and drainage holes.</p>
            </li>
            <li>
                <h6>Is Papaya flowering plant?</h6>
                <p>Yes, Papaya is a flowering plant.</p>
            </li>
            <li>
                <h6>Why some Papaya plants fail to fruit?</h6>
                <p>The plant may begin to develop fruits, but the fruits drop from the plant when they are about golf-ball size. This is not because the plant is unhealthy or undergrowth stress. It is a natural abortion of a female flower that had not been pollinated and therefore failed to develop into a fruit. Papaya plants occur in one of three sexual forms that are male, female, or hermaphrodite. These forms are exÂ­ pressed in the plantâ€™s flower. Male flowers have no ovary and do not produce fruit.</p>
            </li>
        </ul>
    </div>
</body>

</html>
