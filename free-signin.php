
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
    <title>Freelancer Sign-in</title>
</head>
<style>
body{
    background-image: url('images/bcg3.jfif');
  background-size: cover;
}

</style>
<body>

<?php
session_start();



if(isset($_SESSION[''])){
header("location: index.php"); 
}
?>
    <div class="container">
    

    <div class="container" style="margin-top: 85px;margin-left: -300px;">
      <div class="col-md-10 col-md-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Freelancer Sign in </div>
        <div class="panel-body">
          
        <form action="freee-handler.php" method="POST">
          
        <div class="form-row">
     
        
        
        <div class="form-group col-md-6">
          <label for="inputEmail4">First name</label>
            <input type="text" name="FirstName" class="form-control" id="inputEmail4">
        </div>
        </div>
      
        <div class="form-row">
       <div class="form-group col-md-6">
         <label for="inputPassword4">Middle name</label>
         <input type="text" name="MiddleName" class="form-control" id="inputPassword4">
       </div>


    <div class="form-group col-md-6">
      <label for="inputEmail4">Last name</label>
      <input type="text" name="LastName" class="form-control" id="inputEmail4">
    </div>
    </div>
 

    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
       <input type="text" name="Phone" class="form-control" id="inputEmail4">
    </div>

  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Gender</label>
     <select name='Gender' class='form-control'>
                        <option value=' '></option>
                        <option value='Male'>Male</option>
                        <option value='Female'>Female</option>
                      </select>
    </div>

    

    <div class="form-row">
            <div class="form-group col-md-6">
      <label>Profession</label>
     <select name='profession' class='form-control'>
                        <option value=' '></option>
                        <option value='System developer'>System developer</option>
                        <option value='Photography'>Photography</option>
                        <option value='Tutor'>Tutor</option>
                        <option value='Cook'>Cook</option>
                        <option value='Marketing Management'>Marketing Management</option>
                        <option value='Clinical officer'>Clinical officer</option>
                      </select>
    </div> 
    <div class="form-group col-md-6">
            <label><span class="text-danger"></span>Category: </label>
              <input class="form-control" type="text" name="category">
            </div>         
          </div>

    <div class="form-group col-md-6">
      <label>Address</label>
      <input type="text" name="Address" class="form-control" id="address">
    </div>
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Age</label>
      <input type="text" name="Age" class="form-control" id="inputEmail4">
    </div>
        
          <div class="form-row">
          <div class="form-group col-md-6">
            <label><span class="text-danger"></span>Email: </label>
              <input type="email" class="form-control" id="email"  name="Email">
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-4">
              <button class="btn-lg btn-primary" name="submit" type="submit">Submit</button>
       </div>
</div>
       </div>
        </form>
        </div>     
      </div>      
    </div>
    </div>
    


    </body>
</html>