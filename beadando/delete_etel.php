<?php

        if(!array_key_exists('id', $_GET)){
        header('Location: admin.php');
    }
    if($_GET['id'] == NULL || !is_numeric($_GET['id'])){
        header('Location: admin.php');
    }
    
    require_once './protected/database.php';
    $adat = "SELECT * FROM etelek WHERE id = :id;";
    $params = [ 'id' => $_GET['id']];
    $record = selectOne($adat, $params);
    if($record == NULL || empty($record)){
        header('Location: admin.php');
    }
    
    
    $query = "DELETE FROM etelek WHERE id = :id;";
    $params = [ 'id' => $_GET['id']];
    delete($query, $params);
header('Location: admin.php');


    
    
    
    
    
    
    
    
    
    

