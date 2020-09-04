<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../DataTables/datatables.min.css">
<link rel="stylesheet" type="text/css" href="../DataTables-1.10.21/css/dataTables.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/AutoFill-2.3.5/css/autoFill.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/Buttons-1.6.2/css/buttons.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/ColReorder-1.5.2/css/colReorder.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/FixedColumns-3.3.1/css/fixedColumns.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/FixedHeader-3.1.7/css/fixedHeader.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/KeyTable-2.5.2/css/keyTable.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/Responsive-2.2.5/css/responsive.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/RowGroup-1.1.2/css/rowGroup.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/RowReorder-1.2.7/css/rowReorder.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/Scroller-2.0.2/css/scroller.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/SearchPanes-1.1.1/css/searchPanes.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/Select-1.3.1/css/select.bootstrap.min.css"/>
<link rel="stylesheet" type="" href="../css/style.css">

<title>Users</title>
</head>
<style>
  a{
    color:gray;
  }
  #trash{
    color:red;
  }
  #edit{
    color:blue;
  }
  #block{
    color:orange;
  }
  #activate{
    color:lightgreen;
  }
  #activ{
    color:lightblue;
    font-style: italic;
  }
</style>

<body>
<?php
include '../navbar.php';
?>


<div class="container-fluid" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
    <div class="card" style="width: 18rem;">
  <div class="card-header">
    Welcome to Admin Panel
  </div>

</div>

<div class="card" style="width: 18rem;">
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <a href="index.php">Dashboard</a>
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
  <a href="manage-company.php"  id="activ">Company</a>
    <span class="badge badge-primary badge-pill">14</span>
  </li></ul>
  </div>
  <br>

<div class="container-fluid" style="margin-left:-32px;">
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

    <?php
  require_once("../config.php");
  $user = $conn->query("SELECT * FROM user,company") or die($conn->error);

  $i=1;

?>
    <div class="col-sm-8">
    <div class="row">
    <h4>List of All Companies </h4>
    <hr>

  <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered">
  <thead>
    
            <tr>
                  <th>sn</th>
                  <th>COMPANY NAME</th>
                  <th>COMPANY DESCRIPTION</th>
                  <th>PHONE</th>
                  <th>ADDRESS</th>
                  <th>EMAIL</th>
                  <th>STATUS</th>
                  <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
        <?php
             while ($r=mysqli_fetch_array($user)){
      ?>

        <tr>
        <td><?php echo $i++?></td>
        <td><?php echo $r["companyName"] ?></td>
        <td><?php echo $r["companyDescription"] ?></td>
        <td><?php echo $r["Phone"] ?></td>
        <td><?php echo $r["Address"] ?></td>
        <td><?php echo $r["Email"] ?></td>
        <td><?php echo $r["Status"] ?></td>
        <td>
        <a href="delete-user.php?id=<?php echo $r['CompanyID']?>"><span class="fa fa-trash" id="trash"></span></a>
        <a href="update.php?id=<?php echo $r['CompanyID']?>"><span class="fa fa-edit success" id="edit"></span></a>

            <?php
            if($r['Status'] == 'Active' ){
            ?>
            <a href="block-user.php?id=<?php echo $r['CompanyID']?>"><i class="fa fa-eye" id="block" ></i></a>
        
            <?php
            }
            else{
            ?>
            <a href="activate-user.php?id=<?php echo $r['CompanyID']?>"><span class="fa fa-eye"id="activate"></span></button></a>
    
            </td>
      </tr>

    <?php
    }
}
    ?>
   
        </tbody>
    
    
  </table>




</div>  
  

    <?php
    include '../footer.php';
    ?>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../main.js"></script>
<script type="text/javascript" src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="jQuery-3.3.1/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../DataTables/JSZip-2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="../DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="../DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="../DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../DataTables-1.10.21/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="../DataTables/AutoFill-2.3.5/js/dataTables.autoFill.min.js"></script>
<script type="text/javascript" src="../DataTables/AutoFill-2.3.5/js/autoFill.bootstrap.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.6.2/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.6.2/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.6.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.6.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.6.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="../DataTables/ColReorder-1.5.2/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="../DataTables/FixedColumns-3.3.1/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" src="../DataTables/FixedHeader-3.1.7/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" src="../DataTables/KeyTable-2.5.2/js/dataTables.keyTable.min.js"></script>
<script type="text/javascript" src="../DataTables/Responsive-2.2.5/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="../DataTablesResponsive-2.2.5/js/responsive.bootstrap.min.js"></script>
<script type="text/javascript" src="../DataTables/RowGroup-1.1.2/js/dataTables.rowGroup.min.js"></script>
<script type="text/javascript" src="../DataTables/RowReorder-1.2.7/js/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="../DataTables/Scroller-2.0.2/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="../DataTables/SearchPanes-1.1.1/js/dataTables.searchPanes.min.js"></script>
<script type="text/javascript" src="../DataTables/SearchPanes-1.1.1/js/searchPanes.bootstrap.min.js"></script>
<script type="text/javascript" src="../DataTables/Select-1.3.1/js/dataTables.select.min.js"></script>

      </body>
</html>