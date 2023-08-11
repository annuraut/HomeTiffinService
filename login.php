<!DOCTYPE html>
<html>
  <head>
    <title>Simple Login System Design Using Php And MySql | Rustcode</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    
   <?php
      include 'head1.php';
    ?>
     
     <section id="login">
        <center>
<form action="">
            <h1>Get In Touch</h1>
            <!-- <input type="text" placeholder=" your name" required><br><br> -->
            <input type="email" placeholder=" your email" name="email" required><br><br>
            <input type="password" placeholder="password" name="pass" required ><br><br>
            <!-- <textarea name="text" cols="30" rows="10"  placeholder="Message"></textarea><br><br><br> -->
                 <button>
                   Sumit
                 </button>   <p>
              Don't have an account? <a href="registration.php">Signup Now</a>
            </p>          <!-- <input type="sumit" value="Submit"> -->
            <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->

        </form><br>
        </center>
        </section>
    </body>
</html>
