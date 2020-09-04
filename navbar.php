<?php
require 'config.php';
session_start(); 
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg p-3 mb-5 bg-white rounded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
    
        <a href='profile.php'><img src="../images/logo.png" class="rounded-circle"  style='width:40px;'></a><span></b></span>
      </li>
    </ul>

   <a class="nav-link" href="../logout.php">Logout</a> 
   <a class="nav-link" href="notifications.php"><span class="glyphicon glyphicon-notification"></span></a>

  </div>
  
 
</nav>
