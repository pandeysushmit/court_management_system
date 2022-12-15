<?php
include 'config.php';
$id=$_GET['userid'];
if(isset($_POST['submit'])){
    //$CaseID = $_POST['CaseID'];
    $id=$_GET['userid'];
    $CaseTitle = $_POST['CaseTitle'];
    $Accused=$_POST['Accused'];
    $Lawyer=$_POST['Lawyer'];
    $Case_Date=$_POST['Case_Date'];
    $insert = "INSERT INTO cases(id, CaseTitle, Accused,Lawyer,Case_Date) VALUES($id, '$CaseTitle', '$Accused','$Lawyer','$Case_Date')";
    $result=mysqli_query($conn, $insert);
    if ($result) {
        header('location:user_page.php');
    }
    else{
        die(mysqli_error($conn));
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>File a Case</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body  style="background-image: url('https://as2.ftcdn.net/v2/jpg/02/60/93/25/1000_F_260932530_f9qhGwhAnyiGpSVrwtFEPML8PfLWijVE.jpg'); background-size: 100%;">
<!-- <span style="text-align:center; width:100%;">Nav</span> -->
<!-- <nav class="navbar sticky-top navbar-light bg-light"> -->
<!-- </nav> -->
<div class="form-container" style="background-image: url('https://as2.ftcdn.net/v2/jpg/02/60/93/25/1000_F_260932530_f9qhGwhAnyiGpSVrwtFEPML8PfLWijVE.jpg'); background-size: 100%;">
   
   <form action="" method="post">
      <h3>Enter Case Details</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="CaseTitle" required placeholder="Enter Case Title">
      <input type="text" name="Accused" required placeholder="Enter the Accused">
      <input type="text" name="Lawyer" required placeholder="Enter Lawyer Name">
      <input type="text" name="Case_Date" required placeholder="Enter Case Filing Date(YYYY-MM-DD)">
      <!-- <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select> -->
      <input type="submit" name="submit" value="File The Case" class="form-btn" style="background-color:#37c2e9;">
      <!-- <p>already have an account? <a href="login_form.php">login now</a></p> -->
   </form>

</div>

</body>
</html>