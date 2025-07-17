<?php
include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/checkout.css">
</head>

<body>

   <?php include 'header.php'; ?>

   <div class="heading">
      <h3>checkout</h3>
      <p> <a href="home.php">Home</a> / Checkout </p>
   </div>

   <?php if (isset($_SESSION['message'])): ?>
      <p class="message"><?= $_SESSION['message'];
      unset($_SESSION['message']); ?></p>
   <?php endif; ?>

   <section class="display-order">
      <?php
      $grand_total = 0;
      $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
      if (mysqli_num_rows($select_cart) > 0) {
         while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
            $total_price = $fetch_cart['price'] * $fetch_cart['quantity'];
            $grand_total += $total_price;
            ?>
            <p><?= $fetch_cart['name']; ?> <span>(<?= '$' . $fetch_cart['price'] . ' x ' . $fetch_cart['quantity']; ?>)</span>
            </p>
            <?php
         }
      } else {
         echo '<p class="empty">your cart is empty</p>';
      }
      ?>
      <div class="grand-total"> Grand Total : <span>$<?= $grand_total; ?>/-</span> </div>
   </section>

   <section class="checkout">
      <form action="placeorder.php" method="post">
         <h3>Place your order</h3>
         <div class="flex">
            <div class="inputBox">
               <span>your name :</span>
               <input type="text" name="name" required placeholder="Enter your name">
            </div>
            <div class="inputBox">
               <span>Contact Number :</span> 
               <input type="number" name="number" required placeholder="Enter your number">
            </div>
            <div class="inputBox">
               <span>your email :</span>
               <input type="email" name="email" required placeholder="Enter your email">
            </div>
            <div class="inputBox">
               <span>payment method :</span>
               <select name="method">
                  <option value="cash on delivery">cash on delivery</option>
                  <option value="credit card">credit card</option>
                  <option value="paypal">paypal</option>
                  <option value="paytm">paytm</option>
               </select>
            </div>
            <div class="inputBox">
               <span>Address:</span>
               <input type="text" name="Address" required placeholder="Your address">
            </div>
            
            <div class="inputBox">
               <span>City:</span>
               <input type="text" name="city" required placeholder="Your city">
            </div>
            <div class="inputBox">
               <span>State:</span>
               <input type="text" name="state" required placeholder="Your state">
            </div>
            <div class="inputBox">
               <span>Country:</span>
               <input type="text" name="country" required placeholder="Your country">
            </div>
            <div class="inputBox">
               <span>Pin Code:</span>
               <input type="number" name="pin_code" required placeholder="12345">
            </div>
         </div>
         <button type="submit" class="btn" name="order_btn">Order Now</button>
      </form>
   </section>

   <?php include 'footer.php'; ?>
   <script src="js/script.js"></script>
</body>

</html>