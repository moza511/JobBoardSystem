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
        $role = $_POST["Role"];
        // $companyName =$_POST['companyName'];
        // $companyDescription = $_POST['CompanyDescription'];
       
        
    
        if($role == '1'){
            $user = $conn->query("INSERT INTO user(Username,Phone,Address,Email,Status,Role) VALUES('$userName','$phone','$address','$email','Active','$role')") or die($conn->error);;
           $latestID = mysqli_insert_id($conn);
            if($user){
                $customer = $conn->query("INSERT INTO customer (customerid,Firstname,Middlename,Lastname,Gender,Age) value ('$latestID','$firstName','$middleName','$lastName','$gender','$age')");
                if($customer){
                    header('location:allusers.php?msg=customer added successfully');
                }else{
                    header('location:allusers.php?msg=customer addition failed');
                }
            }
         }elseif ($role == '2') {
            $user = $conn->query("INSERT INTO user(Username,Phone,Address,Email,Status,Role) VALUES('$userName','$phone','$address','$email','Active','$role')") or die($conn->error);;
            $latestID = mysqli_insert_id($conn);
             if($user){
                 $freelancer = $conn->query("INSERT INTO freelancer(FreelancerID,Firstname,Middlename,Lastname,Gender,Age) value ('$latestID','$firstName','$middleName','$lastName','$gender','$age')");
                 if($freelancer){
                     header('location:allusers.php?msg=customer freelancer successfully');
                 }else{
                     header('location:allusers.php?msg=freelancer addition failed');
                 }
             }
         }else{
            $user = $conn->query("INSERT INTO user(Username,Phone,Address,Email,Status,Role) VALUES('$userName','$phone','$address','$email','Active','$role')") or die($conn->error);;
            $latestID = mysqli_insert_id($conn);
             if($user){
                 $company = $conn->query("INSERT INTO company (companyid,companyname,companydescription) value ($latestID,'$companyName','$companyDescription')");
                 if($company){
                     header('location:allusers.php?msg=customer company successfully');
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