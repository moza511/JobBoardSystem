
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="project";

    $conn=new mysqli($servername,$username,$password,$database);

    if($conn->connect_errno){
        echo "connection failed";
        echo "The error is".mysqli_connect_error($conn);
    }else{
        return $conn;
    }
    ?>