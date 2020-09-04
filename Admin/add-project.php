
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" type="" href="../main.css">






    <title>Administrator</title>
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
        <h2>Register Project Form</h2>
    <hr>
<form action="project-handler.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-5">
      <label for="inputEmail4">Project name</label>
      <input type="text" name="ProjectName"class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-5">
      <label for="inputEmail4">Project Description</label>
      <input type="text" name="ProjectDescription" class="form-control" id="inputEmail4">
    </div>
    </div>


    <div class="form-row">
    <div class="form-group col-md-5">
      <label for="inputEmail4">Status</label>
     <select name='Status' class='form-control'>
                        <option value=' '></option>
                        <option value='complete'>complete</option>
                        <option value='Incomplete'>Incomplete</option>
                      </select>
    </div>
 
    <div class="form-group col-md-5">
      <label for="inputEmail4">Profession Required</label>
      <input type="text" name="ProfessionRequired"class="form-control" id="inputEmail4">
    </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-5">
      <label for="inputEmail4">DatePosted</label>
      <input type="date" name="DatePosted"class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-5">
      <label for="inputEmail4">Dead Line</label>
      <input type="date" name="DeadLine"class="form-control" id="inputEmail4">
    </div>
    </div>


  <div class="form-row">    
  <div class="form-group col-md-4">
    <button name="submit" type="submit" class="btn-lg btn-primary">Save</button>
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