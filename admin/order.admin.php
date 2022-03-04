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
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
  </script>

  <script>
  // jquery code
  $(document).ready(function() {
    $("form").submit(function() {
      // Print the value of the button that was clicked
      var x = $(document.activeElement).attr('id').val()
      console.log(x);
    });
  });
  </script>
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
        <?php
          require "../includes/dbh.inc.php";
          $sql = "SELECT * FROM orders";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          if($resultCheck > 0){
            
            while($row = mysqli_fetch_assoc($result)){
              $id= $row['ordId'];
              // echo $id;
              echo "<tr><td>".$row['currDate']."</td>
              <td>".$row['payment']."</td></tr>";
              // foreach($row as $loopdata){
              //   echo "xd";
              // }
            }
          }
        
        ?>

      </table>
    </div>
    <div class="orders">
      <table>
        <?php
          
        ?>
        <tr>
          <th>ID</th>
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
              echo "<tr id=".$id.">
              <td>".$row['ordId']."</td>
              <td>".$row['username']."</td>
              <td>".$row['orders']."</td>
              <td>".$row['compDateTime']."</td>
              <td>".$row['payment']."</td>
              <td>".$row['orderState']."</td>
              <td>
              <form id='statusBtns' method='POST'>
              <button id='pen".$id."' name='pending' class='pending' onclick='test(".$id.")'>Pending</button>

              <button id='ready' class='ready' name='rea".$id." value='rea".$id."'>Ready</button>

              <button
              id='pur".$id."' class='purchased' name='purchased'>Purchased</button>

              <button id='ter".$id."' class='terminate'  name='terminate'>Terminate</button></td>
              </form>
              </tr>";
              // if(isset($_POST['rea2'])){
              // require "../includes/dbh.inc.php";
              // $sql1 = "UPDATE orders SET orderState = 'ready' WHERE orders.ordId = "."2";
              // mysqli_query($conn, $sql1);
              // echo "success";
              // }
          }}
          echo $id."asdfasdf";
          // function pending($id){
          if(isset($_POST['pending'])){
            // require "../includes/dbh.inc.php";
            // $sql1 = "UPDATE orders SET orderState = 'pending' WHERE orders.ordId = ".$id;
            // mysqli_query($conn, $sql1);
            // echo "success";
          // }
          }
          // function ready($id){
            
          // }
          // if(isset($_POST['rea2'])){
          //   require "../includes/dbh.inc.php";
          //   $sql1 = "UPDATE orders SET orderState = 'ready' WHERE orders.ordId = ".$id;
          //   mysqli_query($conn, $sql1);
          //   echo "success";
          // }
        
        ?>

      </table>
    </div>
  </div>
</div>

</div>
</div>
<footer class="footer"></footer>
</body>
<script src="../js/order.admin.js"></script>

</html>