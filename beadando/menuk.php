
<?php
require_once './protected/database.php';
    $query = "SELECT * FROM menu ORDER BY id;";
    $records = select($query);
    $delivery = "SELECT * FROM delivery ORDER BY id;";
    $szallitas = select($delivery);
    ?>
<?php
    if(array_key_exists("logout", $_GET) && array_key_exists("id", $_GET)){
        logout($_SESSION);
    }
    ?>
<html>
<head>
<meta charset ="UTF-8"/>
</head>
<title>Menük</title>
<link href="stilus.css" rel="stylesheet">
<body><div style="background-image: url('hatter.png');">
<ul>
	<li><a href="public.php" href="#home">Főoldal</a></li>
	<li><a href="etelek.php">Ételek</a></li>
	<li><a href="uditok.php">Üdítők</a></li>
	<li><a class="active">Holnapi Menük</a></li>
        <li><a href="index.php?logout">Kijelentkezés</a></li>
</ul>
        <div style="margin-left:25%;padding:1px 16px;height:1000px;">
            <center><a class="telefon"> A következő telefonszámon tudsz rendelni:
                233-356
            </a></center>
            <br>
        <table class="menük">
        <thead>
            <tr>
                <th>Név</th>
                <th>Darabszám</th>
                <th>Ár</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($records as $record): ?>
            <tr>
                <td><?=$record['name']?></td>
                <td><?=$record['stock']?> darab</td>
                <td><?=$record['price']?> Ft</td>
            </tr>
            <?php endforeach;?>
        </tbody>
        </table>
             <br>   
      <table class="szallitas">
        <thead>
            <th colspan="10">Szállítás</th>
            <tr>
                <th>Név</th>
                <th>Ár</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($szallitas as $record): ?>
            <tr>
                <td><?=$record['name']?></td>
                <td><?=$record['price']?> Ft</td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
        </div>
</body>
</html>
