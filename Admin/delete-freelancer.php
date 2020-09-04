<?php 
include '../config.php';
$id = $_GET['id'];

$user=$conn->query("DELETE from freelancer where freelancerID = '$id' ") or die($conn->error);

    if($user){
        header('location:manage-freelancer.php?msg=operation success');
        
    }else{
        header('location:manage-freelancer.php?msg=operation  not success');  
    }


