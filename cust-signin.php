
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
    <title>Customer Sign-in</title>
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
        <div class="panel-heading"> Customer Sign-in </div>
        <div class="panel-body">
          
        <form action="cust-handler.php" method="POST">
          
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
                        <option value='M'>Male</option>
                        <option value='F'>Female</option>
                      </select>
</div>

    <div class="form-group col-md-6">
      <label>Address</label>
      <input type="text" name="Address" class="form-control" id="address">
    </div>
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Age</label>
      <input type="text" name="Age" class="form-control" id="inputEmail4">
    </div >
    
  
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type="email" name="Email" class="form-control" id="inputEmail4">
    </div>
   
        
          <div class="form-group col-md-4" style>
              <button class="btn-lg btn-primary" name="submit" type="submit" value=" Login ">Submit</button>
       </div>
       </div>
        </form>
        </div>     
      </div>      
    </div>
    </div>
    


    </body>
</html>