<?php
  session_start();
  $try = print_r($_GET['item'], true);
  echo $try;
  $arr = explode(",",$_GET['item']);
  // $arr = array();
  print_r($arr);

  //ung username palitan ng session username
  require "../includes/dbh.order.inc.php";
  date_default_timezone_set("Asia/Singapore");
  $date = date('Y-m-d');
  $time = date('h:i A');
  $datetime = date('Y-m-d H:i');
  echo $date;
  echo $time;
  echo $datetime;
  $sql = "INSERT INTO orders (username, orders, currDate, currTime, totalPrice, orderState) VALUES ('tryy lang ahe', '$try', '$date', '$time', 20, 'Preparing', );";
  mysqli_query($conn, $sql);

  // $resultCheck = mysqli_num_rows($result);
  // if($resultCheck > 0){
  //   echo "pumasok pri";
  // } else {
  //  echo "bobo ka may mali";
  // }

  function orderdb($name){
    require "../includes/dbh.product.inc.php";
    // $sql = "SELECT * FROM products WHERE proName='$name'";
    $sql = "SELECT * FROM products WHERE proName='$name'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
      while($row = mysqli_fetch_assoc($result)){
      return "gumagana <br>";
      }
    } else {
      return "gumagana pero wala pa sa db";
    }
    
  }

  // foreach($arr as $loopdata){
  //   // require "../includes/dbh.order.inc.php"
  //   echo $loopdata;
  //   orderdb($loopdata);
  // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Qbyte Online Cake Shop</title>
  <link rel="stylesheet" href="../css/index.css" type="text/css" />
  <link rel="stylesheet" href="../css/variables.css" type="text/css" />
  <link rel="stylesheet" href="../css/navbar.css" type="text/css" />
  <link rel="stylesheet" href="../css/checkout.css" />
</head>
<?php 
    include "../header.php";
    // if(isset($_GET['item'])){
    //   echo "gumana";
    // }
  ?>

<div class="main">
  <div class="checkout-content">
    <div class="left-content" id="left-content">
      <div class="topleft-content">
        <div class="arrow" id="arrow">
          <a href="./products.php">
            <img src="../img/icons/back-icon.svg" alt="basta kunyare arrow" />
          </a>
        </div>

        <h1 class="checkout-word">Checkout</h1>
      </div>
      <div class="lowerleft-content" id="lowerleft-content">
        <div class="left" id="left">
          <?php 
                foreach($arr as $loopdata){
                    // require "../includes/dbh.order.inc.php"
                    echo $loopdata;
                  
                    echo "<div class='product-box'>";
                    echo "<p class='proName'>Name ng Product</p>";
                    echo "<p class='proPrice'>Price ng Product</p>";
                    
                    
                    echo "</div>";
                  }
                ?>
        </div>

      </div>
      <div class="right">

      </div>
    </div>

    <div class="right-content" id="right-content">
      <div class="topright-content">
        <h1 class="fontsize">Order Summary</h1>
        <div class="wline"></div>
        <div class="orders">

          <?php 
                  foreach($arr as $loopdata){
                    // require "../includes/dbh.order.inc.php"
                    echo "<div class='ordersum'>";
                    echo "<div class='prodname'>".orderdb($loopdata)."</div";
                    echo "><div class='prodprice'>".orderdb($loopdata)."</div></div>";
                  }
                  
                ?>

        </div>
      </div>
      <div class="lowerright-content">
        <form action="" method="POST" class="form">
          <div class="inputfield">
            <label for="deliverydate"><strong>Deliver Time</strong></label><br />
            <select name="deliverydate" id="deliverydate">
              <option value="today">Today</option>
              <!-- <option value="Tomorrow">Tomorrow</option> -->
            </select>
            <select name="time" id="time">
              <option value="15 minutes">15 Mins</option>
              <option value="30 minutes">30 Mins</option>
              <option value="45 minutes">45 Mins</option>
              <option value="1 hour">1 Hour</option>
              <option value="2 hours">2 Hour</option>
            </select>
            <br />
            <label for="address" id="target"><strong>Pickup at</strong></label><br />
            <input type="text" name="address" id="address" value="127 A. Luna St. Brgy. Malinao, Pasig, Philippines"
              readonly />

            <br />
            <label for="payment"><strong>Payment</strong></label><br />
            <input type="text" name="payment" id="payment" value="Cash on Pickup" readonly />
          </div>
        </form>
        <form method="post">
          <button type="button" class="checkout-btn" id="checkout-btn" name="checkout-btn">PLACE ORDER</button>
        </form>

      </div>
    </div>
  </div>
</div>
</div>
<footer class="footer"></footer>
</body>
<script src="../js/checkout.js"></script>

</html>