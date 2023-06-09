<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yuji+Syuku&display=swap" rel="stylesheet">
    <style media="screen">
      body{
        background-image: url("images/admin-bg.jpg");
        background-size: cover;
        text-align: center;
        /* filter: blur(8px);  */
      }
      tr,td{
        padding: 15px;
      }
      table{
        text-align: center;
        margin: auto;
        background-color: #fff;
        box-shadow: 3px 5px 50px grey;
      }
      h1{
        margin: 5rem auto 3rem;
        letter-spacing: .25rem;
        font-size: 2rem;
        color: #F25287;
        font-family: 'Yuji Syuku', serif;
        font-weight: bolder;
      }
      h3{
        letter-spacing: .25rem;
        font-size: 1.5rem;
        margin-bottom: 2rem;
        font-family: 'Yuji Syuku', serif;
      }
    </style>
  </head>
  <body>


    <?php

    session_start();

    if (isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1) {
      $id = $_SESSION['ADMIN_ID'];
      $link = mysqli_connect('localhost', 'root', '','iiitdmj_nursery');
      //Check link to the mysql server
      if(!$link){
      die('Failed to connect to server ');
      }
      echo "<center><h1>WELCOME ".$_SESSION['ADMIN_ID']."</h1></center>";
      $query = "SELECT * FROM purchases order by DateofBuy";
      //Execute query
      $result = mysqli_query($link, $query);

      if(mysqli_num_rows($result) > 0){
      echo "<h3>TRANSACTIONS</h3>";
      echo "<table cellpadding = '10'>
      <tr><th>Date</th>
      <th>Order_ID</th>
      <th>customer_id</th>
      <th>Total Price</th>
      <th>Mode of Pay</th>
      <th>Status</th>
      <th>Contact Number</th>
      <th>Address</th>
      </tr>";

      while($row = mysqli_fetch_array($result))

      {
      echo "<tr><td>" . $row['DateofBuy'] . "</td>
      <td>" . $row['order_id'] . "</td>
      <td>" . $row['customer_id']."</td>
      <td>" . $row['total_price']."</td>
      <td>" . $row['mode_of_pay']."</td>
      <td>" . $row['delivery_status']."</td>
      <td>" . $row['customer_contact'] . "</td>
      <td>" . $row['customer_address'] . "</td>
      </tr>";
      }
      echo "</table>";
      }
    }

    else{
      echo "Error";
      echo $_SESSION['IS_AUTHENTICATED'];
    }

    ?>

    <form class="" action="logout.php" method="post">
      <input style="margin: auto; margin-top: 2rem; width: 20rem; font-weight: bold" class="btn btn-success btn-block" type="submit" name="" value="LOG OUT">
    </form>
    <form class="" action="CheckStock.php" method="post">
      <input style="margin: auto; margin-top: 2rem; width: 20rem; font-weight: bold" class="btn btn-success btn-block" type="submit" name="" value="UPDATE STOCK"><br>
    </form>
  </body>
</html>
