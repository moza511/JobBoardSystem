<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../DataTables/datatables.min.css">
<link rel="stylesheet" type="text/css" href="DataTables-1.10.21/css/dataTables.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="AutoFill-2.3.5/css/autoFill.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="Buttons-1.6.2/css/buttons.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="ColReorder-1.5.2/css/colReorder.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="FixedColumns-3.3.1/css/fixedColumns.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="FixedHeader-3.1.7/css/fixedHeader.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="KeyTable-2.5.2/css/keyTable.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="Responsive-2.2.5/css/responsive.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="RowGroup-1.1.2/css/rowGroup.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="RowReorder-1.2.7/css/rowReorder.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="Scroller-2.0.2/css/scroller.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="SearchPanes-1.1.1/css/searchPanes.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="Select-1.3.1/css/select.bootstrap.min.css"/>
<link rel="stylesheet" type="" href="../main.css">
<title>Users</title>
</head>
<body>

<?php
    include '../navbar.php';

    include '../sidebar.php';
    ?>


<div class="absolute-wrapper"> </div>
	
    <div class="col-md-10 content">


    <div class="container">
	<div class="row">

    <div class="col-md-12">
        <h4>List of All Users </h4>
        <hr>
        <div class="table-responsive">
        <a href="adduser.php"><button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-plus"></span>&nbsp;New User</button></a>
        
  
        <?php
  require_once("../config.php");
  $user = $conn->query("SELECT * FROM user") or die($conn->error);

?>

	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th><input type="checkbox" onclick="checkAll(this)"></th>
                  <th>USER NAME</th>
                  <th>FULL NAME</th>
                  <th>PHONE</th>
                  <th>ADDRESS</th>
                  <th>EMAIL</th>
                  <th>GENDER</th>
                  <th>AGE</th>
                  <th>STATUS</th>
                  <th>ROLE</th>
                  <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
        <?php
             while ($r=mysqli_fetch_array($user)){
      ?>
          
          <tr>
        <td><?php echo $r["UserID"] ?></td>
        <td><?php echo $r["UserName"] ?></td>
        <td><?php echo $r["FirstName"] ?>&nbsp;&nbsp;<?php echo $r["MiddleName"]; ?></td>
        <td><?php echo $r["Phone"] ?></td>
        <td><?php echo $r["Address"] ?></td>
        <td><?php echo $r["Email"] ?></td>
        <td><?php echo $r["Gender"] ?></td>
        <td><?php echo $r["Age"] ?></td>
        <td><?php echo $r["Status"] ?></td>
        <td><?php if ($r["Role"] == 1){ echo 'Customer';}elseif($r['Role'] == 2){ echo 'Freelancer';}else{ echo 'Company';} ?></td>
        <td>
        <a href="delete-user.php?id=<?php echo $r['UserID']?>&role=<?php echo $r['Role']?>" class="btn btn-danger btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-trash"></span></button></a>
            <a href="update.php?id=<?php echo $r['UserID']?>&role=<?php echo $r['Role']?>" class="btn btn-warning btn-xs" data-title="Edit"  data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a>
            <a href="viewuser.php?id=<?php echo $r['UserID']?>&role=<?php echo $r['Role']?>" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-edit"></span></button></a>
        </td>
      </tr>

    <?php
    }
    ?>
   
        </tbody>
    
    </table>
	</div>
</div>
    

    
<div class="modal fade" id="edit"aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Add new User</h4>
      </div>
          <div class="modal-body">
          <form action='userhandler.php' method='POST'>
          <div class="row">
             <div class="col-2">
              user name: <input type="text" name='UserName' class="form-control"><br>
              first name: <input type="text" name='firstName' class="form-control"><br>
              middle name: <input type="text" name='middleName' class="form-control"><br>
              last name: <input type="text" name='lastName' class="form-control"><br>
          </div>
        </div>
        <div class="row">
             <div class="col-2">
              Email: <input type="email" name='email' class="form-control"><br>
              Phone: <input type="text" name='phone' class="form-control"><br>
              Address: <input type="text" name='UserName' class="form-control"><br>
              Gender:  <select name='Gender' class='form-control'>
                        <option value=' '>--Select Gender--</option>
                        <option value='M'>Male</option>
                        <option value='F'>Female</option>
                      </select><br>
          </div>
        </div>
        <div class="row">
             <div class="col-2">
              role:   <select name='Role' id='role' class='form-control'>
                      <option value=' '>--Select Role--</option>
                        <option value='1'>Customer</option>
                        <option value='2'>Freelancer</option>
                        <option value='3'>Company</option>
                      </select>
              age: <input type="number" name='age' class="form-control"><br>
              profile: <input type="file" name='profile' class="form-control"><br>
          
          </div>
        </div>
      </div>
</div>
</div><br>
  

 </div>

 <script src="../bootstrap/plugins/jquery/jquery.min.js"></script>
<script src="../bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
 $("#role").on('change',function(e){
         var role = $("#role").val();
         //alert (role);
         if(role == '3'){
            $(".company").show();
            $("#age").hide();
         }else{
            $(".company").hide();
            $("#age").show();
          }
 });
    });
   </script>

    <?php

   


    include '../footer.php';


    ?>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../main.js"></script>
<script type="text/javascript" src="../DataTables/datatables.min.js"></script>
<script type="text/javascript" src="jQuery-3.3.1/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="JSZip-2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="pdfmake-0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="pdfmake-0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="DataTables-1.10.21/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="AutoFill-2.3.5/js/dataTables.autoFill.min.js"></script>
<script type="text/javascript" src="AutoFill-2.3.5/js/autoFill.bootstrap.min.js"></script>
<script type="text/javascript" src="Buttons-1.6.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="Buttons-1.6.2/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="Buttons-1.6.2/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="Buttons-1.6.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="Buttons-1.6.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="Buttons-1.6.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="ColReorder-1.5.2/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="FixedColumns-3.3.1/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" src="FixedHeader-3.1.7/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" src="KeyTable-2.5.2/js/dataTables.keyTable.min.js"></script>
<script type="text/javascript" src="Responsive-2.2.5/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="Responsive-2.2.5/js/responsive.bootstrap.min.js"></script>
<script type="text/javascript" src="RowGroup-1.1.2/js/dataTables.rowGroup.min.js"></script>
<script type="text/javascript" src="RowReorder-1.2.7/js/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="Scroller-2.0.2/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="SearchPanes-1.1.1/js/dataTables.searchPanes.min.js"></script>
<script type="text/javascript" src="SearchPanes-1.1.1/js/searchPanes.bootstrap.min.js"></script>
<script type="text/javascript" src="Select-1.3.1/js/dataTables.select.min.js"></script>

      </body>
</html>