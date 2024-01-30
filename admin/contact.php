<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboad Design</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
   <!-- sidebar start -->
        <?php 
        include('include/sidebar.php');
        
        ?>
   <!-- sidebar end -->
<div class="main--content">
  <div class="header--wrapper">
    <div class="header-title">
      <span> Primary </span>
      <h2>Dashboard</h2>

    </div>
    <div class="user--info">
      <div class="searh--box">
        <i class="fa-solid fa-search"></i>
        <input type="text" placeholder="search"/>
      </div>
      <img src="tapas.jpg" alt=""/>
    </div>
  </div>
  <?php

//******************************** 
include('../database/dbconnection.php');

$query = "SELECT * FROM `contact`";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
?>
<!-- delete code start -->

<?php

$data=mysqli_fetch_assoc($result);

// delete
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM contact WHERE id = $id";
  
    if (mysqli_query($conn, $sql)) {
      // Record deleted successfully, you can redirect to a success page
      header('Location: contact.php');
    } else {
      // Handle errors if the deletion fails
      echo "Error: " . mysqli_error($connection);
    }
}


?>


<!-- delete code end  -->



<div class="tabular--wrapper">
  <h3 class="main-title">Finance Data</h3>
  <div class="table-container">
  

 
<table>
  <thead>
    <tr>
   
      <th>S.No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
      <th>Action</th>
      
    </tr>
    
 <tbody>
 <?php 
  while($row = mysqli_fetch_assoc($result)){
   ?>
  <tr>

    <td><?php echo $row['id'] ?></td>
    
    
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['message'] ?></td>
    <td><button><a href="contact.php?id=<?php echo $row['id'] ?>">Delete</a></button></td>
  </tr>
  <?php } ?>
  <tr>


 </tbody>
<tfoot>

  <tr>
    <td colspan="7"></td>
  </tr>
</tfoot>

  </thead>
</table>
  </div>

</div>


</div>

</body>
</html>