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
      $role = $_POST['Role'];

		$user = $conn->query("UPDATE  user set FirstName='$first_name', MiddleName='$middle_name', LastName='$last_name',Address='$address',Phone='$phone',Gender='$gender',Birthdate='$DOB',Email='$email' 
		where UserID='$id'") or die($conn->error);
			if($user){
				header('location:allusers.php?msg=edit Successfully');
			}else{
				header('location:allusers.php?msg=edit failed');
			}

		}

	
	
		
	
 ?>