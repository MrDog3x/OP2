<?php require_once './protected/config.php'; ?>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
    <title>Beadandó</title>
    </head>
    <body>
    <center>
        <article><?php require_once PROTECTED_DIR.'login.php';?></article>
        <footer>
            <?php 
            require_once PROTECTED_DIR.'helper.php';
            if(item_exists($_GET,'M','logout')){
                                session_unset();
                header('Location: '.BASE_URL);
            }
            ?>
        </footer>
        </center>
    </body>
</html>
