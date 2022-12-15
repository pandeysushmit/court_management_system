<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin(<?php echo $_SESSION['admin_name'] ?>)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="assets/css/style.css"></link>
       <style>
        body{
            color:white;
        }
       </style>
</head>
<body>
    
        <?php
            include "adminHeader.php";
            include "sidebar.php";
            include_once "config.php"
        ?>
    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="background-color: #37c2e9; padding-bottom: 14px;padding-top: 14px;padding-left: 14px;padding-right: 14px;">
                <a href="viewCustomers.php"><i class="fa fa-users  mb-2" style="font-size: 70px; text-decoration:none;"></i></a>
                    <h4 style="color:white; margin-bottom: 0px;margin-top: 5px;">Total Applicants</h4></a>
                    <h5 style="color:white; margin-bottom: 0px;">
                    <?php
                        $sql="SELECT * from user_form where user_type='user'";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #37c2e9">
                    <!-- <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i> -->
                    <a href="allCases.php"><i class="fa fa-th-large mb-2  mb-2" style="font-size: 70px; text-decoration:none;"></i></a>
                    <h4 style="color:white;">Total Cases</h4>
                    <h5 style="color:white;">
                    <?php
                     $sql="SELECT * from cases";
                     $result=$conn-> query($sql);
                     $count=0;
                     if ($result-> num_rows > 0){
                         while ($row=$result-> fetch_assoc()) {
                 
                             $count=$count+1;
                         }
                     }
                     echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="background-color: #37c2e9">
                    <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total Issue</h4>
                    <h5 style="color:white;">
                    <?php
                     $sql="SELECT * from issues";
                     $result=$conn-> query($sql);
                     $count=0;
                     if ($result-> num_rows > 0){
                         while ($row=$result-> fetch_assoc()) {
                 
                             $count=$count+1;
                         }
                     }
                     echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #37c2e9">
                    <i class="fa fa-list mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Pending Bills</h4>
                    <h5 style="color:white;">
                    <?php
                      $sql="SELECT * from bills";
                      $result=$conn-> query($sql);
                      $count=0;
                      if ($result-> num_rows > 0){
                          while ($row=$result-> fetch_assoc()) {
                  
                            //   $count=$count+1;
                            $count=$count+ $row["Item_Price"]*$row["Item_Quantity"];
                          }
                      }
                      echo $count;
                   ?>
                   </h5>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <!-- <script type="text/javascript" src="assets/js/ajaxWork.js"></script> -->
</body>
</html>