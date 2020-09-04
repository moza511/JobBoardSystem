<?php 
include '../config.php';
$id = $_GET['id'];

$user = $conn->query("UPDATE user SET status='Blocked' where UserID = '$id' ") or die($conn->error);
if($user){
    header('location:allusers.php?msg=operation  success');  
}else{
    header('location:allusers.php?msg=operation  not success');  

}
