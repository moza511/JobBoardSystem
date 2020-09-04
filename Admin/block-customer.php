<?php 
include '../config.php';
$id = $_GET['id'];

$user = $conn->query("UPDATE user SET Status='Blocked' where UserID = '$id' ") or die($conn->error);
    if($user){
          header('location:manage-customer.php?msg=operation  success');  
        }else{
         header('location:manage-customer.php?msg=operation  not success');  

}
