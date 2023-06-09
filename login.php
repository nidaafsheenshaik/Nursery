
<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IIITDMJ NURSERY</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body{
      background-image: url("nurseryimg.jpg");
      background-size: cover;
    }
    .form-container {
        margin: auto;
        margin-top: 40px;
        padding: 3rem 9.75rem;
        margin-top: 5rem;
        width: 50%;
        background-color: #CFDAC8;
        border-radius: 10px;
    }

    h4 {
        text-align: center;
        padding-bottom: 30px;
        letter-spacing: 0.2rem;
        font-weight: bold;
    }

    button {
        padding: 20px;
    }

    .buttons {
        padding-bottom: 20px;
    }

    .fonts {
        text-align: center;
        padding-bottom: 30px;
    }

    small {
        padding-bottom: 20px;
    }

    .row {
        padding-left: 100px;
        padding-bottom: 20px;
    }
    hr
    {
        border-top: 3px solid grey;
        font-size: large;
    }
    a
    {
        color: white;
    }
</style>

<body>
  <!-- <div class="Main">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.html" style="font-size: 1.5rem;"><strong style="margin-left: 5%; letter-spacing : 3px;">IIITDMJ NURSERY</strong></a>
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
            <a class="nav-link" href="index.html"> <strong >HOME</strong></a>
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
            <a class="nav-link" href="0)Log-in.html"> <strong >Log-in</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="0)sign-up.html"> <strong >Sign-up</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact-me"> <img class="nav-image" src="cart.png" alt="Error Loading img"> </a>
          </li>
        </ul>
      </div>
    </nav>
  </div> <br><br> -->
        <div class="form-container">
            <h4>WELCOME TO IIITDMJ NURSERY</h4>
            <form method="Post", action="login_check.php">
                <div class="form-group">
                    <input type="text" name="login_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="User-Id">
                </div>
                <div class="form-group">
                    <input type="password" name="Passwordno" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div><br>

                <div class="buttons">
                    <input class="btn btn-block btn-primary" type="submit" name="submit" value="Login as User" />
                </div>
                <div class="buttons">
                  <input class="btn btn-block btn-primary" type="submit" name="submit" value="Login as Admin" />
              </div>
                <small class="form-text text-muted">New to this website? Create an account by signing-up</small>
            </form>
            <form action="signUp.php" method="post">
              <div class="buttons">
                  <input class="btn btn-block btn-danger" type="submit" name="submit" value="SignUp" />
              </div>
            </form>
        </div>
</body>

</html>
