<?php 

    // 1) nézzük meg, hogy volt-e adatküldés 
    if(!array_key_exists('submit', $_POST)){
        // ha nincs adatküldés, akkor átirányítom 
        // az insert formra 
        header('Location: http://localhost/beadando/insert_etel.php');
    }
    
    $valid = true;
    // 2) validáció: 
    // a) egyik mező sem lehet üres 
    if(!array_key_exists('name', $_POST) || 
       empty($_POST['name'])){
        $valid = false;
        echo "A név mező üres!";
    }

    if(!array_key_exists('stock', $_POST) ||
        empty($_POST['stock'])){
        $valid = false;
        echo "A stock mező üres!";
    }
    
    if(!array_key_exists('price', $_POST) ||
       empty($_POST['price'])){
        $valid = false;
        echo "Az price mező üres!";
    }
    
    // ha nem valid az adat, akkor vissza az insert formra
    if(!$valid){
        $postBack = $_POST;
        require 'insert_etel.php';
    }
    else{
        // ha validak az adatok, akkor beszúrás 
        $query = "INSERT INTO etelek(name, stock, price) "
               . "VALUES (:name, :stock, :price);";
        // a lekérdezés végrehajtásához a 3 paraméter értékét
        // meg kell határoznom 
        $params = [
            'name' =>  $_POST['name'],
            'stock'  =>  $_POST['stock'],
            'price'  =>  $_POST['price']
        ];
        
        // ahhoz, hogy meg tudjam hívni az insertet, 
        // előbb be kell hivatkoznom 
        require_once './protected/database.php';
        $success = insert($query, $params);
        
        if($success){
            header('Location: http://localhost/beadando/admin.php');
        }
        else{
            echo "Sikeretelen rögzítés!";
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    