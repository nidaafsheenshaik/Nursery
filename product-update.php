<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cart Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yuji+Syuku&display=swap" rel="stylesheet">
    <style media="screen">
      body{
        text-align: center;
        margin: auto;
        /* background-color: #CEE5D0; */
        background-image: url("images/stock-update.jpg");
        background-size: cover;
      }
      table{
        margin: 0 auto 2rem;
        background-color: #fff;
        box-shadow: 3px 5px 50px grey;
      }
      h4{
        margin-top: 3rem;
        margin-bottom: 3rem;
        color: #E93B81;
        font-weight: bolder;
        font-family: 'Yuji Syuku', serif;
        /* letter-spacing: .25rem; */
      }
      tr,td{
        padding: 15px;
      }
      p{
        margin-top: 20rem;
        font-size: 1.2rem;
      }
    </style>
  </head>
  <body>
    <?php
    session_start();
    //Check if the session variable for user authentication is set, if not redirect to login page.
    if(!isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] != 1){
      header('location:login.php');
      exit();
    //include the menu
    }
    $link = mysqli_connect('localhost', 'root', '','iiitdmj_nursery');
      //Check link to the mysql server
      if(!$link){
      die('Failed to connect to server ');
      }

      echo "<h4>Stocks of Products are Updated.</h4>";

      echo "<table cellpadding = '10'>
        <tr><th>PRODUCT NAME</th>
        <th>PRODUCT ID</th>
        <th>STOCK ADDED</th>
        </tr>";

      for ($i=1; $i <46 ; $i++) {
          $qty = $_POST["$i"];

          if($qty>0){
            // echo $qty."<br>".$i."<br>";
            $query = "UPDATE products set product_stock = product_stock + $qty  WHERE product_id = $i";
            //Execute query
            $result = mysqli_query($link, $query);
            $query = "SELECT * FROM products WHERE product_id = $i";
            //Execute query
            $result = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($result)){
              echo "<tr><td>" . $row['product_name'] . "</td>
              <td>" .$row['product_id']."</td>
              <td>" .$qty . "</td>
              </tr>";
            }
          }
      }
      echo "</table>";


      ?>

      <form class="" action="Admin.php" method="post">
        <input style="margin: auto; margin-top: 2rem; width: 20rem; font-weight: bold" class="btn btn-success btn-block" type="submit" value="GO BACK"><br>
      </form>



  </body>
</html>
