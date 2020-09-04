
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" type="" href="../main.css">


    <title>Update User</title>
</head>

<body>
<?php
require '../config.php';

$id = $_GET['id'];

$user=$conn->query("SELECT * FROM user where UserID = '$id' ") or die($conn->error);
($r=mysqli_fetch_array($user))
?>



<div class="absolute-wrapper">
<br>
<br>
	
  	<div class="col-md-10 content">
        <div class="container">
        <h2>Update User</h2>
    <hr>
<form action="updatehandler.php" method="POST">
  <div class="form-row">
  <input<div class="form-row">
  <input type="hidden" name="id" class='form-control' value='<?php echo $id?>'>
 

    <div class="form-group col-md-4">
      <label for="inputEmail4">First name</label>
      <input type="text" name="FirstName" class="form-control" value='<?php echo $r['FirstName']?>'>
    </div>

    <div class="form-group col-md-4">
      <label for="inputPassword4">Middle name</label>
      <input type="text" name="MiddleName" class="form-control" id="inputPassword4"  value='<?php echo $r['MiddleName']?>'>
    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Last name</label>
      <input type="text" name="LastName" class="form-control" id="inputEmail4" value='<?php echo $r['LastName']?>'>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Phone</label>
      <input type="text" name="Phone" class="form-control" id="inputEmail4" value='<?php echo $r['Phone']?>'>
    </div>


  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Gender</label>
     <select name='Gender' class='form-control'  value='<?php echo $r['Gender']?>'>
                        <option value='Male'>Male</option>
                        <option value='Female'>Female</option>
                      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Role</label>
      <select name='Role' id='role' class='form-control'  value='<?php echo $r['Role']?>'>
                        <option value='Customer'>Customer</option>
                        <option value='Freelancer'>Freelancer</option>
                        <option value='Company'>Company</option>
                      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputPassword4">Address</label>
      <input type="text" name="Address" class="form-control" id="address"  value='<?php echo $r['Address']?>'>
    </div>
  
  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">DOB</label>
      <input type="date" name="Birthdate" class="form-control" id="inputEmail4" value='<?php echo $r['Birthdate']?>'>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="Email" class="form-control" id="inputEmail4" value='<?php echo $r['Email']?>'>
    </div>
  </div>
    <div class="form-group col-md-5">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
   
    </div>
    </div>
  
</form> 
                 
        
             


  			 
  		
<?php include '../footer.php';?>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../main.js"></script>

</body>
</html>
  </body>
</html>