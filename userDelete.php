<?php 

    include('protect.php');

    if(!empty($_GET['id'])){

        include_once('connection.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM user WHERE id = $id";

        $result = $mysqli -> query($sqlSelect);
        
        if($result -> num_rows > 0){
            $sqlDelete = "DELETE FROM user WHERE id = $id";
            $result = $mysqli -> query($sqlDelete);
        }

    }

    header('Location: index.php');

?>