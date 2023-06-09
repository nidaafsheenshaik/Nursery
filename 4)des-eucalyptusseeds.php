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
    <title>Eucalyptus Seeds</title>
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
                <img src="images/eucalyptusseeds.jpg" alt="Eucalyptus" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Eucalyptus Citriodora, Lemon Eucalyptus - Seeds</h3>
                    <p>⭐⭐⭐ (24 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 89</h6>(Inclusive of all taxes)</p>
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
        <p>Eucalyptus plants are evergreen trees and shrubs in the genus Eucalyptus and family Myrtaceae.</p>
        <p>Eucalyptus is a genus of ornamental plants with attractive aromatic leaves. Although eucalyptus trees are enormous, many eucalyptus plants can grow in pots and make stunning indoor houseplants. The round or lance-shaped eucalyptus leaves are useful for drying to create dried eucalyptus bunches to enhance your interior décor.</p>
        <p>Eucalyptus leaves contain large amounts of essential oils. The intense spicy scents and cooling effect are reasons why crushed eucalyptus leaves and eucalyptus oil are popular in aromatherapy.</p>
    </div>
    <!-- Planting and care -->
    <div class="container care">
        <h3>Planting and care</h3>
        <p>Eucalyptus trees and shrubs grow in the ground, and they also grow in large pots or containers outdoors or indoors.
            If you live in USDA zones 8 through 11, you can grow eucalyptus shrubs and trees in the ground or pots outdoors. The ideal temperature range for growing eucalyptus is 65°F to 71°F (18°C – 22°C). All you need to grow outdoor eucalyptus plants is to choose a sunny location.
            If you live in colder climates, you can easily grow potted eucalyptus plants indoors. Take the pots outdoors in the summer. Then bring them back inside in the fall to protect the plant from the cold.</p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Eucalyptus plants growing indoors need plenty of light. Eucalyptus plants growing indoors require at least six hours of sunshine daily.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>Water an indoor eucalyptus plant regularly during the growing season. The best way to water your plant is to wait until the top third of the potting mix is dry. Thoroughly drench the soil until water drains from the bottom. Only water eucalyptus plants as often as the top layer of soil dries.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Should be grown in rich, fertile, loose potting soil with excellent drainage.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>To keep eucalyptus plants thriving indoors, keep the indoor temperature warm—around 68°F to 71°F (20° – 22°C) is ideal. Eucalyptus plants have average humidity needs, so there’s no need to mist the leaves.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Fertilize your potted eucalyptus plant weekly during the growing season – use a low nitrogen houseplant fertilizer. Extra “feeding” provides plenty of nutrients for the fast-growing eucalyptus houseplant. Look for a fertilizer that is high in potassium and low in nitrogen and phosphorus.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>Entire Year</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Eucalyptus Special Features</h3>
        <p>
            <ul>
                <li>Eucalyptus is an attractive indoor plant that is prized for its unusual foliage. Because eucalyptus is a fast-growing plant that requires regular pruning, you’ll have plenty of branches and leaves to use.</li>
                <li>Dry bunches of eucalyptus stems and place the leafy branches in vases for decoration.</li>
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
                <h6>Can Eucalyptus Grow Indoors?</h6>
                <p>Eucalyptus plants grow well indoors if they get plenty of sunlight. Potted eucalyptus plants are ideal for growing in containers as perennials or annuals. But it’s good to remember that eucalyptus plants are fast-growing trees, and some species can grow at a rate of up to 8 ft. (2 m) in one season.</p>
            </li>
            <li>
                <h6>How to Grow Eucalyptus Plants</h6>
                <p>Eucalyptus trees and shrubs grow in the ground, and they also grow in large pots or containers outdoors or indoors.</p>
            </li>
            <li>
                <h6>How to Harvest Eucalyptus Leaves</h6>
                <p>Harvesting eucalyptus branches to use the stems and leaves for floral arrangements is easy. All you need to do is cut the eucalyptus branches to the required height. You can then dry the eucalyptus stems and use them for decoration, or trim off the leaves when they are dried.</p>
            </li>
            <li>
                <h6>How to Preserve Eucalyptus Leaves?</h6>
                <p>You can preserve eucalyptus leaves to use them in craft work. For this, you’ll need glycerin, a large jar, and boiling water. Mix one part glycerin with two parts boiling water. When the liquid has cooled, pour into a large glass jar. Stand the leafy eucalyptus branches in the liquid.</p>
            </li>
            <li>
                <h6>How Long Does Eucalyptus Cut Stem Last?</h6>
                <p>Eucalyptus stem cuttings last for a few days to a few weeks. You can place the cut branches in a vase of water to make the attractive aromatic foliage last longer. The best cuttings—and the ones that last the longest—are from young eucalyptus trees.</p>
            </li>
        </ul>
    </div>
</body>

</html>
