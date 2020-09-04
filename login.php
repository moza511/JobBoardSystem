
<?php
session_start();



if(isset($_SESSION['error'])){
$errorsess = $_SESSION['error'];
}
?>
    <div class="container">
    

    <div class="container" style="margin-top: 195px; margin-left: 125px;">
      <div class="col-xl-12">
      <div class="panel panel-primary">
        <div class="panel-heading"> 
        <center><img src="images/avat.png" width="80px" height="80px"> </center>  
      </div>
        <div class="panel-body">
          
        <form action="login-handler.php" method="POST">
          
        <div class="row">
       
             
           
          <div class="form-group col-xs-12">
            <!--  -->
              <input class="form-control" id="email" type="email" name="Email" placeholder="email">
            </div>           
          </div>
        

        <div class="row">
          <div class="form-group col-xs-12">
      
              <input class="form-control" id="password" type="password" name="password" placeholder="Password">
            </div>           
          </div>
        </div>

        <div class="row" style="margin-left: 185px">
          <div class="form-group col-xs-6">
              <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Login</button>
         

        </form>
        </div>     
      </div>      
    </div>
    </div>
     


    </body>

</html>