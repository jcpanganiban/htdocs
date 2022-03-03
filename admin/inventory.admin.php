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
  <link rel="stylesheet" href="../css/admin.index.css" type="text/css" />
  <link rel="stylesheet" href="../css/inventory.admin.css" type="text/css" />
  <script src="https://kit.fontawesome.com/b57fb6654c.js" crossorigin="anonymous"></script>
</head>
<?php
  include "../includes/header-admin.inc.php"
?>
<div class="bg-img">
  <div class="main-admin">
    <div class="main-admin-heading">
      <h1 class="header">YOUR INVENTORY</h1>
      <button type="button" class="add-inv-btn"><i class="fa-solid fa-plus"></i></button>

      <form action="" method="post" id="addInventoryForm">
        <div class="add-item-name-div">
          <label for="add-item-name" class="add-item-name">Item Name</label>
          <input type="text" name="add-item-name" />
        </div>
        <div class="add-item-price-div">
          <label for="add-item-price" class="add-price">Price(P)</label>
          <input type="text" name="add-item-price" />
        </div>
        <div class="add-item-category-div">
          <label for="add-category-price" class="add-category">Category</label>
          <input type="text" name="add-category-price" />
        </div>
        <button type="submit" class="btn" name="add-inv-submit">Add</button>
      </form>
    </div>
    <hr>
    <div class="menu-content">
      <div class="col-1 category">
        <div class="catName">Category</div>
        <div class="catEntry">
          <div class="catText">Category Entry</div>
          <div class="catText">Category Entry</div>
          <div class="catText">Category Entry</div>
          <div class="catText">Category Entry</div>
        </div>
      </div>
      <div class="col-2 products">
        <div class="prodName">Products</div>
        <div class="prodEntry">
          <div class="prodText">Product Entry</div>
          <div class="prodText">Product Entry</div>
          <div class="prodText">Product Entry</div>
          <div class="prodText">Product Entry</div>
        </div>
      </div>
      <div class="col-3 products">
        <div class="statName">Status</div>
        <div class="statEntry">
          <div class="statText">Status Entry</div>
          <div class="statText">Status Entry</div>
          <div class="statText">Status Entry</div>
          <div class="statText">Status Entry</div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
<footer class="footer"></footer>
</body>
<script src="../js/index.js"></script>
<script src="../js/navbar.js"></script>
<script src="../js/inventory.admin.js"></script>

</html>