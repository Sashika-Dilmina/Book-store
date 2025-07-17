<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/about.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="image">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
        <p> We offer a wide range of books for children, students, and adults, including storybooks, novels, school books, and more 
         all in one place. Our prices are low and fair, so you can enjoy great books without spending too much. We deliver your orders quickly and safely to your home, and our easy-to-use website makes searching, choosing, and buying books simple and fast.</p>

         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="image1">
         <p>Amazing selection and fast delivery! I found the perfect book for my child, and the checkout process was super easy.</p>

         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="image2">
         <p>User-friendly website, fair prices, and great service. This bookstore has become my go-to for school textbooks.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emily White</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="image3">
         <p>Very professional service. I ordered several books for our office library, and they arrived neatly packed and on time.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>David Chen</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="image4">
         <p>Books were in excellent condition, and delivery was fast. I also loved the personalized recommendations!.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Maria Relso</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="image5">
         <p>Reliable, fast, and affordable! The best online bookstore I’ve used. Highly recommend it to friends and family.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chris Johnson</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="image6">
         <p>I enjoy reading, and this store never fails to deliver fresh titles at low prices. Great for book lovers!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michael Biya</h3>
      </div>

   </div>

</section>

<section class="authors">
   <div class="container">
      <h1 class="section-title">Great Authors</h1>
      <div class="authors-grid">
         
         <div class="author-card">
            <div class="author-image">
               <img src="images/author-1.jpg" alt="William Shakespeare">
               <div class="social-overlay">
                  <div class="social-links">
                     <a href="#" class="social-link facebook" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                     <a href="#" class="social-link instagram" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                     </a>
                     <a href="#" class="social-link linkedin" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="author-info">
               <h3 class="author-name">William Shakespeare</h3>
               <p class="author-bio">English playwright and poet, widely regarded as the greatest writer in the English language.</p>
            </div>
         </div>

         <div class="author-card">
            <div class="author-image">
               <img src="images/author-2.jpg" alt="Jane Austen">
               <div class="social-overlay">
                  <div class="social-links">
                     <a href="#" class="social-link facebook" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                     <a href="#" class="social-link instagram" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                     </a>
                     <a href="#" class="social-link linkedin" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="author-info">
               <h3 class="author-name">Jane Austen</h3>
               <p class="author-bio">English novelist known for her wit, social commentary, and timeless romantic stories.</p>
            </div>
         </div>

         <div class="author-card">
            <div class="author-image">
               <img src="images/author-3.jpg" alt="Charles Dickens">
               <div class="social-overlay">
                  <div class="social-links">
                     <a href="#" class="social-link facebook" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                     <a href="#" class="social-link instagram" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                     </a>
                     <a href="#" class="social-link linkedin" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="author-info">
               <h3 class="author-name">Charles Dickens</h3>
               <p class="author-bio">Victorian author famous for his vivid characters and depictions of social issues.</p>
            </div>
         </div>

         <div class="author-card">
            <div class="author-image">
               <img src="images/author-4.jpg" alt="Leo Tolstoy">
               <div class="social-overlay">
                  <div class="social-links">
                     <a href="#" class="social-link facebook" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                     <a href="#" class="social-link instagram" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                     </a>
                     <a href="#" class="social-link linkedin" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="author-info">
               <h3 class="author-name">Leo Tolstoy</h3>
               <p class="author-bio">Russian writer regarded as one of the greatest authors of all time.</p>
            </div>
         </div>

         <div class="author-card">
            <div class="author-image">
               <img src="images/author-5.jpg" alt="Napoleon Hill">
               <div class="social-overlay">
                  <div class="social-links">
                     <a href="#" class="social-link facebook" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                     <a href="#" class="social-link instagram" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                     </a>
                     <a href="#" class="social-link linkedin" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="author-info">
               <h3 class="author-name">Napoleon Hill</h3>
               <p class="author-bio">American self-help author, best known for "Think and Grow Rich".</p>
            </div>
         </div>

         <div class="author-card">
            <div class="author-image">
               <img src="images/author-6.jpg" alt="Maya Angelou">
               <div class="social-overlay">
                  <div class="social-links">
                     <a href="#" class="social-link facebook" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                     <a href="#" class="social-link instagram" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                     </a>
                     <a href="#" class="social-link linkedin" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="author-info">
               <h3 class="author-name">Maya Angelou</h3>
               <p class="author-bio">American poet, memoirist, and civil rights activist known for her powerful voice.</p>
            </div>
         </div>

         <div class="author-card">
            <div class="author-image">
               <img src="images/author-7.jpeg" alt="Peter Drucker">
               <div class="social-overlay">
                  <div class="social-links">
                     <a href="#" class="social-link facebook" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                     <a href="#" class="social-link instagram" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                     </a>
                     <a href="#" class="social-link linkedin" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="author-info">
               <h3 class="author-name">Virginia Woolf</h3>
               <p class="author-bio">Austrian-American management consultant and author, known as the "father of modern management".</p>
            </div>
         </div>

         <div class="author-card">
            <div class="author-image">
               <img src="images/author-8.jpg" alt="Virginia Woolf">
               <div class="social-overlay">
                  <div class="social-links">
                     <a href="#" class="social-link facebook" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                     <a href="#" class="social-link instagram" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                     </a>
                     <a href="#" class="social-link linkedin" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="author-info">
               <h3 class="author-name">Peter Drucker</h3>
               <p class="author-bio">English writer and modernist pioneer, known for her innovative narrative techniques.</p>
            </div>
         </div>

      </div>
   </div>
</section>






<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>