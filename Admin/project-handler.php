<?php 


    include '../config.php';
     try{
    if(isset($_POST['submit'])){
        
		$ProjectName = $_POST["ProjectName"];
        $ProjectDescription = $_POST["ProjectDescription"];
        $ProfessionRequired = $_POST["ProfessionRequired"];
        $DatePosted = $POST["DatePosted"];
        $DeadLine = $POST["DeadLine"];
        $Status = $_POST["Status"];
       
        
                $project = $conn->query("INSERT INTO project(ProjectName,ProjectDescription,ProfessionRequired,DatePosted,DeadLine,Status) values ('$ProjectName','$ProjectDescription','$ProfessionRequired','$DatePosted','$DeadLine','$status')");
                if($project){
                    header('location:manage-project.php?msg=project added successfully');
                }else{
                    header('location:manage-project.php?msg=project addition failed');
                }
            }

     }catch(PDOException $e){
         echo $e;
     }
 ?>