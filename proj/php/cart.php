<!-- <div class="cart">
  <div class="uppercart">
    <h1 class="cartheader">Your Cart</h1>
    <p><i>We're here to sweeten your day!</i></p>
  </div>

  <div class="line"></div>
  <div class="lowercart">
    <h1 id="removethis">Your orders are displayed here...</h1>
  </div>
</div -->
<div class="cart" id="cart">
  <!-- <form class="cartform" action="checkout.php" name="cart" method="POST"> -->
    <div class="uppercart">
      <h1 class="cartheader" id="head">Your Cart</h1>
      <p><i>We're here to sweeten your day!</i></p>
    </div>

        <!-- <div class="line"></div> -->
        <div class="lowercart"><p id="removethis">
        <?php 
        
        
        ?>  
        Your orders are displayed here...</p>
        <div class="list"></div>
        <!-- <form method="POST"> -->
          <button type="submit" name="item" id="purchasebtn" class="purchasebtn" onclick="ordercatch()">Purchase</button>
        <!-- </form> -->
        </div>
        
  <!-- </form>  -->
</div>