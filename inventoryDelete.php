<?php 

    include('SYSprotect.php');

    if(!empty($_GET['id'])){

        include_once('SYSconnection.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM inventory WHERE id = $id";

        $result = $mysqli -> query($sqlSelect);
        
        if($result -> num_rows > 0){
            $sqlDelete = "DELETE FROM inventory WHERE id = $id";
            $result = $mysqli -> query($sqlDelete);
        }

    }

    header('Location: inventory.php');

?>