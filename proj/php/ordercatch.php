<?php 
session_start();
// require "../includes/dbh.order.inc.php"

$try = print_r($_GET['item'], true);
echo $try."<br>";
$arr = explode(",",$_GET['item']);
print_r($arr);

require "../includes/dbh.order.inc.php";
$sql = "INSERT INTO orders (username, userOrder) VALUES ('tryy lang ahe', '$try');";
mysqli_query($conn, $sql);

// $resultCheck = mysqli_num_rows($result);
// if($resultCheck > 0){
//   echo "pumasok pri";
// } else {
//  echo "bobo ka may mali";
// }

function namedb($name){
  require "../includes/dbh.product.inc.php";
  // $sql = "SELECT * FROM products WHERE proName='$name'";
  $sql = "SELECT * FROM products WHERE proName='$name';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
    echo "gumagana <br>";
    }
  } else {
    echo "baka di mo pa nalalagay haha";
  }
  
}

foreach($arr as $loopdata){
  // require "../includes/dbh.order.inc.php"
  echo $loopdata;

  namedb($loopdata);
}


// namedb(1);