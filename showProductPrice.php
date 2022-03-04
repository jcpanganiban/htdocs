<?php
  require "../includes/functions.inc.php";
  require "../includes/dbh.inc.php";

  $id = $_POST['id'];
  $id = trim($id);

  $sql = "SELECT * FROM products WHERE proCat ='{$id}';";
  echo $sql;
  $result = mysqli_query($conn, $sql);

  while ($rows = mysqli_fetch_array($result)){
?>
  <tr>
    <td> <?php echo ""; ?> </td>
    <td> <?php echo $rows['proName']; ?> </td>
    <td> <?php echo $rows['proDesc']; ?> </td>
    <td> <?php echo $rows['proPrice']; ?> </td>
  </tr>
<?php
  }
  print_r($sql);
?>