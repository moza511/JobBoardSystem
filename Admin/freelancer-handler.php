<?php 


    include '../config.php';
     try{
    if(isset($_POST['submit'])){
        echo 'Dtt';
        
        $userID = $_POST["UserID"]; 
		$userName = $_POST["UserName"];
        $firstName = $_POST["FirstName"];
        $middleName = $_POST["MiddleName"];
        $lastName = $POST["LastName"];
        $fullName = $POST["firstName"] .''. $POST["LastName"];;
        $phone = $_POST["Phone"];
        $address = $_POST["Address"];
        $email = $_POST["Email"];
        $gender = $_POST["Gender"];
        $age = $_POST["Age"];
        $status = $_POST["Status"];

        // $companyName =$_POST['companyName'];
        // $companyDescription = $_POST['CompanyDescription'];
       
    
            $user = $conn->query("INSERT INTO user(Username,Phone,Address,Email,Status,Role) VALUES('$userName','$phone','$address','$email','Active','Freelancer')") or die($conn->error);;
            $latestID = mysqli_insert_id($conn);
             if($user){
                 $freelancer = $conn->query("INSERT INTO freelancer(FreelancerID) value ('$latestID')");
                 if($freelancer){
                     header('location:manage-freelancer.php?msg=freelancer added successfully');
                 }else{
                     header('location:manage-freelancer.php?msg=freelancer addition failed');
                 }
         }  
}
     }catch(PDOException $e){
         echo $e;
     }
 ?>