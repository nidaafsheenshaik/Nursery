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
    <title>Jack fruit Plant</title>
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
                <img src="jack fruit.jpg" alt="Jackfruit plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Jack Fruit, Kathal, Artocarpus Heterophyllus - Plant</h3>
                    <p>⭐⭐⭐⭐⭐ (71 reviews)</p>
                </div>
                <div class="plant-cost">
                    <p>
                    <h6>₹ 229</h6>(Inclusive of all taxes)</p>
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
        <p>Jackfruit Bear fruit in the summer season. Fruits are nutrient-rich, aromatic, and flavor that summons thoughts of sunny climates.</p>
        <p>Jackfruit or Kathal (Artocarpus heterophyllus) is a plant which probably originated from the Western Ghats in India. Jackfruit tree is a tropical perennial fruit tree. This has flowers are borne on short branches extending from the trunk and older branches.</p>
        <p>This otherworldly looking oddity has a very thick, rubbery rind with short blunt spikes and up to 500 seeds. The average fruit is around 35 pounds.All parts of the jack-fruit tree produce opalescent, sticky latex and the tree has a very long tap-root.</p>
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
                    <td>Fanas, Jackfruit, Kathal</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>Up to 80 feet</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Pale green</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Early Summer</td>
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
                <li>Jackfruit care dictates the removal of dead wood and thinning of the growing jackfruit tree.</li>
                <li>Pruning to keep the jackfruit at about 15 feet high will also facilitate harvesting.</li>
                <li>Keep the tree roots damp but not wet.</li>
                <li>Apply the organic fertilizer in the spring season.</li>
                <li>Planting is usually done in the month of July-August in rainfed areas and during February-March in irrigated areas. Planting spacing should be 10 X 10 m. Dig pits of 1 m x 1 m x 1 m. Fill in with topsoil mixed with 10 kg of FYM.</li>
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
                    <td>Medium</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Rich, deep and somewhat porous soil.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>25 to 35 degrees C</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Apply any organic fertilizer.</td>
                </tr>
                <tr>
                    <td>
                        <h6>Harvest Season</h6>
                    </td>
                    <td>Summer</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Jackfruit Special Features</h3>
        <ul>
            <li>Fruit shaped like an enormous kidney bean, they have pebbled and rough green skin, and their flavour is indescribable. They are sweet and mild and best served cold.</li>
            <li>Ripe fruit is a valuable source of carbohydrates with a lesser amount of calcium and phosphate</li>
            <li>The pulp of the ripe fruit is eaten fresh or in syrup</li>
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
                <h6>How to plant a jackfruit tree?</h6>
                <p>To plant Jack fruit tree consider the following points 1. To grow Jack fruit tree in pot, choose a pot having of 7-10 inch upper diameter and drainage holes. 2. Fill the 1/3 pot with well drained soil rich in organic content and place the plant in the center of the pot. 3. Fill the remaining pot with same soil. 4. Keep the plant in indirect bright light location for 2-3 days and then gradually move to a location that receives more than 6 hours of direct sunlight. 5. Once the plant is overgrown in current pot, plant it in field. If you are planting purchased plant directly in ground follow below procedure. 1. Keep the plant in indirect bright light for 3-4 days and gradually move to a location receiving direct sunlight for more than 6 hours a day. 2. Dig a pit twice the size of the bag/pot the current plant is in. 3. Fill the 1/3 of pit with soil rich in organic content, place the plant in center and fill the pit with same soil. 4. Apply water. General caring tips- Plant should get more than 6 hours of sunlight a day. Water the plant when surface soil (1-2 inch) feels dry to touch. Apply any organic fertilizer during the main growing season (June-July).</p>
            </li>
            <li>
                <h6>Does jackfruit grow in India?</h6>
                <p>Jack fruit is originated in India therefore it grows well in Indian climatic conditions</p>
            </li>
            <li>
                <h6>Where does jackfruit grow?</h6>
                <p>Jack fruit grow in outdoor growing conditions and require more than 6 hours of direct bright sunlight.</p>
            </li>
            <li>
                <h6>Can you plant jackfruit seeds?</h6>
                <p>Yes, But trees may take 10 years to bear fruits therefore vegetative method of propagation is best for growing Jack fruit.</p>
            </li>
        </ul>
    </div>
</body>

</html>
