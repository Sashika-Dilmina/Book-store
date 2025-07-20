<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
     <h3>Worlds of Wonder <span>Await You.</span></h3>

      <p>Discover stories that inspire, educate, and transport you to new realms. Your next literary adventure is just a page away.</p>
      <a href="about.php" class="white-btn">discover more <span class="arrow">  &rarr; </span></a>
   </div>

</section>
<br>
<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="book-card">
   <img class="book-image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
   <h3 class="book-title"><?php echo $fetch_products['name']; ?></h3>
   <p class="book-author">by <?php echo $fetch_products['author'] ?? 'Unknown'; ?></p>

  
   <div class="book-bottom">
      <input type="number" name="product_quantity" value="1" min="1" class="quantity-input">
      <div class="book-price">$ <?php echo $fetch_products['price']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="Add to Cart" name="add_to_cart" class="book-btn">
   </div>
</form>

      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>
<div class="load-more" style="margin-top: 2rem; text-align:center">
   <a href="shop.php" >View All</a>
</div>


</section>

<section class="about-alt">
   <div class="about-wrapper">
      <div class="about-text">
         <h3>About Us</h3>
         <p>
            PAGETurner is a Sustainable & Ethically-Driven Bookstore for Readers.
            Distinguished by its Curated Collections & Excellent Value, PAGETurner is
            cherished by those who love knowledge, cherish stories, and seek comfort in pages.
         </p>
         <a href="about.php" class="about-btn">Learn More</a>
      </div>
      <div class="about-image">
         <img src="images/about.jpg" alt="Books on a shelf">
      </div>
   </div>
</section>



<section class="home-contact">
   <div class="content">
      <h3>Have any questions?</h3>
      <p>Whether you're searching for your next favorite read, need help with an order, or want personalized book recommendations — we're here to help!</p>
      <a href="contact.php" class="white-btn">Contact Us</a>
   </div>
</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>