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
    <link rel="stylesheet" href="../css/menu.admin.css" type="text/css" />
    <script src="https://kit.fontawesome.com/b57fb6654c.js" crossorigin="anonymous"></script>
    <script defer>
      function selectCat() {
        alert("Hello World");

        var catSelectVal = document.getElementById("catSelect").value;
        $(document).ready(function() {
          $.ajax({
            url: "./showProductPrice.php",
            method: "POST",
            data: {
              id: catSelectVal,
            },
            success: function(data) {
              $("#try").html(data); //
            },
            error: function(error) {
              alert("error" + eval(error));
            }
        });
      }
    </script>

  </head>
  <?php
    include "../includes/header-admin.inc.php";
    require "../includes/functions.inc.php";

  ?>
<div class="bg-img">
  <div class="main-admin">
    <div class="main-admin-heading">
      <h1 class="header">YOUR MENU</h1>
      <button type="button" class="add-menu-btn"><i class="fa-solid fa-plus"></i></button>
      <form action="../includes/menu.admin.inc.php" method="post" id="addMenuForm" enctype="multipart/form-data">
        <div class="add-item-img-div">
          <input type="text" placeholder="Item Image" readonly class="label-item-img">
          <img id="preview" src="#" alt="">
          <label for="add-item-img" class="add-item-img">Add/Change Image</label>
          <input type="file" name="add-item-img" id="add-item-img" class="hidden">
        </div>
        <div class="add-item-desc-div">
          <label for="add-item-desc" class="add-item-desc">Description</label>
          <input type="text" name="add-item-desc" />
        </div>
        <div class="add-item-name-div">
          <label for="add-item-name" class="add-item-name">Item Name</label>
          <input type="text" name="add-item-name" />
        </div>
        <div class="add-item-price-div">
          <label for="add-item-price" class="add-price">Price(P)</label>
          <input type="number" name="add-item-price" />
        </div>
        <div class="add-item-category-div">
          <label for="add-category-price" class="add-category">Category</label>
          <input type="text" name="add-category-price" />
        </div>
        <button type="submit" class="btn" name="add-menu-submit">Add</button>
      </form>
    </div>
    <hr>
    <label for="">Please select a category:</label>
    <select id="catSelect">
      <?php
        catdb();
      ?>
    </select>
    <div class="menu-content" id="menu-content">
      <table>
        <thead>
          <!-- <th>Id</th> -->
          <th>Picture</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
        </thead>
        <tbody id="try">

        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
</div>
</body>
<script src="../js/index.js"></script>
<script src="../js/navbar.js"></script>
<script src="../js/menu.admin.js">
<?php
    require "../includes/functions.inc.php";
    catdb("cat");
  ?>
</script>

</html>