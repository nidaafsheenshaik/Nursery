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
        background-image: url("images/order-placed.jpg");
        background-size: cover;
      }
      table{
        margin: 0 auto 2rem;
        background-color: #fff;
        box-shadow: 3px 5px 50px grey;
      }
      h3{
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
      $Price = 0;
      if(!$link){
      die('Failed to connect to server ');
      }
      $query = "SELECT MAX(order_id) as max FROM purchases";
      //Execute query
      $result = mysqli_query($link, $query);
      $row1 = mysqli_fetch_array($result);
      $orderNo = $row1["max"];
      // echo $orderNo;
      $id = $_SESSION["USER_ID"];
      // echo date("Y/m/d");


        for ($i=1; $i <46 ; $i++) {
            $qty = $_POST["$i"];

            if($qty>0){
              // echo $qty."<br>".$i."<br>";
              $query = "SELECT * FROM products WHERE product_id = $i";
              //Execute query
              $result = mysqli_query($link, $query);
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                  if($row['product_stock']<$qty){
                    echo "<p>Some products in your cart are out of Stock/Not Available. Check availability of Products in Main page</p>";
                    ?>
                    <form class="" action="index.php" method="post">
                      <input style="margin: auto; margin-top: 2rem; width: 20rem; font-weight: bold" class="btn btn-success btn-block" type="submit" name="" value="MAIN PAGE"><br>
                    </form>
                    <?php
                    exit();
                  }
                }
              }
            }
        }

        echo "<h3>Yay! Your Order is Placed 🎉</h3>";
        echo "<table cellpadding = '10'>
          <tr><th>PRODUCT NAME</th>
          <th>QTY</th>
          <th>PRICE</th>
          </tr>";
      for ($i=1; $i <46 ; $i++) {
          $qty = $_POST["$i"];

          if($qty>0){
            // echo $qty."<br>".$i."<br>";
            $query = "SELECT * FROM products WHERE product_id = $i";
            //Execute query
            $result = mysqli_query($link, $query);
            if(mysqli_num_rows($result) > 0){

              while($row = mysqli_fetch_array($result))

              {
                if($row['product_stock']<$qty){
                  echo "<p>Some products in your cart are out of Stock/Not Available. Check availability of Products in Main page</p>";
                  exit();
                }
                else{
                  $Price += $row['product_price'] * $qty;
                  echo "<tr><td>" . $row['product_name'] . "</td>
                  <td>" .$qty."</td>
                  <td>₹" . $row['product_price']*$qty . "</td>
                  </tr>";
                  // echo "<br/>";
                  // $query1 = "INSERT into orders values ( '$orderNo'+1, '$id', '$i', '$qty', '$row[product_price] * $qty' )";
                  // $result1 = mysqli_query($link, $query1);
                  // if(!$result1){
                  //   echo mysqli_error($link);
                  // }

                  $query1 = "UPDATE products set product_stock = stock - '$qty' WHERE product_id = '$i'";
                  $result1 = mysqli_query($link, $query1);

                }
              }
            }

          }
      }
      echo "<tr><td><strong>TOTAL PRICE</strong></td>
      <td> </td>
      <td>₹" . $Price . "</td>
      </tr>";
      echo "</table>";
      $date = date("Y/m/d");
      // echo $_SESSION['Method'];
      $query1 = "INSERT into purchases values ('$orderNo'+1, '$id', '$Price', '$_SESSION[Method]', 'Confirmed', '$_SESSION[mobileNum]', '$_SESSION[Address]', '$date') ";
      $result1 = mysqli_query($link, $query1);
      if(!$result1){
        echo mysqli_error($link);
      }



      ?>

      <form class="" action="index.php" method="post">
        <input style="margin: auto; margin-top: 2rem; width: 20rem; font-weight: bold" class="btn btn-success btn-block" type="submit" name="" value="MAIN PAGE"><br>
      </form>



  </body>
</html>
