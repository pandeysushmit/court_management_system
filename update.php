<?php
include 'config.php';
$id=$_GET['updateid'];
$sql = "SELECT * FROM user_form WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name=$row['name'];
$email = $row['email'];
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "UPDATE user_form SET 
    name='$name', email='$email' WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:viewCustomers.php');
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
   <title>register form</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body  style="background-image: url(https://c4.wallpaperflare.com/wallpaper/307/345/278/scales-wallpaper-preview.jpg); background-size:100%; ">
<!-- <span style="text-align:center; width:100%;">Nav</span> -->
<!-- <nav class="navbar sticky-top navbar-light bg-light"> -->
<!-- </nav> -->
<div class="form-container" style="url(https://c4.wallpaperflare.com/wallpaper/307/345/278/scales-wallpaper-preview.jpg); background-size:100%; ">
   
   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name" value="<?php echo $name;?>">
      <input type="email" name="email" required placeholder="enter your email" value="<?php echo $email;?>">
      <input type="submit" name="submit" value="Update" class="form-btn" style="background-color:#37c2e9;">
   </form>
</div>
</body>
</html>