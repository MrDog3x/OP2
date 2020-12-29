<?php
require_once PROTECTED_DIR.'helper.php';
require_once './protected/config.php'; 
if(item_Exists($_POST, 'login', 1)){
    $username =$_POST['username'];
    $password=$_POST['password'];
    
    if($username=='user' && $password =='user'){
        $_SESSION['uid'] = 1;
        $_SESSION['uname']= 'Publikus felhasználó';
        header('Location:./public.php');
    }
    
    if($username=='admin' && $password =='admin'){
        $_SESSION['uid'] = 1; 
        $_SESSION['uname']= 'Admin';
        header('Location: admin.php');
    }
    else{
        echo("Rossz jelszó vagy felhasználó fiók.");
    }
}
?>
<h1>Jelentkezz be!</h1>
<form action="" method="POST">
    <input type="text" name="username" placeholder="felhasznalónév"/><br/>
    <input type="password" name="password" placeholder="jelszó"/><br/>
    <br>
    <button type="submit" name="login" value="1">Bejelentkezés</button>
</form>