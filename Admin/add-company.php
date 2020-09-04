
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" type="" href="../main.css">






    <title>Admin Company</title>
</head>
<style>
    #logo{
        width:55px;
        height:50px;
        
    }
</style>
<body>
<?php
include '../navbar.php';
include '../sidebar.php';
?>

<div class="absolute-wrapper">
<br>
<br>
	
  	<div class="col-md-10 content">
        <div class="container">
        <h2>Register Company Form</h2>
    <hr>
<form action="company-handler.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Company name</label>
      <input type="text" name="CompanyName"class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Company Description</label>
      <input type="text" name="CompanyDescription" class="form-control" id="inputEmail4">
    </div>


    <div class="form-group col-md-4">
      <label for="inputPassword4">Address</label>
      <input type="text" name="Address" class="form-control" id="address">
    </div>
  
  
    <div class="form-group col-md-4">
      <label for="inputEmail4">Phone</label>
      <input type="text" name="Phone" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="Email" class="form-control" id="inputEmail4">
    </div>
    
    <div class="form-group col-md-4">
    <button name="submit" type="submit" class="btn-lg btn-primary">Sign in</button>
    </div>
    </div>

  
</form> 
                 
        
             


  			 
  		
<?php include '../footer.php';?>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../main.js"></script>



<!-- <script src="../jquery.min.js"></script>
<script src="../bootstrap/css/bootstrap.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

  </body>
</html>
  </body>
</html>