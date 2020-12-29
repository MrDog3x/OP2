<?php
session_start();
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
<title>Főoldal</title>
<link href="stilus.css" rel="stylesheet">
<body>
    <div style="background-image: url('hatter.png');">
<ul>
	<li><a class="active" href="#home">Főoldal</a></li>
	<li><a href="etelek.php">Ételek</a></li>
	<li><a href="uditok.php">Üdítők</a></li>
	<li><a href="menuk.php">Holnapi Menük</a></li>
        <li><a href="index.php?logout">Kijelentkezés</a></li>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <center>
        <h1 class="cimbox"><font color="yellow">
            FŐOLDAL 
        <br> Üdvözöllek a weboldalon!
            
                <br> Válassz a menüpontok közül!</h1>
        <h2 class="letoltes">
            Vagy töltsd le a mai menüt.<br>
            <a href="menu.xlsx" download="menu.xlsx">LETÖLTÉS</a>
            </font>
        </h2>
        <h3>Egy kép az étteremről: </h3>
        <img class="kep" src="./feltolt/etterem.png" alt="étterem"/>
    </center>
</div>
</body>
</html>

