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
   <link rel="stylesheet" href="css/style.css">

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
        <img src="images/about.jpg" alt="">
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <p>We want to help you find the stories you love! Open your mind to endless possibilities. Read what you want, 
           when you want! Where your imagination comes alive.Where everything you need to know is only an arm’s length away!</p>
        <p>The bookstore that reads you while you read them, Where fantasy and fiction come true.Come for the book, leave with the knowledge. Take a look at our menu, 
		   we have the answers you’re looking for. Where the books are the best companions, Enjoy a new world inside a book.</p>
		<p>“You think your pain and your heartbreak are unprecedented in the history of the world, but then you read. It was books that taught me that the things that
		tormented me most were the very things that connected me with all the people who were alive, who had ever been alive.” ― James Baldwin</p>
		<p>Only bad books have good endings. If a book is any good, it's ending is always bad - because you don't want the book to end.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="developers">

   <h1 class="title">DEVELOPERS</h1>

   <div class="box-container">

      <div class="box">
        <img src="images/developer-3.jpeg" alt="">
		<b><p>NUR ARINAH IZZATI BINTI MOHD AFAZI</p></b>
		<p>2020834486</p>
        <h3>DEVELOPER 1</h3>
      </div>

      <div class="box">
        <img src="images/developer-2.jpeg" alt="">
        <b><p>SITI NURHALIZA BINTI MAT KHAMIS</p></b>
		<p>2020476478</p>
        <h3>DEVELOPER 2</h3>
      </div>

      <div class="box">
        <img src="images/developer-4.jpeg" alt="">
		<b><p>NURUL AFIQAH BINTI ABDULLAH</p></b>
		<p>2020828686</p>
        <h3>DEVELOPER 3</h3>
      </div>

      <div class="box">
        <img src="images/developer-5.jpeg" alt="">
        <b><p>NUR BATRISYIA HASBI BINTI HASMADI</p></b>
		<p>2020601748</p>
        <h3>DEVELOPER 4</h3>
      </div>

      <div class="box">
        <img src="images/developer-1.jpeg" alt="">
		<b><p>WAN NOR SUHAILA BINTI WAN ADNAN</p></b>
		<p>2020489186</p>
        <h3>DEVELOPER 5</h3>
      </div>
   </div>
</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
        <img src="images/author1.jpg" alt="">
        <h3>HANNA ALKAF</h3>
      </div>

      <div class="box">
         <img src="images/author2.jpg" alt="">
         <h3>COLLEEN HOOVER</h3>
      </div>

      <div class="box">
         <img src="images/author3.jpg" alt="">
         <h3>DANIEL SILVA</h3>
      </div>

      <div class="box">
         <img src="images/author4.jpg" alt="">
         <h3>JOHN GRISHAM</h3>
      </div>

      <div class="box">
         <img src="images/author5.jpg" alt="">
         <h3>HERNAN DIAZ</h3>
      </div>

      <div class="box">
         <img src="images/author6.jpg" alt="">
         <h3>DANI SHAPIRO</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>