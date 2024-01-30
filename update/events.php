<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Cell Fundraiser</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;600&family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color:#e24599;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        .topnav {
            background-color: #b01572;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: rgb(160, 29, 29);
        }

        .topnav a.icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {display: none;}
            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {position: relative;}
            .topnav.responsive a {
                display: block;
                float: none;
                text-align: left;
            }
            .topnav.responsive div {
                display: block;
                position: absolute;
                z-index: 1;
                top: 60px;
                left: 0;
                background-color: #444;
            }
        }

        .hero-section {
            background: url('hero-image.jpg') center/cover no-repeat;
            color: #fff;
            text-align: center;
            padding: 100px 20px;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1, h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #555;
        }

        .fundraising {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .donate-btn {
            padding: 12px 24px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
            display: inline-block;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .donate-btn:hover {
            background-color: #45a049;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>Events</h1>
    </header>

    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">PU</a>
        <!-- <a href="#home" class="active">PU</a> -->
        <a href="placement.php">Placement</a>
        <a href="events.php">Events</a>
        <a href="research.php">Research</a>
        <a href="about.php">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            &#9776;
        </a>
    </div>

    <div class="hero-section">
        <h2>Support Our Cause</h2>
        <p>
            Support our placement cell alumni fundraiser to elevate careers and inspire the futures of aspiring graduates. Your contribution directly fuels opportunities, mentorship, and resources for students, ensuring they step confidently into the professional world.

As alumni, let's unite to shape success stories and fortify the legacy of our placement cell. Join us in making a meaningful impact today.
        </p>
    </div>

    <section>
        <h2>Why Donate?</h2>
        <p>
            Your contribution helps us provide better placement opportunities for students.  let's come together to make a lasting impact and shape the legacy of our alma mater..
        </p>

        <div class="fundraising">
            <p>
                Help us reach our fundraising goal and support the placement cell activities.
            </p>
            <a href="../stripe/index.php" class="donate-btn">Donate Now</a>
        </div>
    </section>

    <section>
        <h2>Contact Us</h2>
        <p>
            If you have any questions or would like more information, please contact us using the form below.
        </p>
        <?php
 include('../database/dbconnection.php');

 
 
if (isset($_POST['submit'])) {

    $name= $_POST['name'];
    $email= $_POST['email'];
    $message=$_POST['message'];
    
    // ********************** //

    $query = "INSERT INTO `contact` (`name`,`email`,`message`) VALUES(?,?,?)";
    $mysql = mysqli_prepare($conn,$query);
    mysqli_stmt_bind_param($mysql, "sss", $name, $email, $message);
    
    $result = mysqli_stmt_execute($mysql);
    if ($result == true) {
        echo 'Data inserted successfully';
    } else {
        echo 'Data not inserted. Error: ' . mysqli_error($conn);
    }
}
    

    ?>

        <form method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit"name="submit">Submit</button>
        </form>
    </section>

    <footer>
        &copy; 2023 Placement Cell Fundraiser
    </footer>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

</body>
</html>
