<?php
  require_once("../config.php");
 $query = "SELECT Role, count(*) as number FROM user GROUP BY Role";  
 $result = mysqli_query($conn, $query);  
 ?>  
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});

  
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

      var data = new google.visualization.arrayToDataTable([
      ['Role', 'Number'],  
      <?php  
        while($row = mysqli_fetch_array($result)){ 
          if($row["Role"]==1){
            $role ='Customer';
          }elseif($row["Role"]==2){
            $role = 'Freelancer';
          }else{
            $role = 'Company';
          }
          echo "['".$role."', ".$row["number"]."],";  
      }  
      ?>  
      ]);


      var options = {'title':'List of All Users',
                     'width':400,
                     'height':300};

      
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>



<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dinosaur', 'Length'],
          ['Acrocanthosaurus (top-spined lizard)', 12.2],
          ['Albertosaurus (Alberta lizard)', 9.1],
          ['Allosaurus (other lizard)', 12.2],
          ['Apatosaurus (deceptive lizard)', 22.9],
          ['Archaeopteryx (ancient wing)', 0.9],
          ['Argentinosaurus (Argentina lizard)', 36.6],
          ['Baryonyx (heavy claws)', 9.1],
          ['Brachiosaurus (arm lizard)', 30.5],
          ['Ceratosaurus (horned lizard)', 6.1],
          ['Coelophysis (hollow form)', 2.7],
          ['Compsognathus (elegant jaw)', 0.9],
          ['Deinonychus (terrible claw)', 2.7],
          ['Diplodocus (double beam)', 27.1],
          ['Dromicelomimus (emu mimic)', 3.4],
          ['Gallimimus (fowl mimic)', 5.5],
          ['Mamenchisaurus (Mamenchi lizard)', 21.0],
          ['Megalosaurus (big lizard)', 7.9],
          ['Microvenator (small hunter)', 1.2],
          ['Ornithomimus (bird mimic)', 4.6],
          ['Oviraptor (egg robber)', 1.5],
          ['Plateosaurus (flat lizard)', 7.9],
          ['Sauronithoides (narrow-clawed lizard)', 2.0],
          ['Seismosaurus (tremor lizard)', 45.7],
          ['Spinosaurus (spiny lizard)', 12.2],
          ['Supersaurus (super lizard)', 30.5],
          ['Tyrannosaurus (tyrant lizard)', 15.2],
          ['Ultrasaurus (ultra lizard)', 30.5],
          ['Velociraptor (swift robber)', 1.8]]);

        var options = {
          title: 'Lengths of dinosaurs, in meters',
          legend: { position: 'none' },
        };

        var chart = new google.visualization.Histogram(document.getElementById('chart_divi'));
        chart.draw(data, options);
      }
    </script>





<div class="container-fluid" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
    <div class="card" style="width: 18rem;">
  <div class="card-header">
    Welcome to Admin Panel
  </div>

</div>

<div class="card" style="width: 18rem;">
<ul class="list-group" style="font-style:italic; color:lightblue;">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="index.php" id="activ">Dashboard</a>
  </li></ul>
 
  <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="allusers.php">All Users</a>
    <span class="badge badge-primary badge-pill">14</span>
  </li></ul>

  <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="manage-customer.php"> Customers</a>
    <span class="badge badge-primary badge-pill">14</span>
  </li> </ul>

  <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="manage-freelancer.php">FreeLancers</a>
    <span class="badge badge-primary badge-pill">14</span>
  </li></ul>

  <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="manage-company.php">Company</a>
    <span class="badge badge-primary badge-pill">14</span>
  </li></ul>
  </div>
  <br>

<div class="container-fluid" style="margin-left:-12px;">
<div class="row">
    <div class="col-sm-3">
    <div class="card" style="width: 18rem;">
  <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="manage-professionals.php">Professionals</a>
  </li></ul>

  <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="manage-categories.php">Categories</a>
  </li></ul>

 <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="project.php">Projects</a>
  </li></ul>

  <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="report.php">Report</a>
  </li></ul>
</div>
</div>
    </div>
    </div>
    </div>

   
    <div class="col-sm-9">
    <div class="col-sm-12">
    <div class="row">
  <div class="col-sm-3">
  <div>
       <a href ='allusers.php'> <img src="../images/u.png"  class="rounded-circle" style='width:100px; hover;'></a>
        <p class="card-text" style="margin-left:30px; margin-top:20px;"><b><a href="allusers.php">All Users</a></b></p>
    </div>
  </div>
  <div class="col-sm-3">
  <div>
       <a href ='manage-customer.php'> <img src="../images/customers.png"  class="rounded-circle" style='width:100px; hover;'></a>
        <p class="card-text" style="margin-left:10px; margin-top:20px;"><b><a href="manage-customer.php">Customers</a></b></p>
    </div>
  </div>
    <div class="col-sm-3">
    <div>
       <a href ='manage-freelancer.php'> <img src="../images/freee.jpeg"  class="rounded-circle" style='width:100px; hover;'></a>
        <p class="card-text" style="margin-left:10px; margin-top:20px;"><b><a href="manage-freelancers.php">Freelancers</a></b></p>
    </div>
  </div>
  <div class="col-sm-3">
  <div>
       <a href ='manage-company.php'> <img src="../images/company.png"  class="rounded-circle"  style='width:100px; hover;'></a>
        <p class="card-text" style="margin-left:30px; margin-top:20px;"><b><a href="manage-company.php">Company</a></b></p>
    </div>
  </div>
    </div>
</div><br>
  

  <div class="col-sm-12">
    <div class="row">
  <div class="col-sm-3">
  <div>
       <a href ='proffessionals.php'> <img src="../images/index.png"  class="rounded-circle"style='width:100px; hover;'></a>
        <p class="card-text" style="margin-left:0px; margin-top:20px;"><b><a href="professionals.php">Proffessionals</a></b></p>
    </div>
  </div>
  <div class="col-sm-3">
  <div>
       <a href ='professionCategory.php'> <img src="../images/index.png"  class="rounded-circle" style='width:100px; hover;'></a>
        <p class="card-text" style="margin-top:20px;"><b><a href="categories.php"> Categories</a></b></p>
    </div>
  </div>
    <div class="col-sm-3">
    <div>
       <a href ='users.php'> <img src="../images/index.png"  class="rounded-circle" style='width:100px; hover;'></a>
        <p class="card-text" style="margin-left:30px; margin-top:20px;"><b><a href="project.php">Projects</a></b></p>
    </div>
  </div>
  <div class="col-sm-3">
  <div>
       <a href ='reports.php'> <img src="../images/report.png"  class="rounded-circle"style='width:100px; hover;'></a>
        <p class="card-text" style="margin-left:30px; margin-top:20px;"><b><a href="report.php">Reports</a></b></p>
    </div>
  </div>
    </div>
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          View Graphical Report
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="row">
  <div class="col-sm-6">
        <div id="chart_div" style="width:400; height:300"></div>
  </div>
  <div class="col-sm-6">
       <div id="chart_divi"  style="width:500; height:300"></div>
    </div>
  </div>
      </div>
    </div>
  </div>
  




    </div>
  </div>
</div>
</div><br>
  </div>
</div>


</html>