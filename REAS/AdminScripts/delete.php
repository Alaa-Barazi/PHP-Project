<?php
    require_once('../dbCon.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `tbadmin` WHERE ID = $id";

        if($con->query($sql) === TRUE){
            header('Location: ../Main.php#Admins');
        }else{
            echo "something went wrong";
        }
        
    }else{
        // redirect to show with error
        die('id not provided');
    }

?>
