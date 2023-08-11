<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <?php
     include 'head1.php';
    ?>
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