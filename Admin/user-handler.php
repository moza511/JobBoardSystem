<?php 


    include '../config.php';
     try{
    if(isset($_POST['submit'])){

		$userName = $_POST["UserName"];
        $firstName = $_POST["FirstName"];
        $middleName = $_POST["MiddleName"];
        $lastName = $_POST["LastName"];
        $fullName = $_POST["FirstName"] .''. $_POST["LastName"];;
        $phone = $_POST["Phone"];
        $address = $_POST["Address"];
        $email = $_POST["Email"];
        $gender = $_POST["Gender"];
        $age = $_POST["Age"];
        $role = $_POST["Role"];
        
    
        if($role == 'Customer'){
            $user = $conn->query("INSERT INTO user(UserName,FirstName,MiddleName,LastName,Phone,Address,Gender,Age,Email,Status,Role) VALUES('$userName','$firstName','$middleName','$lastName','$phone','$address','$gender','$age','$email','Active','$role')") or die($conn->error);;
           $latestID = mysqli_insert_id($conn);
            if($user){
                $customer = $conn->query("INSERT INTO customer (customerID) value ('$latestID')");
                if($customer){
                    header('location:allusers.php?msg=customer added successfully');
                }else{
                    header('location:allusers.php?msg=customer addition failed');
                }
            }
         }elseif ($role == 'Freelancer') {
            $user = $conn->query("INSERT INTO user(UserName,FirstName,MiddleName,LastName,Phone,Address,Gender,Age,Email,Status,Role) VALUES('$userName','$firstName','$middleName','$lastName','$phone','$address','$gender','$age','$email','Active','$role')") or die($conn->error);;
            $latestID = mysqli_insert_id($conn);
             if($user){
                 $freelancer = $conn->query("INSERT INTO freelancer(FreelancerID) value ('$latestID')");
                 if($freelancer){
                     header('location:allusers.php?msg=freelancer added successfully');
                 }else{
                     header('location:allusers.php?msg=freelancer addition failed');
                 }
             }
         }else{
            $user = $conn->query("INSERT INTO user(UserName,FirstName,MiddleName,LastName,Phone,Address,Email,Status,Role) VALUES('$userName','$phone','$address','$email','Active','$role')") or die($conn->error);;
            $latestID = mysqli_insert_id($conn);
             if($user){
                 $company = $conn->query("INSERT INTO company (companyID,companyName,CompanyDescription) value ($latestID,'$companyName','$companyDescription')");
                 if($company){
                     header('location:allusers.php?msg= company  added successfully');
                 }else{
                     header('location:allusers.php?msg=company addition failed');
                 }
             }
     }
}
     }catch(PDOException $e){
         echo $e;
     }
 ?>