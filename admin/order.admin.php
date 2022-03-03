<!-- edit -->
<?php
  function orderdb(){
  require "../includes/dbh.inc.php";
  $sql = "SELECT * FROM products";
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

// function terminate($ordId){
//   require "../includes/dbh.inc.php";
//   $sql = "SELECT * FROM orders";
//   $result = mysqli_query($conn, $sql);
//   $row = mysqli_fetch_assoc($result);
//   if(!isset($_POST['terminate'])){
//   $sql1 = "UPDATE orders SET orderState = 'terminate' WHERE orders.ordId = 24" ;
//   $result1 = mysqli_query($conn, $sql1);
//   echo "success";
//   }
// }


?>
<!-- edit -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Qbyte Online Cake Shop</title>
  <link rel="stylesheet" href="../css/variables.css" type="text/css" />
  <link rel="stylesheet" href="../css/navbar.css" type="text/css" />
  <link rel="stylesheet" href="../css/index.css" type="text/css" />
  <link rel="stylesheet" href="../css/order.admin.css" type="text/css" />
</head>
<?php
  include "../includes/header-admin.inc.php"
?>
<div class="bg-img">
  <div class="main-admin">
    <div class="daily-report">
      <table>
        <tr>
          <th>Date</th>
          <th>Earnings</th>
        </tr>
        <tr>
          <td id="date">Sample Date</td>
          <td id="earnings">P 6969</td>
        </tr>
      </table>
    </div>
    <div class="orders">
      <table>
        <?php
          
        ?>
        <tr>
          <th>Username</th>
          <th>Orders</th>
          <th>Date</th>
          <th>Price</th>
          <th>Status</th>
          <th>Buttons</th>
        </tr>
        <?php
          
          require "../includes/dbh.inc.php";
          $sql = "SELECT * FROM orders";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          if($resultCheck > 0){
            function terminate($ordId){
              require "../includes/dbh.inc.php";
              $sql = "SELECT * FROM orders";
              mysqli_query($conn, $sql);
              if(!isset($_POST['terminate'])){
              $sql1 = "UPDATE orders SET orderState = 'terminate' WHERE orders.ordId = ".$ordId."" ;
              mysqli_query($conn, $sql1);
              echo "success";
              }
            }
            while($row = mysqli_fetch_assoc($result)){
              $id= $row['ordId'];
              echo $id;
              echo "<tr>
              <td>".$row['username']."</td>
              <td>".$row['orders']."</td>
              <td>".$row['compDateTime']."</td>
              <td>".$row['payment']."</td>
              <td>".$row['orderState']."</td>
              <td><form method='POST'><button id='pending' name='pending'>Pending</button><button id='ready' name='ready'>Ready</button><button
              id='purchased' name='purchased'>Purchased</button><button id='terminate' name='terminate'>Terminate</button></form></td>
              </tr>";
              if(isset($_POST['terminate'])){
                $sql1 = "UPDATE orders SET orderState = 'd' WHERE orders.ordId = ".$id;
                mysqli_query($conn, $sql1);
                echo "success";
              }
            }
          }
        
        ?>

      </table>
    </div>
  </div>
</div>

</div>
</div>
<footer class="footer"></footer>
</body>

</html>