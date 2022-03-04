<?php
  session_start();
  require "./includes/functions.inc.php";

  if (isset($_GET['error'])){
    $errorhndlr = $_GET['error'];
    if ($errorhndlr === "no-items"){
      echo "<script>window.alert('Please add an Item to cart first!')</script>";
    }
  }

  function prodcat($cat){
    require "./includes/dbh.inc.php";
    $sql = "SELECT * FROM products WHERE proCat='$cat';";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      echo $row['proId'];
    }
  }

  function prodcard($name){
    require "./includes/dbh.inc.php";
    $sql = "SELECT proCat FROM products";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      echo $row['proCat'];
    }
  }

  // function all(){

  // }

  prodcat("cat");
  prodcard("Name");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Qbyte Online Cake Shop</title>
  <link rel="stylesheet" href="./css/index.css" type="text/css" />
  <link rel="stylesheet" href="./css/variables.css" type="text/css" />
  <link rel="stylesheet" href="./css/products.css" type="text/css" />
  <link rel="stylesheet" href="./css/navbar.css" type="text/css" />
</head>
<?php
  include "./includes/header.inc.php";
?>
<div class="cart" id="cart">
  <div class="uppercart">
    <h1 class="cartheader" id="head">Your Cart</h1>
    <p><i>We're here to sweeten your day!</i></p>
  </div>

  <!-- <div class="line"></div> -->
  <div class="lowercart">
    <p id="removethis">Your orders are displayed here...</p>
    <div class="list"></div>
    <button type="submit" name="item" id="purchasebtn" class="purchasebtn" onclick="ordercatch()">Purchase</button>
  </div>
</div>
<!-- edit -->
<!-- edit end -->
<div class="main">
  <h1 class="openning">Products We Offer...</h1>
  <div class="product-list">
    <h1 class="product-header">Cheesecake Truffles</h1>
    <div class="wline"></div>
    <br />

    <ul class="product-card">
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Cheesecake Truffles 6pc</h1>

          <h5 class="clear">6 pieces Assorted Cheesecake Truffles</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Cheesecake Truffles/truffles assorted.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              6 pcs Meringue kisses coated with classic French buttercream
              rolled in flavored cake or cookie crumbs. "Oreo, Matcha,
              Ube, Red Velvet, Buttermilk, Graham, Chocolate, Butternut"
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(0)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Cheesecake Truffles 20pc</h1>

          <h5 class="clear">20 pieces Assorted Cheesecake Truffles</h5>
        </div>

        <div>
          <img class="product-pic" src="./img/Cheesecake Truffles/truffles assorted1.jpg" alt="Cheesecake Truffles" />
        </div>
        <div class="productdescorder">
          <p>
            20 pcs Meringue kisses coated with classic French buttercream
            rolled in flavored cake or cookie crumbs. "Oreo, Matcha, Ube,
            Red Velvet, Buttermilk, Graham, Chocolate, Butternut"
          </p>
        </div>
        <button class="order-btn" onclick="addToCart(1)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Cheesecake Truffles 25Pc</h1>

          <h5 class="clear">25 pieces Assorted Cheesecake Truffles</h5>
        </div>

        <div>
          <img class="product-pic" src="./img/Cheesecake Truffles/truffles assorted2.jpg" alt="Cheesecake Truffles" />
        </div>
        <div class="productdescorder">
          <p>
            25 Pcs Meringue kisses coated with classic french buttercream
            rolled in flavored cake cookie crumbs. oreo, matcha, ube, red
            velvet, buttermilk, graham, chocolate, butternut
          </p>
        </div>
        <button class="order-btn" onclick="addToCart(2)">
          ADD TO CART
        </button>
      </li>
    </ul>
  </div>

  <div class="product-list">
    <h1 class="product-header">Cheesecakes</h1>
    <div class="wline"></div>
    <br />

    <ul class="product-card">
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Crema Flado Blueberry Flavor</h1>

          <h5 class="clear">6" by 2" Round inspired Flan</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Cheesecakes/blueberry 6x2.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              6" x 2" Round Inspired Flan, Cheesecake, Ice Cream & Yogurt
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(3)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Dulce De Leche Baked Cheesecake</h1>

          <h5 class="clear">
            6" by 2" Round Cheesecake and Cream Cheese
          </h5>
        </div>

        <div>
          <img class="product-pic" src="./img/Cheesecakes/Dulce de leche 6x2.jpg" alt="Cheesecake Truffles" />
        </div>
        <div class="productdescorder">
          <p>
            Layers of cookie crust, dulce de leche cheesecake, cream
            cheese & topped with caramel buttercream
          </p>
        </div>
        <button class="order-btn" onclick="addToCart(4)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Mango Baked Cheesecake</h1>

          <h5 class="clear">6" by 2" Round Cheesecake</h5>
        </div>

        <div>
          <img class="product-pic" src="./img/Cheesecakes/Mango 6x2.jpg" alt="Cheesecake Truffles" />
        </div>
        <div class="productdescorder">
          <p>
            Layers of cookie crust, mango cheesecake, cream cheese &
            topped with real mango jam.
          </p>
        </div>
        <button class="order-btn" onclick="addToCart(5)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Oreo Baked Cheesecake</h1>

          <h5 class="clear">6" by 2" Round Cheesecake</h5>
        </div>

        <div>
          <img class="product-pic" src="./img/Cheesecakes/Oreo 6x2.jpg" alt="Cheesecake Truffles" />
        </div>
        <div class="productdescorder">
          <p>
            Layers of cookie crust, oreo cheesecake, cream cheese & topped
            with real oreo bits.
          </p>
        </div>
        <button class="order-btn" onclick="addToCart(6)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Strawberry Baked Cheesecake</h1>

          <h5 class="clear">6" by 2" Round Cheesecake</h5>
        </div>

        <div>
          <img class="product-pic" src="./img/Cheesecakes/Strawberry 6x2.jpg" alt="Cheesecake Truffles" />
        </div>
        <div class="productdescorder">
          <p>
            Layers of cookie crust, strawberry cheesecake, cream cheese &
            topped with real strawberry jam.
          </p>
        </div>
        <button class="order-btn" onclick="addToCart(7)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Triple Chocolate Baked Cheesecake</h1>

          <h5 class="clear">6" by 2" Round Cheesecake</h5>
        </div>

        <div>
          <img class="product-pic" src="./img/Cheesecakes/Triple Choco 6x2.jpg" alt="Cheesecake Truffles" />
        </div>
        <div class="productdescorder">
          <p>
            Layers of cookie crust, chocolate cheesecake, chocolate
            ganache & topped with chocolate buttercream.
          </p>
        </div>
        <button class="order-btn" onclick="addToCart(8)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Ube Halaya Baked Cheesecake</h1>

          <h5 class="clear">6" by 2" Round Cheesecake</h5>
        </div>

        <div>
          <img class="product-pic" src="./img/Cheesecakes/Ube 6x2.jpg" alt="Cheesecake Truffles" />
        </div>
        <div class="productdescorder">
          <p>
            Layers of cookie crust, ube halaya cheesecake, cream cheese &
            topped with real ube bits.
          </p>
        </div>
        <button class="order-btn" onclick="addToCart(9)">
          ADD TO CART
        </button>
      </li>
    </ul>
  </div>

  <div class="product-list">
    <h1 class="product-header">Crema Flado</h1>
    <div class="wline"></div>
    <br />

    <ul class="product-card">
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Crema Flado Blueberry Flavor</h1>

          <h5 class="clear">6" by 2" Crema Flado</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Crema Flado/Blueberry CF.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              6" x 2" Round Inspired Flan, Cheesecake, Ice Cream & Yogurt
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(10)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Crema Flado Classic Flavor</h1>

          <h5 class="clear">6" by 2" Crema Flado</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Crema Flado/Classic CF.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              6" x 2" Round Inspired Flan, Cheesecake, Ice Cream & Yogurt
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(11)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Crema Flado Mango Flavor</h1>

          <h5 class="clear">6" by 2" Crema Flado</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Crema Flado/Mango CF0.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              6" x 2" Round Inspired Flan, Cheesecake, Ice Cream & Yogurt
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(12)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Crema Flado Matcha Flavor</h1>

          <h5 class="clear">6" by 2" Crema Flado</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Crema Flado/Matcha CF.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              6" x 2" Round Inspired Flan, Cheesecake, Ice Cream & Yogurt
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(13)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Crema Flado Strawberry Flavor</h1>

          <h5 class="clear">6" by 2" Crema Flado</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Crema Flado/Strawberry CF.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              6" x 2" Round Inspired Flan, Cheesecake, Ice Cream & Yogurt
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(14)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Crema Flado Ube Flavor</h1>

          <h5 class="clear">6" by 2" Crema Flado</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Crema Flado/Ube CF.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              6" x 2" Round Inspired Flan, Cheesecake, Ice Cream & Yogurt
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(15)">
          ADD TO CART
        </button>
      </li>
    </ul>
  </div>

  <div class="product-list">
    <h1 class="product-header">Gourmet Gems</h1>
    <div class="wline"></div>
    <br />

    <ul class="product-card">
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Assorted Gourmet Gems</h1>

          <h5 class="clear">Assorted</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Gourmet Gems/asstd.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>A jar full of assorted Gourmet Gems</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(16)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Brownies Gourmet Gems</h1>

          <h5 class="clear">Brownies</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Gourmet Gems/brownies.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>A jar full of Brownies Gourmet Gems</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(17)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Brownies</h1>

          <h5 class="clear">Brownies</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Gourmet Gems/brownies2.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>A box full of Brownies</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(18)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Chocolate Crinkles</h1>

          <h5 class="clear">Chocolate Crinkles</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Gourmet Gems/choco crinkles.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>A jar full of Chocolate Crinkles</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(19)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Chocolate Gems</h1>

          <h5 class="clear">Chocolate Gems</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Gourmet Gems/gems.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>A jar full of Chocolate Gems</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(20)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Brown Gems</h1>

          <h5 class="clear">Brown Gems</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Gourmet Gems/gems1.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>A jar full of Brown Gems</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(21)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Crinkles Gems</h1>

          <h5 class="clear">Crinkles Gems</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Gourmet Gems/gourmet gems.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>A jar full of Crinkles Gems</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(22)">
          ADD TO CART
        </button>
      </li>
    </ul>
  </div>

  <div class="product-list">
    <h1 class="product-header">12oz Ice Cream Cakes</h1>
    <div class="wline"></div>
    <br />

    <ul class="product-card">
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Caramel Cashew</h1>

          <h5 class="clear">Caramel Cashew Ice Cream Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Ice Cream Cakes 12oz/caramel cashew.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>12 oz Caramel Cashew Ice Cream Cake</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(23)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Chocolate Bronie</h1>

          <h5 class="clear">Chocolate Brownie Ice Cream Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Ice Cream Cakes 12oz/choco brownie.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>12 oz Chocolate Brownie Ice Cream Cake</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(24)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Cookies and Cream</h1>

          <h5 class="clear">Cookies and Cream Ice Cream Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Ice Cream Cakes 12oz/cookies and cream.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>12 oz Cookies and Cream Ice Cream Cake</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(25)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Mango Graham</h1>

          <h5 class="clear">Mango Graham Ice Cream Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Ice Cream Cakes 12oz/Mango graham1.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>12 oz Mango Graham Ice Cream Cake</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(26)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Vanilla</h1>

          <h5 class="clear">Vanilla Ice Cream Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Ice Cream Cakes 12oz/vanilla.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>12 oz Vanilla Ice Cream Cake</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(27)">
          ADD TO CART
        </button>
      </li>
    </ul>
  </div>

  <div class="product-list">
    <h1 class="product-header">Ice Cream Cakes Tin Can</h1>
    <div class="wline"></div>
    <br />

    <ul class="product-card">
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Caramel Cashew</h1>

          <h5 class="clear">Caramel Cashew Ice Cream Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Ice Cream Cakes Tin Can/caramel cashew.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>Caramel Cashew Ice Cream Cake on a tin can</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(28)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Choco Brownie</h1>

          <h5 class="clear">Choco Brownie Ice Cream Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Ice Cream Cakes Tin Can/Choco Brownie.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>Choco Brownie Ice Cream Cake on a tin can</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(29)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Cookies and Cream</h1>

          <h5 class="clear">Cookies and Cream Ice Cream Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Ice Cream Cakes Tin Can/cookies and cream.jpg"
            alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>Cookies and Cream Ice Cream Cake on a tin can</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(30)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Mango Graham</h1>

          <h5 class="clear">Mango Graham Ice Cream Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Ice Cream Cakes Tin Can/Mango Graham.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>Mango Graham Ice Cream Cake on a tin can</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(31)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Vanilla</h1>

          <h5 class="clear">Vanilla Ice Cream Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Ice Cream Cakes Tin Can/vanilla.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>Vanilla Ice Cream Cake on a tin can</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(32)">
          ADD TO CART
        </button>
      </li>
    </ul>
  </div>

  <div class="product-list">
    <h1 class="product-header">Sans Rival Cakes</h1>
    <div class="wline"></div>
    <br />

    <ul class="product-card">
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Classic</h1>

          <h5 class="clear">Classic Sans Rival Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Sans Rival Cakes/Classic 9x4.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of nutty meringue, chocolate French buttercream, and
              dark chocolate flavored crumbs.
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(33)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Double Choco</h1>

          <h5 class="clear">Double Chocolate Sans Rival Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Sans Rival Cakes/Double Choco 9x4.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of nutty meringue, chocolate French buttercream, and
              dark chocolate flavored crumbs.
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(34)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Mocha</h1>

          <h5 class="clear">Mocha Sans Rival Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Sans Rival Cakes/Mocha 9x4.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of nutty meringue, chocolate French buttercream, and
              dark chocolate flavored crumbs.
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(35)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Red Velvet</h1>

          <h5 class="clear">Red Velvet Sans Rival Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Sans Rival Cakes/Red Velvet 9x4.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of nutty meringue, chocolate French buttercream, and
              dark chocolate flavored crumbs.
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(36)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Ube</h1>

          <h5 class="clear">Ube Sans Rival Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Sans Rival Cakes/Ube 9x4.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of nutty meringue, chocolate French buttercream, and
              dark chocolate flavored crumbs.
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(37)">
          ADD TO CART
        </button>
      </li>
    </ul>
  </div>

  <div class="product-list">
    <h1 class="product-header">Sansribars</h1>
    <div class="wline"></div>
    <br />

    <ul class="product-card">
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Choco Cashew</h1>

          <h5 class="clear">Choco Cashew Sansribar</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Sansribars/Choco Cashew.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of nutty meringue, chocolate French buttercream, and
              dark chocolate flavored crumbs.
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(38)">
          ADD TO CART
        </button>
      </li>
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Classic</h1>

          <h5 class="clear">Classic Sansribar</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Sansribars/Classic.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of nutty meringue, chocolate French buttercream, and
              dark chocolate flavored crumbs.
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(39)">
          ADD TO CART
        </button>
      </li>
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Double Choco</h1>

          <h5 class="clear">Double Choco Sansribar</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Sansribars/Double Choco.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of nutty meringue, chocolate French buttercream, and
              dark chocolate flavored crumbs.
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(40)">
          ADD TO CART
        </button>
      </li>
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Mocha</h1>

          <h5 class="clear">Mocha Sansribar</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Sansribars/Mocha.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of nutty meringue, chocolate French buttercream, and
              dark chocolate flavored crumbs.
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(41)">
          ADD TO CART
        </button>
      </li>
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Red Velvet</h1>

          <h5 class="clear">Red Velvet Sansribar</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Sansribars/Red Velvet.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of nutty meringue, chocolate French buttercream, and
              dark chocolate flavored crumbs.
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(42)">
          ADD TO CART
        </button>
      </li>
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Ube</h1>

          <h5 class="clear">Ube Sansribar</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Sansribars/Ube.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of nutty meringue, chocolate French buttercream, and
              dark chocolate flavored crumbs.
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(43)">
          ADD TO CART
        </button>
      </li>
    </ul>
  </div>

  <div class="product-list">
    <h1 class="product-header">Silvanas Gems</h1>
    <div class="wline"></div>
    <br />

    <ul class="product-card">
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Silvanas Gems 10pc</h1>

          <h5 class="clear">10 pieces Assorted Silvanas Gems</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Silvanas Gems/asstd.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              10 pcs Meringue kisses coated with classic French
              buttercream rolled in flavored cake or cookie crumbs. "Oreo,
              Matcha, Ube, Red Velvet, Buttermilk, Graham, Chocolate,
              Butternut"
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(44)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Butternut Silvanas Gems 10pc</h1>

          <h5 class="clear">10 pieces Butternut Silvanas Gems</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Silvanas Gems/butternut.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              10 pcs Meringue kisses coated with classic French
              buttercream rolled in flavored cake or cookie crumbs. "Oreo,
              Matcha, Ube, Red Velvet, Buttermilk, Graham, Chocolate,
              Butternut"
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(45)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Coffee Silvanas Gems 10pc</h1>

          <h5 class="clear">10 pieces Coffee Silvanas Gems</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Silvanas Gems/coffee.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              10 pcs Meringue kisses coated with classic French
              buttercream rolled in flavored cake or cookie crumbs. "Oreo,
              Matcha, Ube, Red Velvet, Buttermilk, Graham, Chocolate,
              Butternut"
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(46)">
          ADD TO CART
        </button>
      </li>
    </ul>
  </div>

  <div class="product-list">
    <h1 class="product-header">Silvanas Sandwich</h1>
    <div class="wline"></div>
    <br />

    <ul class="product-card">
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Butternut</h1>

          <h5 class="clear">Butternut Silvanas Sandwich</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/SIlvanas Sandwich/butternut.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Meringue kisses coated with classic French buttercream
              rolled in flavored cake or cookie crumbs. "Oreo, Matcha,
              Ube, Red Velvet, Buttermilk, Graham, Chocolate, Butternut"
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(47)">
          ADD TO CART
        </button>
      </li>
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Coffee Series</h1>

          <h5 class="clear">Coffee Silvanas Sandwich</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/SIlvanas Sandwich/coffee series.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Meringue kisses coated with classic French buttercream
              rolled in flavored cake or cookie crumbs. "Oreo, Matcha,
              Ube, Red Velvet, Buttermilk, Graham, Chocolate, Butternut"
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(48)">
          ADD TO CART
        </button>
      </li>
    </ul>
  </div>

  <div class="product-list">
    <h1 class="product-header">Specialty Cakes</h1>
    <div class="wline"></div>
    <br />

    <ul class="product-card">
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Chocolate Medley</h1>

          <h5 class="clear">7" by 4" Round Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Specialty Cakes/Choco Medley 7x4.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of moist chocolate cake, dark chocolate buttercream &
              meringue dusted with dark cocoa powder
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(49)">
          ADD TO CART
        </button>
      </li>
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Chocolate Medley</h1>

          <h5 class="clear">9" by 4" Round Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Specialty Cakes/Choco Medley 9x4.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of moist chocolate cake, dark chocolate buttercream &
              meringue dusted with dark cocoa powder
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(50)">
          ADD TO CART
        </button>
      </li>

      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Duo Medley</h1>

          <h5 class="clear">9" by 4" Round Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Specialty Cakes/Duo Medley1.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of moist chocolate cake, dark chocolate buttercream &
              meringue dusted with dark cocoa powder
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(51)">
          ADD TO CART
        </button>
      </li>
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Red Velvet Medley</h1>

          <h5 class="clear">9" by 4" Round Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Specialty Cakes/red velvet medley closeup.jpg"
            alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of moist chocolate cake, dark chocolate buttercream &
              meringue dusted with dark cocoa powder
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(52)">
          ADD TO CART
        </button>
      </li>
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Salted Caramel Medley</h1>

          <h5 class="clear">9" by 4" Round Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Specialty Cakes/salted caramel closeup.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>
              Layers of moist chocolate cake, dark chocolate buttercream &
              meringue dusted with dark cocoa powder
            </p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(53)">
          ADD TO CART
        </button>
      </li>
    </ul>
  </div>

  <div class="product-list">
    <h1 class="product-header">Valentines Products</h1>
    <div class="wline"></div>
    <br />

    <ul class="product-card">
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Blue Berry</h1>

          <h5 class="clear">Blue Berry Heart Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Valentines SE products/BB heart.JPG" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>Blueberry Heart Cake perfect for Valentine date</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(54)">
          ADD TO CART
        </button>
      </li>
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Love You</h1>

          <h5 class="clear">Love You Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Valentines SE products/cake3.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>Love You Cake perfect for Valentine date</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(55)">
          ADD TO CART
        </button>
      </li>
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">I Love You</h1>

          <h5 class="clear">I Love You Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Valentines SE products/ily.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>I Love You Cake perfect for Valentine date</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(56)">
          ADD TO CART
        </button>
      </li>
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Ombre Cake</h1>

          <h5 class="clear">Ombre Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Valentines SE products/ombre cake.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>Ombre Cake perfect for Valentine date</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(57)">
          ADD TO CART
        </button>
      </li>
      <li class="products">
        <div class="productnamedesc">
          <h1 class="product-name">Strawberry Heart Cake</h1>

          <h5 class="clear">Strawberry Heart Cake</h5>
        </div>

        <div class="picwidth">
          <img class="product-pic" src="./img/Valentines SE products/ombre cake.jpg" alt="Cheesecake Truffles" />
          <div class="productdescorder">
            <p>Strawberry Heart Cake perfect for Valentine date</p>
          </div>
        </div>

        <button class="order-btn" onclick="addToCart(58)">
          ADD TO CART
        </button>
      </li>
    </ul>
  </div>
</div>
</div>
<footer class="footer"></footer>
</body>
<script src="./js/products.js"></script>

</html>