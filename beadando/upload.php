<?php
if(!array_key_exists('submit', $_POST) || $_POST['submit'] != 'upload'){
    echo 'Hibás kérés';
    include 'admin.php';
    return;
}
$filesize = $_FILES['file']['size'];

if(1024*1024 < $filesize){
    echo'Túl nagy fájl!';
    include'admin.php';
    return;
}

$extensions = ['png','jpg','jpeg'];
$filename = $_FILES['file']['name'];
$filenameParts = explode('.',$filename);
$fileExtension = end($filenameParts);
$fileExtension = strtolower($fileExtension);

if(!in_array($fileExtension, $extensions)){
    echo 'Hibás kiterjesztés.';
    include 'admin.php';
    return;
}
$filename ='etterem.png';
$fileSource = $_FILES['file']['tmp_name'];
$destSource = './feltolt/'.$filename;

if(!move_uploaded_file($fileSource, $destSource)){
   echo'Hiba az átmozgatás során!';
   include 'admin.php';
   return;
}

echo'Sikeres feltöltés! Kész!';
include 'admin.php';