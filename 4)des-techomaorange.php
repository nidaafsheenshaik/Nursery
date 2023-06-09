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
    <title>Tecoma Orange plant</title>
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
                <img src="images/tecomaorange.jpg" alt="Tecoma plant" height="500px">
            </div>
            <div class="col">
                <div class="plant-name">
                    <h3>Tecoma (Shrub, Orange) - Plant</h3>
                    <p>⭐⭐⭐⭐ (124 reviews)</p>
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
        <p>Growing Tecoma is an easy way to add a tropical flair to your garden. When you know how to care for Tecoma plant, you will be rewarded with many years of lovely orange flowers.</p>
        <p>This plant may not have flowers at the time of shipping. Afterward, the plant will bloom and it will be of orange colored flower. It is a species of flowering plant in the Bignoniaceae,family.</p>
        <p>The flower color ranges from orange to orange-red to apricot.Tecoma is an ornamental garden plant commonly used for screening and decorative purposes. It can also be trimmed to form a hedge. It is often planted specifically to attract birds and butterflies. Dark orange color of these plants sometimes appear to be red because of environmental and sunlight factors.</p>
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
                    <td>Tecoma (Shrub, Orange),Cape Honeysuckle ,Bignoniaceae,yellow trumpetbush, yellow bells, yellow elder, ginger thomas</td>
                </tr>
                <tr>
                    <td>
                        <h6>Maximum Reachable Height</h6>
                    </td>
                    <td>2-3 meter</td>
                </tr>
                <tr>
                    <td>
                        <h6>Flower Colour</h6>
                    </td>
                    <td>Orange</td>
                </tr>
                <tr>
                    <td>
                        <h6>Bloom Time</h6>
                    </td>
                    <td>Year Round</td>
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
                <li>Morning sunlight of 3-6 hours a day is ideal for flowering and plant grow well in bright light for rest of the day.</li>
                <li>Do not overwater the plant.</li>
                <li>Water should be applied preferably in the morning or evening.</li>
                <li>Before application of fertilizer loosen the topsoil without disturbing the roots of the plant so, it can uptake the nutrients and moisture easily.</li>
                <li>Apply organic fertilizer to the plant once in a month.</li>
                <li>Remove dead, infected or damaged plant parts and discard them away from the plants.</li>
                <li>For any insect attack or disease, you can use Neem oil, Eucalyptus oil or Citrus oil spray for primary treatment.</li>
                <li>Avoid applying water on flowers and leaves it may cause fungus infection.</li>
            </ul>
        </p>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>
                        <h6>Sunlight</h6>
                    </td>
                    <td>Natural bright light with morning sunlight(3-6 hours)</td>
                </tr>
                <tr>
                    <td>
                        <h6>Watering</h6>
                    </td>
                    <td>Apply 4 cup(approx.200ml) of water when the top soil (1-2 inch) in the pot feels dry to touch</td>
                </tr>
                <tr>
                    <td>
                        <h6>Soil</h6>
                    </td>
                    <td>Well drained, fertile and rich in organic content</td>
                </tr>
                <tr>
                    <td>
                        <h6>Temperature</h6>
                    </td>
                    <td>20 to 30 degrees C</td>
                </tr>
                <tr>
                    <td>
                        <h6>Fertilizer</h6>
                    </td>
                    <td>Apply organic fertilizer to the plant once in a month</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Plant special features -->
    <div class="conatiner special-features">
        <h3>Tecoma Special Features</h3>
        <p>
            <ul>
                <li>This attractive garden plant is a popular garden shrub and is often planted specifically to attract birds and butterflies to the garden</li>
                <li>It is also commonly planted as a hedge, both formal and informal in Landscaping</li>
                <li>The bark is used in traditional medicine to relieve pain and sleeplessness, to bring down fevers, to treat chest ailments such as bronchitis, to treat stomach pains, diarrhoea and dysentery and to encourage the flow of milk in nursing mothers</li>
                <li>Leaves are also used to treat diarrhoea and gastro-enteritis</li>
                <li>Dried and powdered bark is rubbed around the teeth to treat bleeding gums</li>
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
                <h6>How to grow Tecoma plant?</h6>
                <p>You can grow Tecoma plant through seed. consider the following points to propagate the Tecoma plant through seeds. 1. Pot size 5-7 upper diameter inch with a drainage hole. 2. Sunlight- 4-6 hrs of direct or indirect bright light is required. 3. Soil- Soil or potting mixture should be well-drained, fertile and nutrient-rich. 4. Water-Water the plant when 1-2 inch surface soil layer feels dry to touch. 5. Fertilizer - Apply any organic fertilizer during the main growing season(Spring-Summer).</p>
            </li>
            <li>
                <h6>Tecoma stans flowering season?</h6>
                <p>Tecoma stans flowers from March to December,</p>
            </li>
            <li>
                <h6>When do plant Tecoma stans?</h6>
                <p>You can plant Tecoma stans through out the year except winter season.</p>
            </li>
            <li>
                <h6>How to propagate Tecoma plant?</h6>
                <p>You can propagate Tecoma plant through seeds.</p>
            </li>
        </ul>
    </div>
</body>

</html>
