<?php
include 'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM user_form WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Delete Successfully";
        header('location:viewCustomers.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
































