<?php
include_once 'config.php';
if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}
?>
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
