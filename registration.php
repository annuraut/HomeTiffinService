
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
<?php
  include 'head1.php'

  ?>
   

 <section id="registration">
    <center>

 <form action="" method="post">
    <div class="form">
        <h1>Registration</h1><br><br>
        <div class="for1">

<div class="for">

<input type="text" name="fname" placeholder="Enter your first name"  required>
</div>

<div class="for">

<input type="text" name="lname" placeholder="Enter your last name"  required>
</div> 

<div class="for">

<input type="email" name="email" placeholder="Enter your email"  required>
</div>

<div class="for">

<input type="number" name="mobile" placeholder="Enter your mobile number"  required>
</div>

<div class="for">

<input type="text" name="city" placeholder="Enter your city"  required>
</div>
<div class="for">

<input type="password" name="pass" placeholder="Enter password"  required>
</div><br>
<button name="submit">Submit</button>
<p>Already have an account ? <a href="login.php">Login</a></p>
</div>

</form>
</center>
 </section>
 <?php
  include 'conn.php';

  if(isset($_POST['submit'])){
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $city= $_POST['city'];
    $pass= $_POST['pass'];

    $q="INSERT INTO `reg1`( `fname`, `lname`, `email`, `mobile`,`city`,`pass`) VALUES ('$fname','$lname','$email','$mobile','$city','$pass')";

    $query = mysqli_query($con,$q);
    // echo "successfull";
    if($query){
        
        ?>
        <script>
            alert("1 Row inserted......");

        </script>
        <?php
         header('location: login.php');

        
    }
    else{
        ?>
        <script>
            alert("not inserted...."); 
        </script>

        <?php
    }
    
    
  }

  ?>

  
<?php
include 'footer.php';
?>
</body>
</html>