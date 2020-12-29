<?php
session_start();
?>
<?php
    if(array_key_exists("logout", $_GET) && array_key_exists("id", $_GET)){
        logout($_SESSION);
    }
?>
<title>Admin</title>
<br/>
<a href="index.php?logout"><button>Kijelentkezés</button></a>
<br>
<?php
require_once './protected/database.php';
    $query = "SELECT * FROM etelek ORDER BY id;";
    $records = select($query);
    $nincs = "SELECT * FROM elfogyott ORDER BY id;";
    $elfogyott = select($nincs);
    $delivery = "SELECT * FROM delivery ORDER BY id;";
    $szallitas = select($delivery);
    $ital = "SELECT * FROM italok ORDER BY id;";
    $italok = select($ital);
    $menu = "SELECT * FROM menu ORDER BY id;";
    $menuk = select($menu);
    session_unset();
    ?>
<html>
Adj hozzá 1 képet az étteremről:
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <label for="upload">Fájl:</label>
    <input type="file" id="upload" name="file"/>
    <button type="submit" name="submit" value="upload">
    MENTÉS
    </button>
</form>
    <br><br>
<table>
        <thead>
            <tr>Ételek</tr><br>
            <a href="insert_etel.php"><button>Étel hozzáadás</button></a>
            <tr>
                <th>Azonosító</th>
                <th>Név</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($records as $record): ?>
            <tr>
                <td><?=$record['id']?></td>
                <td><?=$record['name']?> </td>
                                <td>
                                    <a href="http://localhost/beadando/delete_etel.php?id=<?=$record['id']?>"><button>Törlés</button></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<table>
        <thead>
            <tr>
                <th>Azonosító</th>
                <th>Név</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($elfogyott as $record): ?>
            <tr>
                <td><?=$record['id']?></td>
                <td><?=$record['name']?> </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<br>
<table>
        <thead>
            <tr>
                <th>Azonosító</th>
                <th>Név</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($szallitas as $record): ?>
            <tr>
                <td><?=$record['id']?></td>
                <td><?=$record['name']?> </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<br>
<a href="insert_ital.php"><button>Ital hozzáadás</button></a>
<br>
<table>
        <thead>
            <tr>
                <th>Azonosító</th>
                <th>Név</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($italok as $record): ?>
            <tr>
                <td><?=$record['id']?></td>
                <td><?=$record['name']?> </td>
                <td>
                                    <a href="http://localhost/beadando/delete_ital.php?id=<?=$record['id']?>"><button>Törlés</button></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<br>
<a href="insert_menu.php"><button>Menü hozzáadás</button></a>
<br>
<table>
        <thead>
            <tr>
                <th>Azonosító</th>
                <th>Név</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($menuk as $record): ?>
            <tr>
                <td><?=$record['id']?></td>
                <td><?=$record['name']?> </td>
                <td>
                                    <a href="http://localhost/beadando/delete_menu.php?id=<?=$record['id']?>"><button>Törlés</button></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</html>