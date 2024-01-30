<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundraiser Form - Admin</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        .admin-navbar {
            background-color: #841997;
            overflow: hidden;
        }

        .admin-navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .admin-navbar a:hover {
            background-color: #ddd;
            color: rgb(143, 37, 147);
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
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
    </style>
</head>
<body>
<?php
 include('../database/dbconnection.php');

 
 
if (isset($_POST['submit'])) {

    $Fund_Title= $_POST['fundTitle'];
    $Fund_Description= $_POST['fundDescription'];
    $Amount	=$_POST['amount'];
    $Creator_Name=$_POST['creatorName'];
    $Date=$_POST['date'];
    // ********************** //

    $query = "INSERT INTO `createfund` (`Fund_Title`,`Fund_Description`,`Amount`,`Creator_Name`,`Date`) VALUES(?,?,?,?,?)";
    $mysql = mysqli_prepare($conn,$query);
    mysqli_stmt_bind_param($mysql, "ssiss", $Fund_Title, $Fund_Description, $Amount, $Creator_Name, $Date);
    
    $result = mysqli_stmt_execute($mysql);
    if ($result == true) {
        echo 'Data inserted successfully';
    } else {
        echo 'Data not inserted. Error: ' . mysqli_error($conn);
    }
}
    

    ?>



    <header>
        <h1>Admin Panel</h1>
    </header>

    <div class="admin-navbar">
        <a href="#" class="active">Home</a>
        <a href="#">Fundraisers</a>
        <a href="#">Settings</a>
        <!-- Add more links as needed -->
    </div>

    <form method="post">
        <label for="fundTitle">Fund Title:</label>
        <input type="text" id="fundTitle" name="fundTitle" required>

        <label for="fundDescription">Fund Description:</label>
        <textarea id="fundDescription" name="fundDescription" rows="4" required></textarea>

        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" required>

        <label for="creatorName">Creator Name:</label>
        <input type="text" id="creatorName" name="creatorName" required>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>
