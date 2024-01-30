
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alumni fundraiser</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="styles1.css">
    <!-- <link rel="stylesheet" href="output.css"> -->   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
<!-- footer -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
<!-- nav google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet">


  </head>
  
  <body>
    <!-- Navigation Bar -->
    <?php 
    include('nav.php');
    include('header/header.php');
   ?>

   
    <!-- Hero Section -->
    <div class="hero-section">

      <div class="hero-left">
        
        <h1>WELCOME</h1>
        <p>Footprints of Success” is a Philanthropic initiative at raising Funds for
Development of Computer science department .

This groundbreaking Project embodies the Spirit of our university and aims to Provide the Financial Stability in Education , Research, community Building ,Events ,Placement Cell, Healthcare ,Scholarships etc.
     
Your support will directly contribute to creating lasting footprints that will guide the path for       
     aspiring students and elevate Pondicherry University to new heights of distinction.
</p>
        <a href="stripe/index.php" class="cta-button">Donate Now</a>
      </div>
      <div class="hero-right">

<!-- this for hero right -->
<div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#home" class="active">PU</a>
  <div id="myLinks">
    <a href="update/placement.php"> Placement</a>
    <a href="update/events.php">Events</a>
    <a href="update/research.php">Research</a>
    <a href="update/about.php">About</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<?php

//******************************** 
include('database/dbconnection.php');

$query = "SELECT * FROM `createfund`";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);


?>

<h2>Latest /<b>Updates</b></h2>

<marquee behavior="" direction="up" onmouseover="this.stop();" onmouseout="this.start();">

<!-- this code select data to the datebase -->




<?php 
  while($row = mysqli_fetch_assoc($result)){
?>
  <!--inside right side of hero section  -->
  <div style="padding: 16px; border: 1px solid #ccc; border-radius: 8px; background-color: #f8f8f8; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">

<h2 style="color: #333; font-size: 20px; margin-bottom: 12px;"><?php echo $row['Fund_Title']; ?></h2>

<p style="color: #555; font-size: 16px; margin-bottom: 16px;"><?php echo $row['Fund_Description']; ?></p>

<p style="color: #4CAF50; font-size: 18px; font-weight: bold; margin-bottom: 0;"><?php echo $row['Amount']; ?></p>

</div>









<?php } ?>
</marquee>

</div>
    
<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

</script>







        <!-- You can add any content you want on the right side of the hero section -->
        <!-- Example: -->
        
      </div>
    </div>

    <!-- Footer Section -->

    <?php
    include_once('footer.php');
    ?>
    
  

  </body>
</html>
