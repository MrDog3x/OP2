<?php

        if(!array_key_exists('id', $_GET)){
        header('Location: http://localhost/beadando/admin.php');
    }
    if($_GET['id'] == NULL || !is_numeric($_GET['id'])){
        header('Location: http://localhost/beadando/admin.php');
    }
    
    require_once './protected/database.php';
    $adat = "SELECT * FROM italok WHERE id = :id;";
    $params = [ 'id' => $_GET['id']];
    $record = selectOne($adat, $params);
    if($record == NULL || empty($record)){
        header('Location: http://localhost/beadando/admin.php');
    }
    
    
    $query = "DELETE FROM italok WHERE id = :id;";
    $params = [ 'id' => $_GET['id']];
    delete($query, $params);
header('Location: http://localhost/beadando/admin.php');


    
    
    
    
    
    
    
    
    
    

