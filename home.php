<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
    <?php
      include 'head1.php';
    ?>

<section id="home">
    <div class="back">
        <center>
        <h3>We Provide Best</h3>
        <h1>Eat Healthy And Stay Healthy.</h1>
        <button> <a href="">   Read More  </a></button>
        </center>
        
    </div>

</section>


<section id="service">
    <h1>Our services</h1>
    <div class="icon">
        <div class="line1">
           <img src="home.png" alt="">
           <h3>Home Delivery</h3>
        </div>

        <div class="line2">
            <img src="cal.png" alt="">
            <p>Fast Delivery</p>

        </div>

        <div class="line3">
            <img src="food.png" alt="">
            <h3>Hot Food</h3>

        </div>
    </div>
</section>

<section id="contact">
   
      <center>
             <form action="">
            <h1>Get In Touch</h1>
            <input type="text" placeholder=" your name" required><br><br>
            <input type="email" placeholder=" your email" required><br><br>
            <input type="text" placeholder="subject" required><br><br>
            <textarea name="text" cols="30" rows="10"  placeholder="Message"></textarea><br><br><br>
                 <button>
                   Sumit
                 </button>
            <!-- <input type="sumit" value="Submit"> -->
            <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->

        </form><br>
      </center>
</section>



<?php
include 'footer.php';
?>
    
</body>
</html>