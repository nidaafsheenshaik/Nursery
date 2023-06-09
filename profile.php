<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Profile</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <style media="screen">
    body{
      background-image: url("images/profile.jpeg");
      background-size: cover;
      /* object-fit: cover; */
    }
    table{
      background-color: #E1E5EA;
      border-color: red;
      /* margin-left: 0; */
      text-align: center;
      /* padding: 50px; */
      box-shadow: 3px 5px 50px grey;
    }
    .footer-btn{
      margin: auto;
      margin-top: 3rem;
    }
    .btn{
      font-weight: bold;
    }
    h1{
      letter-spacing: 1rem;
      margin: 2rem auto 3rem;
      color: #fff;
      font-weight: bolder;
    }
    th{
      color: darkgreen;
      padding: 20px;
    }
    td{
      padding: 20px;
    }
  </style>
</head>

<body>

  <?php

  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }


  if (isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1) {
    $id = $_SESSION['USER_ID'];
    $link = mysqli_connect('localhost', 'root', '', 'iiitdmj_nursery');
    //Check link to the mysql server
    if (!$link) {
      die('Failed to connect to server ');
    }

    $query = "SELECT * FROM customer WHERE customer_id = '$id'";
    //Execute query
    $result = mysqli_query($link, $query);

      if(mysqli_num_rows($result) > 0)
      {
        echo "<center><h1>CUSTOMER DETAILS</h1>";
        while ($row = mysqli_fetch_array($result))
        {
          echo "<table cellpadding = '10'>
          <tr>
          <th>Customer Name</th> <td><p>" . $row['customer_name'] . "</p></td>
          </tr><tr>
          <th>User Id</th>  <td><p>" . $row['customer_id'] . "</p></td>
          </tr><tr>
          <th>Contact Number</th>   <td><p>" . $row['customer_contact'] . "</p></td>
          </tr><tr>
          <th>Address</th>  <td><p>" . $row['customer_address'] . "</p></td>
          </tr></table>";
        }
      }

  ?><br><br>

    <form class="" action="customerUpdate.php" method="post">
      <input class="btn btn-success" type="submit" name="submit" value="Update">
    </form><br><br>
    <!-- <h2>Orders</h2> -->
  <?php
    $query1 = "SELECT * FROM purchases WHERE customer_id = '$id' order by DateofBuy";
    //Execute query
    $result = mysqli_query($link, $query1);

    if (mysqli_num_rows($result) > 0) {
      echo "<table cellpadding = '10'>
        <tr><th>Order_id</th>
        <th>Date of Purchase</th>
        <th>Total Price</th>
        <th>Mode of Pay</th>
        <th>Status</th>
        <th>Contact Number</th>
        <th>Address</th>
        </tr>";

      while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td><p>" . $row['order_id'] . "</p></td>
          <td>" . $row['DateofBuy'] . "</td>
          <td>" . $row['total_price'] . "</td>
          <td>" . $row['mode_of_pay'] . "</td>
          <td>" . $row['delivery_status'] . "</td>
          <td>" . $row['customer_contact'] . "</td>
          <td>" . $row['customer_address'] . "</td>
          </tr>";
        // echo "<br/>";
      }
      echo "</table>";
    } else {
      echo "-";
    }
  } else {
    echo "Error";
    echo $_SESSION['IS_AUTHENTICATED'];
  }

  ?>

  <form class="footer-btn" action="index.php" method="post">
    <input class="btn btn-success" type="submit" name="submit" value="Go Back">
  </form><br><br>

</body>

</html>
