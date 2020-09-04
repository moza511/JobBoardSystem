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
	  $email = $_POST['Email'];
	  $profession = $_POST['ProfessionName'];
	  $DOB = $_POST['Birthdate'];
	


	  $user = $conn->query("UPDATE  user set FirstName='$first_name', MiddleName='$middle_name', LastName='$last_name',Address='$address',Phone='$phone',Gender='$gender',Birthdate='$DOB',Email='$email' 
	  where UserID='$id'") or die($conn->error);
		if($user){
			$freelancer = $conn->query("UPDATE  freelancer set ProfessionName='$profession' where FreelancerID='$id'") or die($conn->error);
				if($freelancer){
					header('location:manage-freelancer.php?msg=edit Successfully');
				}else{
					header('location:manage-freelancer.php?msg=edit failed');
				}
			}

		}


	
	
		
	
 ?>