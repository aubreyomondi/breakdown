<?php
require_once 'connection.php';

// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: ../splash/index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Breakdown Admin</title>
    <link href="favicon.gif" rel="icon">
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
  <style>
  body {
      font: 14px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; 
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d;
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; 
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; 
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  .Julie
  {
     position: absolute;
  }
  </style>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="indexTT.php"><i class="fas fa-home"></i> Breakdown Services Locator </a>

    </nav>
          

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span><b><?php echo htmlspecialchars($_SESSION['username']); ?></b></span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="indexTT.php">
            <i class="fas fa-users"></i>
            <span>View and Update Users</span></a>
        </li>
    
        <li class="nav-item">
          <a class="nav-link" href="deleteF.php">
            <i class="fas fa-trash-alt"></i>
            <span>Remove User</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../logout.php">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log Out</span></a>
        </li>
      </ul>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
      <?php
require_once 'connection.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>
<div class="table-responsive">
<table class="table">
        <tr class="header">
          
            <td>Username</td>
            <td>Email</td>
            <td>User Type</td>
            
            <td><i class="fas fa-trash-alt"></i></td>
        </tr>
        <?php
           while ($row =$result->fetch_assoc()) {
           
            $um=$row['username'];
            $em=$row['email'];
            $cn=$row['UserType'];
            
               echo "<tr class= info>";
              
               echo "<td>".$um."</td>";
               echo "<td>".$em."</td>";
               echo "<td>".$cn."</td>";
               
               echo "<td><a class=\"btn btn-danger\" href=\"delete.php?username=".$um."\">Delete</a></td>";
               echo "</tr>";
           }

$conn->close();
        ?>
    </table>
    </div>             
              <hr/>         
  </div>
</div>
</body>
</html>