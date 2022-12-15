<!DOCTYPE html>
<html>
<head>
  <title>User List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!-- <link rel="stylesheet" href="assets/css/style.css"></link> -->
  <style>
html,body{
  height: 100%;
  z-index: 2;
}
.intro{
  z-index:3;
  overflow-x:hidden;
  /* position: fixed; */
}
table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
.mask-custom {
  background: rgba(24, 24, 16, .2);
  border-radius: 2em;
  backdrop-filter: blur(25px);
  border: 2px solid rgba(255, 255, 255, 0.05);
  background-clip: padding-box;
  box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
}
  </style>
</head>  
<nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color:  #37c2e9;">
    <a href="admin_page.php"><i class="navbar-brand ml-5" onclick="openNav()" style="color: red">
        <img src="./assets/images/logo.png" width="80" height="80" alt="Swiss Collection">
    </i></a>
    <span class="navbar-brand mx-auto" style="font-size:50px"> Court Document Automation</span>
    <!-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul> -->
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
<section class="intro">
  <div class="bg-image h-100" style="background-image: url(https://c4.wallpaperflare.com/wallpaper/307/345/278/scales-wallpaper-preview.jpg); background-size:100% ">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card mask-custom" style="background:transparent;">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-borderless text-white mb-0">
                  <thead>
      <tr><th colspan="4" style="text-align:center;">Lawyer Details</th></tr> 
      <tr>
        <th class="">Lawyer ID</th>
        <th class="">Name </th>
        <th class="">Contact</th>
        <th class="">Address</th>
        <th class="">Operations</th>
      </tr>
    </thead>
    <?php
      include_once "config.php";
      $sql="SELECT * from lawyers";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$row["L_ID"]?></td>
      <td><?=$row["L_Name"]?></td>
      <td><?=$row["L_Contact"]?></td>
      <td><?=$row["L_Addr"]?></td>
      <td><button class="btn btn-outline-primary"><a href="update.php?updateid='<?=$row['L_ID']?>'">Update</a></button></td>
      <td><button class="btn btn-outline-primary"><a href="delete.php?deleteid='<?=$row['L_ID']?>'">De-bar</a></button></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <div > -->
    <!-- <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="background-color: #37c2e9">
                    <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">File a Case</h4>
                    <h5 style="color:white;">
                    </h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #37c2e9">
                    <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
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
                    <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
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
</body> -->
<!-- <div class="sidebar" id="mySidebar" style="background-color: #37c2e9">
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
</div> -->
</html>