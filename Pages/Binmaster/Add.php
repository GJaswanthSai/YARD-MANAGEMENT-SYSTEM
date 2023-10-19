<?php
    include "connection_1.php";
    if(isset($_POST['submit'])){
        $Bin_No = $_POST['Bin_No'];
        $Bin_Desc= $_POST['Bin_Desc'];
        $Bin_Location = $_POST['Bin_Location'];
        $q = " INSERT INTO `bin_master`(`Bin_No`, `Bin_Desc`, `Bin_Location`) VALUES ( '$Bin_No', '$Bin_Desc', '$Bin_Location' )";
        $query = mysqli_query($conn,$q);
        if($query)
        {
          echo '<script> 
          window.location.href="index.php"; 
          alert("Added Successfully")
          header("location:index.php");
          </script>';
         
        }
        else
        {
          echo '<script> 
          window.location.href="index.php"; 
          alert("canelled Successfully")
          header("location:index.php");
          </script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./binstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bin Master</title>

</head>
<body>
<div class="header">
    <img src="../images/vsp logo.png" alt="RINL Logo" class="logo">
    <h1>Yard Management System</h1>
  </div>
  <div class="welcome">
    <h2>Welcome to the Menu Page</h2>
  </div>
  
    <ul class="menu">
        <li class="menu-item">Receipts
            <ul class="submenu">
                <li><a href="../Yardreceipt/index.php">Truck</a></li>
                <li><a href="../Yardreceipt/index.php">Rail</a></li>
            </ul>
        </li>
        <li class="menu-item">Dispatch
            <ul class="submenu">
                <li><a href="../Yarddespatches/index.php">Truck</a></li>
                <li><a href="../Yarddespatches/index.php">Rail</a></li>
            </ul>
        </li>
        <li class="menu-item">Sale Order
          <ul class="submenu">
                <li><a href="../Saleorder/index.php">Sale Order</a></li>
            </ul>    
        </li>
        <li class="menu-item">Masters
            <ul class="submenu">
                <li><a href="../Usermaster/index.php">User</a></li>
                <li><a href="../Customermaster/index.php">Customer</a></li>
                <li><a href="../Productmaster/index.php">Product</a></li>
                <li><a href="../Binmaster/index.php">Bin</a></li>
            </ul>
        </li>
        <li class="menu-item"><a href="../HomePage/homePage.html">Logout</a></li>
    </ul>
    <br>
<nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">Bin Master Operations</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php"><span style="font-size:larger;"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<br>
<form method="post">
 <div class="container">
      
        <h1>Create New Bin</h1>
      <div class="input-box">
        <input type="text" placeholder="Bin_No" id="Bin_No" name="Bin_No" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Bin_Desc" id="Bin_Desc" name="Bin_Desc" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Bin_Location" id="Bin_Location" name="Bin_Location" required>
      </div>
      <button class="btn btn-success" type="submit" name="submit" >Add</button>
      <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
</div>
</form>
</body>
</html>