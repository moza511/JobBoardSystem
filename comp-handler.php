<?php 


    include 'config.php';
     try{
    if(isset($_POST['submit'])){
        $companyName =$_POST['CompanyName'];
        $companyDescription = $_POST['CompanyDescription'];
        $phone = $_POST["Phone"];
        $address = $_POST["Address"];
        $email = $_POST["Email"];
      
       
        
            $user = $conn->query("INSERT INTO user(UserName,Phone,Address,Email,Status,Role) VALUES('$companyName','$phone','$address','$email','Active','Company')") or die($conn->error);;
            $latestID = mysqli_insert_id($conn);
             if($user){
                 $company = $conn->query("INSERT INTO company(CompanyID,CompanyName,CompanyDescription) VALUES ('$latestID','$companyName','$companyDescription')");
                 if($company){
                     header('location:company/index.php?msg= company  added successfully');
                 }else{
                     header('location:comp-signin.php?msg=company addition failed');
                 }
             }
     }
}
    
catch(PDOException $e){
         echo $e;
     }
 ?>