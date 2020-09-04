
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
    <title></title>
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
        <div class="panel-heading"> Sign in </div>
        <div class="panel-body">
          
        <form action="comp-handler.php" method="POST">
          
        <div class="form-row">
                 
        
        
        <div class="form-group col-md-6">
          <label>Company name</label>
            <input type="text" name="companyName" class="form-control">
        </div>
        </div>
      
        <div class="form-row">
       <div class="form-group col-md-6">
         <label for="inputPassword4">Company Description</label>
         <input type="text" name="description" class="form-control">
       </div>
 

    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
       <input type="text" name="Phone" class="form-control" id="inputEmail4">
    </div>


    

    <div class="form-row">
          
            <div class="form-group col-md-6">
            <label for="profession"><span class="text-danger"></span>Profession: </label>
              <input class="form-control" id="profession" type="password" name="profession">
            </div>         
          </div>

    <div class="form-group col-md-6">
      <label>Address</label>
      <input type="text" name="Address" class="form-control" id="address">
    </div>
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type="email" name="Email" class="form-control" id="inputEmail4">
    </div>
        
          <div class="form-row">
          <div class="form-group col-md-4">
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