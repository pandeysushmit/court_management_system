<div class="sidebar" id="mySidebar" style="background-color: #37c2e9">
<div class="side-header">
    <img src="assets/images/logo.png" width="120" height="120"> 
    <h5 style="margin-top:10px;">Hello, <?php echo $_SESSION['admin_name'] ?></h5>
</div>
<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="background-color: rgb(55, 194, 233)">x</a>
    <a href="./index.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="viewCustomers.php" ><i class="fa fa-users"></i> Applicants</a>
    <a href="allCases.php"   ><i class="fa fa-th-large"></i> Cases</a>
    <a href="staffs.php"  ><i class="fa fa-th"></i> Office Staff</a>
    <a href="judges.php"  ><i class="fa fa-th-list"></i> Judges</a>    
    <a href="bills.php" ><i class="fa fa-th"></i> Bills</a>
    <a href="files.php"><i class="fa fa-list"></i> Files</a>
</div>
<div id="main">
    <button class="openbtn" style="background-color:transparent"><i></i></button>
</div>


