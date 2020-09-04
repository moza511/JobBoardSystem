<?php 


    include 'config.php';
     try{
    if(isset($_POST['submit'])){
         
		$userName = $_POST["UserName"];
        $firstName = $_POST["FirstName"];
        $middleName = $_POST["MiddleName"];
        $lastName = $_POST["LastName"];
        $phone = $_POST["Phone"];
        $address = $_POST["Address"];
        $email = $_POST["email"];
        $gender = $_POST["Gender"];
        $role = "Freelancer";
        $age = $_POST["Age"];
        $profession = $_POST["profession"];
        $profile = $_POST["Profile"];
       

       
    
            $user = $conn->query("INSERT INTO user(UserName,FirstName,MiddleName,LastName,Phone,Address,Email,Gender,Role,Profile) VALUES('$userName','$firstName','$middleName','$lastName','$phone','$address','$email','$gender','$role','$profile')") or die($conn->error);;
            $latestID = mysqli_insert_id($conn);
             if($user){
                 $freelancer = $conn->query("INSERT INTO freelancer(FreelancerID,ProfessionName) value ('$latestID', '$profession')");
                 if($freelancer){
                     header('location:freelancer/index.php?msg=freelancer added successfully');
                 }else{
                     header('location:free-signin.php?msg=freelancer addition failed');
                 }
         }  
}
     }catch(PDOException $e){
         echo $e;
     }
 ?>