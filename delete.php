<?php 

    include('protect.php');

    if(!empty($_GET['id'])){

        include_once('connection.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id = $id";

        $result = $mysqli -> query($sqlSelect);
        
        if($result -> num_rows > 0){
            $sqlDelete = "DELETE FROM usuarios WHERE id = $id";
            $result = $mysqli -> query($sqlDelete);
        }

    }

    header('Location: user.php');

?>