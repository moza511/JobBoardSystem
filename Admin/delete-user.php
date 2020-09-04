<?php 
include '../config.php';
$id = $_GET['id'];

$user=$conn->query("DELETE from user where UserID = '$id' ") or die($conn->error);

    if($user){
        header('location:alluserS.php?msg=operation success');
        
    }else{
        header('location:alluserS.php?msg=operation  not success');  
    }


