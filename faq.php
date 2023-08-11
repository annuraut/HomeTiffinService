<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="faq.css">
</head>
<body>
  

<?php
include 'head1.php';
?>
<section id="faq">
<center>

<h2>F.A.Q.</h2><br>
<div class="faqq">

<button class="accordion">How to apply job HomeTiffinService website ?</button>
<div class="panel">
  <p>If you want to apply in Tiffinservice website then click on the link given below.</p><br>
  <button> <a href="job.php">Apply</a></button>
  <br><br><br>
</div>

<button class="accordion">Types of cuisines in HomeTiffineService Website ? </button>
<div class="panel">
  <p>Bihari cuisine, Rajshthani cuisine and South indian cuisine .</p><br><br><br>
</div>

<button class="accordion">How to order in HomeTiffineService website ?</button>
<div class="panel">
  <p>Go to the home page and then the availale mobile number call for for order.</p><br><br><br>
</div>

</div>
</center>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
</section>

<?php
include 'footer.php';
?>


</body>
</html>
