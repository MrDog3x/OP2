<?php
require_once './database.php';
    $query = "SELECT * FROM etelek WHERE id = :id;";
    $params = [ 'id' => $_GET['id']];
    $record = selectOne($query, $params);
    if($record == NULL || empty($record)){
        header('Location: http://localhost/beadando/admin.php');
    }
    
    //kitörli az adott várost
    $query = "DELETE FROM etelek WHERE id = :id;";
    $params = [ 'id' => $_GET['id']];
    delete($query, $params);

    header('Location: http://localhost/beadando/admin.php');
    ?>
