<?php
require 'config.php';
session_start(); 


try{
	if (isset($_POST['submit'])) {
        
		$email = $_POST['Email'];
		$password = $_POST['password'];
		echo $email;
		echo $password;
		
		$query = "SELECT * FROM user WHERE Email='$email' AND password='$password'";
	
		
		$stmt = $conn->query($query);
		
		$nrow = mysqli_fetch_array($stmt);
		
		$row = mysqli_num_rows($stmt) or die($conn->error);
		var_dump($nrow); 
		
    	
		if($row == 1){
            
		
			$_SESSION['logged_user']=$email;
			$_SESSION['Status']=$nrow['Status'];
			$_SESSION['Role']=$nrow['Role'];
			if($_SESSION['Status'] =='Active'){
				
			
				if($_SESSION['Role'] == 'Admin'){
					header("location: Admin/index.php"); 

				}else if($_SESSION['Role'] == 'Customer'){
					header("location: Customer/index.php");
	
				}else if($_SESSION['Role'] == 'Company'){
					header("location: Company/index.php");

                }else if ($_SESSION['Role'] == 'Freelancer'){
                	header("location: Freelancer/index.php");
			    }
			    else{
					$error = "Username or Password is incorrect";
					header("location: index.php");
			   	}
			
	
			}else {
				$error = "Username or Password is invalid";
				header("location:index.php?smg=you are blocked");	
			}
		}	
		else {
			$error = "Username or Password is invalid";
			$_SESSION['error']=$error;
			header("location:index.php");
		}
	}
}catch(exception $e){
	echo $e;
}




?>