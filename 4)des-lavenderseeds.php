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
    <title>Lavender Seeds</title>
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
                <img src="images/lavenderseeds.jpg" alt="Lavender" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Lavender - Flower Seeds</h3>
                    <p>⭐⭐⭐⭐ (283 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 145</h6>(Inclusive of all taxes)</p>
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
        <p>Lavender has the special sweet fragrance. 1 packet contains 50 seeds of lavender - seeds.</p>
        <p>These aromatic subshrubs are popular in herb gardens as well as in the perennial border, and the intensely perfumed blue-violet, mauve, pink, or white flowers are treasured for drying and making potpourri.</p>
        <p>The foliage of Lavender is a standout in the garden where its silvery or gray-green hues contrast nicely with its neighbors. A tough plant for sunny dry spots and one of the longest-blooming tough semi-shrubs around, lavender (genus Lavandula) would find a place in most sunny gardens.</p>
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
                    <td>Lavender</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>
                        <ul>
                            <li>Height: 1.00 to 1.50 feet</li>
                            <li>Spread: 1.00 to 1.50 feet</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Lavender blue</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>June to August</td>
                </tr>
                <tr>
                    <td>
                        <h6>Difficulty Level</h6>
                    </td>
                    <td>Moderate</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Planting and care -->
    <div class="container care">
        <h3>Planting and care</h3>
        <p style="padding-bottom: 20px;">
            <ul>
                <li>Lavender is a woody subshrub, and pruning techniques should reflect this</li>
                <li>Do not prune in spring until new growth appears, and leave plants alone for the winter</li>
                <li>Plants may be sheared back and shaped after flowering, but do not cut low into old wood</li>
                <li>If older plants become unsightly, cut back by a third every three years</li>
            </ul>
        </p>
        <h3>Lavender Plant care</h3>
        <p style="padding-bottom: 20px;">
            <ul>
                <li>Soak it deeply in the evenings, daily until planted, then water again for about an hour before planting, and of course, after as well</li>
                <li>Prune the top of the plant to ensure a productive plant</li>
                <li>Loosen the roots from the potting soil by working the trowel teeth into the soil block</li>
                <li>Place plant just above the blend of stone/ lime / bonemeal / compost, not allowing the roots to touch the blend and gather soil around base of plant</li>
                <li>Water deeply</li>
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
                    <td>In the summer plants in pots will need frequent watering, but remember be careful not to waterlog lavender.This should be unnecessary after establishment, except plants in pots which need frequent watering during summer. See also Overwintering below.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Grow in average, dry to medium, require well-drained neutral to alkaline soil,, alkaline soil in full sun. Prefers a light, sandy soil with somewhat low fertility.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>50 to 60 degrees Fahrenheit.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Lavenders do well on poor soils and need little fertiliser, we just add a sprinkling of potash around the base of the plant in the late summer and spring. Do not add high nitrogen feeds or manure this can cause the plants to grow tall and weak.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>
                        <ul>
                            <li>Pruning and harvesting lavender are essentially the same - youre removing the flowering stalks from the bush.</li>
                            <li>This promotes new growth in the plants roots, keeps the plant looking neat, and leaves you with 1 - 8 bunches of fresh lavender flowers.</li>
                            <li>Lavender should be cut when the flower have just opened in spring.</li>
                            <li>This is the time during which theyre most fragrant and beautiful.</li>
                            <li>Monitor the lavender in the early spring so you can catch it right when the flowers open.</li>
                            <li>If you cut lavender in the spring, the plant may have time to produce more flowers for a second harvest.</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Lavender Plant Special Features</h3>
        <ul>
            <li>Dried lavender is used in bunches, bags and pot-pourri for its scent and as a moth and insect repellant</li>
            <li>Lavender is one of the most highly prized plants for medicinal use</li>
            <li>It is well known as an antiseptic and anaesthetic and is fantastic for relieving anxiety and stress</li>
            <li>Lavender is commonly and increasingly used as an oil in aromatherapy and is great as a massage oil for relieving muscular tension and rheumatic pain</li>
            <li>Lavender oil can be used to soothe burns, insect bites and stings</li>
            <li>Try mixing lavender with other herbs in a vegetarian pizza or goats cheese tartlets to produce a floral herbal flavour</li>
            <li>A few drops of oil on a pillow will help with sleep</li>
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
                <h6>How much water does a lavender need?</h6>
                <p>A lavender prefers watering In the summer plants in pots will need frequent watering, but remember be careful not to waterlog lavender.This should be unnecessary after establishment, except plants in pots which need frequent watering during summer. See also Overwintering below.</p>
            </li>
            <li>
                <h6>What kind of soil does a lavender need?</h6>
                <p>Grow in average, dry to medium, require well-drained neutral to alkaline soil,, alkaline soil in full sun. Prefers a light, sandy soil with somewhat low fertility.</p>
            </li>
            <li>
                <h6>How should I fertilize my lavender ?</h6>
                <p>Lavenders do well on poor soils and need little fertiliser, we just add a sprinkling of potash around the base of the plant in the late summer and spring. Do not add high nitrogen feeds or manure this can cause the plants to grow tall and weak.</p>
            </li>
            <li>
                <h6>How much sunlight does a lavender need?</h6>
                <p>A lavender prefers Full sun.</p>
            </li>
        </ul>
    </div>
</body>

</html>
