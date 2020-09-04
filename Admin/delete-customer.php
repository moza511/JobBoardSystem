<?php 
include '../config.php';
$id = $_GET['id'];

$customer=$conn->query("DELETE from customer where CustomerID = '$id' ") or die($conn->error);

    if($customer){
        header('location:manage-customer.php?msg=operation success');
        
    }else{
        header('location:manage-customer.php?msg=operation  not success');  
    }


