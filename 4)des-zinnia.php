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
    <title>Zinnia Plant</title>
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
                <img src="images/zinnia.jpg" alt="Zinnia plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Zinnia (Orange) - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (11 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 209</h6>(Inclusive of all taxes)</p>
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
        <p>Zinnias bloom in a wide variety of colors with large, mixed blooms.</p>
        <p>Zinnias have bright, solitary, daisy-like flower heads on a single, erect stem. The most common zinnia is "dahlia-flowered" and grows up to three feet. Other types are "cactus-flowered."One of the easy to grow annual flower, Zinnias bloom from mid-summer all the way until frost.</p>
        <p>Zinnias come in an array of colors, multi-colors and hues. Zinnias come as yellow, orange, white, red, rose, pink, purple, lilac and multi-colored blooms. Zinnia varieties include both miniatures and giants that range from about a foot to over three feet tal.</p>
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
                    <td>The Zinnia species with small, orange flowers is Zinnia augustifolia, while the species with red, purple, or yellow petals is Zinnia peruviana.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>18 to 24 inches.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Red, Pink, Orange, Yellow, Purple, White, Multicolor</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Summer</td>
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
        <p>Zinnia leaves are opposite and usually stalkless (sessile), with a shape ranging from linear to ovate, and pale to middle green in color. The flowers have a range of appearances, from a single row of petals, to a dome shape, with the colors white, chartreuse, yellow, orange, red, purple, and lilac.</p>
        <p style="padding-bottom: 20px;">
            <ul>
                <li>Zinnia care may also include watering in the early morning, which allows the foliage and flowers ample time to dry off before nightfall.</li>
                <li>Feed every 4-6 weeks with a balanced, all purpose fertilizer.</li>
                <li>Zinnias should be planted 12-24" apart in rich, well drained garden soil.</li>
                <li>Zinnias dislike having wet foliage, so if possible, they should be watered with a soaker hose.</li>
                <li>Once established, your Zinnia will only need watering during extended periods of drought.</li>
                <li>Deadhead regularly to keep plants flowering until fall.</li>
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
                    <td>Keep the soil moist, but not soggy, for young plants. Mature zinnias require less watering, as grown flowers are somewhat drought tolerant.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Rich, well-drained soil.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>above 50 F. (10 C).</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>A 5-10-5 fertilizer in mid season will help to keep zinnia plants growing strongly.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Zinnia Special Features</h3>
        <p>
            <ul>
                <li>Zinnias seem especially favored by butterflies, and many gardeners add zinnias specifically to attract them.</li>
                <li>Used in an annual or mixed border</li>
                <li>Smaller zinnias are suitable for edging, window boxes or other containers.</li>
                <li>The narrow-leaf zinnia also works well in hanging baskets</li>
                <li>Zinnias are very popular for cut flowers</li>
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
                <h6>Are Zinnia flowers edible?</h6>
                <p>No, Zinnia flowers are not edible.</p>
            </li>
            <li>
                <h6>Does Zinnia self seed?</h6>
                <p>Yes, Zinnia produces seeds.</p>
            </li>
            <li>
                <h6>Is Zinnia a perennial?</h6>
                <p>No, Zinnia is an annual flowering plant.</p>
            </li>
            <li>
                <h6>Do Zinnias attract bees and butterflies?</h6>
                <p>Yes, Zinnia attracts the bees and butterflies.</p>
            </li>
            <li>
                <h6>Is Zinnia a summer flower?</h6>
                <p>Yes, Zinnia is a summer-flowering plant.</p>
            </li>
        </ul>
    </div>
</body>

</html>
