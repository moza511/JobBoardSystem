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
        $Gender = $_POST["Gender"];
        $age = $_POST["Age"];
        $password = sha1($_POST["FirstName"]);
        $role = "Customer";

    
       
        
            $user = $conn->query("INSERT INTO user(Username,Firstname,Middlename,Lastname,Phone,Address,Email,Gender,Age,password,Status,Role) VALUES('$userName','$firstName','$middleName','$lastName','$phone','$address','$email','$Gender','$age','$password''Active','$role')") or die($conn->error);;
           $latestID = mysqli_insert_id($conn);
            if($user){
                $customer = $conn->query("INSERT INTO customer (Customerid) value ('$latestID')");
                if($customer){
                    header('location:manage-customer.php?msg=customer added successfully');
                }else{
                    header('location:manage-customer.php?msg=customer addition failed');
                }
                
     }
}
     }catch(PDOException $e){
         echo $e;
     }
 ?>