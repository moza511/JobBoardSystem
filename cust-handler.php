<?php 


    include 'config.php';
     try{
    if(isset($_POST['submit'])){
        
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
        $profile = $_POST["Profile"];

    
       
        
        $user = $conn->query("INSERT INTO user(FirstName,MiddleName,LastName,Phone,Address,Email,Gender,Age,password,Status,Role,Profile) VALUES('$firstName','$middleName','$lastName','$phone','$address','$email','$Gender','$age','$password','Active','$role','$profile')") or die($conn->error);;
           $latestID = mysqli_insert_id($conn);
            if($user){
                $customer = $conn->query("INSERT INTO customer (CustomerID) value ('$latestID')");
                if($customer){
                    header('location:Customer/index.php?msg=customer added successfully');
                }else{
                    header('location:cust-signin.php?msg=customer addition failed');
                }
                
     }
}
     }catch(PDOException $e){
         echo $e;
     }
 ?>