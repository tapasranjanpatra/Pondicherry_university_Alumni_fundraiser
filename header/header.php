<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <style>

/* Reset some default styles */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
  }
  
  /* Style the header */
  header {
    background-color:#e229b1;
    color: white;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  /* Style the logo */
  .logo {
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 1.2em;
  }
  
  /* Style the navigation menu */
  nav ul {
    list-style: none;
    display: flex;
    gap: 50px;

  }
  
  nav ul li {
    margin-right: 15px;
  }
  
  nav a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    transition: color 0.3s ease-in-out;
    font-family: 'Montserrat', sans-serif;
  }
  
  nav a:hover {
    color: #ffd700; /* Change the color on hover */
  }
  
  /* .logo img {
    width: 100px; 
    height: auto; 
  }
  */
  .logo {
    display: flex;
    align-items: center;
  }
  
  .logo img {
    width: 100px; /* Set the desired width for the logo */
    height: auto; /* Maintain the aspect ratio */
    margin-right: 10px; /* Adjust the right margin as needed */
    font-family: 'Montserrat', sans-serif;
  }
  
  .footprint {
    font-size: 3.5em; /* Set the desired font size for the footprint text */
    color: #26ebc4; /* Set the desired text color */
    font-family: 'Montserrat', sans-serif;
  }
  
  
    


    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo">
           
          <img src="logo.png" alt="pu Alumni">
          <span class="footprint">FOOTPRINTS</span>
        </a>
        
      
        <nav>
          <ul>
            <li><a href="header/community.php">Community</a></li>
            <li><a href="header/giving.php">Giving</a></li>
            <li><a href="header/program.php">Programs & Events</a></li>
            <li><a href="header/travel.php">Travel</a></li>
            <li><a href="#">College</a></li>
            <li><a href="#">Graduate Schools</a></li>
          </ul>
        </nav>
      </header>
      
</body>
</html>
