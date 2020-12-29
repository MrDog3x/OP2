<?php 
function logout($_SESSION){
session_unset();
session_destroy();
header("location:index.php");
exit();
}