<?php
define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_PORT','3306');
define('DB_NAME','beadando');
define('DB_USER','root');
define('DB_PASS','');

function getConnection(){
    $dsn = DB_TYPE.':host='.DB_HOST.':'.DB_PORT.';dbname='.DB_NAME;
    $connection = new PDO($dsn,DB_USER,DB_PASS);
    
    $connection->exec("SET NAMES 'utf8'");
    return $connection;
}

function insert($query, $params){
    $connection = getConnection();
    $statement = $connection->prepare($query);
    $success = $statement->execute($params);
    $statement->closeCursor();
    $connection = null; 
    return $success;}

function select($query, $params = []){
    $connection = getConnection();
    $statement = $connection->prepare($query);
    $success = $statement->execute($params);
    
    $records = $success ? $statement->fetchAll(PDO::FETCH_ASSOC) : [];
    $statement->closeCursor();
    $connection = null;
    
    return $records;

}

function delete($query, $params){
    // 1) kérek egy nyitott db kapcsolatot 
    $connection = getConnection();
    // 2) a szöveg alapú lekérdezésből sql parancsot készítünk
    $statement = $connection->prepare($query);
    // 3) végrehajtom a lekérdezést a paraméterekkel 
    $success = $statement->execute($params);
    // 4) lezárom a kapcsolatot 
    $statement->closeCursor();
    $connection = null; 
    // 5) visszaadjuk az eredményt a hívó félnek 
    return $success;
}

function selectOne($query, $params = []){
    $connection = getConnection();
    $statement = $connection->prepare($query);
    $success = $statement->execute($params);
    
    $record = $success ? $statement->fetch(PDO::FETCH_ASSOC) : [];
    $statement->closeCursor();
    $connection = null;
    
    return $record;

}




