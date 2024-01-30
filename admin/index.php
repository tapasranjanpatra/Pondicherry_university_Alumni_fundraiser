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
     include('../database/dbconnection.php');
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
  <div class="card--container">
  <?php
  $query = "SELECT * FROM `transaction`";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

?>
<?php 
  $totalAmount = 0;
  $monthAmount=0;
  $todayAmount = 0;
  while($row = mysqli_fetch_assoc($result)){
    $totalAmount = $totalAmount + $row['amount'];
    $month = date('m', strtotime($row['added_date']));
  
    if(date('m')==$month){
      $monthAmount = $monthAmount+$row['amount'];
    }
    $currdate = date('Y-m-d');
    $currentdate = date('Y-m-d', strtotime($row['added_date']));
    if($currdate==$currentdate){
      $todayAmount = $todayAmount+$row['amount'];
    } 

  }
  $date = new DateTime('-7 days'); // Adjusted to use the correct DateTime constructor
  $dateweek = $date->format('Y-m-d'); // Output the formatted date
  $currdateweek =date('Y-m-d');
  
  $queryWeekly = "SELECT * FROM `transaction` WHERE DATE_FORMAT(added_date, '%Y-%m-%d') BETWEEN '2024-01-08' AND '2024-01-01'";
$stmtWeekly = mysqli_prepare($conn, $queryWeekly);
mysqli_stmt_execute($stmtWeekly);

$resultWeekly = mysqli_stmt_get_result($stmtWeekly);

$rowCount = mysqli_num_rows($resultWeekly);
echo $rowCount;
$weeklyAmount = 0;
while($rowWeek = mysqli_fetch_assoc($resultWeekly)){
 $weeklyAmount=$weeklyAmount+$rowWeek['amount'];
 echo $weeklyAmount;
}
  ?>



<h3 class="main--title">Today's data</h3>
<div class="card--wrapper">
  <div class="payment--card light-red">
    <div class="card--header">
      <div class="amount">
        <span class="title">Payment today</span>
        <span class="amount--value">₹<?php echo $todayAmount; ?></span>

      </div>
      <i class="fas fa-rupee-sign icon"></i>
    </div>
    <span class="card-detail">**** **** **** 3484</span>

  </div>
  <div class="payment--card light-purle">
    <div class="card--header">
      <div class="amount">
        <span class="title"> Payment weekly</span>
        <span class="amount--value">₹<?php echo $weeklyAmount; ?></span>

      </div>
      <i class="fas fa-list icon dark-purple"></i>
    </div>
    <span class="card-detail">**** **** **** 5542</span>

  </div>
  <div class="payment--card light-green">
    <div class="card--header">
      <div class="amount">
        <span class="title">Payment monthly</span>
        <span class="amount--value">₹<?php echo $monthAmount; ?></span>

      </div>
      <i class="fas fa-users icon dark-green"></i>
    </div>
    <span class="card-detail">**** **** **** 8896</span>

  </div>
  <div class="payment--card light-blue">
    <div class="card--header">
      <div class="amount">
        <span class="title">Total amount</span>
        <span class="amount--value">₹<?php echo $totalAmount ?></span>

      </div>
      <i class="fa-solid fa-check icon dark-blue"></i>
    </div>
    <span class="card-detail">**** **** **** 7745</span>

  </div>
  

</div>
  </div>

<div class="tabular--wrapper">
  <h3 class="main-title">Finance Data</h3>
  <div class="table-container">
    <?php
  $query = "SELECT * FROM `transaction`";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

?>


<table>
  <thead>
    <tr>
      <th>Date/Time</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Amount</th>
      <th>Status</th>
      <th>Action</th>
     
    </tr>
 <tbody>
 <?php 
  $totalAmount = 0;
  while($row = mysqli_fetch_assoc($result)){
    $totalAmount = $totalAmount + $row['amount'];
?>

  <tr>
    <td><?php echo $row['added_date']?></td>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['mobile']?></td>
    <td><?php echo $row['amount']?></td>
    
    <td><?php echo $row['status']?></td>
    <td><button>Edit</button></td>

  </tr>

  <?php } ?>
  

 </tbody>
<tfoot>

  <tr>
    <td colspan="7">Total Amount:₹<?php echo $totalAmount; ?></td>
  </tr>
</tfoot>

  </thead>
</table>
  </div>

</div>


</div>

</body>
</html>