<?php 
include '../config.php';

if(isset($_POST['Status'])){
$id = $_GET['id'];

if  ($Status = "Active"){
    $user=$conn->query("UPDATE user SET Status='Blocked' where UserID = '$id' ") or die($conn->error);
    if($user){
    header('location:allusers.php?msg=operation  success');  
        }else{
             header('location:allusers.php?msg=operation  not success');  
        }
    }
else{   
    $user=$conn->query("UPDATE user SET Status='Active' where UserID = '$id' ") or die($conn->error);
    if($user){
    header('location:allusers.php?msg=operation  success');  
    }else{
        header('location:allusers.php?msg=operation  not success');  

}

}

}
?>
