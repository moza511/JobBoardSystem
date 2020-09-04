<?php 
    require '../config.php';
	
	
	if(isset($_POST['submit'])){
	$id = $_POST['id'];
  
      $first_name = $_POST['FirstName'];
      $middle_name = $_POST['MiddleName'];
      $last_name = $_POST['LastName'];
      $address = $_POST['Address'];
	  $phone = $_POST['Phone'];
	  $gender = $_POST['Gender'];
	  $DOB = $_POST['Birthdate'];
      $email = $_POST['Email'];
      

		$user = $conn->query("UPDATE  user set FirstName='$first_name', MiddleName='$middle_name', LastName='$last_name',Address='$address',Phone='$phone',Gender='$gender',Birthdate='$DOB',Email='$email' 
		where UserID='$id'") or die($conn->error);
		if($user){
			//$customer = $conn->query("UPDATE  customer set FirstName=$first_name, MiddleName=$middle_name, LastName='$last_name',address='$address',phone='$phone',email='$email' 
			//where CustomerID='$id'") or die($conn->error);;
			if($user){
				header('location:manage-customer.php?msg=edit Successfully');
			}else{
				header('location:manage-customer.php?msg=edit failed');
			}

		}

	
	
	}	
	
 ?>