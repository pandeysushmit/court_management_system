<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span></span></h1>
      <p>this is an user page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
  <title>User_Page</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="assets/css/style.css"></link>
  </head>
</head>
<body>   
<nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color:  #37c2e9;">
    <i class="navbar-brand ml-5" href="" onclick="openNav()" style="color: red">
        <img src="./assets/images/logo.png" width="80" height="80" alt="Swiss Collection">
    </i>
    <!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul> -->
    <span class="navbar-brand mx-auto" style="font-size:50px"> Court Management System</span>
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['user_id'])){
          ?>
          <a href="logout.php" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
         </a>
          <?php
        } else {
            ?>
            <a href="logout.php" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
            </a>

            <?php
        } ?>
    </div>  
</nav>
    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="background-color: #37c2e9">
                <?php
                    $name = $_SESSION['user_name'];
                    $sql = "SELECT id FROM user_form WHERE name='$name'";
                    $result = mysqli_query($conn, $sql);
                     $row = mysqli_fetch_assoc($result);
                    $id=$row['id'];
                ?>
                    <a href="caseFile.php?userid='<?=$row['id']?>'"><i class="fa fa-users  mb-2" style="font-size: 70px; text-decoration:none;"></i></a>
                    <h4 style="color:white;">File a Case</h4>
                    <h5 style="color:white;">
                    </h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #37c2e9">
                    <!-- <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i> -->
                    <a href="lawyers_User.php"><i class="fa fa-th-large  mb-2" style="font-size: 70px; text-decoration:none;"></i></a>
                    <h4 style="color:white;">Find Lawyers</h4>
                    <h5 style="color:white;">
                    <?php
                  //    $sql="SELECT * from user_form where user_type='user'";
                  //    $result=$conn-> query($sql);
                  //    $count=0;
                  //    if ($result-> num_rows > 0){
                  //        while ($row=$result-> fetch_assoc()) {
                 
                  //            $count=$count+1;
                  //        }
                  //        $count--;
                  //    }
                  //    echo $count;
                  //  ?>
                  </h5>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="background-color: #37c2e9">
                    <!-- <i class="fa fa-th mb-2" style="font-size: 70px;"></i> -->
                    <a href="currCases.php?userid='<?=$row['id']?>'"><i class="fa fa-users  mb-2" style="font-size: 70px; text-decoration:none;"></i></a>
                    <h4 style="color:white;">Current Cases</h4>
                    <h5 style="color:white;">
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #37c2e9">
                    <i class="fa fa-list mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Laws Gazette</h4>
                    <h5 style="color:white;">
                   </h5>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
<div class="sidebar" id="mySidebar" style="background-color: #37c2e9">
<div class="side-header">
    <img src="assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;">Hello, <?php echo $_SESSION['user_name'] ?></h5>
</div>

<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
    <a href="./index.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="#customers"  onclick="showCustomers()" ><i class="fa fa-users"></i> Case Details</a>
    <a href="#category"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Your Lawyers</a>
    <a href="#sizes"   onclick="showSizes()" ><i class="fa fa-th"></i> Court Details</a>
    <a href="#productsizes"   onclick="showProductSizes()" ><i class="fa fa-th-list"></i> Your Bills</a>    
    <a href="#products"   onclick="showProductItems()" ><i class="fa fa-th"></i> Documents</a>
    <a href="#orders" onclick="showOrders()"><i class="fa fa-list"></i> FIR Details</a>
</div> 
<div id="main">
    <button class="openbtn" style="background-color:white"><i></i></button>
</div>
</html>